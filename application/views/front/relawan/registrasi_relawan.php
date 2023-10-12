<?php $this->load->view('template/head') ?>

<?php $this->load->view('template/header.php') ?>



  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Registrasi Relawan</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <form method="post" role="form" action="<?= base_url('relawan/registrasi') ?>" enctype="multipart/form-data"  class="php-email-form" >
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
                  <label for="nama_depan">Nama Relawan</label>
                    <input type="text" name="nama_lengkap" class="form-control" id="nama_depan" value="<?php echo set_value('nama_lengkap'); ?>" placeholder="Nama Lengkap Relawan"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-12 form-group">
                  <label for="nama_depan">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo set_value('email'); ?>" placeholder="Email"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-12 form-group">
                  <label for="nama_depan">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?php echo set_value('password'); ?>" placeholder="Password" />
                  </div>
                  <div class="col-lg-12 form-group">
                  <label for="nama_depan">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" value="<?php echo set_value('konfirmasi_password'); ?>" placeholder="Konfirmasi Password" />

                  </div>
                </div>
                <div class="form-row">
                <div class="col form-group">
                  <label for="nama_depan">Foto <strong>*jpg|png|jpeg</strong></label>
                    <input type="file" name="foto" class="form-control"  placeholder="Password" />
                  </div>
                </div>
                <div class="form-row">
                <div class="col form-group">
                  <label for="nama_depan">Surat Keterangan Sehat <strong>*PDF</strong></label>
                    <input type="file" name="berkas_surat_keterangan_sehat" class="form-control"  placeholder="Password" />
                  </div>
                </div>
                <div class="form-row">
                <div class="col form-group">
                  <label for="nama_depan">SKCK (Surat Keterangan Catatan Kepolisian) <strong>*PDF</strong></label>
                    <input type="file" name="berkas_skck" class="form-control"  placeholder="Password" />
                  </div>
                </div>
                <div class="form-row">
                <div class="col form-group">
                  <label for="nama_depan">Surat Persetujuan Wali <strong>*PDF</strong></label>
                    <input type="file" name="berkas_surat_persetujuan_wali" class="form-control"  placeholder="Password" />
                  </div>
                </div>
                <div class="form-row">
                <div class="col form-group">
                  <label for="nama_depan">Foto KTP <strong>*PDF</strong></label>
                    <input type="file" name="berkas_ktp" class="form-control"  placeholder="Password" />
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-12 form-group">
                  <label for="nama_depan">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo set_value('alamat'); ?></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 form-group">
                  <label for="nama_depan">Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?php echo set_value('provinsi'); ?>" placeholder="Provinsi" />

                  </div>
                  <div class="col-6 form-group">
                  <label for="nama_depan">Kabupaten</label>
                    <input type="text" name="kabupaten" class="form-control" id="kabupaten" value="<?php echo set_value('kabupaten'); ?>" placeholder="Kabupaten" />
                  </div>
                  <div class="col-6 form-group">
                  <label for="nama_depan">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?php echo set_value('kecamatan'); ?>" placeholder="Kecamatan"/>
                  </div>
                  <div class="col-6 form-group">
                  <label for="nama_depan">Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="<?php echo set_value('kode_pos'); ?>" placeholder="Kode Pos" />                  
                  </div>
                  <div class="col-6 form-group">
                  <label for="nama_depan">Telephone</label>
                    <input type="number" name="nomor_handphone" class="form-control" id="nomor_handphone" value="<?php echo set_value('nomor_handphone'); ?>" placeholder="Nomor Handphone"  />
                  </div>
                  <div class="col-lg-12 form-group">
                  <label for="nama_depan">Deksripsi Keahlian</label>
                    <textarea name="deskripsi_keahlian" class="form-control" value="<?php echo set_value('deskripsi_keahlian'); ?>" id="exampleFormControlTextarea1" rows="3"><?php echo set_value('deskripsi_keahlian'); ?></textarea>
                  </div>
              </div>
              <div class="text-center"><button type="submit" name="kirim">REGISTERASI</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('template/footer.php') ?>