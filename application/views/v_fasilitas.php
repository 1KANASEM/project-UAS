<!--home-->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li><a href="<?= base_url('home/gallery_fasilitas') ?>">Gallery Fasilitas</a></li>
                            <li>Detail Gallery Fasilitas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <div class="contact_info_container">
        <div class="container"><br><br>
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php foreach ($detail_fasilitas as $key => $value) { ?>
                        <h2>
                            <?= $value->nama ?>
                        </h2>
                    <?php } ?>
                    <hr><br>
                </div>
                <hr>

                <?php foreach ($fasilitas as $key => $value) { ?>
                    <!-- Team Item -->
                    <div class="col-lg-4 about_col about_col_left">
                        <div class="about_item">
                            <div class="about_item_image"><img src="<?= base_url('foto_kegiatan/' . $value->foto) ?>" width="400px" height="300px">
                            </div>

                            <div class="about_item_title"><a href="">
                                    <?= $value->keterangan ?>
                                </a></div>
                            <div class="social_list">

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>


        </div>
        <hr>
    </div>
</div>

<div class="home">
</div>