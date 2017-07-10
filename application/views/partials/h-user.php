<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	if ($this->session->userdata('logged_in')) {
    	$session_data = $this->session->userdata('logged_in');
    	$data['id'] = $session_data['id'];
    }
?>
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
				<a href="<?= base_url('story/ajax_search') ?>" class="item">Search</a>
				<a href="<?= base_url('story/storybyUser') ?>/<?= $session_data['id'] ?>" class="item">Your Story</a>
				<div class="right menu">
					<div class="item">
						<a href="<?= base_url('story/make') ?>" class="ui button teal">Make a Story</a>&nbsp;
						<a href="<?= base_url('user/profil') ?>" class="ui button teal">Edit Profil</a>&nbsp;
						<a href="<?= base_url('auth/logout') ?>" class="ui button">Logout</a>
					</div>
				</div>
			</div>
		</div>