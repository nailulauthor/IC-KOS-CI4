<?php $this->extend('templates/layout')?>
<?php $this->section('content')?>
<div class="row mt-1">
    <h1 class="text-center mb-5">Kelas Kamar</h1>

    <?php foreach ($tampil as $t): ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <img src="<?= base_url()?>/img-kamar/<?= $t['gambar'] ?>" alt="Foto Kamar" style="width: 100%;">
                    <h3 class="mt-2"><?= $t['nama_kamar']; ?></h3>
                    <div class="card-text">
                        <p class="textform1"><strong>fasilitas : </strong> <?= $t['fasilitas']; ?></p>
                        <p class="textform1"><strong>Harga : </strong> Rp. <?= $t['harga']; ?></p>
                        <button class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#default" >Details</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel1"> Halo </h5>
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Bonbon caramels muffin. Chocolate bar oat cake cookie pastry dragée pastry.
                                            Carrot cake
                                            chocolate tootsie roll chocolate bar candy canes biscuit.

                                            Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet
                                            roll. Toffee sugar
                                            plum sugar plum jelly-o jujubes bonbon dessert carrot cake. Cookie dessert
                                            tart muffin topping
                                            donut icing fruitcake. Sweet roll cotton candy dragée danish Candy canes
                                            chocolate bar cookie.
                                            Gingerbread apple pie oat cake. Carrot cake fruitcake bear claw. Pastry
                                            gummi bears
                                            marshmallow jelly-o.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                        <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Accept</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


<?php $this->endSection()?>