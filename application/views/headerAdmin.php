<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/normalize.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/template.css?v='.md5(date('YmdHis'))) ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/hover-min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-checkbox/awesome-bootstrap-checkbox.min.css') ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.sticky.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>">Administrator</a>
			</div>
			<div class="collapse navbar-collapse">
                <ul class="nav navbar-button navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url('user/signout') ?>" class="hvr-rotate" title="Lgoin">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url() ?>" class="hvr-underline-reveal">Kembali ke Map</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="margin-top: 80px;">
	    <div class="row">
			<div class="col-md-2 user-sidebar">
				<div id="sidebar-sticker">
				<div class="list-group" style="margin-top: 20px;">
					<a href="<?php echo base_url('admin') ?>" class="list-group-item">
						<i class="fa fa-home"></i> Beranda
					</a>
					<a href="<?php echo base_url('admin/addresto') ?>" class="list-group-item">
						<i class="fa fa-plus"></i> Tambah Restoran
					</a>
					<a href="<?php echo base_url('admin/resto') ?>" class="list-group-item">
						<i class="fa fa-cutlery"></i> Data Restoran
					</a>
					<a href="<?php echo base_url('admin/account') ?>" class="list-group-item">
						<i class="fa fa-wrench"></i> Pengaturan Akun
					</a>
				</div>
			</div>
			</div>
			<div class="col-md-10 user-contents">