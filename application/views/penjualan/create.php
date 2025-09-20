<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penjualan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Tambah Penjualan</h2>
    
    <form method="post">
        <div class="mb-3">
            <label class="form-label">No Faktur</label>
            <input type="text" name="nofaktur" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tglfaktur" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Outlet</label>
            <select name="kdoutlet" class="form-select">
                <?php foreach ($outlet as $o): ?>
                    <option value="<?= $o->kdoutlet; ?>"><?= $o->namaoutlet; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <h4 class="mt-4">Item Barang</h4>
        <div id="items" class="border rounded p-3 mb-3">
            <div class="row g-2 align-items-center mb-2">
                <div class="col-md-5">
                    <label class="form-label">Barang</label>
                    <select name="items[0][kode_barang]" class="form-select">
                        <?php foreach ($barang as $b): ?>
                            <option value="<?= $b->kdbarang; ?>">
                                <?= $b->namabarang; ?> (Rp<?= number_format($b->harga); ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Qty</label>
                    <input type="number" name="items[0][qty]" value="1" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="items[0][harga]" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Amount</label>
            <input type="number" name="amount" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Discount</label>
            <input type="number" name="discount" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">PPN</label>
            <input type="number" name="ppn" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Total Amount</label>
            <input type="number" name="total_amount" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= site_url('penjualan'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
