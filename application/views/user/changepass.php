        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Daftar Stock Darah</h1>

          <div class="row">
          	<?= $this->session->flashdata('message'); ?> 
          	<div class="col-lg-6">
          		<form action="<?= base_url('user/changepass');?>" method='post'>
          			<form>
  <div class="form-group">
    <label for="current_password">Password Saat Ini</label>
    <input type="password" class="form-control" id="current_password" name="current_password">
    <?= form_error('current_password',' <small class="text-danger pl-3">', '</small>') ?>  
  </div>
  <div class="form-group">
    <label for="new_password1">Password Baru</label>
    <input type="password" class="form-control" id="new_password1" name="new_password1">
    <?= form_error('new_password1',' <small class="text-danger pl-3">', '</small>') ?>
  </div>
<div class="form-group">
    <label for="new_password2">Konfirmasi Password</label>
    <input type="password" class="form-control" id="new_password2" name="new_password2">
    <?= form_error('new_password2',' <small class="text-danger pl-3">', '</small>') ?>
  </div>  
  <div class="form-group">
  	<button type="submit" class="btn btn-primary">Change Password</button>
  </div>
</form>
          			
          		</form>
          	</div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


