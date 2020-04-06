<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Pendonor
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $pendonor['id'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $pendonor['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="golongandarah">NIM</label>
                            <input type="text" class="form-control" id="golongandarah" name="golongandarah" value="<?= $pendonor['golongandarah']; ?>">
                            <small class="form-text text-danger"><?= form_error('golongandarah') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $pendonor['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <select class="form-control" id="tempat" name="tempat">
                                <?php foreach ($tempat as $t) : ?>
                                <?php if ($t == $pendonor['tempat']) : ?>
                                <option value="<?= $t; ?>" selected><?= $t; ?></option>
                                <?php else : ?>
                                <option value="<?= $t; ?>"><?= $t; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 