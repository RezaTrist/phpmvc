<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['tmn']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['tmn']['harga']; ?></h6>
            <p class="card-text"><?= $data['tmn']['deskripsi']; ?></p>
        
            <a href="<?= BASEURL; ?>/treatment" class="card-link">Back</a>
        </div>
    </div>

</div>