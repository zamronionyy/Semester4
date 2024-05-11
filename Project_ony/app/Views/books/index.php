<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/books/create" class="btn btn-primary mt-3">Tambah Data Buku</a>
      <h1 classs="mt-2">Daftar Buku</h1>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($buku as $b) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="\img\<?= $b['sampul']; ?>" alt="" class="sampul"></td>
              <td><?= $b['judul']; ?></td>
              <td><a href="/books/<?= $b['slug']; ?>" class="btn btn-success">Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>