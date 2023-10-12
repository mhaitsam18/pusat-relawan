<!DOCTYPE html>
<html>
    <?php $this->load->view('template_admin/head') ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php $this->load->view('template_admin/header') ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php $this->load->view('template_admin/sidebar') ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Tambah Bencana
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-12">


                            <div class="box box-info">
                                <div class="flash-data-errors" data-flashdata="<?= $this->session->flashdata('msg') ?>">
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <form role="form" method="post"
                                            action="<?php echo base_url('forum/bencana/tambah_bencana') ?>"
                                            enctype="multipart/form-data">
                                            <div class="col-md-6">
                                                <div
                                                    class="form-group <?php if(form_error('nama_bencana')) echo 'has-error' ?>">
                                                    <label>Nama Bencana</label>
                                                    <input type="text" name="nama_bencana"
                                                        value="<?php echo set_value('nama_bencana'); ?>"
                                                        class="form-control" placeholder="Nama Bencana">
                                                    <span
                                                        class="help-block"><?php echo form_error('nama_bencana'); ?></span>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('kategori_bencana')) echo 'has-error' ?>">
                                                    <label for="exampleInputEmail1">Kategori Bencana</label>
                                                    <select name="kategori_bencana" class="form-control select2">
                                                        <option value="">Pilih Kategori Bencana</option>
                                                        <?php
  
                            foreach ($kategori_bencana as $data) {
                              echo "<option value='". $data->id_kategori_bencana."'>".$data->nama_kategori_bencana."</option>";
                            }
                        ?>
                                                        ?>
                                                    </select>
                                                    <span
                                                        class="help-block"><?php echo form_error('kategori_bencana'); ?></span>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('kecamatan')) echo 'has-error' ?>">
                                                    <label>KECAMATAN</label>
                                                    <input type="text" name="kecamatan"
                                                        value="<?php echo set_value('kecamatan'); ?>"
                                                        class="form-control" placeholder="Kecamatan">
                                                    <span
                                                        class="help-block"><?php echo form_error('kecamatan'); ?></span>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('kabupaten')) echo 'has-error' ?>">
                                                    <label>KABUPATEN</label>
                                                    <input type="text" name="kabupaten"
                                                        value="<?php echo set_value('kabupaten'); ?>"
                                                        class="form-control" placeholder="Kabupaten">
                                                    <span
                                                        class="help-block"><?php echo form_error('kabupaten'); ?></span>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('provinsi')) echo 'has-error' ?>">
                                                    <label>PROVINSI</label>
                                                    <input type="text" name="provinsi"
                                                        value="<?php echo set_value('provinsi'); ?>"
                                                        class="form-control" placeholder="Provinsi">
                                                    <span
                                                        class="help-block"><?php echo form_error('provinsi'); ?></span>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('alamat_lengkap')) echo 'has-error' ?>">
                                                    <label>ALAMAT LENGKAP</label>
                                                    <TEXTarea name="alamat_lengkap" class="form-control"
                                                        placeholder="Alamat Lengkap"><?php echo set_value('alamat_lengkap'); ?></TEXTarea>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('link_berita')) echo 'has-error' ?>">
                                                    <label>LINK BERITA BENCANA</label>
                                                    <input type="text" name="link_berita"
                                                        value="<?php echo set_value('link_berita'); ?>"
                                                        class="form-control" placeholder="Link Berita Bencana">
                                                    <span
                                                        class="help-block"><?php echo form_error('link_berita'); ?></span>
                                                </div>

                                                <div
                                                    class="form-group <?php if(form_error('jml_relawan')) echo 'has-error' ?>">
                                                    <label>JUMLAH RELAWAN YANG DIBUTUHKAN</label>
                                                    <input type="number" name="jml_relawan"
                                                        value="<?php echo set_value('jml_relawan'); ?>"
                                                        class="form-control"
                                                        placeholder="Jumlah Relawan Yang Dibutuhkan">
                                                    <span
                                                        class="help-block"><?php echo form_error('jml_relawan'); ?></span>
                                                </div>

                                                <!-- /.form group -->
                                            </div>
                                            <div class="col-md-6">
                                                <label>Pemetaan Lokasi</label>
                                                <div id="mapid"></div>
                                                <div
                                                    class="form-group <?php if(form_error('latitude')) echo 'has-error' ?>">
                                                    <label>Latitude</label>
                                                    <input type="text" name="latitude" class="form-control"
                                                        id="Latitude" placeholder="Latitude"
                                                        value="<?php echo set_value('latitude'); ?>" readonly>
                                                    <span
                                                        class="help-block"><?php echo form_error('latitude'); ?></span>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('longitude')) echo 'has-error' ?>">
                                                    <label>Longitude</label>
                                                    <input type="text" name="longitude" class="form-control"
                                                        id="Longitude" placeholder="longitude"
                                                        value="<?php echo set_value('longitude'); ?>" readonly>
                                                    <span
                                                        class="help-block"><?php echo form_error('longitude'); ?></span>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('warna')) echo 'has-error' ?>">
                                                    <label>Warna</label>
                                                    <select name="warna" class="form-control">
                                                        <option value="">----PILIH WARNA----</option>
                                                        <option value="red">Merah</option>
                                                        <option value="blue">Biru</option>
                                                        <option value="yellow">Kuning</option>
                                                        <option value="green">Hijau</option>
                                                    </select>
                                                    <span class="help-block"><?php echo form_error('warna'); ?></span>
                                                </div>
                                                <div
                                                    class="form-group <?php if(form_error('gambar')) echo 'has-error' ?>">
                                                    <label>Gambar</label>
                                                    <input type="file" name="gambar"
                                                        value="<?php echo set_value('gambar'); ?>" class="form-control">
                                                    <span class="help-block"><?php echo form_error('gambar'); ?></span>
                                                </div>
                                                <button type="submit" name="kirim" class="btn btn-primary">INPUT
                                                    BENCANA</button>
                                                <!-- /.form group -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>
                    </div>
                    <!-- /.row -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php $this->load->view('template_admin/footer') ?>