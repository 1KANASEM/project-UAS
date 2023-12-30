<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RTQ Al-Yusro
        <?= $title ?>
    </title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('template/back-end/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url('template/back-end/css/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?= base_url('template/back-end/css/dataTables/dataTables.bootstrap.css'); ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?= base_url('template/back-end/css/dataTables/dataTables.responsive.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('template/back-end/css/startmin.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('template/back-end/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <script src="<?= base_url('template/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?= base_url('template/ckeditor/samples/js/sample.js'); ?>"></script>

    <link href="<?= base_url('template/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css'); ?>"
        rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('template/front-end/images/logo.png') ?>"
        style="width: 100%; height: 100%;">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<style>
    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        z-index: 2;
        color: #fff;
        cursor: default;
        background-color: #5cb85c;
        border-color: #4cae4c;

    }

    a {
        color: #4cae4c;
        text-decoration: none;
    }

    a:focus,
    a:hover {
        color: #5cb85c;
        text-decoration: underline
    }
</style>