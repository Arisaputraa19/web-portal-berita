<?= $this->extend("layout/template");?>


<?= $this->section("content");?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Ari Saputra</h1>
                    <span class="subheading">Gallery</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <a href="/galeri/create" class="btn btn-primary rounded-3 mb-3 mt-3">Tambahkan Gambar</a>
    <div class="row">

    <?php foreach($galeri as $d):?>
        <div class="col-md-4">
            <img src="/img/<?= $d["nm_galeri"]  ?>" alt="">
        </div>
    <?php endforeach?>
        
    </div>
</div>


<?= $this->endSection();?>
