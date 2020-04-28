        <!-- Begin Page Content -->
       <div class="container-fluid">
 <h1 class="h3 mb-4 text-gray-800 text-center" style="margin-top: 30px">Daftar Rumah Sakit</h1>
 <div class="card-deck">
  <div class="card">
    <img src="<?= base_url('./assets/img/rs/rs1.jpg')?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Rumah sakit 1</h5>
      <p class="card-text">Rumah sakit ini berlokasi di kota Bandung. Rumah sakit ini memiliki alat alat medis berstandar internasional</p>
    </div>
  </div>
  <div class="card">
    <img src="<?= base_url('./assets/img/rs/rs2.jpg')?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Rumah sakit 2</h5>
      <p class="card-text">Rumah sakit ini berlokasi di Kabupaten bandung. Rumah sakit ini mempekerjakan para tenaga medis lulusan eropa</p>
    </div>
  </div>
  <div class="card">
    <img src="<?= base_url('./assets/img/rs/rs3.jpg')?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Rumah sakit 3</h5>
      <p class="card-text">Rumah sakit ini berlokasi di Kota Bandung. Rumah sakit ini memiliki dokter-dokter terbaik di indonesia</p>
    </div>
  </div>
</div>
          
<h1 class="h3 mb-4 text-gray-800 text-center" style="margin-top: 30px">Daftar Menjadi Pendonor</h1>
<?= $this->session->flashdata('message');  ?>
<?php echo form_open_multipart('user/daftar');?>
<div class="row">
          	<div class="col-lg-8">
          		<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
      <?= form_error('email',' <small class="text-danger pl-3">', '</small>') ?>
    </div>
  </div>
<div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['name'] ?>" readonly>
     <?= form_error('nama',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="goldar" class="col-sm-2 col-form-label">Golongan Darah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="goldar" name="goldar">
     <?= form_error('goldar',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="riwayat" class="col-sm-2 col-form-label">Riwayat</label>
    <div class="col-sm-10">
      <select id="inputState" id="riwayat" name="riwayat" class="form-control">
        <option value="Tidak Ada">Tidak Ada</option>
        <option value="HIV/AIDS">HIV/AIDS</option>
        <option value="Hepatitis">Hepatitis</option>
        <option value="Infeksi menular seks">Infeksi menular seks</option>
        <option value="Penyakit paru-paru">Penyakit paru-paru</option>
        <option value="Kanker">Kanker</option>
        <option value="Berusia dibawah 17 tahun">Berusia dibawah 17 tahun</option>
        <option value="Menyumbangkan darah dalam 8 minggu terakhir">Menyumbangkan darah dalam 8 minggu terakhir</option>
        <option value="Sedang mengkonsumsi obat-obatan">Sedang mengkonsumsi obat-obatan</option>
        <option value="Bagi wanita sedang, mengalami menstruasi">Bagi wanita, sedang mengalami menstruasi</option>
      </select>
      <h6>*jika terdapat lebih dari 1 riwayat, maka cukup pilih salah satu</h6> 
      <?= form_error('riwayat',' <small class="text-danger pl-3">', '</small>') ?> 
    </div>
  </div>  
<div class="form-group row">
    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Donor</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal" name="tanggal">
     <?= form_error('tanggal',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="tempat" class="col-sm-2 col-form-label">Tempat Donor</label>
    <div class="col-sm-10">
      <select id="inputState" name ="tempat" class="form-control">
        <option value="Rumah Sakit 1">Rumah sakit 1</option>
        <option value="Rumah Sakit 2">Rumah sakit 2</option>
        <option value="Rumah Sakit 3">Rumah sakit 3</option>
      </select>
     <?= form_error('tempat',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>  
    		</div>
    	</div>
    </div>
  </div>
<div class="form-group row justify-content-end">
	<div class="col-sm-5">
		<button type="submit" class="btn btn-primary">Daftar</button>
	</div>
</div>
