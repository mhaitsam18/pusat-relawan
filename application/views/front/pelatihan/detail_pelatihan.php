<?php $this->load->view('template/head')?>

<?php $this->load->view('template/header.php')?>



<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">


        <div class="container-fluid" data-aos="fade-up">
            <?php if ($this->session->flashdata('msg')) {echo $this->session->flashdata('msg');}?>
            <div class="row">

                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>Pelatihan <strong><?=$data_pelatihan[0]->nama_pelatihan?></strong></h3>
                        <!-- <p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
					</p> -->
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>DATA
                                        BENCANA</span> <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                                    <table>
                                        <tr>
                                            <td>Nama Pelatihan</td>
                                            <td>:</td>
                                            <td><?=$data_pelatihan[0]->nama_pelatihan?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td>:</td>
                                            <td><?=$data_pelatihan[0]->nama_kategori_pelatihan?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis</td>
                                            <td>:</td>
                                            <td><?=$data_pelatihan[0]->nama_jenis_pelatihan?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>:</td>
                                            <td><?=tgl_indo($data_pelatihan[0]->tanggal_pelatihan)?></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>:</td>
                                            <td><?=$data_pelatihan[0]->tanggal_pelatihan?></td>
                                        </tr>
                                        <tr>
                                            <td>Waktu</td>
                                            <td>:</td>
                                            <td><?=$data_pelatihan[0]->waktu?></td>
                                        </tr>
                                        <tr>
                                            <td>Kuota</td>
                                            <td>:</td>
                                            <td><?=$data_pelatihan[0]->kuota?> Relawan</td>
                                        </tr>
                                    </table>
                                </div>
                            </li>

                        </ul>
                        <?php
if ($this->session->userdata('login_relawan') == false) {?>
                        <a class="btn btn-outline-primary" href="#" role="button">SILAHKAN LOGIN UNTUK BERGABUNG</a>
                        <?php } else {?>
                        <?php if ((is_null($tergabung) || $tergabung['status_pengajuan_pelatihan'] == 2)): ?>

                        <a class="btn btn-outline-primary" href="#" role="button" data-toggle="modal"
                            data-target="#exampleModal">GABUNG SEKARANG</a>
                        <?php elseif ($tergabung['status_pengajuan_pelatihan'] == 0): ?>
                        <a class="btn btn-outline-warning text-warning">DALAM PROSES PENGAJUAN</a>

                        <?php else: ?>
                        <a class="btn btn-outline-success text-success">ANDA SUDAH BERGABUNG</a>
                        <?php endif?>

                        <?php }?>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->


</main><!-- End #main -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo site_url('pelatihan/input_pengajuan_pelatihan') ?>">
                    <div class="form-group">
                        <?php

$id_pelatihan = $_GET['id_pelatihan'];

?>
                        <input type="hidden" class="form-control" name="id_pelatihan" value="<?=$id_pelatihan?>">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Alasan Bergabung Pada Pelatihan ini:</label>
                        <textarea name="alasan_bergabung" class="form-control" id="message-text"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="submit" class="btn btn-primary">KIRIM</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- ======= Footer ======= -->
<?php $this->load->view('template/footer.php')?>