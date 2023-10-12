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
                                        <h3>Detail Forum <span
                                                class="badge badge-secondary"><?=$pengajuan_forum[0]->nama_forum ?></span>
                                        </h3>
                                    </tbody>
                                </div>
                                <table class="table table-striped">
                                    <tr>
                                        <th scope="row"></th>
                                        <td style="width: 14%"><b>Logo Forum</b></td>
                                        <td><img src="<?= base_url('assets/images/logo_forum/'.$pengajuan_forum[0]->logo); ?>"
                                                width="200" class="img-thumbnail" </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Nama Forum</b></td>
                                        <td>: <?= $pengajuan_forum[0]->nama_forum ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Tanggal Berdiri</b></td>
                                        <td>: <?= tgl_indo($pengajuan_forum[0]->tanggal_berdiri) ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Lokasi</b></td>
                                        <td>: <?= $pengajuan_forum[0]->lokasi ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Provinsi</b></td>
                                        <td>: <?= $pengajuan_forum[0]->provinsi ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Kabupaten</b></td>
                                        <td>: <?php echo $pengajuan_forum[0]->kabupaten ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Kecamatan</b></td>
                                        <td>: <?php echo $pengajuan_forum[0]->kecamatan ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Website</b></td>
                                        <td>: <?php echo $pengajuan_forum[0]->website ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Kode Pos</b></td>
                                        <td>: <?php echo $pengajuan_forum[0]->kode_pos ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Nama Penanggung Jawab</b></td>
                                        <td>: <?php echo $pengajuan_forum[0]->nama_lengkap ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Email</b></td>
                                        <td>: <?php echo $pengajuan_forum[0]->email ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Nomor Handphone</b></td>
                                        <td>: <?php echo $pengajuan_forum[0]->nomor_handphone ?></td>
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
