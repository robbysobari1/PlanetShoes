<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="/css/responsivehome.css">
</head>
<!-- content -->
<div class="row container-fluid">
    <!-- content 1 -->
    <div class="col-md-6">
        <h1><b>NIKE AIR JORDAN</b></h1>
        <h3>Original</h3>
        <div class="row">
            <div class="col-md-4 col-xs-6 konten1">
                <div class="kotak1">
                    <img class="foto1" src="/img/1.jpg" alt="">
                </div>
                <div class="kotak2">
                    <img class="foto1" src="/img/2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="kotak3">
                    <img class="foto2" src="/img/3.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-xs-12 ">
                <div class="text text1">
                    <p>The lighter the shoe, the less weight to carry, the faster players can go. Evolving last year's release, the Air Jordan XXXV features a stabilising Eclipse plate 2.0, visible cushioning and new Flightwire cables. Lightweight and responsive, it's designed to help players get the most from their power and athleticism. This PF version uses an extra-durable outsole that's ideal for outdoor courts.</p>
                    <a class="shop-link btn btn-shop" href="/shoes">
                        Shop now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end of content 1 -->

    <!-- conten 2 -->
    <div class="col-md-4 col-xs-12 konten2">
        <img class="kaki" src="/img/kaki.png" alt="">
        <div class="bola"></div>
    </div>
    <!-- end of content 2 -->

    <!-- content 3 -->
    <div class="col-md-2 col-sm-12 konten3">
        <div class="text2">
            <h5>quality materials</h5>
            <h1>Iconic</h1>
            <h1>Shoes</h1>
        </div>
    </div>

    <!-- end of content 3 -->
</div>
<!-- end of content -->

<?= $this->endSection('content'); ?>