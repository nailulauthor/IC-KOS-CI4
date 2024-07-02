<?php $this->extend('templates/layout') ?>
<?php $this->section('content') ?>

<!-- Hoverable rows start -->
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hoverable rows</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table
                            rows
                            within a
                            <code class="highlighter-rouge">&lt;tbody&gt;</code>.
                        </p>
                    </div>
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NAMA</th>
                                    <th>KELAS KAMAR</th>
                                    <th>TANGGAL MASUK</th>
                                    <th>TANGGAL KELUAR</th>
                                    <th>TOTAL</th>
                                    <th>BAYAR</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($bayar as $b) : ?>
                                    <tr>
                                        <td><?= $b['nama'] ?></td>
                                        <td><?= $b['nama_kamar'] ?></td>
                                        <td><?= $b['tanggal_masuk'] ?></td>
                                        <td><?= $b['tanggal_keluar'] ?></td>
                                        <td><?= $b['total'] ?></td>
                                        <td><a href="#" class="btn btn-success btn-sm btn-circle" >Bayar</a></td>
                                        <td><a href="#"><i class="bi bi-pen-fill mx-1" data-feather="pen-fill"></i></a>
                                            <a href="#" id="detail" data-bs-toggle="modal" data-bs-target="#default" data-nama="<?= $b['nama']; ?>" data-nik="<?= $b['nik']; ?>" data-alamat="<?= $b['alamat']; ?>" data-telepon="<?= $b['telepon']; ?>" data-gambar="<?= $b['gambar_ktp']; ?>" data-total="<?= $b['total']; ?>" data-tanggal_masuk="<?= $b['tanggal_masuk'] ?>" data-kamar="<?= $b['nama_kamar'] ?>" data-tanggal_keluar="<?= $b['tanggal_keluar'] ?>"><i class="bi bi-info-circle-fill mx-1" data-feather="info-circle-fill"></i></a>
                                            <a href="#"><i class="bi bi-trash-fill mx-1" data-feather="trash-fill"></i></a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>
<!-- Hoverable rows end -->

<!-- Modal Start -->
<div class="modal fade" id="default" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-3 border-2">
                    <img src="#" id="gambar" class="img-fluid  rounded-3" alt="Gambar KTP" style="max-height: 200px;">
                </div>
                <table class="table table-borderless no-margin">
                    <tr>
                        <th>NIK</th>
                        <td><span id="nik"></span></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><span id="nama"></span></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><span id="alamat"></span></td>
                    </tr>
                    <tr>
                        <th>Kamar</th>
                        <td><span id="nama_kamar"></span></td>
                    </tr>
                    <tr>
                        <th>Masuk</th>
                        <td><span id="tanggal_masuk"></span></td>
                    </tr>
                    <tr>
                        <th>Keluar</th>
                        <td><span id="tanggal_keluar"></span></td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td><span id="Total"></span></td>
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
                    <span class="d-none d-sm-block">Bayar</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Menampilkan Data di Modal -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#detail', function() {
            var nik = $(this).data('nik');
            var nama = $(this).data('nama');
            var alamat = $(this).data('alamat');
            var nama_kamar = $(this).data('kamar');
            var tanggal_masuk = $(this).data('tanggal_masuk');
            var tanggal_keluar = $(this).data('tanggal_keluar');
            var total = $(this).data('total');
            var gambar = $(this).data('gambar');
            $('#nik').text(nik);
            $('#nama').text(nama);
            $('#alamat').text(alamat);
            $('#nama_kamar').text(nama_kamar);
            $('#tanggal_masuk').text(tanggal_masuk);
            $('#tanggal_keluar').text(tanggal_keluar);
            $('#total').text(total);
            $('#gambar').attr('src', '<?= base_url() ?>/assets/img-ktp/' + gambar);
        });
    })
</script>
<!-- Modal End -->

<?= $this->endSection(); ?>