        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Ubah Data Pendonor</h1>
          <?= $this->session->flashdata('message');  ?>
           <?php if (empty($pendonor)) : ?>
            <div class="alert alert-danger" role="alert">
                Mohon daftar terlebih dahulu sebelum mengubah data pendonor
            </div>
            <?php endif; ?>
          <?php echo form_open_multipart('user/hapus');?>
          <div class="row">
            <div class="col-lg-8">
                <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" value="<?= $pendonor['email'] ?>" readonly>
       <?= form_error('email',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="<?= $pendonor['nama'] ?>" readonly>
     <?= form_error('name',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="goldar" class="col-sm-2 col-form-label">Golongan Darah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="goldar" name="goldar" value="<?= $pendonor['golongandarah']?>" readonly>
     <?= form_error('goldar',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="riwayat" class="col-sm-2 col-form-label">Riwayat</label>
    <div class="col-sm-10">
      <select id="inputState" id="riwayat" name="riwayat" class="form-control" readonly>
        <option selected>Choose...</option>
        <option value="Tidak Ada" <?php if ($pendonor['riwayat'] == 'Tidak Ada') { echo "selected='selected'"; }  ?>>Tidak Ada</option>
        <option value="HIV/AIDS" <?php if ($pendonor['riwayat'] == 'HIV/AIDS') { echo "selected='selected'"; }  ?>>HIV/AIDS</option>
        <option value="Hepatitis" <?php if ($pendonor['riwayat'] == 'Hepatitis') { echo "selected='selected'"; }  ?>>Hepatitis</option>
        <option value="Infeksi menular seks" <?php if ($pendonor['riwayat'] == 'Infeksi menular seks') { echo "selected='selected'"; }  ?>>Infeksi menular seks</option>
        <option value="Penyakit paru-paru" <?php if ($pendonor['riwayat'] == 'Penyakit paru-paru') { echo "selected='selected'"; }  ?>>Penyakit paru-paru</option>
        <option value="Kanker" <?php if ($pendonor['riwayat'] == 'Kanker') { echo "selected='selected'"; }  ?>>Kanker</option>
        <option value="Berusia dibawah 17 tahun" <?php if ($pendonor['riwayat'] == 'Berusia dibawah 17 tahun') { echo "selected='selected'"; }  ?>>Berusia dibawah 17 tahun</option>
        <option value="Menyumbangkan darah dalam 8 minggu terakhir" <?php if ($pendonor['riwayat'] == 'Menyumbangkan darah dalam 8 minggu terakhir') { echo "selected='selected'"; }  ?>>Menyumbangkan darah dalam 8 minggu terakhir</option>
        <option value="Sedang mengkonsumsi obat-obatan" <?php if ($pendonor['riwayat'] == 'Sedang mengkonsumsi obat-obatan') { echo "selected='selected'"; }  ?>>Sedang mengkonsumsi obat-obatan</option>
        <option value="Bagi wanita sedang, mengalami menstruasi" <?php if ($pendonor['riwayat'] == 'Bagi wanita, sedang mengalami menstruasi') { echo "selected='selected'"; }  ?>>Bagi wanita, sedang mengalami menstruasi</option>
       
      </select>
      <h6>*jika terdapat lebih dari 1 riwayat, maka cukup pilih salah satu</h6> 
    </div>
  </div>  
<div class="form-group row">
    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Donor</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $pendonor['tanggal']?>" readonly>
     <?= form_error('tanggal',' <small class="text-danger pl-3">', '</small>') ?>  
    </div>
  </div>
<div class="form-group row">
    <label for="tempat" class="col-sm-2 col-form-label">Tempat Donor</label>
    <div class="col-sm-10">
      <select id="inputState" name ="tempat" class="form-control" value="<?= $pendonor['tempat']?>" readonly>
        <option selected>Choose...</option>
        <option value="Rumah sakit 1" <?php if ($pendonor['tempat'] == 'Rumah sakit 1') { echo "selected='selected'"; }  ?>>Rumah sakit 1</option>
        <option value="Rumah sakit 2"<?php if ($pendonor['tempat'] == 'Rumah sakit 2') { echo "selected='selected'"; }  ?>>Rumah sakit 2</option>
        <option value="Rumah sakit 3"<?php if ($pendonor['tempat'] == 'Rumah sakit 3') { echo "selected='selected'"; }  ?>>Rumah sakit 3</option>
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
    <a href="<?= base_url(); ?>user/hapus/<?= $pendonor['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus membatalkan untuk menjadi pendonor?');" ?>Hapus</a>  
    </div>
</div>
