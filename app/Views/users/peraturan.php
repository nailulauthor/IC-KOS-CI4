<?php $this->extend('templates/layout')?>
<?php $this->section('content')?>

<div class="page-heading">

<section class="section">
        <div class="card">
            <div class="card-header text-center mb-1">
                <h3 class="card-title">Peraturan Dalam Mengekos</h3>
            </div>
            <div class="card-body">
              <ol class="list-group list-group-numbered">
              <?php foreach ($tampil as $t): ?>
                <li class="list-group-item"><?= $t['peraturan'] ?></li>
                <?php endforeach; ?>
              </ol>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>