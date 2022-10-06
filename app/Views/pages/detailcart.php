<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="/css/cartCSS.css">
</head>

<body>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <?php if (empty($cart)) : ?>
        <h1 class="kosong">
            Shop now!
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <a class="shop-link btn btn-shop" href="/shoes">
                        Shop
                    </a>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    <?php endif; ?>


    <?php if (!empty($cart)) : ?>
        <form action="/pages/payment" method="post">
            <div class="small-container cart-page">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <?php foreach ($cart as $c) : ?>
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <div class="thumb">
                                        <img src="/img/shoes/<?= $c['foto']; ?>">
                                    </div>
                                    <div class="marright"></div>
                                    <div>
                                        <h6><?= $c['tipe']; ?></h6>
                                        <small>Price : Rp. <?= number_format($c['harga']); ?></small>
                                        <br>
                                        <form action="/deleteCart/<?= $c['id_item']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button formaction="/deleteCart/<?= $c['id_item']; ?>" style="height: 32px ; line-height: 15px ; width: 100px; margin-top:10px ; background-color:#ff5c5c; border-radius:10px; text-decoration:none; color:#000;" type=" submit" class="btn" onclick="return confirm('Hapus item?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td><select class="form-control form-control-sm">
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                    <option>41</option>
                                    <option>42</option>
                                    <option>43</option>
                                </select></td>
                            <td><input type="number" value="1"></td>
                            <td>Rp. <?= number_format($c['harga']); ?></td>
                        </tr>
                        <?php
                        $subtotal += $c['harga'];
                        $tax = $subtotal / 10;
                        $total = $subtotal + $tax;  ?>
                    <?php endforeach; ?>
                </table>
                <div class="total-price">
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>Rp. <?= number_format($subtotal); ?></td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>Rp. <?= number_format($tax); ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>Rp. <?= number_format($total); ?></td>
                        </tr>
                        <tr>
                            <td><a href="/payment" class="btn btn-light">Checkout</a></td>
                        </tr>

                    </table>
                </div>
            </div>
        </form>
    <?php endif; ?>





</body>
<?= $this->endSection('content'); ?>