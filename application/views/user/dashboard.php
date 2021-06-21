
<div class="container-lg-11">    
      <div class="alert alert-success" role="alert" id="dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>Dashboard
      </div>

    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Selamat Datang <?= $this->session->userdata('nama') ?>  <!-- <?= $this->session->userdata ('role_id')  ?> -->!</h4>
      <!-- Tambahkan Session login nama, dan level  -->
      <p>Karang Taruna <b>BUKIT DURI</b></p>
      <p>Anda Login Sebagai <?php echo $this->session->role_id == 2 ?  "Admin" : "User" ;?></p>
      <hr>    
    </div>
</div>
