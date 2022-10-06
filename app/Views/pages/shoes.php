<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="/css/responsiveshoes.css">
</head>

<div class="d-flex flex-row-reverse">
    <div class="p-2"></div>
    <div class="p-2 search">
        <form class="d-none d-sm-inline-block" action="/pages/shoes" method="POST">
            <div class="wrap">
                <div class="search">
                    <input type="text" name="keyword" class="searchTerm" placeholder="Cari sepatu">
                    <button type="submit" class="searchButton">
                        <i class="fa"><img src="/img/search.png" alt="" class="imgsearch"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="p-2"></div>
</div>

<!-- content -->
<br>
<br>

<div class="container">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <?php if (empty($sepatu)) { ?>
            <h1 class="kosong">
                Maaf, Kategori kosong :(
            </h1>
        <?php } ?>
        <?php foreach ($sepatu as $s) : ?>
            <div class="col-sm-4 kartu">
                <div class="card" style="width: 18rem;">
                    <img src="/img/shoes/<?= $s['foto1']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title" style="height: 30px;"><?= $s['tipe']; ?></h3>
                        <p class="card-text harga"> Rp <?= number_format($s['harga']); ?></p>
                        <a href="/detail/<?= $s['id_sepatu']; ?>" class="btn btn-detail">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- end of content -->
<?= $this->endSection('content'); ?>