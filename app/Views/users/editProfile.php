<!-- main content -->
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
<!-- main content -->
<main id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3"></h2>
                <form action="/User/updateProfile/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    <input type="hidden" name="email" value="<?= $user['email']; ?>">
                    <input type="hidden" name="username" value="<?= $user['username']; ?>">
                    <input type="hidden" name="nama" value="<?= $user['nama']; ?>">
                    <input type="hidden" name="fotoLama" value="<?= $user['foto']; ?>">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="form-group row">
                            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label labelfoto" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection('dashContent'); ?>