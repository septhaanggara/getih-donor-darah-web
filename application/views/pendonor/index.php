<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>



    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Pendonor</h3>
            <?php if (empty($pendonor)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Golongan Darah</th>
                        <th class="text-center" scope="col">Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($pendonor as $pnd) : ?>
                        <td class="text-center"><?= $pnd['nama']; ?></td>
                        <td class="text-center"><?= $pnd['golongandarah']; ?></td>
                        <td class="text-center"><?= $pnd['email']; ?></td>
                        <td class="text-center"><?= $pnd['tempat']; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>auth" class="btn btn-primary">Ayo daftar menjadi pendonor !!</a>
                </div>
            </div>

        </div>
    </div>
</div> 