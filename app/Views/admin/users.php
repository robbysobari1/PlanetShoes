<?= $this->extend('layout/dashTemplate'); ?>
<?= $this->section('dashContent'); ?>
<!-- Right Section -->
<form class="d-none d-sm-inline-block" action="be_pages_generic_search.html" method="POST">
    <div class="input-group input-group-sm">
        <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
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
    <?php if (session()->getFlashdata('pesan')) :  ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="content">
        <div class="block-content bg-white mb-2">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $u) :  ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $u['username']; ?></td>
                                <td><?= $u['email']; ?></td>
                                <td><?= $u['name']; ?></td>
                                <td>
                                    <?php if ($u['name'] != 'super-admin') { ?>
                                        <form action="/admin/userEdit/<?= $u['user_id']; ?>" method="get" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <?php if ($u['name'] == 'user') { ?>
                                                <input type="hidden" name="group_id" value="1">
                                                <button type="submit" class="btn btn-primary">Promote</button>
                                            <?php } else { ?>
                                                <input type="hidden" name="group_id" value="2">
                                                <button type="submit" class="btn btn-primary">Demote&nbsp</button>
                                            <?php } ?>

                                        </form>
                                        <form action="/admin/deleteUser/<?= $u['user_id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus <?= $u['username']; ?>?')">Hapus</button>
                                        </form>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>



<?= $this->endSection('dashContent'); ?>