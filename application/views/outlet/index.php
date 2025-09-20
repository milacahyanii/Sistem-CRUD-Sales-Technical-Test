<?php $this->load->view('layout/header'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Data Outlet</h2>
  <a class="btn btn-primary" href="<?= site_url('outlet/create'); ?>">+ Tambah Outlet</a>
</div>

<div class="card">
  <div class="card-body">
    <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>Kode</th>
          <th>Nama Outlet</th>
          <th>Alamat</th>
          <th>PIC</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($outlet as $o): ?>
        <tr>
          <td><?= $o->kdoutlet; ?></td>
          <td><?= $o->namaoutlet; ?></td>
          <td><?= $o->alamat; ?></td>
          <td><?= $o->PIC; ?></td>
          <td>
            <a class="btn btn-sm btn-warning" href="<?= site_url('outlet/edit/'.$o->kdoutlet); ?>">✏ Edit</a>
            <a class="btn btn-sm btn-danger" href="<?= site_url('outlet/delete/'.$o->kdoutlet); ?>" onclick="return confirm('Yakin hapus?')">🗑 Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>
