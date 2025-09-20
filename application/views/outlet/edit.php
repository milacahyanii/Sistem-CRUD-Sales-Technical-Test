<!DOCTYPE html>
<html>
<head>
    <title>Edit Outlet</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Edit Outlet</h4>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Kode Outlet</label>
                            <input type="text" name="kdoutlet" class="form-control" 
                                   value="<?= $outlet->kdoutlet; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Outlet</label>
                            <input type="text" name="namaoutlet" class="form-control" 
                                   value="<?= $outlet->namaoutlet; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" 
                                   value="<?= $outlet->alamat; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">PIC</label>
                            <input type="text" name="PIC" class="form-control" 
                                   value="<?= $outlet->PIC; ?>" required>
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="<?= site_url('outlet'); ?>" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
