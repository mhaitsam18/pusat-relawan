<!DOCTYPE html>
<html>
<?php $this->load->view('template_admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php $this->load->view('template_admin/header') ?>
	<?php $this->load->view('template_admin/sidebar') ?>

  <div class="content-wrapper">

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
             <div class="box-header">
              <tbody>
             <h3>Detail Pengajuan Relawan <span class="badge badge-secondary"><?=$data_relawan[0]->nama_lengkap ?></span></h3>
              </tbody>
            </div>
        <table class="table table-striped">
            <tr>
              <th scope="row"></th>
              <td><b>Nama Relawan</b></td>
              <td>: <?php echo $data_relawan[0]->nama_lengkap ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Nomor Handphone</b></td>
              <td>: <?php echo $data_relawan[0]->nomor_handphone ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Foto Relawan</b></td>
              <td><img src="<?= base_url('assets/images/foto_relawan/'.$data_relawan[0]->foto); ?>" width="200" class="img-thumbnail"</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Email</b></td>
              <td>: <?php echo $data_relawan[0]->email ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
              <th scope="row"></th>
              <td><b>Alamat</b></td>
              <td>: <?= $data_relawan[0]->alamat ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Provinsi</b></td>
              <td>: <?= $data_relawan[0]->provinsi ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Kabupaten</b></td>
              <td>: <?php echo $data_relawan[0]->kabupaten ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Kecamatan</b></td>
              <td>: <?php echo $data_relawan[0]->kecamatan ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
              <th scope="row"></th>
              <td><b>Kode Pos</b></td>
              <td>: <?php echo $data_relawan[0]->kode_pos ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Deksripsi Keahlian</b></td>
              <td>: <?php echo $data_relawan[0]->deskripsi_keahlian ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Email</b></td>
              <td>: <?php echo $data_relawan[0]->email ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Nomor Handphone</b></td>
              <td>: <?php echo $data_relawan[0]->nomor_handphone ?></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Surat Keterangan Sehat</b></td>
              <td>:  <a href="<?= base_url('assets/berkas_relawan/'.$data_relawan[0]->surat_keterangan_sehat); ?>" class="btn btn-sm btn-primary "> <span class="" aria-hidden="true"></span> DOWNLOAD</a></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Surat Keterangan Catatan Kepolisian</b></td>
              <td>:  <a href="<?= base_url('assets/berkas_relawan/'.$data_relawan[0]->skck); ?>" class="btn btn-sm btn-primary "> <span class="" aria-hidden="true"></span> DOWNLOAD</a></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Surat Persetujuan Wali</b></td>
              <td>:  <a href="<?= base_url('assets/berkas_relawan/'.$data_relawan[0]->surat_persetujuan_wali); ?>" class="btn btn-sm btn-primary "> <span class="" aria-hidden="true"></span> DOWNLOAD</a></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Foto KTP</b></td>
              <td>:  <a href="<?= base_url('assets/berkas_relawan/'.$data_relawan[0]->surat_keterangan_sehat); ?>" class="btn btn-sm btn-primary "> <span class="" aria-hidden="true"></span> DOWNLOAD</a></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><b>Alasan Bergabung</b></td>
              <td>: <?php echo $data_relawan[0]->alasan_bergabung ?></td>
              <td></td>
              <td></td>
              <td></td>
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