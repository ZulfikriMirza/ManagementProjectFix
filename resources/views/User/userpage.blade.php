@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/userpage.css') }}">
@endsection

@section('title','Home')

@section('content')
@include('navbar.index')

<section class= "contact" id = "contact">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <h2 class="text-center"> Page User </h2>
        <hr>
        <br></br>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-4">
        <img src="{{ asset('produkListJasa/bapak.png') }}" class="img-thumbnail">
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Informasi User</h3>
        <hr>
    
            <form>
                <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <Input type="text" id="nama" class="form-control" placeholder="masukan nama">
                </div>

                <div class="form-group">
                <label for="email">Email</label>
                <Input type="email" id="email" class="form-control" placeholder="masukan email">
                </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </form>
        </div>
        
        </div>
    </div>
    <br></br>
    <div class="container">

        <div class="row">
        <div class="col-sm-4">
       
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Ganti Password</h3>
        <hr>
        
            <form>
                <div class="form-group">
                <label for="nama">Password Lama</label>
                <Input type="text" id="nama" class="form-control" placeholder="masukan password lama">
                </div>

                <div class="form-group">
                <label for="email">Password Baru</label>
                <Input type="email" id="email" class="form-control" placeholder="masukan password baru">
                </div>

                <div class="form-group">
                <label for="email">Konfirmasi Password Baru</label>
                <Input type="email" id="email" class="form-control" placeholder="konfirmasi password baru">
                </div>                
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                <br></br>
            </form>
        </div>
        
        </div>
    </div>
</section>