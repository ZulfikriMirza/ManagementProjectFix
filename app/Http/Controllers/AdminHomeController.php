<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminHome;
use App\Models\AdminListJasa;
use App\Models\AdminProject;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminHome = AdminHome::all();
        $adminProject = AdminProject::all();
        $adminListJasa = AdminListJasa::all();
        // dd(array_slice(explode(" ", $adminHome[2]->description), 0, 3));
        // dd(join(" <br> ", explode(" ", $adminHome[0]->description)));
        return view('admin.adminHome', [
            "adminHome" => $adminHome,
            "adminProject" => $adminProject,
            "adminListJasa" => $adminListJasa
        ]);
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
        //
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
        // dd()
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
        $adminHome = AdminHome::all();
        $adminProject = AdminProject::all();
        $adminListJasa = AdminListJasa::all();
        foreach ($adminHome as $home) {
            if (isset($_POST['btnSubmitHome' . $home->id])) {
                $newHeadingHome = $request['headingHome' . $home->id];

                if (($newHeadingHome != null) || ($request['fileHome' . $home->id] != null)) {
                    if ($newHeadingHome != null) {
                        if (count(explode(" ", $newHeadingHome)) > 3) {
                            return back()->with('error', "Words shoudln't be more than 3!");
                        }
                        $new_description = ($newHeadingHome) ? $newHeadingHome : $home->description;
                        $update_home = AdminHome::find($home->id);
                        $update_home->description = $new_description;
                        $update_home->save();
                    }
                    if ($request['fileHome' . $id] != null) {
                        $request->validate([
                            'fileHome' . $id => 'mimes:jpg,png,jpeg|max:5120'
                        ]);
                        $request['fileHome' . $home->id]->storeAs(
                            'public/LandingPage',
                            $home->filename
                        );
                    }
                    return back()->with('success', "You're successully update the data!");
                } else {
                    return back()->with('error', "Sorry, You're not inputing any data!");
                }
            }
        }
        foreach ($adminProject as $project) {
            if (isset($_POST['btnSubmitProject' . $project->id])) {
                $newHeadingProject = $request['headingProject' . $project->id];
                $newDescriptionProject = $request['descriptionProject' . $project->id];

                if (($newHeadingProject != null) ||
                    ($request['fileProject' . $project->id] != null) ||
                    ($newDescriptionProject != null)
                ) {
                    if ($newHeadingProject != null) {
                        if (count(explode(" ", $newHeadingProject)) > 2) {
                            return back()->with('error', "Words shoudln't be more than 2!");
                        }
                        $new_heading_project = ($newHeadingProject) ? $newHeadingProject : $project->heading;
                        $update_project = AdminProject::find($project->id);
                        $update_project->heading = $new_heading_project;
                        $update_project->save();
                    }
                    if ($newDescriptionProject) {
                        if (count(explode(" ", $newDescriptionProject)) > 24) {
                            return back()->with('error', "Words shoudln't be more than 2!");
                        }
                        $new_description_project = ($newDescriptionProject) ? $newDescriptionProject : $project->description;
                        $update_project_description = AdminProject::find($project->id);
                        $update_project_description->description = $new_description_project;
                        $update_project_description->save();
                    }
                    if ($request['fileProject' . $project->id] != null) {
                        $request->validate([
                            'fileProject' . $project->id => 'mimes:jpg,png,jpeg|max:5120'
                        ]);
                        $request['fileProject' . $project->id]->storeAs(
                            'public/Projects',
                            $project->filename
                        );
                    }
                    return back()->with('success', "You're successully update the data!");
                } else {
                    return back()->with('error', "Sorry, You're not inputing any data!");
                }
            }
        }
        foreach ($adminListJasa as $listjasa) {
            if (isset($_POST['btnSubmitListJasa' . $listjasa->id])) {
                $newHeadingListJasa = $request['headingListJasa' . $listjasa->id];

                if (($newHeadingListJasa != null) || ($request['fileListJasa' . $listjasa->id] != null)) {
                    if ($newHeadingListJasa != null) {
                        if (count(explode(" ", $newHeadingListJasa)) > 2) {
                            return back()->with('error', "Words shoudln't be more than 2!");
                        }
                        $new_description_listjasa = ($newHeadingListJasa) ? $newHeadingListJasa : $listjasa->heading;
                        $update_listjasa = AdminListJasa::find($listjasa->id);
                        $update_listjasa->heading = $new_description_listjasa;
                        $update_listjasa->save();
                    }
                    if ($request['fileListJasa' . $listjasa->id] != null) {
                        $request->validate([
                            'fileListJasa' . $listjasa->id => 'mimes:jpg,png,jpeg|max:5120'
                        ]);
                        $request['fileListJasa' . $listjasa->id]->storeAs(
                            'public/ListJasa',
                            $listjasa->filename
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
        //
    }
}
