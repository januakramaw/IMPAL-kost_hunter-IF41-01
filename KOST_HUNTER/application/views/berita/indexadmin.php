<body background="Assets/Logo/bg4.jpg">
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
            <div class="card-header col-md-8">
                <h3>IKLAN HUNIAN</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <ul class="list-group">
                    <?php foreach ($berita as $brt) : ?>
                        <li class="list-group-item">
                            <a><?= $brt['typehunian']; ?></a>
                            <a><?= $brt['namahunian']; ?></a>
                            <br>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $brt['foto']; ?>" width="100" height="100">
                                    <a>Lokasi :<?= $brt['lokasi']; ?> </a>
                                </td>
                            </tr>
                            <br>
                            <a href="<?= base_url(); ?>berita/hapus/<?= $brt['id_hunian']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>berita/ubahadmin/<?= $brt['id_hunian']; ?>" class="badge badge-success float-right">Ubah</a>
                            <a href="<?php echo base_url(); ?>berita/detailadmin/<?php echo $brt['id_hunian']; ?>" class="badge badge-primary float-right">Detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="card-header col-4">
                <h3>HOT SALE</h3>
                <ul class="list-group">
                    <?php foreach ($berita as $brt) : ?>
                        <li class="list-group-item"><?= $brt['namahunian']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

    </div>
</body>