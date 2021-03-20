<div class="listjasa">
    <h1>List Jasa</h1>
    <div class="items">
        <div class="desainFurnitur" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/ListJasa/' . $adminListJasa[0]->filename) }}">
            <div class="text-listjasa">
                <h3>{{ $adminListJasa[0]->heading }}</h3>
            </div>
            <button type="button" class="btn btn-secondary">Pesan</button>
        </div>
        <div class="arsitekturBangunan" data-aos="fade-up" data-aos-delay="600">
            <img src="{{ asset('storage/ListJasa/' . $adminListJasa[1]->filename) }}">
            <div class="text-listjasa">
                <h3>{{ $adminListJasa[1]->heading }}</h3>
            </div>
            <button type="button" class="btn btn-secondary">Pesan</button>

        </div>
        <div class="desainInterior" data-aos="fade-up" data-aos-delay="900">
            <img src="{{ asset('storage/ListJasa/' . $adminListJasa[2]->filename) }}">
            <div class="text-listjasa">
                <h3>{{ $adminListJasa[2]->heading }}</h3>
            </div>
            <button type="button" class="btn btn-secondary">Pesan</button>

        </div>
    </div>
</div>