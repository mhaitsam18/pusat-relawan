<?php $this->load->view('template/head') ?>

<?php $this->load->view('template/header.php') ?>



  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>REGISTRASI SEBAGAI</p>
        </div>

        <div class="row align-items-center">

          <div class="col-lg-6">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>FORUM RELAWAN</h3>
              <!-- <h4>$29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul> -->
              <a href="<?= base_url('forum/registrasi') ?>" class="get-started-btn">REGISTRASI</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>RELAWAN</h3>
              <!-- <h4>$29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul> -->
              <a href="<?= base_url('relawan/registrasi') ?>" class="get-started-btn">REGISTRASI</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('template/footer.php') ?>