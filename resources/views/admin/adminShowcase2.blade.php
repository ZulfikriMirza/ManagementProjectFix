@extends('ArgonDashboard.argon_dashboard_template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/adminHome.css') }}">
@endsection

@section('content')
<div class="container showcase mb-5">

    <div class="pt-5 pr-5 pl-5 pb-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Showcase Data
        </button>
    </div>
    <hr>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.showcase.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="example-name-input" class="form-control-label">Name <span>*</span> </label>
                            <input class="form-control" type="text" placeholder="Name Here..." id="example-name-input" name="insertName" value="{{ old('insertName') }}">
                        </div>
                        <div class="form-group">
                            <label for="example-slug-input" class="form-control-label">Slug</label>
                            <input class="form-control" type="text" placeholder="Slug Here..." id="example-slug-input" name="insertSlug" value="{{ old('insertSlug') }}">
                        </div>
                        <div class="form-group">
                            <label for="example-harga-input" class="form-control-label">Harga <span>*</span></label>
                            <input class="form-control" type="number" placeholder="Harga Here..." id="example-harga-input" name="insertHarga" value="{{ old('insertHarga') }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description <span>*</span></label>
                            <textarea class="form-control" id="description" rows="3" placeholder="Description Here..." name="insertDescription" value="{{ old('insertDescription') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="example-category-input" class="form-control-label">Category <span>*</span></label>
                            <input class="form-control" type="number" placeholder="Category Here..." id="example-category-input" name="insertCategory" value="{{ old('insertCategory') }}">
                        </div>
                        <label class="mt-3" for="">Select File <span>*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileSelect" lang="en" name="insertFile">
                            <label class="custom-file-label" for="fileSelect">Select file <span>*</span></label>
                        </div>
                    </div>
                    <div class="modal-footer mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="category pr-5 pl-5">
        <h4 class="mr-5">Category : </h4>
        <ul>
            @if($all)
            <a class="active" href="{{ route('admin.showcase') }}">all</a>
            @else
            <a href="{{ route('admin.showcase') }}">all</a>
            @endif
            @foreach($unique_value as $item)
            @if($cat == $item)
            <a class="active" href="{{ route('admin.showcase.cat',['cat'=>$item]) }}">{{ $item }}</a>
            @else
            <a href="{{ route('admin.showcase.cat',['cat'=>$item]) }}">{{ $item }}</a>
            @endif
            @endforeach
        </ul>
    </div>

    <hr>
    <div class="showcaseForm">
        @foreach($products as $product)
        <form method="POST" action="{{ route('admin.showcase.post',['id'=>$product->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row mt-4 justify-content-center">
                <div class="col-sm-6 align-self-center">
                    <div class="form-group">
                        <label for="{{ 'Product_Name'.$product->id }}">Name For Img {{ $product->id }}</label>
                        <input type="text" class="form-control" id="{{ 'Product_Name'.$product->id }}" placeholder="{{ $product->name }}" name="{{ 'nameProduct' . $product->id }}">
                    </div>
                    <div class="form-group">
                        <label for="{{ 'Product_Slug'.$product->id }}">Slug For Img {{ $product->id }}</label>
                        <input type="text" class="form-control" id="{{ 'Product_Slug'.$product->id }}" placeholder="{{ $product->slug }}" name="{{ 'slugProduct' . $product->id }}">
                    </div>
                    <div class="form-group">
                        <label for="{{ 'Product_Category'.$product->id }}">Category For Img {{ $product->id }}</label>
                        <input type="text" class="form-control" id="{{ 'Product_Category'.$product->id }}" placeholder="{{ $product->category_name }}" name="{{ 'categoryProduct' . $product->id }}">
                    </div>
                    <div class="form-group">
                        <label for="{{ 'Product_Description'.$product->id }}">Description For Img {{ $product->id }}</label>
                        <textarea class="form-control" id="{{ 'Product_Description'.$product->id }}" rows="3" placeholder="{{ $product->description }}" name="{{ 'descriptionProduct' . $product->id }}"></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="{{ 'Product_File'.$product->id }}" lang="en" name="{{ 'fileProduct' . $product->id }}">
                        <label class="custom-file-label" for="{{ 'Product_File'.$product->id }}">Select file</label>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <button type="submit" class="btn btn-block btn-outline-primary" name="{{ 'btnSubmitProduct' . $product->id }}">Edit</button>
                        </div>
                        <div class="col">
                            <a class="btn btn-block btn-outline-danger" href="{{ route('admin.showcase.destroy',['id'=>$product->id]) }}" onclick="return confirm('Are you sure want to delete this showcase?');">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 align-self-center">
                    <img src="{{ asset('storage/produkListJasa/' . $product->image) }}">
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection

@section('js')
@endsection