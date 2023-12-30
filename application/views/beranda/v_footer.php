<footer class="footer">
	<div class="footer_background"
	style="background-image: url('<?= base_url('template/front-end/images/rtq.jpg') ?>') ;background-size: cover; background-position: center; filter: brightness(30%); width: 100%; height: 100%;"></div>
	<div class="container">
		<div class="row footer_row">
			<div class="col">
				<div class="footer_content">
					<div class="row">

						<div class="col-lg-3 footer_col">

							<!-- Footer About -->
							<div class="footer_section footer_about">

								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Alamat: <?= $setting->alamat ?></li>
											<li>Telpon: <?= $setting->no_hp ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-1 footer_col">

						</div>
						<div class="col-lg-5 footer_col">
							<div class="footer_logo_container">
								<a href="#">
									<div class="footer_logo_text"><?= $setting->nama_rtq ?></div>
								</a>
							</div>
						</div>


						<div class="col-lg-3 footer_col clearfix">

							<!-- Footer links -->
							<div class="footer_section footer_mobile">
								<div class="footer_title">Salurkan Donasi</div>
								<div class="footer_mobile_content">

										<ul>
											<li class="col-lg-8">Bank Syariah Indonesia 
											Rek. 231-123-311
											An, <?= $setting->nama_rtq ?>
											</li>
											<br>
											<li class="col-lg-8">Bank Muamalat
											Rek. 231-123-444
											An, <?= $setting->nama_rtq ?></li>
										</ul>

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
			</div>
		</div>

		<div class="row copyright_row">
			<div class="col">
				<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
					<div class="cr_text">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> <?= $setting->nama_rtq ?>
					</div>
					<div class="ml-lg-auto cr_links">
						<ul class="cr_list">
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<script src="<?= base_url('template/front-end/js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?= base_url('template/front-end/styles/bootstrap4/popper.js') ?>"></script>
<script src="<?= base_url('template/front-end/styles/bootstrap4/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/easing/easing.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/parallax-js-master/parallax.min.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/colorbox/jquery.colorbox-min.js')?>"></script>
<script src="<?= base_url('template/front-end/js/courses.js')?>"></script>


<script src="<?= base_url('template/front-end/plugins/greensock/TweenMax.min.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/greensock/TimelineMax.min.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/scrollmagic/ScrollMagic.min.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/greensock/animation.gsap.min.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/greensock/ScrollToPlugin.min.js') ?>"></script>
<script src="<?= base_url('template/front-end/js/custom.js') ?>"></script>
<script src="<?= base_url('template/front-end/plugins/greensock/TimelineMax.min.js')?>"></script>
<script src="<?= base_url('template/front-end/plugins/greensock/TweenMax.min.js')?>"></script>
<script src="<?= base_url('template/front-end/plugins/scrollmagic/ScrollMagic.min.js')?>"></script>
<script src="<?= base_url('template/front-end/plugins/greensock/animation.gsap.min.js')?>"></script>
<script src="<?= base_url('template/front-end/plugins/greensock/ScrollToPlugin.min.js')?>"></script>
<script src="<?= base_url('template/front-end/js/custom.js')?>"></script>
<script src="<?= base_url('template/front-end/js/blog_single.js')?>"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?=base_url('template/front-end/plugins/marker_with_label/marker_with_label.js')?>"></script>
<script src="<?=base_url('template/front-end/js/contact.js')?>"></script>

</body>

</html>