<?php $this->load->view('template/head') ?>

<?php $this->load->view('template/header.php') ?>



  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>LOGIN</p>
        </div>

        <div class="row">
        

          <div class="col-lg-12">
            <form method="post" role="form" action="<?= base_url('login/aksi_login') ?>" enctype="multipart/form-data"  class="php-email-form" >
            <?php if($this->session->flashdata('msg')){echo $this->session->flashdata('msg');} ?>
                <div class="form-row">
                  <div class="col-lg-12 form-group">
                  <?php 
                  $validation = validation_errors();

                  if(validation_errors() != false) { 
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>'. $validation.'</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                  }?>
                  </div>

                  <div class="col-lg-12 form-group ">
                  <label for="nama_depan">Email</label>
                    <input type="email" name="email" class="form-control" id="nama_depan" placeholder="Email"  />
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-12 form-group">
                  <label for="nama_depan">Password</label>
                    <input type="password" name="password" class="form-control" id="email" placeholder="Password" />

                  </div>
                </div>

              <div class="text-center"><button type="submit">LOGIN</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('template/footer.php') ?>