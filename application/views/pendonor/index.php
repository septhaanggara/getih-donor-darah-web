<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Pendonor</h3>
            <?php if (empty($pendonor)) : ?>
            <div class="alert alert-danger" role="alert">
                Tidak ada data pendonor
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Golongan Darah</th>
                        <th class="text-center" scope="col">Tempat Donor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($pendonor as $donor) : ?>
                        <td class="text-center"><?= $donor['nama']; ?></td>
                        <td class="text-center"><?= $donor['email']; ?></td>
                        <td class="text-center"><?= $donor['golongandarah']; ?></td>
                        <td class="text-center"><?= $donor['tempat']; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>auth " class="btn btn-primary" style="margin-bottom: 10px">Ayo menjadi pendonor sekarang!</a>
                </div>
            </div>

        </div>
    </div>
</div> 
       <div class="container-fluid">
 <h1 class="h3 mb-4 text-gray-800 text-center" style="margin-top: 30px">Daftar Rumah Sakit</h1>
 <div class="card-deck" style="margin-bottom: 20px;">
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
</div>