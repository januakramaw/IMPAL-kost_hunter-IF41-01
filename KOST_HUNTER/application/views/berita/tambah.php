<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    FORM PASANG IKLAN HUNIAN
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="namahunian">Nama Hunian</label>
                            <input type="text" name="namahunian" class="form-control" id="namahunian">
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
                                <option value="KOST">KOST</option>
                                <option value="KONTRAKAN">KONTRAKAN</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">UPLOAD</button>
                    </form>

                </div>
            </div>



        </div>
    </div>


</div>