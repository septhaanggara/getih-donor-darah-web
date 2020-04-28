<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Stock Darah</h3>
            <?php if (empty($stock)) : ?>
            <div class="alert alert-danger" role="alert">
                Tidak ada data Stock Darah
            </div>
            <?php endif; ?>
            <div class="row">
  <?php foreach ($stock as $sd):?>
          <!-- Page Heading -->
<div class="card ml-3" style="width: 18rem; margin-bottom: 30px;">
  <img src="<?= base_url().'/assets/img/goldar/'.$sd['image']?>" class="card-img-top" alt="...">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Golongan Darah: <?= $sd['golongandarah']?></li>
    <li class="list-group-item">Jumlah: <?= $sd['jumlah']?></li>
    <li class="list-group-item">Rhesus: <?= $sd['rhesus']?></li>
  </ul>
</div>
<?php endforeach;?>
            
        </div>
    </div>
</div> 
</div>
