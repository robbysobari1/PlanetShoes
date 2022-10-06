<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="/css/responsivedetail.css">
</head>


<div class="content">
    <div class="content1">
        <div class="imgbox">
            <img class="detail-img" src="/img/shoes/<?= $sepatu['foto1']; ?>" alt="">
        </div>
        <br><br>
        <div class="imgbox">
            <img class="detail-img" src="/img/shoes/<?= $sepatu['foto2']; ?>" alt="">
        </div>
    </div>
    <div class="content2">
        <div class="imgbox">
            <img class="detail-img" src="/img/shoes/<?= $sepatu['foto3']; ?>" alt="">
        </div>
        <br><br>
        <div class="imgbox">
            <img class="detail-img" src="/img/shoes/<?= $sepatu['foto4']; ?>" alt="">
        </div>
    </div>
    <div class="content3 ">
        <div class="row jenisharga">
            <div class="col-8"><?= $sepatu['jenis']; ?> shoes</div>
            <div class="col-4">Rp <?= number_format($sepatu['harga']); ?></div>
        </div>
        <div class="row brandtipe">
            <div class="col">
                <h2 style="color: #c781ff;"><?= $brand['nama_brand']; ?></h2>
                <h3><?= $sepatu['tipe']; ?></h3>
            </div>
        </div>
        <div class="div"></div>
        <div class="row">
            <div class="col availableon">
                <h4 style="color: #c781ff;">Available on :</h4>
                <h5><?= $sepatu['warna']; ?></h5>
            </div>
        </div>
        <div class="div"></div>
        <h1 class="h1size">Size</h1>
        <div class="size">
            <div class="sizeNum num1">38</div>
            <div class="sizeNum num2">39</div>
            <div class="sizeNum num3">40</div>
            <div class="sizeNum num4">41</div>
            <div class="sizeNum num5">42</div>
            <div class="sizeNum num6">43</div>
        </div>

        <form action="
        <?php if (logged_in()) : ?>
            /pages/addtocart/<?= $sepatu['id_sepatu'] ?>
        <?php else :  ?>
            /login
        <?php endif; ?>
                " method="get" class="d-inline">
            <?= csrf_field(); ?>
            <?php if (logged_in()) : ?>
                <input type="hidden" name="tipe" value="<?= $sepatu['tipe'] ?>">
                <input type="hidden" name="harga" value="<?= $sepatu['harga'] ?>">
                <input type="hidden" name="foto" value="<?= $sepatu['foto1'] ?>">
            <?php endif; ?>
            <button type="submit" class="btn btn-add addcart">Add to cart</button>
        </form>

    </div>
</div>
<?= $this->endSection('content'); ?>