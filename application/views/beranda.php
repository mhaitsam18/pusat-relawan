<?php $this->load->view('template/head')?>

<?php $this->load->view('template/header')?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active"
                style="background-image: url(<?=base_url('assets/front/');?>img/slide/relawan_background.jpeg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown"><span>PUSAT RELAWAN</span></h2>
                        <p class="animate__animated animate__fadeInUp">Pusat Relawan merupakan aplikasi berbasis web
                            yang dapat membantu Organisasi
                            dalam menyebarkan informasinya, dan membantu relawan dalam menemukan organisasi dan kegiatan
                            pelatihan.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">BERGABUNG
                            SEKARANG</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Pricing Section ======= -->
    <section id="bencana" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Bencana</h2>
                <p>Daftar Bencana</p>
            </div>

            <div class="row align-items-center">
                <?php foreach ($data_bencana as $data) {?>
                <div class="col-lg-4">
                    <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                        <img width="250" height="250"
                            src="<?=base_url('assets/images/gambar_bencana/' . $data->gambar);?>" alt="">
                        <h3><?=$data->nama_bencana?></h3>
                        <ul>
                            <li>Provinsi : <?=$data->provinsi?></li>
                        </ul>
                        <a href="<?=site_url()?>bencana/detail_bencana?id_bencana=<?php echo $data->id_bencana; ?>" class="get-started-btn">LIHAT BENCANA</a>
                    </div>
                </div>
                <?php }?>
            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="forum" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>FORUM</h2>
                <p>Daftar Forum</p>
            </div>

            <div class="row align-items-center">
                <?php foreach ($data_forum as $data) {?>
                <div class="col-lg-4">
                    <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                        <img width="250" height="250" src="<?=base_url('assets/images/logo_forum/' . $data->logo);?>"
                            alt="">
                        <h5 class="mt-3"><?=$data->nama_forum?></h5>
                        <a href="" class="get-started-btn">LIHAT FORUM</a>

                    </div>
                </div>
                <?php }?>
            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pelatihan" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Daftar Pelatihan</p>
            </div>

            <div class="row align-items-center">
                <?php foreach ($data_pelatihan as $data) {?>
                <div class="col-lg-4">
                    <div class="box featured" data-aos="zoom-in" data-aos-delay="100">

                        <ul class="text-center">
                            <li>
                                <h5><?=$data->nama_pelatihan?></h5>
                            </li>
                            <li><i class="bx bx-check"></i> Kuota <?=$data->kuota?> Relawan</li>
                            <li><a href="<?=site_url()?>pelatihan/detail_pelatihan?id_pelatihan=<?php echo $data->id_pelatihan; ?>"
                                    class="get-started-btn">Bergabung</a></li>

                        </ul>

                    </div>
                </div>
                <?php }?>
            </div>

        </div>
    </section><!-- End Pricing Section -->


</main><!-- End #main -->


<!-- ======= Footer ======= -->

<?php $this->load->view('template/footer.php')?>