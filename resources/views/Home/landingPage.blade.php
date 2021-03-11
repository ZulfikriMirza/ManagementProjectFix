@include('navbar.index')
<div class="img-section">
    <img src="{{ asset('Home/Materials/material_0000_Layer-2.png') }}">
    <img src="{{ asset('Home/Materials/material_0001_Layer-4.png') }}">
    <img src="{{ asset('Home/Materials/material_0002_Layer-1.png') }}">
</div>
<div class="row mainSection no-gutters">
    <div class="col-md-8 leftSection">
        <div class="icon-section">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
    </div>
    <div class="col-md-4 rightSection">
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
            <h3>Proffesional<br>Apartmen<br>Design</h3>
            <h3>Elegant Home<br>Appearance<br>Design</h3>
            <h3>Interior<br>Design</h3>
        </div>
    </div>
</div>