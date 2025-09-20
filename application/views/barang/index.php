<?php $this->load->view('layout/header'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Data Barang</h2>
  <a class="btn btn-primary" href="<?= site_url('barang/create'); ?>">+ Tambah Barang</a>
</div>

<div class="card">
  <div class="card-body">
    <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>Kode</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($barang as $b): ?>
        <tr>
          <td><?= $b->kdbarang; ?></td>
          <td><?= $b->namabarang; ?></td>
          <td><?= number_format($b->harga, 0, ',', '.'); ?></td>
          <td>
            <a class="btn btn-sm btn-warning" href="<?= site_url('barang/edit/'.$b->kdbarang); ?>">✏ Edit</a>
            <a class="btn btn-sm btn-danger" href="<?= site_url('barang/delete/'.$b->kdbarang); ?>" onclick="return confirm('Yakin hapus?')">🗑 Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>
