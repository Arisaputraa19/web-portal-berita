<?= $this->extend("layout/template");?>

<?= $this->section("content");?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class = "mb-3 mt-3">Tambah Data Barang</h1>
            <form action="<?=base_url('/barang/simpan') ?>" method = "post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nm_barang" class="form-label">Nama barang</label>
                    <input type="text" name="nm_barang" class="form-control" id="nm_barang">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" name="merk" class="form-control" id="merk">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">stock</label>
                    <input type="number" name="stock" class="form-control" id="stock">
                </div>
                <div class="mb-3">
                    <label for="hg_jual" class="form-label">Harga Jual</label>
                    <input type="number" name="hg_jual" class="form-control" id="hg_jual">
                </div>


                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection();?>