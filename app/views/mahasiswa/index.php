<div class="container mt-4 ">
    <div class="row mb-3">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <div class="d-flex justify-content-between">    
                <h3>Daftar Mahasiswa</h3>
                <button type="button" class="btn btn-primary float-end tampilModalTambah" data-bs-toggle="modal" data-bs-target="#formModal">
                        Tambah Data Mahasiswa
                </button>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
        </form>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <div class="float-end">
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-decoration-none text-bg-danger px-4 py-2 me-2" onclick="return confirm('Apakah anda yakin untuk menghapus data ini')" >Hapus</a>
                            
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal" cursor="pointer" class="badge text-decoration-none text-bg-warning px-4 py-2 me-2 tampilModalUbah" data-id="<?= $mhs['id']; ?>" >Ubah</a>

                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-decoration-none text-bg-primary px-4 py-2" >Detail</a>
                        </div>    
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="mb-3">
                    <label for="nama" class="form-label ">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label ">NRP</label>
                    <input type="number" class="form-control" name="nrp" id="nrp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label ">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label ">Jurusan</label>
                    <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                    </select>
                </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
         </form>
      </div>
    </div>
  </div>
</div>