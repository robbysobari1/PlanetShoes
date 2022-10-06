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
                <form action="/admin/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="id_brand" class="col-sm-2 col-form-label">Brand</label>
                        <div class="col-sm-10">
                            <select name="id_brand" class="form-control">
                                <?php foreach ($brand as $b) : ?>
                                    <option value="<?= $b['id_brand']; ?>"><?= $b['nama_brand']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="tipe" name="tipe" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                        <div class="col-sm-10">
                            <select name="jenis" class="form-control">
                                <option value="New">New</option>
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="Sport">Sport</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="warna" class="col-sm-2 col-form-label">Warna</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="warna" name="warna" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="harga" name="harga" value="">
                        </div>
                    </div>
                    <div>
                        <div class="form-group row">
                            <label for="foto1" class="col-sm-2 col-form-label">Foto 1</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto1" name="foto1" onchange="previewImg()">
                                    <label class="custom-file-label labelFoto1" for="foto1">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group row">
                                <label for="foto2" class="col-sm-2 col-form-label">Foto 2</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto2" name="foto2" onchange="previewImg()">
                                        <label class="custom-file-label labelFoto2" for="foto2">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group row">
                                <label for="foto3" class="col-sm-2 col-form-label">Foto 3</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto3" name="foto3" onchange="previewImg()">
                                        <label class="custom-file-label labelFoto3" for="foto3">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto4" class="col-sm-2 col-form-label">Foto 4</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto4" name="foto4" onchange="previewImg()">
                                    <label class="custom-file-label labelFoto4" for="foto4">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection('dashContent'); ?>