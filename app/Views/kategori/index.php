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
                  <th scope="col">Nama Kategori</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php $i=1;?>
                <?php foreach ($kategori as $d): ?>
                <tr>
                  <th scope="row"><?= $i++;?></th>
                  <td><?= $d['nm_kategori'] ?></td>
                  <td><?= $d['jenis'] ?></td>

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