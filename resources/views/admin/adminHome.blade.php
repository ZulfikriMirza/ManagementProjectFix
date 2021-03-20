@extends('ArgonDashboard.argon_dashboard_template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/adminHome.css') }}">
@endsection

@section('content')
<div class="container">
    <!--===================================
        Landing Page Section 
        ===================================-->
    <h1>Landing Page Section</h1>
    @foreach($adminHome as $home)
    <form method="POST" action="{{ route('admin.home.post',['id'=>$home->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-2 justify-content-center">
            <div class="col-sm-6 align-self-center">
                <div class="form-group">
                    <label for="{{ 'LandingPage_Heading'.$home->id}}">Heading for Image</label>
                    <input type="text" class="form-control" id="{{ 'LandingPage_Heading'.$home->id}}" placeholder="{{ $home->description }}" name="{{ 'headingHome' . $home->id }}">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="{{ 'LandingPage_File'.$home->id }}" lang="en" name="{{ 'fileHome' . $home->id }}">
                    <label class="custom-file-label" for="{{ 'LandingPage_File'.$home->id }}">Select file</label>
                </div>
                <button type="submit" class="btn btn-block btn-outline-primary mt-4" name="{{ 'btnSubmitHome' . $home->id }}">Submit</button>
            </div>
            <div class="col-sm-4 align-self-center">
                <img src="{{ asset('storage/LandingPage/' . $home->filename) }}">
            </div>
        </div>
    </form>
    @endforeach

    <hr>
    <!--===================================
        Our Project Page Section 
        ===================================-->
    <h1>Our Project Page Section</h1>
    @foreach($adminProject as $project)
    <form method="POST" action="{{ route('admin.home.post',['id'=>$project->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-4 justify-content-center">
            <div class="col-sm-6 align-self-center">
                <div class="form-group">
                    <label for="{{ 'Project_Heading'.$project->id }}">Heading For Img</label>
                    <input type="text" class="form-control" id="{{ 'Project_Heading'.$project->id }}" placeholder="{{ $project->heading }}" name="{{ 'headingProject' . $project->id }}">
                </div>
                <div class="form-group">
                    <label for="{{ 'Project_Description'.$project->id }}">Description For Img</label>
                    <textarea class="form-control" id="{{ 'Project_Description'.$project->id }}" rows="3" placeholder="{{ $project->description }}" name="{{ 'descriptionProject' . $project->id }}"></textarea>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="{{ 'Project_File'.$project->id }}" lang="en" name="{{ 'fileProject' . $project->id }}">
                    <label class="custom-file-label" for="{{ 'Project_File'.$project->id }}">Select file</label>
                </div>
                <button type="submit" class="btn btn-block btn-outline-primary mt-4" name="{{ 'btnSubmitProject' . $project->id }}">Submit</button>
            </div>
            <div class="col-sm-4 align-self-center">
                <img src="{{ asset('storage/Projects/' . $project->filename) }}">
            </div>
        </div>
    </form>
    @endforeach
    <hr>
    <!--===================================
        List Jasa Page Section 
        ===================================-->
    <h1>List Jasa Page Section</h1>
    @foreach($adminListJasa as $listjasa)
    <form class="mb-5" method="POST" action="{{ route('admin.home.post',['id'=>$listjasa->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-4 justify-content-center">
            <div class="col-sm-6 align-self-center">
                <div class="form-group">
                    <label for="{{ 'ListJasa_Heading'.$listjasa->id }}">Heading For Img</label>
                    <input type="text" class="form-control" id="{{ 'ListJasa_Heading'.$listjasa->id }}" placeholder="{{ $listjasa->heading }}" name="{{ 'headingListJasa' . $listjasa->id }}">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="{{ 'ListJasa_File'.$listjasa->id }}" lang="en" name="{{ 'fileListJasa' . $listjasa->id }}">
                    <label class="custom-file-label" for="{{ 'ListJasa_File'.$listjasa->id }}">Select file</label>
                </div>
                <button type="submit" class="btn btn-block btn-outline-primary mt-4" name="{{ 'btnSubmitListJasa' . $listjasa->id }}">Submit</button>
            </div>
            <div class="col-sm-4 align-self-center">
                <img src="{{ asset('storage/ListJasa/' . $listjasa->filename) }}">
            </div>
        </div>
    </form>
    @endforeach
</div>

@endsection

@section('js')
@endsection