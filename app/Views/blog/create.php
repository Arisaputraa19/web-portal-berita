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
            <form action="/blog/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="judul_blog" class="form-label">Judul Blog</label>
                    <input type="text" name="judul_blog"
                        class="form-control <?=($validation->hasError('judul_blog')) ? 'is-invalid' : ''?>"
                        id="judul_blog" value="<?=old('judul_blog'); ?>" autofocus>

                    <!-- validasi  -->
                    <div class="invalid-feedback">
                        Judul Tidak boleh kosong
                    </div>
                </div>
                <div class="mb-3">
                    <label for="subjudul_blog" class="form-label">Sub Judul</label>
                    <input type="text" name="subjudul_blog" class="form-control" id="subjudul_blog"
                        value="<?=old('subjudul_blog'); ?>">
                </div>
                <div class="mb-3">
                    <label for="isi_blog" class="form-label">Isi Artikel</label>
                    <textarea name="isi_blog" class="form-control" id="isi_blog" rows="7"
                        value="<?=old('isi_blog'); ?>"></textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="penulis_blog" class="form-label">Penulis</label>
                    <input type="text" name="penulis_blog" class="form-control" id="penulis_blog"
                        value="<?=old('penulis_blog'); ?>">
                </div>


                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>