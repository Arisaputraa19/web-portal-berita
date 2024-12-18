<?= $this->extend("layout/template");?>

<?= $this->section("content");?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2 mb-4" >Barang</h1>
            <a href="/barang/create" class="btn btn-primary mb-2">+ Tambah Data</a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama barang</th>
                  <th scope="col">Merk</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Harga jual</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php $i=1;?>
                <?php foreach ($barang as $b): ?>
                <tr>
                  <th scope="row"><?= $i++;?></th>
                  <td><?= $b['nm_barang'] ?></td>
                  <td><?= $b['merk_barang'] ?></td>
                  <td><?= $b['stock_barang'] ?></td>
                  <td><?= $b['hg_jual'] ?></td>
                  <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>

                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection();?>