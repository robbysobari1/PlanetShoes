<head>
    <link rel="stylesheet" href="/css/iconCSS.css">
</head>
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <a class="font-w600 text-dual" href="/">
            <img src="/img/logo.png" style="margin-left: -10px; margin-top: -5px;" width="20%" class="img" alt="">
            <span class="smini-hide">
                <span class="font-w400 font-size-h5 ml-2"><b>PLANET</b> <small>SHOES ID</small></span>
            </span>
        </a>
        <!-- END Logo-->

        <!-- Options -->
        <div>
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
        </div>
        <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link " href="/profile">
                    <i class="nav-main-link-icon fa "><img src="../../img/profile.png" alt="" class="profileicon"></i>

                    <span class="nav-main-link-name">Profile</span>
                </a>
            </li>
            <?php if (in_groups('admin') || in_groups('super-admin')) : ?>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/admin/catalogue">
                        <i class="nav-main-link-icon fa"><img src="../../img/catalogue.png" alt="" class="catalogueicon"></i>
                        <span class="nav-main-link-name">Catalogue</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/admin/create">
                        <i class="nav-main-link-icon fa" aria-hidden=" true"><img src="../../img/add.png" alt="" class="addicon"></i>
                        <span class="nav-main-link-name">Add</span>
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a class="nav-main-link" href="/logout">
                    <i class="nav-main-link-icon fa"><img src="../../img/logout.png" alt="" class="logouticon"></i>
                    <span class="nav-main-link-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
<!-- END Sidebar -->