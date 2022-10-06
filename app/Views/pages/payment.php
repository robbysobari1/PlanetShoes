<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="/css/paymentCSS.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Payment</h2>
                <form action="/pages/done/<?= $cart[0]['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <h6 class="my-3">Billing Details</h6>
                    <div class="container px-1">
                        <div class="row gx-5">
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label for="firstname" class="form-label">First Name *</label>
                                        <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label for="lastname" class="form-label">Last Name *</label>
                                        <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                        <div class="form-group row">
                            <div class="col-sm-11">
                                <label for="company" class="form-label">Company Name (optional)</label>
                                <input type="text" class="form-control" id="company" aria-describedby="emailHelp">

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <label for="country" class="form-label">Country / Region</label>
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Country
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <label for="streetaddress" class="form-label">Street Address*</label>
                                <input type="text" class="form-control" id="streetaddress1" aria-describedby="emailHelp" placeholder="House number and street name">
                                <br>
                                <input type="text" class="form-control" id="streetaddress2" aria-describedby="emailHelp" placeholder="Apartment , suite, unit, etc. (optional)">

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <label for="town" class="form-label">Town / City*</label>
                                <input type="text" class="form-control" id="town" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <h6>Subtotal</h6>
                                <h6>Tax</h6>
                                <h6>Total Harga</h6>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-light">Checkout</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
    <?= $this->endSection('content'); ?>
</body>