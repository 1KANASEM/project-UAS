<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
                            <li>Detail Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog -->

<div class="blog">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->
            <div class="col-lg-8">
                <?php foreach ($detail_berita as $key => $value) { ?>
                    <div class="blog_content">
                        <div class="blog_title">
                            <?= $value->judul ?>
                        </div>
                        <div class="blog_meta">
                            <ul>
                                <li>Post on <a href="#">
                                        <?= $value->tgl_berita ?>
                                    </a></li>
                                <li>By <a href="#">admin</a></li>
                            </ul>
                        </div>
                        <div class="blog_image"><img src="<?= base_url('foto_berita/' . $value->gambar) ?>" width="100%"
                                height="350px"></div>
                        <p>
                            <?= $value->isi ?>
                        </p>
                    </div>
                <?php } ?>
            </div>

            <!-- Blog Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Latest News -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Latest News</div>
                        <div class="sidebar_latest">
                            <?php foreach (array_slice($berita, 0, 5) as $value) { ?>
                                <!-- Latest Course -->
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_image">
                                        <div><img src="<?= base_url('foto_berita/') . $value->gambar ?>" alt=""></div>
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a
                                                href="<?= base_url('home/detail_berita/' . $value->id) ?>">
                                                <?= $value->judul ?>
                                            </a></div>
                                        <div class="latest_date">
                                            <?= $value->tgl_berita ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <hr><br><br><br>

    
</div>