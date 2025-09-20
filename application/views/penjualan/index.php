<?php $this->load->view('layout/header'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Data Penjualan</h2>
  <a class="btn btn-primary" href="<?= site_url('penjualan/create'); ?>">+ Tambah Penjualan</a>
</div>

<div class="card">
  <div class="card-body">
    <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>No Faktur</th>
          <th>Tanggal</th>
          <th>Outlet</th>
          <th>Total Amount</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($penjualan as $p): ?>
        <tr>
          <td><?= $p->nofaktur; ?></td>
          <td><?= $p->tglfaktur; ?></td>
          <td><?= $p->kdoutlet; ?></td>
          <td><?= number_format($p->total_amount, 0, ',', '.'); ?></td>
          <td>
            <a class="btn btn-sm btn-info" href="<?= site_url('penjualan/detail/'.$p->nofaktur); ?>">👁 Detail</a>
            <a class="btn btn-sm btn-danger" href="<?= site_url('penjualan/delete/'.$p->nofaktur); ?>" onclick="return confirm('Yakin hapus?')">🗑 Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>
