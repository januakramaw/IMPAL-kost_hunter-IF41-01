<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berita <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>berita/tambah" class="btn btn-primary">Pasang Iklan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8">
            <h3>IKLAN HUNIAN</h3>
            <ul class="list-group">
                <?php foreach ($berita as $brt) : ?>
                    <li class="list-group-item">
                        <?= $brt['namahunian']; ?>
                        <br>
                        <a href="<?= base_url(); ?>berita/hapus/<?= $brt['id_hunian']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a>
                        <a href="<?= base_url(); ?>berita/ubah/<?= $brt['id_hunian']; ?>" class="badge badge-success float-right">Ubah</a>
                        <a href="<?php echo base_url(); ?>berita/detail/<?php echo $brt['id_hunian']; ?>" class="badge badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-4">
            <h3>HOT SALE</h3>
            <ul class="list-group">
                <?php foreach ($berita as $brt) : ?>
                    <li class="list-group-item"><?= $brt['typehunian']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

</div>