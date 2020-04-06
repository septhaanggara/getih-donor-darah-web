<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Untuk Mendaftar
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="golongandarah">Golongan Darah</label>
                            <input type="text" class="form-control" id="golongandarah" name="golongandarah">
                            <small class="form-text text-danger"><?= form_error('golongandarah') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Tempat</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Tempat 1">Tempat 1</option>
                                <option value="Tempat 2">Tempat 2</option>
                                <option value="Tempat 3">Tempat 3</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 