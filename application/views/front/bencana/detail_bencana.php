<?php $this->load->view('template/head')?>

<?php $this->load->view('template/header.php')?>



<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">


        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-stretch">



                    <div class="gambar">
                        <img width="700"
                            src="<?=base_url('assets/images/gambar_bencana/' . $data_bencana[0]->gambar);?>" alt="">
                    </div>



                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>Bencana <strong><?=$data_bencana[0]->nama_bencana?></strong></h3>
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
                                            <td>Nama Bencana</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?=$data_bencana[0]->nama_bencana?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori Bencana</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?=$data_bencana[0]->nama_kategori_bencana?></td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?=$data_bencana[0]->provinsi?></td>
                                        </tr>
                                        <tr>
                                            <td>Kabupaten</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?=$data_bencana[0]->kabupaten?></td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?=$data_bencana[0]->kecamatan?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Lengkap</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?=$data_bencana[0]->alamat_lengkap?></td>
                                        </tr>
                                        <tr>
                                            <td>Link Berita</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?=$data_bencana[0]->link_berita?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Relawan Yang Dibutuhkan</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><b><?=$data_bencana[0]->jml_relawan?></b> Relawan</td>
                                        </tr>
                                        <tr>
                                            <td>Sisa Tempat Kosong</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><b><?=$data_bencana[0]->jml_relawan - $sudah_join?></b> Relawan</td>
                                        </tr>


                                        <tr>
                                            <div id="mapid"></div>
                                        </tr>


                                    </table>

                                </div>

                                <?php if($sudah_join == $data_bencana[0]->jml_relawan): ?>


                                <a class="btn btn-outline-warning text-warning">SUDAH PENUH</a>

                                <?php else: ?>
                                <div class="form-group mt-5">
                                    <label for="exampleFormControlInput1">Gabung Forum Relawan</label>
                                    <select class="custom-select" id="forums">
                                        <option selected>Pilih forum...</option>
                                        <?php foreach ($forums as $f): ?>


                                        <option
                                            value="<?=site_url()?>forum_relawan/detail_forum?id_forum=<?php echo $f->id_forum; ?>">
                                            <?=$f->nama_forum?>
                                        </option>



                                        <?php endforeach?>
                                    </select>
                                </div>





                                <?php endif; ?>


                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php $this->load->view('template/footer.php')?>

<script>
var curLocation = [0, 0];


var mymap = L.map('mapid').setView([-3.162455530237848, 115.18013991878534], 5);

L.tileLayer(
    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        id: 'mapbox/streets-v10',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
    }).addTo(mymap);


L.circle([<?=$data_bencana[0]->latitude?>, <?=$data_bencana[0]->longitude?>], {
    color: '<?=$data_bencana[0]->warna?>',
    fillColor: '<?=$data_bencana[0]->warna?>',
    fillOpacity: 0.5
}).bindPopup(
    "<b><?=$data_bencana[0]->nama_bencana?></b><br><?=$data_bencana[0]->provinsi . ', KABUPATEN ' . $data_bencana[0]->kabupaten . ', KECAMATAN ' . $data_bencana[0]->kecamatan?>"
).addTo(mymap);

mymap.attributionControl.setPrefix(false);
</script>

<script>
$('#forums').change(function() {
    // alert($(this).val());

    var to_where = $(this).val();

    window.location.href = to_where;
})
</script>
