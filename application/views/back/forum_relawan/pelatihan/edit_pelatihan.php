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
        Edit Pelatihan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="row">
  <div class="col-md-12">


    <div class="box box-info">
      <div class="flash-data-errors" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
      <div class="box-body">
        <div class="row">
            <form role="form" method="post" action="<?php echo base_url('forum/pelatihan/edit_pelatihan') ?>" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-group <?php if(form_error('nama_pelatihan')) echo 'has-error' ?>">
                        <label>Nama Pelatihan</label>
                        <input type="hidden" name="id_pelatihan" value="<?= $data_pelatihan[0]->id_pelatihan ?>" class="form-control" placeholder="Nama Pelatihan">
                        <input type="text" name="nama_pelatihan" value="<?= $data_pelatihan[0]->nama_pelatihan ?>" class="form-control" placeholder="Nama Pelatihan">
                        <span class="help-block"><?php echo form_error('nama_pelatihan'); ?></span>
                    </div>
                    <div class="form-group <?php if(form_error('kategori_pelatihan')) echo 'has-error' ?>">
                    <label for="exampleInputEmail1">Kategori Pelatihan</label>
                    <select name="kategori_pelatihan" class="form-control">
                      <option value="">Pilih Kategori Pelatihan</option>
                      <?php
                            foreach ($kategori_pelatihan as $data) {
                                if ($data_pelatihan[0]->id_kategori_pelatihan == $data->id_kategori_pelatihan) 
                                echo "<option value='". $data->id_kategori_pelatihan."' selected>".$data->nama_kategori_pelatihan."</option>";
                                else
                                echo "<option value='". $data->id_kategori_pelatihan."'>".$data->nama_kategori_pelatihan."</option>";
                            }
                        ?>
                      ?>
                    </select>
                    <span class="help-block"><?php echo form_error('kategori_pelatihan'); ?></span>
                    </div>
                    <div class="form-group <?php if(form_error('id_jenis_pelatihan')) echo 'has-error' ?>">
                      <label for="exampleInputEmail1">Jenis Pelatihan</label>
                      <select name="id_jenis_pelatihan" class="form-control">
                        <option value="">Pilih Jenis Pelatihan</option>
                        <?php
                            foreach ($jenis_pelatihan as $data) {
                                if ($data_pelatihan[0]->id_jenis_pelatihan == $data->id_jenis_pelatihan) 
                                echo "<option value='". $data->id_jenis_pelatihan."' selected>".$data->nama_jenis_pelatihan."</option>";
                                else
                                echo "<option value='". $data->id_jenis_pelatihan."'>".$data->nama_jenis_pelatihan."</option>";
                            }
                        ?>
                      </select>
                      <span class="help-block"><?php echo form_error('id_jenis_pelatihan'); ?></span>
                    </div>
    
                    <!-- /.form group -->
                </div>
                <div class="col-md-6">
                    <div class="form-group <?php if(form_error('tanggal_pelatihan')) echo 'has-error' ?>">
                      <label>Tanggal Pelatihan</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tanggal_pelatihan" value="<? $data_pelatihan[0]->tanggal_pelatihan ?>" class="form-control pull-right" id="datepicker">
                        
                      </div>
                      <span class="help-block"><?php echo form_error('tanggal_pelatihan'); ?></span>
                      <!-- /.input group -->
                    </div>
                    <div class="bootstrap-timepicker">
                    <div class="form-group <?php if(form_error('waktu_pelatihan')) echo 'has-error' ?>">
                      <label>Waktu Pelatihan</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" name="waktu_pelatihan" value="<?= $data_pelatihan[0]->waktu ?>" class="form-control timepicker">
                      </div>
                      <span class="help-block"><?php echo form_error('waktu_pelatihan'); ?></span>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
                    <div class="form-group <?php if(form_error('kuota_pelatihan')) echo 'has-error' ?>">
                        <label>Kuota Pelatihan</label>
                        <input type="number" name="kuota_pelatihan" value="<?= $data_pelatihan[0]->kuota ?>" class="form-control" placeholder="Kuota Pelatihan">
                        <span class="help-block"><?php echo form_error('kuota_pelatihan'); ?></span>
                        
                    </div>
                    <div class="form-group <?php if(form_error('deskripsi_pelatihan')) echo 'has-error' ?>">
                        <label>Deskripsi Pelatihan</label>
                        <textarea name="deskripsi_pelatihan" class="form-control" cols="30" rows="10"><?= $data_pelatihan[0]->deskripsi_pelatihan ?></textarea>
                        <span class="help-block"><?php echo form_error('deskripsi_pelatihan'); ?></span>
                        <button type="submit" name="kirim" class="btn btn-primary">UPDATE PELATIHAN</button>
                    </div>
                   
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
  
