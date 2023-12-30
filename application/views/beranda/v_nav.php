<!-- Header Content -->
<div class="header_container">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_content d-flex flex-row align-items-center justify-content-start">

					<div class="logo_container col-lg-4">
						<a href="#"><a href="<?= base_url('home') ?>">
								<div class="logo_text">
									<img src="<?= base_url('template/front-end/images/logo.png') ?>"
										style="width: 25%; height: auto;">
									<?= $setting->nama_rtq ?>
								</div>
							</a>
						</a>
					</div>

					<nav class="main_nav_contaner ml-auto col-lg-8">
						<ul class="main_nav">
							<li class=""><a href="<?= base_url('home') ?>">Beranda</a></li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Tentang
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?= base_url('home/profil') ?>">Profile RTQ</a>
									<a class="dropdown-item" href="<?= base_url('home/guru') ?>">Daftar Guru</a>
								</div>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Gallery
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item"
										href="<?= base_url('home/gallery_fasilitas') ?>">Fasilitas</a>
									<a class="dropdown-item"
										href="<?= base_url('home/gallery_kegiatan') ?>">Kegiatan</a>
								</div>
							</li>
							<li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
							<li><a href="<?= base_url('home/about') ?>">Kontak Kami</a></li>
						</ul>

						<div class="hamburger menu_mm">
							<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
						</div>
						
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Header Search Panel -->
<div class="header_search_container">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
					<form action="#" class="header_search_form">
						<input type="search" class="search_input" placeholder="Search" required="required">
						<button
							class="header_search_button d-flex flex-column align-items-center justify-content-center">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
	<div class="menu_close_container">
		<div class="menu_close">
			<div></div>
			<div></div>
		</div>
	</div>
	<nav class="menu_nav">
		<ul class="menu_mm">
			<li class="menu_mm"><a href="<?= base_url('home') ?>">Beranda</a></li>
			<li class="menu_mm"><a href="<?= base_url('home/profil') ?>">Profil RTQ</a></li>
			<li class="menu_mm"><a href="<?= base_url('home/guru') ?>">Guru</a></li>
			<li class="menu_mm"><a href="<?= base_url('home/gallery_kegiatan') ?>">Gallery Kegiatan</a></li>
			<li class="menu_mm"><a href="<?= base_url('home/gallery_fasilitas') ?>">Gallery Fasilitas</a></li>
			<li class="menu_mm"><a href="<?= base_url('home/berita') ?>">Berita</a></li>
			<li class="menu_mm"><a href="<?= base_url('home/about') ?>">Kontak Kami</a></li>
		</ul>
	</nav>
</div>