<div class="img-section">
    <img src="{{ asset('storage/LandingPage/' . $adminHome[0]->filename) }}">
    <img src="{{ asset('storage/LandingPage/' . $adminHome[1]->filename) }}">
    <img src="{{ asset('storage/LandingPage/' . $adminHome[2]->filename) }}">
</div>
<div class="row mainSection no-gutters">
    <div class="col-md-7 col-lg-8 leftSection">
        <div class="icon-section">
            <a href="https://www.facebook.com/mahesa.a.negara" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com/mahesanegara/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/AJMBSF" target="_blank"><i class="fab fa-twitter"></i></a>
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
            <h3><?= join(" <br> ", array_slice(explode(" ", $adminHome[0]->description), 0, 3)) ?></h3>
            <h3><?= join(" <br> ", array_slice(explode(" ", $adminHome[1]->description), 0, 3)) ?></h3>
            <h3><?= join(" <br> ", array_slice(explode(" ", $adminHome[2]->description), 0, 3)) ?></h3>
        </div>
    </div>
</div>