<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png">

    <title><?php echo $judul?></title>
  </head>
  <body>
  <!-- navigasi bar -->
    <img id="kridataruna" src="assets/img/Group_2.png" class="img-fluid mr" alt="">
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Bukit Duri</a>
      </div>
     
       <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="<?= base_url('Login')?>">
         <?php 
          $txt = "Login"; 
         if($this->session->userdata('nama') == null){
            echo $txt;
         }else{
           echo $this->session->userdata('nama');
         }
         ?>
        </a>
      </div>
    </div>
  </header>
   
    <hr>

    <?php if($this->session->userdata('role') == "")
    { ?>
       <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="<?= base_url('umu/home')?>">Home</a>
          <a class="p-2 text-muted" href="<?= base_url('visi_misi')?>">Visi Misi</a>
          <a class="p-2 text-muted" href="<?= base_url()?>">Struktur Organisasi</a>
          <a class="p-2 text-muted" href="<?= base_url('profile')?>">Profil</a>
          <!-- <a class="p-2 text-muted" href="<?= base_url() ?>">Galeri</a> -->
        </nav>
        </div>
    <?php }else if($this->session->userdata('role') == 2){
      ?> 
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Home</a>
          <a class="p-2 text-muted" href="#">Profile Saya</a>
          <a class="p-2 text-muted" href="#">Berita</a>
          <a class="p-2 text-muted" href="#">Forum</a>
          </nav>
        </div>
      <?php }else if($this->session->userdata('role') == 1){
        ?> 
         <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Home</a>
          <a class="p-2 text-muted" href="#">Profile Saya</a>
          <a class="p-2 text-muted" href="#">Agenda</a>
          <a class="p-2 text-muted" href="#">Pengumuman</a>
          <a class="p-2 text-muted" href="#">Berita</a>          
          <a class="p-2 text-muted" href="#">Menu</a>          
          <a class="p-2 text-muted" href="#">Album</a>
        <a class="p-2 text-muted" href="#">Pengumuman</a>
          </nav>
        </div>
        <?php } ?>
      



 



