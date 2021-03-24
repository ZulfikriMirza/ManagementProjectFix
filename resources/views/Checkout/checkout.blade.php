@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_footer.css') }}" />
@endsection

@section('title','Checkout')

@section('content')
@include('navbar.index')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li> {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">

    <!-- form -->
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3 text-danger">Identitas Pemesan</h4>
        <hr>
        <!-- form pemesanan -->
        <form class="needs-validation" action="{{ route('CheckoutPost') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="firstName">Nama Depan</label>
                        <input type="text" class="form-control" name="name_depan" id="firstName" required>
                        <div class="invalid-feedback">
                            Nama Depan harus diisi.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="lastName">Nama Belakang</label>
                        <input type="text" class="form-control" id="lastName" name="name_belakang" required>
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
                        <select class="custom-select d-block w-100" name="province_origin" id="province" required>
                            <option value="">Pilih...</option>
                            @foreach($provinsi as $result)
                                <option value="{{ $result->id }}">{{ $result->province }}</option>
                            @endforeach
                        </select>
                        
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="kota">Kabupaten/Kota</label>
                        <select class="form-control custom-select d-block w-100" name="origin" required>
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

            <div class="mb-3">
                <div class="form-group">
                    <label for="email">Budget Harga Client</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="harga" placeholder="" required>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <div class="form-group">
                    <label for="address">Note untuk Arsitek</label>
                    <!-- <input type="text" class="form-control" id="address" name="alamat" placeholder="Isi dengan detail" required> -->
                    <textarea type="text" class="form-control" id="address" name="catatan" placeholder="Isi dengan detail" rows="3" required></textarea>
                    <div class="invalid-feedback">
                        Masukkan Note...
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
            <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
        </form>
    </div>
</div>


@include('Home.footer')
@section('kota')
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="province_origin"]').on('change', function(){
            let cityId = $(this).val();
            if(cityId) {
                $.ajax({
                    url: 'checkout/ajax/' + cityId,
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        console.log(data);
                        $('select[name="origin"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="origin"]').append(
                                '<option value="' +
                                key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="origin"]').empty();
            }
        });
    });
</script>
@endsection

@endsection
