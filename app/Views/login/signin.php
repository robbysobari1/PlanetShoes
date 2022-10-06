<?= $this->extend('login/template/index'); ?>

<?= $this->section('content'); ?>
<div id="page-container">
    <main id="main-container">
        <div class="bg-image" style="background-image: url('assets/media/photos/photo6@2x.jpg');">
            <div class="hero-static bg-white-95">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign In Block -->
                            <div class="block block-themed block-fx-shadow mb-0">
                                <div class="block-header">
                                    <h3 class="block-title">Sign In</h3>
                                    <div class="block-options">
                                        <?php if ($config->allowRegistration) : ?>
                                            <a class="btn-block-option" href="<?= route_to('register') ?>" data-toggle="tooltip" data-placement="left" title="New Account">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 py-lg-5">
                                        <h1 class="mb-2">Planet Shoes ID</h1>
                                        <p>Welcome, please login.</p>

                                        <form action="<?= route_to('login') ?>" method="post">
                                            <?= csrf_field() ?>
                                            <div class="py-3">
                                                <div class="form-group">
                                                    <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.login') ?>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="password"><?= lang('Auth.password') ?></label>
                                                    <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.password') ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-xl-5">
                                                    <button type="submit" class="btn btn-block btn-primary">
                                                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> <?= lang('Auth.loginAction') ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                        <?php if ($config->allowRegistration) : ?>
                                            <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                                        <?php endif; ?>
                                        <!-- END Sign In Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign In Block -->
                        </div>
                    </div>
                </div>
                <div class="content content-full font-size-sm text-muted text-center">
                    <strong>Planet Shoes ID</strong> &copy; <span data-toggle="year-copy">2020</span>
                </div>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
</div>

<?= $this->endSection(); ?>