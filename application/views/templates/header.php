<html>
	<head>
		<title>Blog Book</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</head>
	<body>
	<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">  
  <div class="navbar-nav me-auto">
          <a class="navbar-brand" href="<?php echo base_url(); ?>posts/top">Blog Book</a>
        </div><br>

  <!-- Mobile Version -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <!-- PC Version -->
      <div class="collapse navbar-collapse" id="navbarColor01">
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="<?php echo base_url(); ?>posts/top">Home <span class="visually-hidden">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about">About</a></li>
             <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a></li>
             <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>tags">Tags</a></li>
          </ul>
          <ul class="nav navbar-nav" style="margin-left: auto;">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li class="nav-item"><a class="nav-link active" href="<?php echo base_url(); ?>users/register">Register</a></li>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>tags/create">Create Tag</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('tag_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('tag_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('tag_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('tag_deleted').'</p>'; ?>
      <?php endif; ?>

      <!-- Script for menu in mobile version -->
      <script>
        $(document).ready(function() {
          $('.navbar-toggler').click(function() {
            $('.navbar-collapse').toggle();
          });
        });
      </script>
