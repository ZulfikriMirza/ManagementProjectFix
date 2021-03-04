@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/listjasa.css') }}">
@endsection

@section('title','List Jasa')

@section('content')
@include('navbar.navbar')

<main>
    <div class="container">
        <h1>List Jasa</h1>
        <p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen
            grafis atau
            presentasi visual seperti font, tipografi, dan tata letak.</p>
        <button type="button" class="btn btn-success">Lihat Jasa </button>
    </div>
</main>

<!-- FILTER FOR MOBILE SIZE-->
<div class="filter-mobile">
    <h3>JASA <i class="fas fa-caret-down" onclick="showJasa()"></i></h3>
    <h3>HARGA <i class="fas fa-caret-down" onclick="showHarga()"></i></h3>
    <img src="{{ asset('produkListJasa/material_0000_People_Account.png') }}" alt="User Image">
</div>

<div class="harga-mobile">
    <form action="/action_page.php">
        <div class="row">
            <div class="col">
                <label for="vol">Maks : Rp,7.000.000</label><br>
                <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
            </div>
            <div class="col">
                <label for="vol">Min : Rp,100.000.000 </label><br>
                <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
            </div>
        </div>
        <button type="button" class="btn btn-success mt-4">CARI</button>
    </form>
</div>

<div class="jasa-mobile">
    <div class="pilih-jasa">
        <div class="row">
            <div class="col">
                <label class="container">Arsitektur Bangunan
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col">
                <label class="container">Desain Furnitur
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col">
                <label class="container">Desain Produk
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>
    <hr>
    <div class="detail-pilih-jasa-arsitektur">
        <h5>Arsitektur Bangunan</h5>
        <div class="row mt-3">
            <div class="col">
                <p>Kamar Tidur <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                <p>Lantai <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
            </div>
            <div class="col">
                <p>Kamar Mandi <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                <p>Gudang <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
            </div>
        </div>
        <p>Garasi <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
        <p>Luas Tanah</p>
        <form action="/action_page.php">
            <div class="row">
                <div class="col">
                    <label for="vol">Maks : Rp,7.000.000</label><br>
                    <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                </div>
                <div class="col">
                    <label for="vol">Min : Rp,100.000.000 </label><br>
                    <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                </div>
            </div>
        </form>
        <p>Luas Bangunan</p>
        <form action="/action_page.php">
            <div class="row">
                <div class="col">
                    <label for="vol">Maks : Rp,7.000.000</label><br>
                    <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                </div>
                <div class="col">
                    <label for="vol">Min : Rp,100.000.000 </label><br>
                    <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                </div>
            </div>
            <button type="button" class="btn btn-success mt-4">CARI</button>
        </form>
    </div>
    <hr>
    <div class="detail-pilih-jasa-furnitur">
        <h5>Desain Furnitur</h5>
        <div class="row">
            <div class="col">
                <p>Sofa <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                <p>Kursi <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
            </div>
            <div class="col">
                <p>Meja <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                <p>Lemari <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
            </div>
        </div>
        <p>Tempat Tidur <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
        <button type="button" class="btn btn-success">cari</button>
    </div>
    <hr>
    <div class="detail-pilih-jasa-produk">
        <h5>Desain Produk</h5>
        <div class="row">
            <div class="col">
                <label class="container">Gelas
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col">
                <label class="container">Kemasan
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col">
                <label class="container">Kalengan
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <button type="button" class="btn btn-success">Cari</button>
    </div>
</div>

<div class="filter-dekstop-version">
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-8">
            <div class="container">
                <div class="jasa-arsitek-bangunan">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-arsitektur1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0003_Arsitektur-Bangunan.png') }}">
                                <h4 class="mt-4">RP,7.000.000</h4>
                                <p>Desain Bohemian ( Boho Chic ) Style.</p>
                                <div class="detail-jasa-arsitektur">
                                    <div class="row">
                                        <div class="col">
                                            <p>Kamar Tidur : 10</p>
                                            <p>Lantai : 10</p>
                                        </div>
                                        <div class="col">
                                            <p>Kamar Mandi : 10</p>
                                            <p>Gudang : 10</p>
                                        </div>
                                    </div>
                                    <p>Garasi : 10</p>
                                    <p>Luas Tanah : 450m³</p>
                                    <p>Luas Bangunan : 760m³</p>
                                    <button type="button" class="btn btn-success">Pesan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-arsitektur1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0003_Arsitektur-Bangunan.png') }}">
                                <h4 class="mt-4">RP,7.000.000</h4>
                                <p>Desain Bohemian ( Boho Chic ) Style.</p>
                                <div class="detail-jasa-arsitektur">
                                    <div class="row">
                                        <div class="col">
                                            <p>Kamar Tidur : 10</p>
                                            <p>Lantai : 10</p>
                                        </div>
                                        <div class="col">
                                            <p>Kamar Mandi : 10</p>
                                            <p>Gudang : 10</p>
                                        </div>
                                    </div>
                                    <p>Garasi : 10</p>
                                    <p>Luas Tanah : 450m³</p>
                                    <p>Luas Bangunan : 760m³</p>
                                    <button type="button" class="btn btn-success">Pesan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-arsitektur1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0003_Arsitektur-Bangunan.png') }}">
                                <h4 class="mt-4">RP,7.000.000</h4>
                                <p>Desain Bohemian ( Boho Chic ) Style.</p>
                                <div class="detail-jasa-arsitektur">
                                    <div class="row">
                                        <div class="col">
                                            <p>Kamar Tidur : 10</p>
                                            <p>Lantai : 10</p>
                                        </div>
                                        <div class="col">
                                            <p>Kamar Mandi : 10</p>
                                            <p>Gudang : 10</p>
                                        </div>
                                    </div>
                                    <p>Garasi : 10</p>
                                    <p>Luas Tanah : 450m³</p>
                                    <p>Luas Bangunan : 760m³</p>
                                    <button type="button" class="btn btn-success">Pesan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jasa-desain-furnitur">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-furnitur1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0002_Desain_Furniture.png') }}">
                                <h4 class="mt-4">RP,400.000</h4>
                                <p>Desain Table Aesthetic Style.</p>
                                <button type="button" class="btn btn-success">Pesan</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-furnitur1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0002_Desain_Furniture.png') }}">
                                <h4 class="mt-4">RP,400.000</h4>
                                <p>Desain Table Aesthetic Style.</p>
                                <button type="button" class="btn btn-success">Pesan</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-furnitur1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0002_Desain_Furniture.png') }}">
                                <h4 class="mt-4">RP,400.000</h4>
                                <p>Desain Table Aesthetic Style.</p>
                                <button type="button" class="btn btn-success">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jasa-desain-produk">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-produk1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}">
                                <h4 class="mt-4">RP,400.000</h4>
                                <p>Desain Table Aesthetic Style.</p>
                                <button type="button" class="btn btn-success">Pesan</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-produk1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}">
                                <h4 class="mt-4">RP,400.000</h4>
                                <p>Desain Table Aesthetic Style.</p>
                                <button type="button" class="btn btn-success">Pesan</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="jasa-produk1">
                                <img alt="Desain Bohemian ( Boho Chic ) Style" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}">
                                <h4 class="mt-4">RP,400.000</h4>
                                <p>Desain Table Aesthetic Style.</p>
                                <button type="button" class="btn btn-success">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FILTER FOR DEKSTOP SIZE-->
        <div class="col-sm-0 col-md-3 col-lg-4 isi">
            <div class="account-desktop">
                <img src="{{ asset('produkListJasa/material_0000_People_Account.png') }}" alt="User Image">
                <h4>Markus Horizon.M</h4>
                <div class="circle">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="jasa-dekstop">
                <h3>JASA</h3>
                <label class="container">Arsitektur Bangunan
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Desain Furnitur
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Desain Produk
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="arsitektur-bangunan-dekstop">
                <div class="detail-pilih-jasa-arsitektur">
                    <h5>Arsitektur Bangunan</h5>
                    <div class="row mt-3">
                        <div class="col">
                            <p>Kamar Tidur <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                            <p>Lantai <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                        </div>
                        <div class="col">
                            <p>Kamar Mandi <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                            <p>Gudang <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                        </div>
                    </div>
                    <p>Garasi <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                    <p class="mt-4">Luas Tanah</p>
                    <form action="/action_page.php">
                        <div class="row">
                            <div class="col">
                                <label for="vol">Maks : Rp,7.000.000</label><br>
                                <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                            </div>
                            <div class="col">
                                <label for="vol">Min : Rp,100.000.000 </label><br>
                                <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                            </div>
                        </div>
                    </form>
                    <p class="mt-4">Luas Bangunan</p>
                    <form action="/action_page.php">
                        <div class="row">
                            <div class="col">
                                <label for="vol">Maks : Rp,7.000.000</label><br>
                                <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                            </div>
                            <div class="col">
                                <label for="vol">Min : Rp,100.000.000 </label><br>
                                <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success mt-4">CARI</button>
                    </form>
                </div>
            </div>
            <div class="desain-furnitur-dekstop">
                <div class="detail-pilih-jasa-furnitur">
                    <h5>Desain Furnitur</h5>
                    <div class="row">
                        <div class="col">
                            <p>Sofa <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                            <p>Kursi <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                        </div>
                        <div class="col">
                            <p>Meja <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                            <p>Lemari <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                        </div>
                    </div>
                    <p>Tempat Tidur <input type="number" id="quantity" name="quantity" min="1" max="5"></p>
                    <button type="button" class="btn btn-success">cari</button>
                </div>
            </div>
            <div class="desain-produk-dekstop">
                <div class="detail-pilih-jasa-produk">
                    <h5>Desain Produk</h5>
                    <div class="row">
                        <div class="col-4">
                            <label class="container">Gelas
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4">
                            <label class="container">Kemasan
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4">
                            <label class="container">Kalengan
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success">Cari</button>
                </div>
            </div>
            <div class="harga-dekstop">
                <h5>Harga</h5>
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-6">
                            <label for="vol">Maks : Rp,7.000.000</label><br>
                            <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                        </div>
                        <div class="col-6">
                            <label for="vol">Min : Rp,100.000.000 </label><br>
                            <input class="slider-harga" type="range" id="vol" name="vol" min="0" max="50"><br>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success mt-4">CARI</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection