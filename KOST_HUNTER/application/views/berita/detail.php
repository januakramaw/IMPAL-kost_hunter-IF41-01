<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Iklan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $berita['namahunian']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted float-left">Merk Hp: <?= $berita['typehunian']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted float-right">Waktu: <?= $berita['iklantime']; ?></h6>
                    <p class="card-text"><br><?= $berita['FASILITAS']; ?></p>
                    <a href="<?= base_url(); ?>berita" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>