<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
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
                            <textarea name="FASILITAS" class="form-control" id="FASILITAS" rows="3"></textarea>
                            <small class="form-text text-danger"><?= form_error('FASILITAS'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="merkhp">Type Hunian</label>
                            <select class="form-control" id="typehunian" name="typehunian">
                                <?php foreach (typehunian as $mhp) : ?>
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