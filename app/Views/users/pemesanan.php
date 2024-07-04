<?php $this->extend('templates/layout') ?>
<?php $this->section('content') ?>

<script>
    // Untuk Meliat preview 
    function tampilgambar() {
        gambar = document.querySelector('#gambar_ktp');
        preview = document.querySelector('#preview');
        file = new FileReader();
        file.readAsDataURL(gambar.files[0]);
        file.onload = function(e) {
            preview.src = e.target.result;
        }
    }
    // End Preview
</script>
<!-- Preview End -->

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Reservasi Kamar</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="/users/simpan" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">NIK</label>
                                        <input type="text" id="nik" value="<?= set_value('nik') ?>" class="form-control <?= array_key_exists('nik', $validation) ? 'is-invalid' : ''; ?>" placeholder="Number ID Card" name="nik">
                                        <div class="invalid-feedback">
                                            <?= array_key_exists('nik', $validation) ? $validation['nik'] : ''; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Lengkap</label>
                                        <input type="text" id="nama" value="<?= set_value('nama') ?>" class="form-control <?= array_key_exists('nama', $validation) ? 'is-invalid' : ''; ?>" placeholder="Full Name" name="nama">
                                        <div class="invalid-feedback">
                                            <?= array_key_exists('nama', $validation) ? $validation['nama'] : ''; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Alamat</label>
                                        <input type="text" id="alamat" class="form-control <?= array_key_exists('alamat', $validation) ? 'is-invalid' : ''; ?>" placeholder="Address" name="alamat" value="<?= set_value('alamat') ?>">
                                        <div class="invalid-feedback">
                                            <?= array_key_exists('alamat', $validation) ? $validation['alamat'] : ''; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Telepon</label>
                                        <input type="text" id="telepon" value="<?= set_value('telepon') ?>" class="form-control <?= array_key_exists('telepon', $validation) ? 'is-invalid' : ''; ?>" name="telepon" placeholder="Telephone">
                                        <div class="invalid-feedback">
                                            <?= array_key_exists('telepon', $validation) ? $validation['telepon'] : ''; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Kelas Kamar</label>
                                        <select class="form-select <?= array_key_exists('id_kamar', $validation) ? 'is-invalid' : ''; ?>"  aria-label="select example" name="id_kamar" id="id_kamar">
                                            <option selected>Select Class Room</option>
                                            <!-- Start Foreach / perulangan kamar -->
                                            <?php foreach ($kamar as $k) : ?>
                                                <option value="<?= $k['id_kamar']; ?>"><?= $k['nama_kamar'] ?></option>
                                            <?php endforeach; ?>
                                            <!-- End Foreach -->
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= array_key_exists('id_kamar', $validation) ? $validation['id_kamar'] : ''; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="total">Harga</label>
                                        <input type="number" class="form-control" id="total" name="total" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tanggal_masuk">Tanggal Masuk</label>
                                        <input type="date" value="<?= set_value('tanggal_masuk') ?>" class="form-control <?= array_key_exists('tanggal_masuk', $validation) ? 'is-invalid' : ''; ?>" id="tanggal_masuk" name="tanggal_masuk">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="image">Foto KTP</label>
                                        <input type="file" class="form-control <?= array_key_exists('gambar_ktp', $validation) ? 'is-invalid' : ''; ?>" id="gambar_ktp" name="gambar_ktp" onchange="tampilgambar()">
                                        <div class="invalid-feedback">
                                            <?= array_key_exists('gambar_ktp', $validation) ? $validation['gambar_ktp'] : ''; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-3">
                                    <img id="preview" class="img-thumbnail" alt="Gambar KTP">
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    <button type="reset" class="btn btn-danger me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>