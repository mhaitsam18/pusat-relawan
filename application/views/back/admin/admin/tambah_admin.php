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
        Tambah Admin
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="row">
  <div class="col-md-12">


    <div class="box box-info">
      <div class="box-body">
        <div class="row">
            <form role="form" method="post" action="<?php echo base_url('admin/admin/tambah_admin') ?>" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-group <?php if(form_error('nama_lengkap')) echo 'has-error' ?>">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="<?php echo set_value('nama_lengkap'); ?>" class="form-control" placeholder="Nama Lengkap">
                        <span class="help-block"><?php echo form_error('nama_lengkap'); ?></span>
                    </div>
                    <div class="form-group <?php if(form_error('email')) echo 'has-error' ?>">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email">
                        <span class="help-block"><?php echo form_error('email'); ?></span>
                    </div>
                    <div class="form-group <?php if(form_error('nomor_handphone')) echo 'has-error' ?>">
                        <label>Nomor Handphone</label>
                        <input type="text" name="nomor_handphone" value="<?php echo set_value('nomor_handphone'); ?>" class="form-control" placeholder="Nama Lengkap">
                        <span class="help-block"><?php echo form_error('nomor_handphone'); ?></span>
                    </div>
                    <!-- /.form group -->
                </div>
                <div class="col-md-6">
                    <div class="form-group <?php if(form_error('password')) echo 'has-error' ?>">
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
                        <span class="help-block"><?php echo form_error('password'); ?></span>
                    </div>
                    <div class="form-group <?php if(form_error('konfirmasi_password')) echo 'has-error' ?>">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="konfirmasi_password" value="<?php echo set_value('konfirmasi_password'); ?>" class="form-control" placeholder="Konfirmasi Password">
                        <span class="help-block"><?php echo form_error('konfirmasi_password'); ?></span>
                    </div>
                    <div class="form-group <?php if(form_error('hak_akses')) echo 'has-error' ?>">
                    <label >Hak Akses</label>
                        <select name="hak_akses" id="" class="form-control">
                            <option value="">PILIH HAK AKSES</option> 
                            <option value="SUPERADMIN">SUPERADMIN</option>
                            <option value="ADMIN">ADMIN</option>
                        </select>
                        <span class="help-block"><?php echo form_error('hak_akses'); ?></span>
                    </div>
                    <div class="form-group <?php if(form_error('foto')) echo 'has-error' ?>">
                    <label>Foto</label>
                    <input type="file" name="foto" value="<?php echo set_value('foto'); ?>" class="form-control" >
                    <span class="help-block"><?php echo form_error('foto'); ?></span>
                    </div>
                    <button type="submit" name="kirim" class="btn btn-primary">INPUT ADMIN</button>
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
