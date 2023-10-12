<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=base_url('assets/back/')?>dist/img/admin_logo.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata("nama_lengkap") ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> </p>
                    <?php echo $this->session->userdata("nama_forum") ?>
                    <?php echo $this->session->userdata("nama_lemgkap") ?>
                </a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php if (isset($_SESSION['login_admin']) == true) {?>
            <li class="active treeview">
            <li><a href="<?=base_url('admin/dashboard')?>"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>KELOLA DATA</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url('admin/relawan/list_relawan')?>"><i class="fa fa-circle-o"></i> Relawan</a>
                    </li>
                    <li><a href="<?=base_url('admin/forum_relawan/list_forum')?>"><i class="fa fa-circle-o"></i> Forum
                            Relawan</a></li>
                    <li><a href="<?=base_url('admin/admin/list_admin')?>"><i class="fa fa-circle-o"></i> Admin</a></li>
                    <li><a href="<?=base_url('admin/pelatihan/list_pelatihan')?>"><i class="fa fa-circle-o"></i>
                            Pelatihan</a></li>
                    <li><a href="<?=base_url('admin/bencana/list_bencana')?>"><i class="fa fa-circle-o"></i>
                            Benacana</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>DATA PENGAJUAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url('admin/forum_relawan/list_pengajuan_forum')?>"><i
                                class="fa fa-circle-o"></i> PENGAJUAN FORUM</a></li>
                    <li><a href="<?=base_url('admin/relawan/list_pengajuan_relawan')?>"><i class="fa fa-circle-o"></i>
                            PENGAJUAN RELAWAN</a></li>
                    <li><a href="<?=base_url('admin/pelatihan/list_pengajuan_pelatihan')?>"><i
                                class="fa fa-circle-o"></i> PENGAJUAN PELATIHAN</a></li>
                    <li><a href="<?=base_url('admin/bencana/list_pengajuan_bencana')?>"><i class="fa fa-circle-o"></i>
                            PENGAJUAN BENCANA</a></li>
                </ul>
            </li>
            <?php } elseif (isset($_SESSION['login_forum']) == true) {?>
            <li class="active treeview">
            <li><a href="<?=base_url('forum/dashboard')?>"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
            </li>
            <li class="active treeview">
            <li><a href="<?=base_url('forum/bencana')?>"><i class="fa fa-book"></i> <span>DATA BENCANA</span></a></li>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>PELATIHAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url('forum/pelatihan  ')?>"><i class="fa fa-circle-o"></i> DATA PELATIHAN</a>
                    </li>
                    <li><a href="<?=base_url('forum/pelatihan/list_kategori_pelatihan')?>"><i
                                class="fa fa-circle-o"></i> DATA KATEGORI PELATIHAN</a></li>
                </ul>
            </li>
            <li class="active treeview">
            <li><a href="<?=base_url('forum/relawan')?>"><i class="fa fa-book"></i> <span>DATA FORUM RELAWAN</span></a>
            </li>
            </li>
            <li class="active treeview">
            <li><a href="<?=base_url('forum/pelatihan/forum_pelatihan')?>"><i class="fa fa-book"></i> <span>DATA
                        PELATIHAN
                        RELAWAN</span></a></li>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>DATA PENGAJUAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url('forum/relawan/list_pengajuan_relawan')?>"><i class="fa fa-circle-o"></i>
                            PENGAJUAN RELAWAN</a></li>
                    <li><a href="<?=base_url('forum/pelatihan/list_pengajuan_pelatihan')?>"><i
                                class="fa fa-circle-o"></i> PENGAJUAN PELATIHAN</a></li>
                </ul>
            </li>
            <?php }?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>