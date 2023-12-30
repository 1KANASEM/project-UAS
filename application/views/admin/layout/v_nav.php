


<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">

                <img src="<?= base_url('template/front-end/images/logo.png') ?>" style="width: 100%; height: auto;">
            </li>

            <?php 
            $admin = $this->session->userdata('level'); 

            if ($admin == 1) { ?>

                <li>
                    <a href="<?= base_url('admin') ?>"><i class="fa fa-user"></i> Admin</a>
                </li>
                <li>
                    <a href="<?= base_url('guru') ?>"><i class="fa fa-users"></i> Guru</a>
                </li>
                <li>
                    <a href="<?= base_url('bagian') ?>"><i class="fa fa-university"></i> Departemen</a>
                </li>
                <li>
                    <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o"></i> Berita</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> Gallery<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('kegiatan') ?> " class="fa fa-picture-o"></i> Kegiatan</a>
                            <a href="<?= base_url('fasilitas') ?>" class="fa fa-picture-o"></i> Fasilitas</a>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url('setting') ?>"><i class="fa fa-cog"></i> Setting</a>
                </li>

            <?php } else { ?>

                <li>
                    <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o"></i> Berita</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> Gallery<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('kegiatan') ?> " class="fa fa-picture-o"></i> Kegiatan</a>
                            <a href="<?= base_url('fasilitas') ?>" class="fa fa-picture-o"></i> Fasilitas</a>
                        </li>
                    </ul>
                </li>

            <?php }
            ?>
        </ul>

        <!-- /.nav-second-level -->
        </li>
        <br>
        <li>
            <a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper" class="col-lg-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?= $title2 ?>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->