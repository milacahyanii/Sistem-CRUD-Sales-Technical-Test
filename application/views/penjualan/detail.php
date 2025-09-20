<!DOCTYPE html>
<html>
<head>
    <title>Detail Penjualan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail Penjualan</h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>No Faktur:</strong> <?= $header->nofaktur; ?></p>
                    <p><strong>Tanggal:</strong> <?= $header->tglfaktur; ?></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Outlet:</strong> <?= $header->kdoutlet; ?></p>
                    <p><strong>Total Amount:</strong> Rp<?= number_format($header->total_amount); ?></p>
                </div>
            </div>

            <h5 class="mt-4">Detail Barang</h5>
            <table class="table table-bordered table-striped mt-2">
                <thead class="table-light">
                    <tr>
                        <th>Barang</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detail as $d): ?>
                    <tr>
                        <td><?= $d->namabarang; ?></td>
                        <td><?= $d->qty; ?></td>
                        <td>Rp<?= number_format($d->harga); ?></td>
                        <td>Rp<?= number_format($d->sub_total); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-end">
            <a href="<?= site_url('penjualan'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
