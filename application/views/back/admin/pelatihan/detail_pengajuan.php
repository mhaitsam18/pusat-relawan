<!DOCTYPE html>
<html>
<?php $this->load->view('template_admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php $this->load->view('template_admin/header') ?>
	<?php $this->load->view('template_admin/sidebar') ?>

  <div class="content-wrapper">

     <section class="content">
      <div class="row justify-content-center">
        <div class="col-xs-12">
          <div class="box">
             <div class="box-header">
              <tbody>
             <h3>Detail Pengajuan Pelatihan <span class="badge badge-secondary"><?=$pengajuan_pelatihan[0]->nama_pelatihan ?></span></h3>
              </tbody>
            </div>
            
        <table class="table">
            <tr >
              <th scope="row"></th>
              <td style="width: 14%"><b>Nama Pelatihan</b></td>
              <td>: <?php echo $pengajuan_pelatihan[0]->nama_pelatihan ?></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Kategori Pelatihan</b></td>
              <td>: <?php echo $pengajuan_pelatihan[0]->nama_kategori_pelatihan ?></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Jenis Pelatihan</b></td>
              <td>: <?php echo $pengajuan_pelatihan[0]->nama_jenis_pelatihan ?></td>
            </tr>
              <th scope="row"></th>
              <td><b>Tanggal Pelatihan</b></td>
              <td>: <?= tgl_indo($pengajuan_pelatihan[0]->tanggal_pelatihan) ?></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Deskripsi Pelatihan</b></td>
              <td>: <?= $pengajuan_pelatihan[0]->deskripsi_pelatihan ?></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Waktu</b></td>
              <td>: <?php echo $pengajuan_pelatihan[0]->waktu ?></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Kuota</b></td>
              <td>: <?php echo $pengajuan_pelatihan[0]->kuota ?></td>

            </tr>
              
            <tr>
            <th scope="row"></th>
              <td > 
                <center>
                    <a href="<?php echo base_url() ?>admin/pelatihan/tolak_pengajuan_pelatihan?id_pelatihan=<?php echo $pengajuan_pelatihan[0]->id_pelatihan; ?>" class="btn btn-sm btn-danger"> <span class="" aria-hidden="true"></span> TOLAK</a>
                    <a href="<?php echo base_url() ?>admin/pelatihan/acc_pengajuan_pelatihan?id_pelatihan=<?php echo $pengajuan_pelatihan[0]->id_pelatihan; ?>" class="btn btn-sm btn-success"> <span class="" aria-hidden="true"></span> SETUJUI</a>
                </center>
              </td>
            </tr>
        </table>
        </div>
        </div>
        </div>
    </section>
</div>
  
<?php $this->load->view('template_admin/footer') ?>
</div>
</body>
</html>