<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data pendonor ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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
                        <th class="text-center" scope="col">Riwayat</th>
                        <th class="text-center" scope="col">Tanggal</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($pendonor as $pdr) : ?>
                        <td class="text-center"><?= $pdr['nama']; ?></td>
                        <td class="text-center"><?= $pdr['email']; ?></td>
                        <td class="text-center"><?= $pdr['golongandarah']; ?></td>
                        <td class="text-center"><?= $pdr['tempat']; ?></td>
                        <td class="text-center"><?= $pdr['riwayat']; ?></td>
                        <td class="text-center"><?= $pdr['tanggal']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>admin/hapus/<?= $pdr['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data pendonor ini?');" ?>Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div> 