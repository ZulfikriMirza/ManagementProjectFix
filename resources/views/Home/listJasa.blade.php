<div class="listjasa">
    <h1>List Jasa</h1>
    <div class="items">
        <div class="desainFurnitur" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/ListJasa/' . $adminListJasa[0]->filename) }}">
            <div class="text-listjasa">
                <h3>{{ $jasas[0]->nama_jasa }}</h3>
            </div>
            <a href="{{route('add-item',['name'=>$jasas[0]->nama_jasa, 'harga'=>$jasas[0]->estimasi_harga])}}" class="btn btn-secondary">Add To Cart</a>
        </div>
        <div class="arsitekturBangunan" data-aos="fade-up" data-aos-delay="600">
            <img src="{{ asset('storage/ListJasa/' . $adminListJasa[1]->filename) }}">
            <div class="text-listjasa">
                <h3>{{ $jasas[0]->nama_jasa }}</h3>
            </div>
            <a href="{{route('add-item',['name'=>$jasas[1]->nama_jasa, 'harga'=>$jasas[1]->estimasi_harga])}}" class="btn btn-secondary">Add To Cart</a>

        </div>
        <div class="desainInterior" data-aos="fade-up" data-aos-delay="900">
            <img src="{{ asset('storage/ListJasa/' . $adminListJasa[2]->filename) }}">
            <div class="text-listjasa">
                <h3>{{ $jasas[0]->nama_jasa }}</h3>
            </div>
            <a href="{{route('add-item',['name'=>$jasas[2]->nama_jasa, 'harga'=>$jasas[2]->estimasi_harga])}}" class="btn btn-secondary">Add To Cart</a>

        </div>

    </div>
</div>