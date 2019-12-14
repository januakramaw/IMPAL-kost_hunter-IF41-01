<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md-10">

            <div class="card  o-hidden border-0 shadow-lg my-5">
                <div class="card-header">
                    Detail Iklan
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Hunian : <?= $berita['namahunian']; ?></h5>
                    <a class="card-text">Type Hunian : <?= $berita['typehunian']; ?></a>
                    <a class="card-text"><br>Fasilitas : <?= $berita['FASILITAS']; ?></a>
                    <a class="card-text"><br>Lokasi : <?= $berita['lokasi']; ?></a>
                    <a class="card-text"><br>Harga : <?= $berita['harga']; ?></a>
                    <br>
                    <tr>
                        <td>
                            <img src="<?php echo base_url(); ?>assets/foto/<?php echo $berita['foto']; ?>" width="300" height="300">

                        </td>

                    </tr>

                </div>
                <div class="card-footer">
                    <a href="<?= base_url("berita") ?>" class="btn btn-primary mb-auto">Kembali</a>
                    <a href="https://api.whatsapp.com/send?phone=6281386777480&text=Saya%20tertarik%20untuk%20survey%20hunian%20ini%0ANama:%0AJadwal%20survey:%0AKontak:" class="btn btn-secondary">HUNT</a>
                </div>
            </div>
        </div>
    </div>
</div>