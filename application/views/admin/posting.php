
<div class="container-fluid md-5">    
      <div class="alert alert-success ml-3 mr-3" role="alert" id="dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>Dashboard
    </div>

    <div class="alert alert-success ml-3 mr-3" role="alert">
      <h4 class="alert-heading">Selamat Datang <?= $this->session->userdata('nama') ?>  <!-- <?= $this->session->userdata ('role_id')  ?> -->!</h4>
      <!-- Tambahkan Session login nama, dan level  -->
      <p>Karang Taruna <b>BUKIT DURI</b></p>
      <hr>    
    </div>

          <!-- Button trigger modal -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs mr-2"></i>Control Panel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">Biodata</p></a>
                <i class="fas fa-3x fa-user ml-1"></i>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>
</div>
  <?php if($this->session->userdata("logout")) { ?>
      <script>
        alert("Level User Beda")
      </script>
  <?php } ?>

  <?php if($this->session->flashdata('validasi_berkas')){?>
	<script type="text/javascript">
		swal({
			icon : "warning",
			title : "Perhatian",
			text : "Berkas Kamu belum lengkap nih Mohon di lengkapi yaa",
			dangerMode :[true,"OK"]
		})
	</script>

<?php }?>  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
