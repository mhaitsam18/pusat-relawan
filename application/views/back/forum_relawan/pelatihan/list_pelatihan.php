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
        Data Pelatihan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
            <a class="btn btn-info" href="<?php echo site_url('forum/pelatihan/tambah_pelatihan') ?>" ><i class="glyphicon glyphicon-plus"></i> Tambah Pelatihan</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelatihan</th>
                  <th>Kategori Pelatihan</th>
                  <th>Jenis Pelatihan</th>
                  <th>Tanggal Pelatihan</th>
                  <th>Deskripsi Pelatihan</th>
                  <th>Waktu</th>
                  <th>Gambar</th>
                  <th>kuota</th>
                  <th>Status Pengajuan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($data_pelatihan as $data) { ?>
                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data->nama_pelatihan ?></td>
                      <td><?= $data->nama_kategori_pelatihan ?></td>
                      <td><?= $data->nama_jenis_pelatihan ?></td>
                      <td><?= $data->tanggal_pelatihan ?></td>
                      <td><?= $data->deskripsi_pelatihan ?></td>
                      <td><?= $data->waktu ?></td>
                      <td><img src="<?= base_url('assets/images/gambar_pelatihan/'.$data->gambar);  ?>" alt="" width="70"></td>
                      <td><?= $data->kuota ?></td>
                      
                      <td>
                           <center>
                           <?php
                          if ($data->status_pengajuan_pelatihan == 0) { ?>
                            <span class="pull-right badge bg-red">Belum disetujui admin</span>
                          <?php } else { ?>
                            <span class="pull-right badge bg-blue">Dipublish</span>
                            <?php } ?>
                            
                           </center>
                      </td>
                      <td>
                      <center>
                        <a href="<?php echo base_url() ?>forum/pelatihan/edit_pelatihan?id_pelatihan=<?php echo $data->id_pelatihan; ?>" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a href="<?php echo site_url() ?>forum/pelatihan/hapus_pelatihan?id_pelatihan=<?php echo $data->id_pelatihan; ?>" class="btn btn-sm btn-danger tombol-hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                      </center>
                      </td>
                  </tr>

                  <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('template_admin/footer') ?>
