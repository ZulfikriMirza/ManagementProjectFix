<div class="listjasa">
    <h1>List Jasa</h1>
    <div class="items">
        @foreach($jasas->chunk(4) as $jasaChunks)
            @foreach($jasaChunks as $jasa)
                <div class="desainFurnitur" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('Home/Materials/material_0002_Desain_Furniture.png') }}">
                    <div class="text-listjasa">
                        <h3>Desain Furnitur</h3>
                    </div>
                    <a href="{{route('cart.TambahKeranjang',['id'=>$jasa->id])}}" class="add-cart"> <button type="button" class="btn btn-danger" id="btn">PESAN</button> </a>
                </div>
            @endforeach
        @endforeach
                <div class="arsitekturBangunan" data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('Home/Materials/material_0003_Arsitektur-Bangunan.png') }}">
                    <div class="text-listjasa">
                        <h3>Arsitektur Bangunan</h3>
                    </div>
                    <a href="{{route('cart.TambahKeranjang',['id'=>$jasa->id])}}" class="add-cart"> <button type="button" class="btn btn-danger" id="btn">PESAN</button> </a>

                </div>
                <div class="desainInterior" data-aos="fade-up" data-aos-delay="900">
                    <img src="{{ asset('Home/Materials/material_0001_Desain_Produk.png') }}">
                    <div class="text-listjasa">
                        <h3>Desain Interior</h3>
                    </div>
                    <a href="{{route('cart.TambahKeranjang',['id'=>$jasa->id])}}" class="add-cart"> <button type="button" class="btn btn-danger" id="btn">PESAN</button> </a>

                </div>

    </div>
</div>
