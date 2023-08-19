<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Neil%20AMC,%20Saya%20tertarik%20dengan%20properti%20yang%20tertera%20di%20website%20anda%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>
<div id="pop" class="pop">
    <div id="popup" class="popup panel panel-primary">
        <img src="https://admin103.amc-menteng.com/upload/popup/<?= $popup->image; ?>" alt="popup" class="img-fluid" title="<?= $popup->nama; ?>">
        <div class="panel-footer">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
    </div>
</div>

<div class="container-fluid hero-header" id="home">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 text-center text-lg-start pb-5">
                <h1 class="display-3 mb-3 wow fadeInDown" data-wow-delay="0.2s"><?= $homeweb->nama; ?></h1>
                <div class="desk-header mb-5">
                    <h4 class="fw-light wow fadeInRight" data-wow-delay="0.2s"><?= $homeweb->area; ?></h4>
                    <small class="wow fadeInUp" data-wow-delay="0.2s"><?= $homeweb->fitur; ?></small>
                </div>
                <div class="social">
                    <div class="d-flex top-social align-items-center wow fadeInUp" data-wow-delay="0.2s">
                        <?php foreach ($sosmed as $s) { ?>
                            <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" target="_blank" title="<?= $s->name; ?>"><i class="<?= $s->icon; ?>"></i></a>
                        <?php } ?>
                    </div>
                    <div class="d-flex align-items-center txt-aquas mt-2 wow fadeInUp" data-wow-delay="0.2s">
                        <i class="fas fa-envelope  me-2"></i><span><?= $website->email; ?></span>
                    </div>
                </div>
                <div class="wa pt-4 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="<?= $waLink; ?>" target="_blank" class="bg-orange py-2 px-3 fw-bolder d-flex align-items-center w-fit"><i class="fab fa-whatsapp fs-26 me-2"></i> <span>Contact Me <i class="fas fa-chevron-right ms-3"></i></span></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="img text-center h-100">
                    <img src="<?= base_url(); ?>assets/img/bg-header.png" class="img-fluid h-100" alt="">
                </div>
            </div>
        </div>
    </div>

</div>

<section class="container-fluid specialist-sales bg-aquas">
    <div class="container py-5">
        <div class="row gy-4 gy-lg-0">
            <?php foreach ($kelebihan as $k) { ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img me-2">
                            <img src="https://admin103.amc-menteng.com/upload/kelebihan/<?= $k->image; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="caption">
                            <p><?= $k->title; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="categories mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-title position-relative pb-1 wow fadeInUp" data-wow-delay="0.2s">
                        <h3 class="text-white"><?= $dc1->nama; ?></h3>
                    </div>
                </div>
                <div class="col-md-8 mt-4 mt-md-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="row gy-3">
                        <?php foreach ($kategori as $k) { ?>
                            <div class="col-6 col-sm-4 col-lg-3">
                                <p><?= $k->nama; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-xxl about-us" id="about">
    <div class="container py-5">
        <div class="header-title position-relative w-fit wow fadeInUp" data-wow-delay="0.2s">
            <h3 class="txt-aquas">About Us</h3>
        </div>
        <div class="row gy-4 mt-1">
            <div class="col-lg-4 d-flex flex-column flex-wrap justify-content-between">
                <div class="logo wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://admin103.amc-menteng.com/upload/<?= $website->logo; ?>" class="img-fluid" alt="">
                </div>
                <div class="desk wow fadeInUp" data-wow-delay="0.2s">
                    <div class="comment">
                        <?= $about->deskripsi; ?>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://admin103.amc-menteng.com/upload/about_us/<?= $about->image1; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://admin103.amc-menteng.com/upload/about_us/<?= $about->image2; ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-xxl about-neila px-0">
    <div class="container py-5">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="profile wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="mb-3"><?= $homeweb->nama; ?></h2>
                    <div class="desk-header mb-4">
                        <h5 class="fw-light"><?= $homeweb->area; ?></h5>
                        <small><?= $homeweb->fitur; ?></small>
                    </div>
                    <div class="social">
                        <div class="d-flex top-social align-items-center mb-2">
                            <?php foreach ($sosmed as $s) { ?>
                                <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" target="_blank" title="<?= $s->name; ?>"><i class="<?= $s->icon; ?>"></i></a>
                            <?php } ?>
                        </div>
                        <div class="d-flex align-items-center txt-aquas">
                            <i class="fas fa-envelope  me-2"></i><span><?= $website->email; ?></span>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="<?= $waLink; ?>" target="_blank" class="bg-orange py-2 px-3 fw-bolder d-flex align-items-center w-fit"><i class="fab fa-whatsapp fs-26 me-2"></i> <span>Contact Me</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="desk wow fadeInUp" data-wow-delay="0.2s">
                    <div class="comment">
                        <p><?= $homeweb->deskripsi; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://admin103.amc-menteng.com/upload/<?= $homeweb->image; ?>" title="<?= $homeweb->nama; ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-xxl property-gallery" id="services">
    <div class="container py-5">
        <div class="row wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-lg-12">
                <div class="slider-container">
                    <div class="swiper-container property-gallery-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($s_produk as $sp) { ?>
                                <div class="swiper-slide">
                                    <div class="service-box">
                                        <div class="img">
                                            <a href="https://admin103.amc-menteng.com/upload/produk/<?= $sp->image; ?>" data-gallery="glightbox" class="glightbox" title="">
                                                <img src="https://admin103.amc-menteng.com/upload/produk/thumbnail/<?= $sp->image; ?>" title="<?= $sp->nama; ?>" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="container-xxl why-us" id="why-us">
    <div class="container">
        <div class="header-title wow fadeInUp" data-wow-delay="0.2s">
            <h2><?= $dc2->nama; ?></h2>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3">
                <div class="header-desk wow fadeInUp" data-wow-delay="0.2s">
                    <?= $dc2->deskripsi; ?>
                </div>
            </div>
        </div>
        <div class="caption mt-4">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="row align-items-center justify-content-between gy-2 gy-lg-5">
                        <?php foreach ($why_us as $wu) { ?>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="row align-items-center">
                                    <div class="col-2 col-md-1 col-lg-2 mt-4 mt-lg-0 mb-2 mb-lg-0">
                                        <div class="img">
                                            <img src="https://admin103.amc-menteng.com/upload/why_choise_me/<?= $wu->image; ?>" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="title">
                                            <p><?= $wu->title; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="desk">
                                    <p><?= $wu->deskripsi; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img-side wow fadeInUp" data-wow-delay="0.2s">
                        <img src="https://admin103.amc-menteng.com/upload/deskripsi_content/<?= $dc2->image; ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid products px-0" id="produk">
    <div class="container pt-5">
        <div class="header-title mb-5 text-center wow fadeInUp" data-wow-delay="0.1s">
            <h2>Products</h2>
        </div>
    </div>
    <div class="b-orange position-relative">
        <div class="container pb-5">
            <div class="row text-center g-4 products-container wow fadeInUp" data-wow-delay="0.2s">
                <!-- Untuk Gambar ALL -->
                <?php
                foreach ($this->db->query("SELECT * FROM tbl_product ORDER BY id DESC LIMIT 3")->result() as $p) {
                ?>
                    <?php $slug = $this->db->query("SELECT * FROM tbl_nama_kategori WHERE id = '" . $p->id_kategori . "'")->row(); ?>
                    <div class="col-md-6 col-lg-4 products-item">
                        <div class="products-wrap">
                            <a href="https://admin103.amc-menteng.com/upload/produk/<?= $p->image; ?>" data-gallery="portfolioGallery" class="products-lightbox" title="">
                                <div class="box-img position-relative">
                                    <div class="img">
                                        <img src="https://admin103.amc-menteng.com/upload/produk/thumbnail/<?= $p->image; ?>" class="img-fluid" title="<?= $p->nama; ?>" alt="">
                                    </div>
                                    <div class="sell">
                                        <p><?= $p->text_sell_rend; ?></p>
                                    </div>
                                    <div class="logo">
                                        <img src="https://admin103.amc-menteng.com/upload/<?= $website->logo; ?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="intro">
                                        <p><?= $homeweb->fitur; ?></p>
                                    </div>
                                </div>
                            </a>
                            <div class="caption text-start px-3 py-4">
                                <div class="about-property">
                                    <div class="title mb-2">
                                        <p><?= $p->nama; ?></p>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="maps col-10">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span><?= $p->alamat; ?></span>
                                        </div>
                                        <div class="play col-2">
                                            <a href="<?= $p->link_sosmed; ?>" target="_blank">
                                                <i class="fas fa-play-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="op">OPEN PRICE :</p>
                                    <div class="o-price d-flex justify-content-between">
                                        <div class="sell">
                                            <p>SELL : <?= $p->sell; ?></p>
                                        </div>
                                        <div class="rent">
                                            <p>RENT : <?= $p->rend; ?></p>
                                        </div>
                                    </div>
                                    <div class="min text-end">
                                        <i>Min <?= $p->min_year; ?></i>
                                    </div>
                                </div>
                                <div class="property-features">
                                    <div class="header-title my-2">
                                        <p>PROPERTY FEATURES : </p>
                                    </div>
                                    <div class="features">
                                        <div class="box">
                                            <span>K. Mandi</span>
                                            <p><?= $p->k_mandi; ?></p>
                                        </div>
                                        <div class="box">
                                            <span>K. Tidur</span>
                                            <p><?= $p->k_tidur; ?></p>
                                        </div>
                                        <div class="box">
                                            <span>Tipe Properti</span>
                                            <p><?= $p->tipe_properti; ?></p>
                                        </div>
                                        <div class="box">
                                            <span>SHM</span>
                                            <p><?= $p->shm; ?></p>
                                        </div>
                                        <div class="box">
                                            <span>Jumlah lantai</span>
                                            <p><?= $p->jml_lantai; ?></p>
                                        </div>
                                        <div class="box">
                                            <span>L. Bangunan</span>
                                            <p><?= $p->l_bangunan == NULL ? '' : $p->l_bangunan . ' M²'; ?></p>
                                        </div>
                                        <div class="box">
                                            <span>L. Tanah</span>
                                            <p><?= $p->l_tanah == NULL ? '' : $p->l_tanah . ' M²'; ?></p>
                                        </div>
                                        <div class="box">
                                            <span>Other</span>
                                            <p><?= $p->other1; ?></p>
                                        </div>
                                        <div class="box">
                                            <span>Other</span>
                                            <p><?= $p->other2; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-chat d-flex justify-content-between mt-4">
                                    <?php
                                    $numberAPI1 = $website->phone;
                                    $n1API1 = substr($numberAPI1, 1);
                                    $apiWa1 = $n1API1;

                                    $waLink1 = "https://api.whatsapp.com/send?phone=62$apiWa1&text=Hallo%20Neil%20AMC,%20Saya%20tertarik%20dengan%20properti%20$p->slug%20yang%20tertera%20di%20website%20anda%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
                                    ?>
                                    <a href="<?= $waLink1; ?>" target="_blank" class="btn-scedul">schedule a viewing
                                        today</a>
                                    <a href="<?= $p->link_website; ?>" target="_blank" class="btn-read">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="text-center mt-5">
                <a href="<?= base_url() ?>detailproduk" class="bg-white txt-orange fw-bold py-sm-2 px-5 mt-3">Show
                    More</a>
            </div>
        </div>
    </div>
</section>

<section class="container-xxl dream-house">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="header-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="mb-4"><?= $dc3->nama; ?></h2>
                    <div class="txt-aquas">
                        <p><?= $dc3->deskripsi; ?></p>
                    </div>
                </div>
                <div class="btn-ctn bg-orange px-4 py-3 d-flex align-items-center w-fit wow fadeInUp" data-wow-delay="0.2s">
                    <a href="<?= $waLink; ?>" target="_blank" class="text-white h5 mb-0">Contact Me For <br> Further
                        Information</a>
                    <i class=" fas fa-arrow-right ms-3"></i>
                </div>
            </div>
            <div class="col-md-8">
                <div class="slider-container wow fadeInUp" data-wow-delay="0.2s">
                    <div class="swiper-container dream-house-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($interior as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="box">
                                        <div class="img">
                                            <a href="https://admin103.amc-menteng.com/upload/slider_interior/<?= $i->image; ?>" data-gallery="glightbox" class="glightbox" title="">
                                                <img src="https://admin103.amc-menteng.com/upload/slider_interior/<?= $i->image; ?>" class="img-fluid" alt="">
                                                <div class="project-name">
                                                    <p><?= $i->nama_proyek; ?></p>
                                                    <span><?= $i->nama_developer; ?></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>