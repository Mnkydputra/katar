<div class="container-lg-11">    
      <div class="alert alert-success" role="alert" id="dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>Dashboard
      </div>
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang <?= $this->session->userdata('nama') ?>  <!-- <?= $this->session->userdata ('role_id')  ?> -->!</h4>
        <!-- Tambahkan Session login nama, dan level  -->
        <p>Karang Taruna <b>BUKIT DURI</b></p>
        <p>Anda Login Sebagai <?php echo $this->session->role_id == 1 ?  "User" : "Admin" ;?></p>
        <hr>    
      </div>
      <div class="container rounded bg-light">
        <h3>Aktifitasi Admin</h3>
        <table id="table_id" class="table table-striped bg-light table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>KETERANGAN</th>
                    <th>TANGGAL</th>
                </tr>
            </thead>
            <tbody>
              
                  <?php $no = 1;
                  foreach($log as $aktifitas) : ?>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $aktifitas->nama?></td>
                    <td><?= $aktifitas->email?></td>
                    <td><?= $aktifitas->keterangan?></td>
                    <td><?= $aktifitas->tanggal?></td>
                  </tr>
                <?php endforeach ?> 
            </tbody>
        </table>
      </div>
     </div>
  </div> 
  

