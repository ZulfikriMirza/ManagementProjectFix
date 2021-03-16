@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_footer.css') }}"/>
@endsection

@section('title','Checkout')

@section('content')
@include('navbar.index')
<div class="container">
     <!-- form -->
  <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Identitas Pemesan</h4>
        <hr>
        <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-group">
            <label for="firstName">Nama Depan</label>
            <input type="text" class="form-control" name="name-depan" id="firstName" required>
            <div class="invalid-feedback">
                Nama Depan harus diisi.
            </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="form-group">
            <label for="lastName">Nama Belakang</label>
            <input type="text" class="form-control" id="lastName" name="name-belakang" required>
            <div class="invalid-feedback">
                Nama Belakang harus diisi.
            </div>
            </div>
        </div>
        </div>

        <div class="mb-3">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="nama@example.com" name="email" required>
            <div class="invalid-feedback">
            Masukan email yang valid.
            </div>
        </div>
        </div>

        <div class="mb-3">
        <div class="form-group">
            <label for="email">Nomer Telepon</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">+62</span>
            </div>
            <input type="tel" class="form-control" name="telephone" placeholder="" aria-label="telephone" aria-describedby="basic-addon1" required>
            </div>
        </div>
        </div>

        <div class="mb-3">
        <div class="form-group">
            <label for="address">Alamat</label>
            <!-- <input type="text" class="form-control" id="address" name="alamat" placeholder="Isi dengan detail" required> -->
            <textarea type="text" class="form-control" id="address" name="alamat" placeholder="Isi dengan detail" rows="3" required></textarea>
            <div class="invalid-feedback">
            Please enter your shipping address.
            </div>
        </div>
        </div>

        <div class="mb-3">
        <div class="form-group">
            <label for="address">Kode Pos</label>
            <input type="number" class="form-control" name="posKode" id="kecamatan" placeholder="" value="" required>
            <div class="invalid-feedback">
            Please enter your shipping address.
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-4 mb-3">
            <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="form-group">
            <label for="kota">Kabupaten/Kota</label>
            <select class="custom-select d-block w-100" name="kab" id="kota" required>
                <option value="">Pilih...</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid country.
            </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" name="kec" id="kecamatan" placeholder="" value="" required>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
            </div>
        </div>
        </div>

        <hr>

        <!-- identitas brand -->
        <h4 class="mb-3">Identitas Brand/Produk</h4>
        <hr>
        <div class="row">
        <div class="col mb-3 ">
            <div class="form-group">
            <label for="firstName">Nama Produk/Brand</label>
            <input type="text" class="form-control" name="produk" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
                Nama Produk/Brand harus diisi.
            </div>
            </div>
        </div>
        </div>

        <div class="mb-3">
        <div class="form-group">
            <label for="firstName">Jenis Produk</label>
            <input type="text" class="form-control" name="jenis" id="firstName" placeholder="Makanan/minuman, sepatu, baju, dll." value="" required>
            <div class="invalid-feedback">
            Nama Produk/Brand harus diisi.
            </div>
        </div>
        </div>

        <div class="mb-3">
        <div class="form-group">
            <label for="state">Konsep</label>
            <select class="custom-select d-block w-100" name="konsep" id="state" required>
            <option value="">Pilih...</option>
            <option>Catalogue</option>
            <option>Lookbook</option>
            <option>Creativedesk</option>
            </select>
            <div class="invalid-feedback">
            Pilih Salah satu.
            </div>
        </div>
        </div>

        <div class="mb-3">
        <div class="form-group">
            <label for="state">Pengunaan Foto</label>
            <select class="custom-select d-block w-100" name="uses" id="state" required>
            <option value="">Pilih...</option>
            <option>Online media</option>
            <option>Commercial printing</option>
            <option>Private photoshoot</option>
            </select>
            <div class="invalid-feedback">
            Pilih Salah satu.
            </div>
        </div>
        </div>

        <div class="form-group">
        <input type="checkbox" id="accept" name="accept" required>
        <label for="vehicle1">Dengan ini saya menyetujui</label> <a href="#">Term & Condition</a>
        </div>

        <!-- <h5 class="mt-5">Detail Pembayaran</h5>
            <hr class="mb-4">
            <h4 class="mb-3">Payment</h4> -->

        <!-- <div class="mb-4">
                <label for="country">Transfer Bank</label>
            </div> -->
        <hr class="mb-4 mt-5">
        <button class="btn btn-lg btn-block" type="submit">Submit</button>
        </form>

        <p class="p-5 text-center">Copyright 2020</p>
    </div>
    </div>
    </div>
</div>


@include('Home.footer')

@endsection