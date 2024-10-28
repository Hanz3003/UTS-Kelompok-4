<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
    <style>
        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Header styling */
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
            font-weight: 600;
        }

        /* Product list styling */
        .line-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eaeaea;
        }

        .line-item:last-child {
            border-bottom: none;
        }

        .line-item span {
            color: #333;
        }

        /* Totals and discounts */
        .total, .discount, .payment-total {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            font-weight: bold;
        }

        .total {
            border-top: 2px solid #ddd;
            color: #333;
        }

        .discount {
            color: #e74c3c; /* Red for discount */
        }

        .payment-total {
            border-top: 2px solid #ddd;
            border-bottom: 2px solid #ddd;
            padding-top: 15px;
            padding-bottom: 15px;
            color: #2ecc71; /* Green for total payment */
        }

        /* Footer styling */
        .footer p {
            color: #777;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Struk Pembayaran</h2>
    <p>Tanggal Transaksi: <?= $tanggalTransaksi; ?></p>
</div>

<!-- Daftar Produk -->
<?php foreach ($produk as $item): ?>
<div class="line-item">
    <span><?= $item["nama"]; ?> (<?= $item["stok"]; ?> x <?= number_format($item["harga"], 0, ',', '.'); ?>)</span>
    <span><?= number_format($item["jumlah"], 0, ',', '.'); ?></span>
</div>
<?php endforeach; ?>

<!-- Total, Diskon, dan Total Pembayaran -->
<div class="total">
    <strong>Total:</strong>
    <span><?= number_format($totalKeseluruhan, 0, ',', '.'); ?></span>
</div>

<div class="discount">
    <strong>Diskon:</strong>
    <span><?= number_format($diskon, 0, ',', '.'); ?></span>
</div>

<div class="payment-total">
    <strong>Total Pembayaran:</strong>
    <span><?= number_format($totalPembayaran, 0, ',', '.'); ?></span>
</div>

<div class="footer">
    <p>Terima Kasih telah berbelanja!</p>
</div>

</body>
</html>
