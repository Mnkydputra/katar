<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"> 
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- js boostrap -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    <script>
      $(document).ready(function() {
          $('#table_id').DataTable({
            "pagingType": "full_numbers"
          });
        });
    </script>
    <!-- script external -->
    <title><?php echo $judul?></title>
  </head>
  <body>
  <!-- navigasi bar -->
    <img id="kridataruna" src="<?= base_url()?>assets/img/Group_2.png" class="img-fluid mr" alt="">
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
       <div class="nav-scroller bg-light  py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-dark" href="<?= base_url('home')?>">Home</a>
          <a class="p-2 text-dark" href="<?= base_url('visi_misi')?>">Visi Misi</a>
          <a class="p-2 text-dark" href="<?= base_url('struktur')?>">Struktur Organisasi</a>
          <a class="p-2 text-dark" href="<?= base_url('profile')?>">Profil</a>
          <!-- <a class="p-2 text-muted" href="<?= base_url() ?>">Galeri</a> -->
        </nav>
        </div>
    <?php }else if($this->session->userdata('role') == 2){
      ?> 
        <div class="nav-scroller bg-light  py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-dark" href="#">Home</a>
          <a class="p-2 text-dark" href="#">Profile Saya</a>
          <a class="p-2 text-dark" href="#">Berita</a>
          <a class="p-2 text-dark" href="#">Forum</a>
          </nav>
        </div>
      <?php }else if($this->session->userdata('role') == 1){
        ?> 
         <div class="nav-scroller bg-light  py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-dark" href="<?= base_url('admin/Dashboard')?>">Home</a>
          <a class="p-2 text-dark" href="#">Profile Saya</a>
          <a class="p-2 text-dark" href="#">Agenda</a>
          <a class="p-2 text-dark" href="<?= base_url('admin/Dashboard/pengumuman')?>">Pengumuman</a>
          <a class="p-2 text-dark" href="#">Berita</a>          
          <a class="p-2 text-dark" href="#">Menu</a>          
          <a class="p-2 text-dark" href="#">Album</a>
        <a class="p-2 text-dark" href="#">Pengumuman</a>
          </nav>
        </div>
        <?php } ?>
  
  


 



