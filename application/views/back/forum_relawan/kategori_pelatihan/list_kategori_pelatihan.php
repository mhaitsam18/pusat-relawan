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
        Data Bencana
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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                Tambah Kategori Pelatihan
              </button>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kategori_pelatihan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($data_kategori_pelatihan as $data) { ?>
                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data->nama_kategori_pelatihan ?></td>
                      <td>
                      <center>
                        <a href="<?php echo base_url() ?>forum/pelatihan/detail_relawan?id_kategori_pelatihan=<?php echo $data->id_kategori_pelatihan; ?>" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a href="<?php echo site_url() ?>forum/pelatihan/hapus_kategori_pelatihan?id_kategori_pelatihan=<?php echo $data->id_kategori_pelatihan; ?>" class="btn btn-sm btn-danger tombol-hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kategori Pelatihan</h4>
              </div>
              <div class="modal-body">
                <form  role="form" method="post" action="<?php echo base_url('forum/pelatihan/tambah_kategori_pelatihan') ?>">
                
                    <label>Nama Kategori Pelatihan</label>
                    <input type="text" name="nama_kategori_pelatihan"  class="form-control" placeholder="Nama Kategori Pelatihan">
         
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('template_admin/footer') ?>
