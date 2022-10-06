<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="/css/oneui.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="icon" href="/img/logo.png">
    <title><?= $title; ?></title>

</head>

<body>

    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        <!-- sidebar -->
        <?= $this->include('layout/sidebar'); ?>
        <!-- topbar -->
        <?= $this->include('layout/topbar'); ?>
        <!-- main content -->
        <?= $this->renderSection('dashContent'); ?>
        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                        IT Crowd
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                        <a class="font-w600" href="/" target="_blank">Planet Shoes ID</a> &copy; <span data-toggle="year-copy">2020</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

    </div>
    <!-- END Page Container -->

    <script src="/js/oneui.core.min.js"></script>
    <script src="/js/oneui.app.min.js"></script>
    <script src="/js/Chart.bundle.min.js"></script>
    <script src="/js/be_pages_dashboard.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script>
        jQuery(function() {
            One.helpers('slick');
        });
    </script>


    <script>
        const foto1 = document.querySelector('#foto1');
        const foto2 = document.querySelector('#foto2');
        const foto3 = document.querySelector('#foto3');
        const foto4 = document.querySelector('#foto4');
        const foto1Label = document.querySelector('.labelFoto1');
        const foto2Label = document.querySelector('.labelFoto2');
        const foto3Label = document.querySelector('.labelFoto3');
        const foto4Label = document.querySelector('.labelFoto4');

        function previewImg() {
            foto1Label.textContent = foto1.files[0].name;
            foto2Label.textContent = foto2.files[0].name;
            foto3Label.textContent = foto3.files[0].name;
            foto4Label.textContent = foto4.files[0].name;

            const fileFoto1 = new FileReader();
            fileFoto1.readAsDataURL(foto1.files[0]);

            const fileFoto2 = new FileReader();
            fileFoto2.readAsDataURL(foto2.files[0]);

            const fileFoto3 = new FileReader();
            fileFoto3.readAsDataURL(foto3.files[0]);

            const fileFoto4 = new FileReader();
            fileFoto4.readAsDataURL(foto4.files[0]);

        }
    </script>
</body>

</html>