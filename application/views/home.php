<?php $this->load->view('layout/header'); ?>

<div class="text-center">
  <h1 class="mb-4">📊 Aplikasi Penjualan</h1>
  <p class="lead">Silakan pilih menu di bawah untuk mengelola data:</p>

  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card shadow-sm mb-3">
        <div class="card-body">
          <h4 class="card-title">🏪 Outlet</h4>
          <p class="card-text">Kelola data outlet perusahaan.</p>
          <a href="<?= site_url('outlet'); ?>" class="btn btn-primary">Kelola Outlet</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm mb-3">
        <div class="card-body">
          <h4 class="card-title">📦 Barang</h4>
          <p class="card-text">Kelola data barang yang dijual.</p>
          <a href="<?= site_url('barang'); ?>" class="btn btn-success">Kelola Barang</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm mb-3">
        <div class="card-body">
          <h4 class="card-title">🧾 Penjualan</h4>
          <p class="card-text">Kelola transaksi penjualan.</p>
          <a href="<?= site_url('penjualan'); ?>" class="btn btn-warning">Kelola Penjualan</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>
