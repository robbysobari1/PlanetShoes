<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">
        <img class="logo" src="/img/logo.png" alt="">
    </a>
    <div class="light2">
        <button class="navbar-toggler light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav list">
            <li class="nav-item">
                <a class="nav-link navlink" style="color: #f9f6ff; font-size:36px;" href="/shoes/new">
                    New
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navlink" style="color: #f9f6ff; font-size:36px;" href="/shoes/men">
                    Men
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navlink" style="color: #f9f6ff; font-size:36px;" href="/shoes/women">
                    Women
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navlink" style="color: #f9f6ff; font-size:36px;" href="/shoes/sport">
                    Sport
                </a>
            </li>
            <li class="nav-item mr-auto">
                <a href="/cart">
                    <img class="cart" src="/img/cart<?php if (!empty($cart)) {
                                                        echo '1';
                                                    } ?>.png" alt="">
                </a>
            </li>
            <!-- login btn -->
            <li class="nav-item mr-auto">
                <a class="login-link btn btn-login" href="
                <?php if (logged_in() && (in_groups('admin') || in_groups('super-admin'))) { ?>
                        /admin
                    <?php } else if (logged_in() && in_groups('user')) { ?>
                        /user
                    <?php } else { ?>
                        /login
                    <?php } ?>
                ">
                    <?php if (logged_in()) { ?>
                        Profile
                    <?php } else { ?>
                        Login
                    <?php } ?>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- end of nav -->