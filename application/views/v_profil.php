<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li>Profile RTQ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background parallax-window" style="background-color: #2B5E2D;" data-parallax="scroll"
        data-image-src="<?= base_url('template/front-end/') ?>images/newsletter.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Blog Content -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Home Slider Nav -->


<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row features_row">

            <div class="col-lg-3 mt-5">

                <div class="course_image mt-5">
                    <img src="<?= base_url('foto_pimpinan/' . $setting->foto_pimpinan) ?> "
                        style="width: 100%; height: 300px; border-radius: 5%;">
                </div>
                <div style="text-align: center;"><br>
                    <h3>
                        <?= $setting->pimpinan ?>
                    </h3>
                </div>
            </div>
            <div class="col-lg-8 ml-5">
                <br>
                <div class="blog_content" style="text-align: justify;">
                    <div class="blog_title" style="text-align: center">
                        BERAWAL DARI SAUNG MENJADI GEDUNG
                    </div>
                    <p>
                        <?= $setting->sejarah ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Popular Courses -->



<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll"
        style="background-image: url('<?= base_url('template/front-end/images/rtq1.jpg') ?>') ;background-size: cover; background-position: center; filter: brightness(30%); width: 100%; height: 100%;">
    </div>
    <div class="container">
        <?php
        $setting = $this->m_setting->detail();

        ?>


        <div class="row courses_row">


            <!-- Course -->
            <div class="col-lg-6 course_col ">
                <div class="course section_title_container text-center" style=" background-color: #2B5E2D" ;>
                    <div class="col-lg-12">

                        <div class="blog_content"><br><br>
                            <div class="blog_title" style="color: #FFE77B; font-size: 28px;">
                                VISI
                            </div>
                            <div class="mt-5 mb-2">
                            <p style="color: #ffffff;">
                                <?= $setting->visi ?>
                            </p></div><br><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section_title_container text-center"><br><br>
                    <h2 class="section_title" style="color: #FFE77B; font-size: 28px;">MISI
                    </h2>
                </div>
                <div class="section_subtitle float-right mr-5">
                    <p style="color: #ffffff; text-left">
                        <?= $setting->misi ?><br><br>
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>


<div class="container">
    <div class="row features_row">

        <div class="col-lg-12">

            <div class="blog_content">
                <div class="blog_title mb-3 ml-3">
                    Tujuan Pendidikan
                </div>

                <div class="col-lg-9"
                    style="background-color: #2B5E2D; width: 100%; height: 70%; padding: 40px; position: relative; border-radius: 30px; ">
                    <div class="contact_info">
                        <div class="contact_info_location">
                            <div class="contact_info_text">
                                <?= $setting->tujuan ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><br><br><br>
</div>


<div class="col-lg-12" style="height: 775px;"><br><br><br><br><br>

    <div class="section_background parallax-window" data-parallax="scroll"
        style="background-image: url('<?= base_url('template/front-end/images/tq.jpg') ?>') ;background-size: cover; background-position: center; filter: brightness(30%); width: 100%; height: 100%;">
    </div>

    <div class="col-lg-4 float-right mr-5 mt-5"
        style="background-color: #bcbcbc; width: 30%; height: 35%; padding: 40px; position: relative; border-radius: 30px; ">
        <div class="contact_info">
            <div class="contact_info_location_title" style="color: #2B5E2D; font-size: 20px;">
            Program <?= $setting->nama_rtq ?>
            </div>
            <div class="contact_info_location">
                <div class="contact_info_text ">
                    <p>
                        <?= $setting->program ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 ml-5"
        style="background-color: #2B5E2D; width: 45%; height: 80%; padding: 40px; position: relative; border-radius: 30px; ">
        <div class="contact_info ml-5">
            <div class="contact_info_location_title" style="color: #FFE77B; font-size: 20px;">10 Karakter Santri <?= $setting->nama_rtq ?></div>
            <div class="contact_info_location">
                <div class="contact_info_text">
                    <p>
                        <?= $setting->muasofat ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<hr>

<div class="container">
    <div class="row features_row">
        <div class="col-lg-12">
            <div class="blog_content text-center">
                <div class="blog_title text-center">
                    -- Motto --
                </div>
                <p style="color: #808080; font-size: 15px;">
                    "
                    <?= $setting->motto ?> "
                </p>
            </div>
        </div>
    </div><br><br>
    <hr>
</div>


<div class="newsletter">
    <div class="newsletter_background parallax-window" style="background-color: #2B5E2D;" data-parallax="scroll"
        data-image-src="<?= base_url('template/front-end/') ?>images/newsletter.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->