<?= $this->extend('layout/dashTemplate'); ?>
<?= $this->section('dashContent'); ?>
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
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 mt-5 pt-5">
            <div class="row z-depth-3">
                <div class="col-sm-12 bg-white rounded-right">
                    <h3 class="mt-3 text-center">Information</h3>
                    <hr class="bagde-primary mt-0 w-25">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p> Name :
                                        <b>
                                            <?php if (empty($user['nama'])) :  ?>
                                                <b style="color: red;"> Isi nama di edit profile</b>
                                            <?php endif; ?>
                                            <?= $user['nama']; ?>
                                        </b>
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <p> Email: <b><?= $user['email']; ?></b></p>
                                </div>
                                <div class="col-sm-12">
                                    <p> Username : <b><?= $user['username']; ?></b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <img style="width: 100px;" src="
                            <?php if (empty($user['foto'])) : ?>
                                /img/profile/default.png
                            <?php else : ?>
                                    /img/profile/<?= $user['foto']; ?>
                            <?php endif; ?>
                            " alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/editProfil/<?= $user['id']; ?>" class="btn btn-sm" style=" width: 100px; background-color:#4fff40; border-radius:10px; text-decoration:none; color:#000;">Edit</a>
                            <?php if (in_groups('super-admin')) : ?>
                                <a href="/admin/users" class="btn btn-sm btn-primary" style="width: 100px;border-radius:10px; text-decoration:none; color:#fff;">Kelola user</a>
                            <?php else : ?>
                                <form action="/user/deleteUser/<?= $user['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button style="height: 32px ; line-height: 15px ; width: 100px; background-color:#ff5c5c; border-radius:10px; text-decoration:none; color:#000;" type=" submit" class="btn" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                </form>
                            <?php endif; ?>
                            <div style="margin-bottom: 20px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- END Main Container -->
<?= $this->endSection('dashContent'); ?>