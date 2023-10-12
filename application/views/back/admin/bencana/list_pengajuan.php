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
        Data Pengajuan Bencana
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
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Bencana</th>
                  <th>Kategori Bencana</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($data_pengajuan as $data) { ?>
                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data->nama_bencana ?></td>
                      <td><?= $data->nama_kategori_bencana ?></td>
                      <td><img src="<?= base_url('assets/images/gambar_bencana/'.$data->gambar);  ?>" alt="" width="70"></td>
                      <td>
                      <center>
                        <a href="<?php echo base_url() ?>admin/bencana/detail_pengajuan_bencana?id_bencana=<?php echo $data->id_bencana; ?>" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        <a href="<?php echo site_url() ?>admin/bencana/hapus_pengajuan_bencana?id_bencana=<?php echo $data->id_bencana; ?>" class="btn btn-sm btn-danger tombol-hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
