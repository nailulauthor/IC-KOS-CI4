<?php $this->extend('templates/layout') ?>
<?php $this->section('content') ?>
<div class="row mt-1">
    <h1 class="text-center mb-5">Kelas Kamar</h1>

    <?php foreach ($tampil as $t) : ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url() ?>/img-kamar/<?= $t['gambar'] ?>" class="d-block w-100" alt="Tampak Depan">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>/img-kamar/<?= $t['gambar_2'] ?>" class="d-block w-100" alt="Tampak Samping Kanan">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>/img-kamar/<?= $t['gambar_3'] ?>" class="d-block w-100" alt="Tampak Samping Kiri">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev" style="font-size: 10px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next" style="font-size: 10px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <h3 class="mt-2"><?= $t['nama_kamar']; ?></h3>
                    <div class="card-text">
                        <p class="textform1"><strong>fasilitas : </strong> <?= $t['fasilitas']; ?></p>
                        <p class="textform1"><strong>Harga : </strong> Rp. <?= $t['harga']; ?></p>
                        <button id="detail" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#default" data-nama="<?= $t['nama_kamar']; ?>" data-fasilitas="<?= $t['fasilitas']; ?>" data-deskripsi="<?= $t["deskripsi"] ?>" data-harga="<?= $t["harga"] ?>" data-link="<?= $t["link"] ?>">Details</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="nama"></h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-borderless no-margin">
                    <tr>
                        <th>Fasilitas</th>
                        <td><span id="fasilitas"></span></td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td><span id="deskripsi"></span></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td><span id="harga"></span></td>
                    </tr>
                    <tr>
                        <th>Video</th>
                        <td><span><a class="btn-link" id="link" href="#">lihat</a></span></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <a href="/users/pesan" class="btn btn-primary ms-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Pesan</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Menampilkan Data di Modal -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#detail', function() {
            var nama = $(this).data('nama');
            var fasilitas = $(this).data('fasilitas');
            var deskripsi = $(this).data('deskripsi');
            var harga = $(this).data('harga');
            var link = $(this).data('link');
            $('#nama').text(nama);
            $('#fasilitas').text(fasilitas);
            $('#deskripsi').text(deskripsi);
            $('#harga').text(harga);
            $('#link').attr('href', link);
        });
    })
</script>

<?php $this->endSection() ?>