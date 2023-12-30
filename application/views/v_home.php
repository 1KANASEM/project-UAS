<!-- Home -->
<?php
$setting = $this->m_setting->detail();

?>
<div class="home">
	<div class="home_slider_container">
		<div class="owl-carousel owl-theme home_slider">

			<?php foreach (array_slice($berita, 0, 5) as $value) { ?>
				<div class="owl-item">
					<div class="home_slider_background"
						style="background-image:url(<?= base_url('foto_berita/') . $value->gambar ?>);  background-size:90% 600px;">

						<div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_form_container" style="position: relative;">
											<form action="#" id="home_search_form_1"
												class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
												<div class="home_slider_content"
													style="position: absolute; bottom: 0; left: 500px; width: calc(80% - 20px); padding: 20px; background-color: #2B5E2D; text-align: left;">
													<div class="home_slider_title" style="font-size: 35px; width: 100%;">
														<a href="<?= base_url('home/detail_berita/' . $value->id) ?>"
															style="color: #2B5E2D; text-decoration: none;">
															<?= substr(strip_tags($value->judul), 0, 30) ?>..
														</a>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			<?php } ?>

		</div>
		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>
</div>

</div>


<!-- Newsletter -->

<div class="newsletter">
	<div class="newsletter_background parallax-window" style="background-color: #2B5E2D;"
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




<!-- Home Slider Nav -->


<!-- Features -->

<div class="features">
	<div class="container">
		<div class="row features_row">

			<!-- Features Item -->
			<div class="col-lg-3 feature_col">
				<div class="feature text-center trans_400">
					<div class="feature_icon"><a href="<?= base_url('home/berita') ?>"><img
								src="<?= base_url() ?>template/front-end/images/pengumuman.png" alt
								style="width:70px; height:70px;" alt="<?= base_url('berita') ?>"></a>
					</div>
					<h3 class="feature_title">Berita</h3>
					<div class="feature_text">
						<p>Lihat Berita Terbaru Tentang
							<?= $setting->nama_rtq ?>
						</p>
					</div>
				</div>
			</div>

			<!-- Features Item -->
			<div class="col-lg-3 feature_col">
				<div class="feature text-center trans_400">
					<div class="feature_icon"><a href="<?= base_url('home/about') ?>"><img
								src="<?= base_url() ?>template/front-end/images/lokasii.png"
								style="width:140px; height:70px;"></a>
					</div>
					<h3 class="feature_title">Lokasi</h3>
					<div class="feature_text">
						<p>Lihat Lokasi
							<?= $setting->nama_rtq ?>
						</p>
					</div>
				</div>
			</div>

			<!-- Features Item -->
			<div class="col-lg-3 feature_col">
				<div class="feature text-center trans_400">
					<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/donasii.png"
							style="width:70px; height:70px;">
					</div>
					<h3 class="feature_title">Donasi</h3>
					<div class="feature_text">
						<p>Dapat Disalurkan Ke Rek. 22-212-111-9 An,
							<?= $setting->nama_rtq ?>
						</p>
					</div>
				</div>
			</div>

			<!-- Features Item -->
			<div class="col-lg-3 feature_col">
				<div class="feature text-center trans_400">
					<div class="feature_icon"><a href="https://wa.me/6285218669128/?text="><img
								src="<?= base_url() ?>template/front-end/images/telpon.png"
								style="width:70px; height:70px;"></a>
					</div>
					<h3 class="feature_title">Informasi Lebih Lanjut</h3>
					<div class="feature_text">
						<p>Hubungi +6285218669128 untuk Mendapat Informasi Lebih Lanjut</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Popular Courses -->



<div class="courses">
	<div class="section_background parallax-window" data-parallax="scroll" style="background-color: #2B5E2D;"></div>
	<div class="container">
		<?php
		$setting = $this->m_setting->detail();

		?>


		<div class="row courses_row">


			<!-- Course -->
			<div class="col-lg-6 course_col">
				<div class="course" style="width: 90%; height: 300px; filter: brightness(70%); border-radius: 5%;">
					<div class="course_image mt-3"><img src="<?= base_url() ?>template/front-end/images/saung.jpg"
							style="width: 100%; height: 300px; border-radius: 5%;" >
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="section_title_container text-center">
					<h2 class="section_title" style="color: #FFE77B; font-size: 28px;">BERAWAL DARI SAUNG MENJADI GEDUNG
					</h2>
				</div>
				<div class="section_subtitle text-center ">
					<p style="color: #ffffff;">
					<?= substr(strip_tags($setting->sejarah),0,555) ?>
					</p>
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
					<h2>Kegiatan
						<?= $setting->nama_rtq ?>
					</h2>
					<hr><br>
				</div>
				<hr>


				<?php foreach (array_slice($gallery_kegiatan, 0, 4) as $value) { ?>
					<!-- Team Item -->
					<div class="col-lg-3 col-md-6 team_col">
						<div class="team_item">
							<div class="team_image"><img src="<?= base_url('sampul_kegiatan/' . $value->sampul) ?> "
									style="width: 100%; height: 100%; margin: auto;"></div>
							<div class="team_body">
								<div class="team_title"><a href="<?= base_url('home/kegiatan/' . $value->id_gallery) ?>">
										<?= $value->nama ?>
									</a></div>
								<div class="social_list">

								</div>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
			<hr><br><br>
		</div>
	</div>
</div>


<div class="newsletter">
	<div class="newsletter_background parallax-window" style="background-color: #2B5E2D;"
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