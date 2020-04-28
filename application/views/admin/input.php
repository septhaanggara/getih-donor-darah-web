        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Input Stock Darah</h1>
           <?= $this->session->flashdata('message');  ?>
          <div class="row">

          	<div class="col-lg-8">
          		<?php echo form_open_multipart('admin/input');?>
          		<div class="form-group row">
    <label for="golongandarah" class="col-sm-3 col-form-label">Golongan Darah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="golongandarah" name="golongandarah">
      <?= form_error('golongandarah',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Stock Tersedia</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jumlah" name="jumlah">
     <?= form_error('jumlah',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="rhesus" class="col-sm-3 col-form-label">Rhesus</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rhesus" name="rhesus">
     <?= form_error('rhesus',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <div class="col-sm-2">Picture</div>
    <div class="col-sm-10">
    	<div class="row">
    		<div class="col-sm-9">
    			<div class="custom-file">
  <input type="file" class="custom-file-input" id="image" name="image">
  <label class="custom-file-label" for="image">Choose file</label>
</div>
    		</div>
    	</div>
    </div>
  </div>
<div class="form-group row justify-content-end">
	<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
	</div>
</div>
          	</div>
          </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


