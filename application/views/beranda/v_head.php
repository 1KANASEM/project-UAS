<!DOCTYPE html>
<html lang="en">

<head>
	<title>RTQ Al-Yusro
		<?= $title ?>
	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('template/front-end/styles/bootstrap4/bootstrap.min.css') ?>">
	<link href="<?= base_url('template/front-end/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css') ?>">
	<link href="<?= base_url('template/front-end/plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>"
		rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('template/front-end/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?>">
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('template/front-end/plugins/OwlCarousel2-2.2.1/animate.css') ?>">
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('template/front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('template/front-end/styles/main_styles.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('template/front-end/styles/responsive.css') ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('template/front-end/images/logo.png') ?>"
		style="width: 100%; height: 100%;">
</head>

<style>

.section_subtitle p {
		color: black;
		font-size: 16px;
		line-height: 1.5;
	}

	em {
		color: white;
	}

	.top_bar {
		width: 100%;
		background: #2D5D2D;
	}

	.footer_logo_text {
		color: #FFE77B;

	}

	.logo_text span {
		color: #2D5D2D;
	}

	.main_nav_contaner {

		.main_nav li a {
			font-size: 18px;
			font-weight: 500;
			color: #2D5D2D;
			-webkit-transition: all 200ms ease;
			-moz-transition: all 200ms ease;
			-ms-transition: all 200ms ease;
			-o-transition: all 200ms ease;
			transition: all 200ms ease;
		}

		.main_nav li a:hover,
		.main_nav li.active a {
			color: #FFE77B;
		}

		.main_nav li.active::after {
			display: block;
			position: absolute;
			bottom: -2px;
			left: 0;
			width: 100%;
			height: 2px;
			background: #2D5D2D;
			content: '';
		}

	}
</style>