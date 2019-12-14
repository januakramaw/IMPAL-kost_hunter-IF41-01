<body>
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-7">
                <div class="card  o-hidden border-0 shadow-lg my-5">
                    <div class="card-header">
                        FORM PASANG IKLAN HUNIAN
                    </div>
                    <div class="card-body">
                        <?php echo form_open_multipart('berita/tambah'); ?>
                        <div class="form-group">
                            <label for="namahunian">Nama Hunian</label>
                            <input type="text" name="namahunian" class="form-control" id="namahunian">
                            <small class="form-text text-danger"><?= form_error('namahunian'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="newsbody">Fasilitas</label>
                            <input type="text" name="FASILITAS" class="form-control" id="FASILITAS" rows="3"></input>
                            <small class="form-text text-danger"><?= form_error('FASILITAS'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="typehunian">Type Hunian</label>
                            <select class="form-control" id="typehunian" name="typehunian">
                                <option value="Kost">Kost</option>
                                <option value="Kontrakan">Kontrakan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">lokasi</label>
                            <input type="text" name="lokasi" class="form-control" id="lokasi">
                            <small class="form-text text-danger"><?= form_error('lokasi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="foto">Upload foto</label>
                            <input type="file" name="foto" class="form-control" id="foto">
                            <small class="form-text text-danger"><?= form_error('foto'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">UPLOAD</button>
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>