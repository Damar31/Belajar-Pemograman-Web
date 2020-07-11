<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-dark tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah film
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= base_url(); ?>/Admin/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari Admin.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-6">
          <h3 class="text-light">Daftar Film</h3>
          <ul class="list-group">
            <?php foreach($data as $film ) : ?>
              <li class="list-group-item">
                  <?= $film['judul']; ?> 	
                  <a href="<?= base_url(); ?>/Admin/hapus/<?= $film['id_film']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= base_url(); ?>/Admin/ubah/<?= $film['id_film']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $film['id_film']; ?>">ubah</a>
                  <a href="<?= base_url(); ?>/Admin/detail/<?= $film['id_film']; ?>" class="badge badge-primary float-right">detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Film</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= base_url(); ?>/Admin/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="judul">judul</label>
            <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="sinopsis">sinopsis</label>
            <input type="number" class="form-control" id="sinopsis" name="sinopsis" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="keterangan">keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="email@example.com">
          </div>

          <div class="form-group">
            <label for="tangal_rilis">tangal_rilis</label>
            <select class="form-control" id="tangal_rilis" name="tangal_rilis">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
              <option value="Teknik Planologi">Teknik Planologi</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="foto">foto</label>
            <input type="text" class="form-control" id="foto" name="keterangan" placeholder="email@example.com">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>




