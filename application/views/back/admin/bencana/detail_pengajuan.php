<!DOCTYPE html>
<html>
    <?php $this->load->view('template_admin/head')?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php $this->load->view('template_admin/header')?>
            <?php $this->load->view('template_admin/sidebar')?>

            <div class="content-wrapper">

                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <tbody>
                                        <h3>Detail Bencana <span
                                                class="badge badge-secondary"><?=$data_bencana[0]->nama_bencana?></span>
                                        </h3>
                                    </tbody>
                                </div>
                                <table class="table table-striped">
                                    <tr>
                                        <th scope="row"></th>
                                        <td style="width: 14%"><b>Nama Bencana</b></td>
                                        <td>: <?php echo $data_bencana[0]->nama_bencana ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Kategori Bencana</b></td>
                                        <td>: <?php echo $data_bencana[0]->nama_kategori_bencana ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Gambar</b></td>
                                        <td><img src="<?=base_url('assets/images/gambar_bencana/' . $data_bencana[0]->gambar);?>"
                                                width="200" class="img-thumbnail" </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Kecamatan</b></td>
                                        <td>: <?php echo $data_bencana[0]->kecamatan ?></td>
                                    </tr>
                                    <th scope="row"></th>
                                    <td><b>Kabupaten</b></td>
                                    <td>: <?=$data_bencana[0]->kabupaten?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Provinsi</b></td>
                                        <td>: <?=$data_bencana[0]->provinsi?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Alamat</b></td>
                                        <td>: <?php echo $data_bencana[0]->alamat_lengkap ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><b>Link Berita </b></td>
                                        <td>: <a
                                                href="<?php echo $data_bencana[0]->link_berita ?>"><?php echo $data_bencana[0]->link_berita ?></a>
                                        </td>
                                    </tr>
                                    <th scope="row"></th>
                                    <td><b>Lokasi</b></td>
                                    <td>: <div id="mapid"></div>
                                    </td>
                                    </tr>
                                    <?php if ($data_bencana[0]->status_pengajuan == 0): ?>
                                    <tr>
                                        <td colspan="5">
                                            <center>
                                                <a href="<?php echo base_url() ?>admin/bencana/proses_pengajuan_bencana/tolak/<?php echo $data_bencana[0]->id_bencana; ?>"
                                                    class="btn btn-sm bt
													n-danger"> <span class=""
                                                        aria-hidden="true"></span> TOLAK</a>
                                                <a href="<?php echo base_url() ?>admin/bencana/proses_pengajuan_bencana/terima/<?php echo $data_bencana[0]->id_bencana; ?>"
                                                    class="btn btn-sm btn-success"> <span class=""
                                                        aria-hidden="true"></span> SETUJUI</a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php endif;?>

                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.18
                </div>
                <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark" style="display: none;">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript:void(0)" class="text-red pull-right"><i
                                            class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="<?=base_url('assets/back/')?>bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?=base_url('assets/back/')?>bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?=base_url('assets/back/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="<?=base_url('assets/back/')?>bower_components/raphael/raphael.min.js"></script>
        <script src="<?=base_url('assets/back/')?>bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="<?=base_url('assets/back/')?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js">
        </script>
        <!-- jvectormap -->
        <script src="<?=base_url('assets/back/')?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?=base_url('assets/back/')?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?=base_url('assets/back/')?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?=base_url('assets/back/')?>bower_components/moment/min/moment.min.js"></script>
        <script src="<?=base_url('assets/back/')?>bower_components/bootstrap-daterangepicker/daterangepicker.js">
        </script>
        <!-- datepicker -->
        <script
            src="<?=base_url('assets/back/')?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
        </script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?=base_url('assets/back/')?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="<?=base_url('assets/back/')?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?=base_url('assets/back/')?>bower_components/fastclick/lib/fastclick.js"></script>
        <!-- bootstrap time picker -->
        <script src="<?=base_url('assets/back/')?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url('assets/back/')?>dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?=base_url('assets/back/')?>dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?=base_url('assets/back/')?>dist/js/demo.js"></script>
        <!-- DataTables -->
        <script src="<?=base_url('assets/back/')?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?=base_url('assets/back/')?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
        </script>
        <!-- Sweetalert -->
        <script src="<?php echo base_url('assets/back/plugins') ?>/sweetalert/sweetalert.min.js"></script>
        <!-- Myscript alert -->
        <script src="<?php echo base_url('assets/back/plugins') ?>/sweetalert/myscriptalert.js"></script>
        <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
        </script>

        <script>
        var curLocation = [0, 0];


        var mymap = L.map('mapid').setView([-3.162455530237848, 115.18013991878534], 5);

        L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 20,
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

        </div>
    </body>

</html>