@extends('ArgonDashboard.argon_dashboard_template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/adminHome.css') }}">
@endsection

@section('content')
<div class="container adminLinks">
    <div class="row justify-content-center ">
        <div class="col-10 ">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($adminLinks as $item)
                    <tr>
                        <form method="post" action="{{ route('admin.links.post',['id'=>$item->id]) }}">
                            @csrf
                            <th class="align-middle" scope="row">{{ $loop->iteration }}</th>
                            <td class="align-middle"><i class="{{ $item->class }} mr-3  "></i>{{{ $item->name }}}</td>
                            <td class="align-middle">
                                <input type="text" class="form-control" placeholder="{{ $item->link }}" name="{{ 'adminLink' . $item->id }}">
                            </td>
                            <th scope="col"><button type="submit" class="btn btn-primary align-middle" name="{{ 'adminButton' . $item->id }}">Update</button></th>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection