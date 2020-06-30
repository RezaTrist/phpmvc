<div class ="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

    <div class ="row">
        <div class ="col-lg-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Treatment
            </button>
            <br></br>
            <h3>Treatment List</h3>
            <ul class="list-group">
                <?php foreach( $data['tmn'] as $tmn ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $tmn['nama']; ?>
                        <a href="<?= BASEURL; ?>/treatment/detail/<?= $tmn['id']; ?>" class="badge badge-dark">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Treatment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/treatment/tambah" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>