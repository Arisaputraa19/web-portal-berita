<?= $this->extend("layout/template");?>

<?= $this->section("content");?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2 mb-4" >Kategori</h1>
            <a href="" class="btn btn-primary mb-2">+ Tambah Data</a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kode laporan</th>
                  <th scope="col">Nama barang</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Harga jual</th>
                  <th scope="col">Jumlah total</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  $bayar = 0;
                ?>
                <?php foreach ($laporan as $d): ?>
                  <?php $totalharga = $d['jumlah'] * $d['hg_jual'];?>
                <tr>
                  <th scope="row"><?= $i++;?></th>
                  <td><?= $d['kode_laporan'] ?></td>
                  <td><?= $d['nm_barang'] ?></td>
                  <td><?= $d['jumlah'] ?></td>
                  <td><?= $d['hg_jual'] ?></td>
                  <td><?= $totalharga ?></td>
                  <?php $bayar += $totalharga; ?>



                  <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>

                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <p>Total Keuntungan <?= $bayar ?></p>
        </div>
    </div>
</div>

<?= $this->endSection();?>