<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html">PUSAT RELAWAN</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                    <li><a href="#bencana">Daftar Bencana</a></li>
                    <li><a href="#forum">Cari Forum</a></li>
                    <li><a href="#pelatihan">Cari Pelatihan</a></li>
                    <li><a href="#portfolio">Tentang Kami</a></li>
                </ul>
            </nav><!-- .nav-menu -->



            <?php if (isset($_SESSION['login_relawan']) == true) { ?>


            <a href="<?= base_url('registrasi') ?>"
                class="get-started-btn"><?= $this->session->userdata('nama_lengkap') ?></a>
            <a href="<?= base_url('logout') ?>" class="get-started-btn">LOGOUT</a>

            <?php } else { ?>

            <a href="<?= base_url('registrasi') ?>" class="get-started-btn">REGISTRASI</a>
            <a href="<?= base_url('login') ?>" class="get-started-btn">LOGIN</a>

            <?php } ?>


        </div>

    </header><!-- End Header -->