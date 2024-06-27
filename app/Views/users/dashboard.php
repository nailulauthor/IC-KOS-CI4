<?php $this->extend('templates/layout')?>
<?php $this->section('content')?>

<div class="page-heading">

<section class="section">
        <div class="card">
            <div class="card-header text-center mb-1">
                <h3 class="card-title">Selamat Datang di Halaman Dashboard</h3>
            </div>
            <div class="card-body">
             <p>Sebelum melakukan transaksi, mohon luangkan waktu untuk membaca peraturan kami <a href="/kamar"class="btn-link">disini</a> terlebih dahulu. 
                Dengan memesan, Anda dianggap telah menyetujui semua peraturan yang telah ditetapkan. 
                Terima kasih berkunjung di web kami.</p>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>