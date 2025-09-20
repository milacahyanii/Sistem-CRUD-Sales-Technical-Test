<!DOCTYPE html>
<html>
<head>
    <title>Tambah Outlet</title>
</head>
<body>
    <h2>Tambah Outlet</h2>
    <form method="post">
        <p>Kode Outlet: <input type="text" name="kdoutlet"></p>
        <p>Nama Outlet: <input type="text" name="namaoutlet"></p>
        <p>Alamat: <input type="text" name="alamat"></p>
        <p>PIC: <input type="text" name="PIC"></p>
        <p><button type="submit">Simpan</button></p>
    </form>
    <a href="<?php echo site_url('outlet'); ?>">Kembali</a>
</body>
</html>
