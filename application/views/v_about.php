<!-- Home -->
<?php
$setting = $this->m_setting->detail();

?>
<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li>Kontak Kami</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->

<div class="contact">

    <!-- Contact Map -->

    <div class="col">

        <!-- Google Map -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.650869105719!2d101.42815194729039!3d0.5249364981073498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab6bbb930ac3%3A0xf98043ac3549b8ef!2sRTQ%20AL%20YUSRA%20(%20Rumah%20Tahfidz%20Quran)!5e0!3m2!1sen!2sid!4v1702748784784!5m2!1sen!2sid"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

    <!-- Contact Info -->

    <div class="contact_info_container">
        <div class="container">
            <div class="row">

                <!-- Contact Info -->
                <div class="col-lg-6"
                    style="background-color: #bcbcbc; width: 80%; height: 60%; padding: 40px; position: relative;border-radius: 30px;">

                    <div class="contact_info">
                        <div class="contact_info_title" style="color: #000000; font-size: 20px;">Contact Info</div>

                        <br>
                        <div class="contact_info_location_title" style="color: #000000; font-size: 18px;">Alamat</div>
                        <div class="contact_info_location">
                            <div class="contact_info_text">
                                <p style="color: #000000; font-size: 15px;">
                                    <?= $setting->alamat ?>
                                </p>
                            </div>
                        </div>
                        <div class="contact_info_location">
                            <div class="contact_info_location_title" style="color: #000000; font-size: 18px;">N0 HP/Telp
                            </div>
                            <ul class="location_list">
                                <li style="color: #000000; font-size: 15px;">
                                    <?= $setting->no_hp ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <div class="contact_info col-lg-7">
                            <br><br>
                            <div class="contact_info_location_title col-lg-12" style="color: #000000; font-size: 18px;">
                                Sosial Media</div>
                            <!-- Footer links -->
                            <div class="footer_section footer_mobile">
                                <div class="footer_mobile_content">
                                    <div class="footer_social">
                                        <ul>
                                            <li><a
                                                    href="https://www.facebook.com/people/RTQ-Al-yusra-Pekanbaru/100063560473040/"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="https://wa.me/6285218669128/?text="><i class="fa fa-whatsapp"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li><a
                                                    href="https://www.instagram.com/rtq_alyusra_pekanbaru/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><i
                                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.youtube.com/@rtqalyusrapekanbaru4110"><i
                                                        class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact_info"
                        style="background-color: #2B5E2D; width: 80%; height: 60%; padding: 40px; position: relative;border-radius: 30px;">
                        <div class="arrow-up"></div>

                        <!-- Your content -->
                        <div class="contact_info_location" style="position: relative; z-index: 1;">
                            <div class="contact_info_location_title" style="color: #FFE77B; font-size: 20px;">Donasi
                            </div>
                            <ul class="location_list">
                                <li class="col-lg-8" style="color: #ffffff; font-size: 15px;">Bank Syariah Indonesia
                                    Rek. 231-123-311 An,
                                    <?= $setting->nama_rtq ?>
                                </li>
                                <br>
                                <li class="col-lg-8" style="color: #ffffff; font-size: 15px;">Bank Muamalat Rek.
                                    231-123-444 An,
                                    <?= $setting->nama_rtq ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div><br><br>
<hr><br><br>