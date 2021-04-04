<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('category_name')->paginate(5);
        // dd(Product::orderBy('category_name'));
        $allProduct = Product::all();
        $unique = [];
        foreach ($allProduct as $item) {
            array_push($unique, intval($item->category_name));
        }
        asort($unique);
        $unique_value = array_unique($unique);
        return view(
            'admin.adminShowcase',
            [
                'products' => $products, 'unique_value' => $unique_value,
                'all' => True, 'cat' => False
            ]
        );
    }


    public function select_category($cat)
    {
        $products = Product::where('category_name', $cat)->get();
        $allProduct = Product::all();
        $unique = [];
        foreach ($allProduct as $item) {
            array_push($unique, intval($item->category_name));
        }
        asort($unique);
        $unique_value = array_unique($unique);
        return view(
            'admin.adminShowcase2',
            [
                'products' => $products, 'unique_value' => $unique_value,
                'all' => False, 'cat' => $cat
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'insertName' => 'required',
            'insertHarga' => 'required',
            'insertDescription' => 'required',
            'insertFile' => 'required|mimes:jpg,png,jpeg|max:10240',
            'insertCategory' => 'required',
        ]);

        $name = $request->insertName;
        $slug = ($request->insertSlug) ? $request->insertSlug : join("-", explode(" ", $name));
        $filename = time() . "." . $request->insertFile->extension();
        if (count(DB::table('products')->where('slug', $slug)->get()) > 0) {
            return back()->with('error', "Slug Must be unique value");
        }

        $product = Product::create([
            'name' => $name,
            'slug' => $slug,
            'harga' => $request->insertHarga,
            'description' => $request->insertDescription,
            'category_name' => $request->insertCategory,
            'image' => $filename
        ]);
        $product->save();

        $path = $request->file('insertFile')->storeAs(
            'public/produkListJasa',
            $filename
        );

        return back()->with('success', "You're successfully insert new file!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::all();
        foreach ($products as $product) {
            if (isset($_POST['btnSubmitProduct' . $product->id])) {
                $newNameProduct = $request['nameProduct' . $product->id];
                $newSlugProduct = $request['slugProduct' . $product->id];
                $newDescriptionProduct = $request['descriptionProduct' . $product->id];
                $newFileProduct = $request['fileProduct' . $product->id];
                $newCategoryProduct = $request['categoryProduct' . $product->id];

                if (($newNameProduct != null) ||
                    ($newSlugProduct != null) ||
                    ($newDescriptionProduct != null) ||
                    ($newFileProduct != null) ||
                    ($newCategoryProduct != null)
                ) {
                    if ($newSlugProduct) {
                        if (!str_contains($newSlugProduct, "-")) {
                            return back()->with('error', "Sorry, but slug name must have '-' ");
                        }
                    }
                    $new_name = ($newNameProduct) ? $newNameProduct : $product->name;
                    $new_slug = $product->slug;
                    if ($newNameProduct) {
                        $new_slug = ($newSlugProduct) ? $newSlugProduct : join("-", explode(" ", $newNameProduct));
                    }
                    $new_description = ($newDescriptionProduct) ? $newDescriptionProduct : $product->description;
                    $new_category = ($newCategoryProduct) ? $newCategoryProduct : $product->category_name;
                    $update_home = Product::find($product->id);
                    $update_home->name = $new_name;
                    $update_home->slug = $new_slug;
                    $update_home->category_name = $new_category;
                    $update_home->description = $new_description;
                    $update_home->save();

                    if ($newFileProduct != null) {
                        $request->validate([
                            'fileProduct' . $id => 'mimes:jpg,png,jpeg|max:2048'
                        ]);

			Storage::delete('public/produkListJasa/' . $product->filename);

                        $new_filename =  time() .  '.' . $request['fileProduct' . $product->id]->extension();
                        $update_home_file = Product::find($product->id);
                        $update_home_file->image = $new_filename;
                        $update_home_file->save();

                        $request['fileProduct' . $product->id]->storeAs(
                            'public/produkListJasa',
                            $new_filename
                        );
                    }
                    return back()->with('success', "You're successully update the data!");
                } else {
                    return back()->with('error', "Sorry, You're not inputing any data!");
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filename = Product::where('id', $id)->first()->image;
        DB::table('products')->where('id', $id)->delete();
        Storage::delete('public/produkListJasa/' . $filename);
        return back()->with('success', "You're successfully delete the data!");
    }
}
