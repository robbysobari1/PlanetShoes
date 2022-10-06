<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="/css/paymentsuccessCSS.css">
</head>


<body>
    <div class="payment-page">
        <img class="foto2" src="/img/foto2.png" alt="">
        <img class="foto1" src="/img/paymentsuccess.png" alt="">
        <h1 class="">Your Payment is Successfull</h1>
        <p>Thank you for your payment.An automated payment receipt will be sent to your registered email.</p>
        <a class="btn btn-light tombolhome" href="/" role="button">Back to home</a>
    </div>
    <?= $this->endSection('content'); ?>
</body>