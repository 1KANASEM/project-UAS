<!--home-->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li>Guru</li>
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
                    <h2>Guru Sekolah</h2>
                    <hr><br>
                </div>
                <hr>

                <?php foreach ($guru as $key => $value) { ?>
                    <!-- Team Item -->
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image">
                                <img src="<?= base_url('foto_guru/' . $value->foto) ?> "
                                    style="width: 100%; height: 100%; margin: auto;">
                            </div>
                            <div class="team_body">
                                <div class="team_title"><a href="#">
                                        <?= $value->nama ?>
                                    </a></div>
                                <div class="team_subtitle">
                                    <?= $value->tempat_lahir ?>
                                    <?= $value->tanggal_lahir ?>
                                </div>
                                <div class="team_subtitle">
                                    <?= $value->bagian ?>
                                </div>
                                <div class="social_list">

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <hr>
        </div>
    </div>
</div>

<div class="home">
</div>