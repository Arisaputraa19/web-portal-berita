<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Blog Artikel</h1>
                    <span class="subheading">Artikel adalah Jendela Dunia</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="kategori">
    <?php foreach ($kategori as $k) : ?>
        <a href=""><?= $k["nm_kblog"] ?></a>
    <?php endforeach ?>

    <div class="buttonartikel mb-3 mt-3">
        <a href="/blog/create" class="btn btn-primary rounded-3">Tulis Artikel</a>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

</div>
<?php foreach ($blog as $d) : ?>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="/blog/<?= $d['id_blog'] ?>">
                        <h2 class="post-title"><?= $d['judul_blog'] ?> </h2>
                        <h3 class="post-subtitle"><?= $d['subjudul_blog'] ?></h3>
                    </a>
                    <p class="post-meta">
                        Ditulis Oleh :
                        <a href="#!"><?= $d['penulis_blog'] ?></a>

                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />

            </div>
        </div>
    </div>
<?php endforeach ?>
<?= $this->endSection(); ?>