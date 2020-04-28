 <div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Daftar Stock Darah</h1>
  <?= $this->session->flashdata('message');  ?>
  <?php if (empty($stock)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>
<div class="row">
  <?php foreach ($stock as $sd):?>
          <!-- Page Heading -->
<div class="card ml-3" style="width: 18rem; margin-top: 30px;">
  <img src="<?= base_url().'/assets/img/goldar/'.$sd['image']?>" class="card-img-top" alt="...">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Golongan Darah: <?= $sd['golongandarah']?></li>
    <li class="list-group-item">Jumlah: <?= $sd['jumlah']?></li>
    <li class="list-group-item">Rhesus: <?= $sd['rhesus']?></li>
  </ul>
  <div class="card-body">
    <a href="<?= base_url(); ?>admin/hapusstock/<?= $sd['golongandarah'] ?>" class="btn btn-sm btn-danger">Hapus</a>
    <a href="<?= base_url(); ?>admin/Ubah" class="btn btn-sm btn-primary">Ubah</a>
  </div>
</div>
<?php endforeach;?>

</div>
</div>