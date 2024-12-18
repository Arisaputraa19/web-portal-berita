<?= $this->extend("layout/template");?>

<?= $this->section("content");?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('/img/<?= $blog['gambar'] ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?= $blog["judul_blog"] ?></h1>
                    <h2 class="subheading"><?= $blog["subjudul_blog"]?></h2>
                    <span class="meta">
                        Dibuat Oleh:
                        <a href="#!"><?= $blog["penulis_blog"]?></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p><?= $blog["isi_blog"] ?></p>
                </p>
            </div>
        </div>
    </div>
</article>
<?= $this->endSection();?>