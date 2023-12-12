<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?= base_url('admin') ?>"><i class="fa fa-user"></i> Admin</a>
            </li>
            <li>
                <a href="<?= base_url('guru') ?>"><i class="fa fa-users"></i> Guru</a>
            </li>
            <li>
                <a href="<?= base_url('bagian') ?>"><i class="fa fa-users"></i> Departemen</a>
            </li>
            <li>
                <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o"></i> Berita</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-picture-o"></i> Gallery<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('kegiatan') ?>"></i> Kegiatan</a>
                        <a href="<?= base_url('fasilitas') ?>"></i> Fasilitas</a>

                    </li>
            </li>
        </ul>
        <!-- /.nav-second-level -->
        </li>

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
<div id="page-wrapper">
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