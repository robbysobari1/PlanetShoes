<?= $this->extend('login/template/index'); ?>

<?= $this->section('content'); ?>
<div id="page-container">
    <main id="main-container">
        <div class="hero-static">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <!-- Sign Up Block -->
                        <div class="block block-themed block-fx-shadow mb-0">
                            <div class="block-header bg-success">
                                <h3 class="block-title"><?= lang('Auth.register') ?></h3>
                                <div class="block-options">
                                    <a class="btn-block-option" href="/login" data-toggle="tooltip" data-placement="left" title="Sign In">
                                        <i class="fa fa-sign-in-alt"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="p-sm-3 px-lg-4 py-lg-5">
                                    <h1 class="mb-2">Planet Shoes ID</h1>
                                    <p>Please fill the following details to create a new account.</p>

                                    <?= view('Myth\Auth\Views\_message_block') ?>


                                    <form class="js-validation-signup" action="<?= route_to('register') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="py-3">

                                            <div class="form-group">
                                                <label for="username"><?= lang('Auth.username') ?></label>
                                                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                            </div>

                                            <div class=" form-group">
                                                <label for="email"><?= lang('Auth.email') ?></label>
                                                <input type="text" class="form-control form-control-lg form-control-alt <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                                <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                            </div>

                                            <div class="form-group">
                                                <label for="password"><?= lang('Auth.password') ?></label>
                                                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                            </div>

                                            <div class="form-group">
                                                <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                            </div>

                                        </div>
                                        <div class=" form-group row">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-success">
                                                    <i class="fa fa-fw fa-plus mr-1"></i> <?= lang('Auth.register') ?>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign Up Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign Up Block -->
                    </div>
                </div>
            </div>
            <div class="content content-full font-size-sm text-muted text-center">
                <strong>Planet Shoes ID</strong> &copy; <span data-toggle="year-copy"></span>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!-- Terms Modal -->


<?= $this->endSection(); ?>