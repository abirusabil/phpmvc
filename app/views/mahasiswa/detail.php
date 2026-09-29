<div class="container mt-5">
    <div class="card w-50">
        <div class="card-header">
            Detail Mahasiswa
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <p class="card-text"><?= $data['mhs']['nrp']; ?></p>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>