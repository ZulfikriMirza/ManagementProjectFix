<div class="img-section">
    @foreach($adminHome as $item)
    <img src="{{ asset('storage/LandingPage/' . $item->filename) }}">
    @endforeach
</div>
<div class="row mainSection no-gutters">
    <div class="col-md-7 col-lg-8 leftSection">
        <div class="icon-section">
            @foreach($adminlinks as $item)
            <a href="{{ $item->link }}" target="_blank"><i class="{{ $item->class }}"></i></a>
            @endforeach
        </div>
    </div>
    <div class="col-md-5 col-lg-4 rightSection">
        <div class="controller">
            <i class="fas fa-arrow-alt-circle-up" onclick="goUp()"></i>
            <i class="fas fa-arrow-alt-circle-down" onclick="goDown()"></i>
        </div>
        <div class="text-background">
            <h1>01</h1>
            <h1>02</h1>
            <h1>03</h1>
        </div>
        <div class="title-number">
            <h2>01</h2>
            <h2>02</h2>
            <h2>03</h2>
        </div>
        <div class="text-title">
            @foreach($adminHome as $item)
            <h3><?= join(" <br> ", array_slice(explode(" ", $item->description), 0, 3)) ?></h3>
            @endforeach
        </div>
    </div>
</div>