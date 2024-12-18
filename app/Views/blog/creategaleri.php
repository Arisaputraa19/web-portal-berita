<?= $this->extend("layout/template");?>


<?= $this->section("content");?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Ari Saputra Blog</h1>
                    <span class="subheading">Tambahkan Artikel mu</span>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container mb-3">
    <div class="row">
        <div class="col">
            <form action="/galeri/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="gambar" name="nm_galeri">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>