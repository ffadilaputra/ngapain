<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Boooo</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/semantic/semantic.min.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/datatable/dataTables.semanticui.min.css') ?>">
	</head>
	<body>
		<div class="ui menu">
			<div class="ui container">
				<div class="header item">Terjelembab</div>
				<a href="<?= base_url() ?>" class="active item">Home</a>
				<a class="item">Search</a>
				<div class="right menu">
					<div class="item">
						<a href="<?= base_url('auth') ?>" class="ui button">Log-in</a>
					</div>
				</div>
			</div>
		</div>