<body background="Assets/Logo/house.jpg">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-7">
                <div class="card  o-hidden border-0 shadow-lg my-5">
                    <div class="card-header">
                        Form Sunting Berita
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $berita['id_hunian']; ?>">
                            <div class="form-group">
                                <label for="namahunian">Nama Hunian</label>
                                <input type="text" name="namahunian" class="form-control" id="namahunian" value="<?= $berita['namahunian']; ?>">
                                <small class="form-text text-danger"><?= form_error('namahunian'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="newsbody">Fasilitas</label>
                                <input type="text" name="FASILITAS" class="form-control" id="FASILITAS" value="<?= $berita['FASILITAS']; ?>"></input>
                                <small class="form-text text-danger"><?= form_error('FASILITAS'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" id="lokasi" value="<?= $berita['lokasi']; ?>"></input>
                                <small class="form-text text-danger"><?= form_error('lokasi'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga" value="<?= $berita['harga']; ?>"></input>
                                <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="typehunian">Type Hunian</label>
                                <select class="form-control" id="typehunian" name="typehunian" value="<?= $berita['typehunian']; ?>">
                                    <?php foreach ($typehunian as $mhp) : ?>
                                        <?php if ($mhp == $berita['typehunian']) : ?>
                                            <option value="<?= $mhp; ?>" selected><?= $mhp; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $mhp; ?>"><?= $mhp; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" name="ubah" class="btn btn-primary float-right">Sunting Iklan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>