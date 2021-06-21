 <!-- Begin Page Content -->
<div class="container-fluid">
 <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
    </div>
    <div class="card-body">
  <div class="table-responsive-sm ml-4 mr-3">

    <form action="<?= base_url('user/Gantipass/update')?>"  method="post">
      <div class="form-group">
        <label>New Password</label>
        <input type="hidden" name="email" value="<?= $this->session->userdata('email') ?>">
        <input type="password" autocomplete="off" name="password" id="password" class="form-control" placeholder="Enter New Password">
      </div>
      <div class="form-group">
        <label>Re-type Password</label>
        <input type="password" name="password2" autocomplete="off" id="password2" class="form-control" placeholder="Enter Re-type Password">
      </div>

      <div class="form-group" >
        <button type="submit" class="btn btn-danger"><i class="fa fa-lock"></i> Update Password</button>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
<?php if($this->session->flashdata('sukses')){?>
	<script type="text/javascript">
			Swal.fire({
			title: 'SUKSES!',
			text: 'Password Berhasil di Rubah',
			icon: 'success',
			confirmButtonText: 'Cool'
			})
	</script>
<?php }?>

