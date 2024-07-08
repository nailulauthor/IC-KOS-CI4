<?= $this->extend('landing/templates/template'); ?>
<?= $this->section('content') ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    
    <!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-6">
                        <img class="img-fluid" src="<?= base_url() ?>/assets/img/pelayanan.jpg">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="<?= base_url() ?>/assets/img/sign-up.jpg">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="<?= base_url() ?>/assets/img/kamar1.jpg">
                    </div>
                    
                    <div class="col-6">
                        <div class="bg-secondary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                            <div class="icon-box-primary">
                                <i class="bi bi-journal-bookmark-fill text-dark"></i>
                            </div>
                            <h5 class="display-6 mb-3 text-light">KOS Galery</h5>
                            <!-- <small class="fs-5 text-white">Data Safety</small> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Terbukti aman, nyaman dan terpercaya</h1>
                <h6 class="mb-4">IC-KOS terbukti sebagai pilihan aman, nyaman, dan terpercaya dengan keamanan 24 jam, lingkungan bersih, serta layanan ramah dan profesional, menjadikannya tempat tinggal ideal bagi para penghuninya.</h6>
                <div class="row g-4 g-sm-5 justify-content-center">
                    <div class="col-sm-6">
                        <div class="about-fact btn-square flex-column rounded-circle bg-warning ms-sm-auto">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-house-lock-fill text-success"></i>
                            </div>
                            <h5 class="text-light mb-0">Keamanan</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 text-start">
                        <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-universal-access-circle text-danger"></i>
                            </div>
                            <h5 class="text-light mb-0">Akses Mudah</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-stars text-warning"></i>
                            </div>
                            <h5 class="text-light mb-0">Berkualitas</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-0 feature-row">
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-credit-card text-success"></i>
                    </div>
                    <h5 class="mb-3">Kemudahan Bertransaksi</h5>
                    <p   class="mb-0">Proses pembayaran yang mudah dan cepat dengan berbagai metode pembayaran yang tersedia.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-geo-alt text-success"></i>
                    </div>
                    <h5 class="mb-3">Lokasi Strategis</h5>
                    <p class="mb-0">Temukan kost dengan lokasi yang dekat dengan kampus, kantor, dan fasilitas umum lainnya.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-cash text-success"></i>
                    </div>
                    <h5 class="mb-3">Harga Terjangkau</h5>
                    <p class="mb-0">Pilihan kost dengan harga yang bersahabat dan sesuai dengan budget Anda.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-clock text-success"></i>
                    </div>
                    <h5 class="mb-3">Pelayanan 24/7</h5>
                    <p class="mb-0">Layanan pelanggan yang siap membantu Anda kapan saja, 24 jam sehari, 7 hari seminggu.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Features Start -->
<div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 pt-lg-5">
                <div class="bg-white p-5 mt-lg-5">
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">Penyewaan dan Pengaturan</h1>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-phone-flip text-dark"></i>
                            </div>
                            <h5 class="mb-3">Pengalaman Penggunaan</h5>
                            <span>Kemudahan dalam mencari dan memesan kamar kost melalui platform kami.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-person-gear text-dark"></i>
                            </div>
                            <h5 class="mb-3">Layanan Pelanggan</h5>
                            <span>Tim dukungan kami siap membantu Anda dengan segala pertanyaan dan kebutuhan Anda.</span>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="">Explore More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row h-100 align-items-end">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center justify-content-center" style="min-height: 300px; left: 100%;">
                            <button type="button" class="btn-play" data-bs-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LI7PytVd-xY?si=r2jfIh7s3ALBKBqW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


<!-- Team Start -->
    <div class="container-fluid container-team py-5 team-section">
        <div class="container pb-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-inline-flex position-relative rounded-img shadow">
                    <img class="rounded-img img-fluid w-350" style="width: 550px; height: auto; object-fit: cover; margin-right: -020px;" src="<?= base_url() ?>/assets/img/team13.png" alt="">
                        <div class="p-4 flex-grow-1">
                            <div class="text-auto text-md-left p-4">
                                <h1 class="display-6 mb-3">Ryan Mahardika</h1>
                                <h3 class="mb-3">CEO & Founder</h3>
                                <h4 class="mb-5">IC Kost</h4>
                                <h2 class="mb-3">Biography</h2>
                                <p class="mb-4"><b>Ryan Mahardika lahir di Pekalongan pada 27 Agustus 2004. Pendidikan dasar di SD Muhammadiyah Legokkalong, melanjutkan ke SMP Negeri 1 Wonopringgo, dan SMA Negeri 1 Bojong. Saat ini, menempuh pendidikan tinggi di STMIK Widya Pratama Pekalongan. Dengan visi menjadi individu berintegritas tinggi dan berpengetahuan luas, berkomitmen untuk berkontribusi positif dalam bidang teknologi informasi dan memajukan masyarakat melalui inovasi dan kreativitas. Misi mencakup pengembangan diri berkelanjutan melalui pendidikan dan pengalaman praktis, mengaplikasikan ilmu pengetahuan untuk menciptakan solusi teknologi yang bermanfaat, menjunjung tinggi nilai etika dan profesionalisme, berkolaborasi untuk mendorong inovasi teknologi, serta berpartisipasi aktif dalam kegiatan sosial untuk memberikan dampak positif bagi lingkungan sekitar.</b></p>
                                <div class="d-flex justify-content-center justify-content-md-start">
                                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-lg-square btn-primary me-2" href="https://www.instagram.com/ryan_mhdka27?igsh=MTY5MHB4cnpmaW4zdQ=="><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded-img shadow">
                        <div class="position-relative overflow-hidden">
                            <img class="rounded-img img-fluid w-100" src="<?= base_url() ?>/assets/img/team-2.png" alt="">
                            <div class="team-social rounded-img text-center">
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="https://www.instagram.com/bgas.30?igsh=MmEycWFiNnA5MnAy"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">M Bagas Irianto</h5>
                            <span>Chief Financial Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded-img shadow">
                        <div class="position-relative overflow-hidden">
                            <img class="rounded-img img-fluid w-100" src="<?= base_url() ?>/assets/img/team-3.png" alt="">
                            <div class="team-social rounded-img text-center">
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="https://www.instagram.com/keishaadrp?igsh=MXB4Y3J1dmtvZ3M0cA=="><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Keisha Diandra Ratna P</h5>
                            <span>Chief Marketing Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded-img shadow">
                        <div class="position-relative overflow-hidden">
                            <img class="rounded-img img-fluid w-100" src="<?= base_url() ?>/assets/img/team-5.png" alt="">
                            <div class="team-social rounded-img text-center">
                                <a class="btn btn-square btn-light mx-1" href="https://www.facebook.com/muhammadnailul.author.52"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="https://www.instagram.com/muhnailul_author/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">M Nailul Author</h5>
                            <span>Chief Technology Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded-img shadow">
                        <div class="position-relative overflow-hidden">
                            <img class="rounded-img img-fluid w-100" src="<?= base_url() ?>/assets/img/team-4.png" alt="">
                            <div class="team-social rounded-img text-center">
                                <a class="btn btn-square btn-light mx-1" href="https://www.facebook.com/jauza.zidan/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="https://www.linkedin.com/in/jgzaidan/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="https://www.instagram.com/jgzaedn_/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Jauza Gama Zaidaan</h5>
                            <span>Chief Operating Officer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Team End -->



<?= $this->endSection(); ?>