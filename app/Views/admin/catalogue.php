<?= $this->extend('layout/dashTemplate'); ?>
<?= $this->section('dashContent'); ?>
<!-- Right Section -->
<form class="d-none d-sm-inline-block" action="" method="POST">
    <div class="input-group input-group-sm">
        <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="keyword">
        <div class="input-group-append">
            <span class="input-group-text bg-body border-0">
                <i class="si si-magnifier"></i>
            </span>
        </div>
    </div>
</form>
<!-- END Right Section -->
</div>
<!-- END Header Content -->
<!-- Header Loader -->
<!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
<div id="page-header-loader" class="overlay-header bg-white">
    <div class="content-header">
        <div class="w-100 text-center">
            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
        </div>
    </div>
</div>
<!-- END Header Loader -->
</header>
<!-- Main Container -->
<main id="main-container">
    <div class="content">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <?php $i = 0; ?>
        <?php foreach ($sepatu as $s) : ?>
            <div class="block-content bg-white mb-2">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Slider with dots and white hover arrows -->
                        <div class="block">
                            <div class="js-slider slick-nav-white slick-nav-hover" data-dots="true" data-arrows="true">
                                <div>
                                    <img class="img-fluid" src="/img/shoes/<?= $s['foto1']; ?>" alt="">
                                </div>
                                <div>
                                    <img class="img-fluid" src="/img/shoes/<?= $s['foto2']; ?>" alt="">
                                </div>
                                <div>
                                    <img class="img-fluid" src="/img/shoes/<?= $s['foto3']; ?>" alt="">
                                </div>
                                <div>
                                    <img class="img-fluid" src="/img/shoes/<?= $s['foto4']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table-borderless table">
                            <tr>
                                <td class="h2 font-w600">Brand</td>
                            </tr>
                            <tr>
                                <td class="h2 font-w300"><?= $s['tipe']; ?></td>
                            </tr>
                            <tr>
                                <td class="h2">Rp. <?= number_format($s['harga']); ?> </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/admin/update/<?= $s['id_sepatu']; ?>" class="btn btn-sm" style="width: 150px; background-color:#4fff40; border-radius:10px; text-decoration:none; color:#000;">Edit</a>



                                    <form style="display: inline;" action="/admin/deleteSepatu/<?= $s['id_sepatu']; ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-sm" style="width: 150px; background-color:#ff5c5c; border-radius:10px; text-decoration:none; color:#000;" onclick="return confirm('Delete <?= $s['tipe']; ?>?') ">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<!-- END Main Container -->
<?= $this->endSection('dashContent'); ?>