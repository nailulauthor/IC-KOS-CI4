<?= $this->extend('landing/templates/template'); ?>

<?= $this->section('content') ?>

<!-- Carousel Start -->
<div class="container-fluid header-carousel px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?= base_url() ?>/assets/img/room-bedroom2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <h1 class="display-1 text-white animated slideInRight mb-3">Internet Commerce Kos</h1>
                                <div class="lan">
                                    <p class="mb-5 animated slideInRight">Selamat datang di IC-KOS tempat kos yang aman, nyaman, dan terjangkau! Dengan slogan "Mengekos dengan Aman",  kami berkomitmen untuk memastikan setiap pelanggan merasa nyaman dan puas dengan pelayanan terbaik kami. Mari rasakan pengalaman kos yang berbeda bersama kami!</p>
                                </div>                                
                                <a href="/users" class="btn btn-primary py-3 px-5 animated slideInRight">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= base_url() ?>/assets/img/room-bedroom1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">~
                            <div class="col-lg-7 text-end">
                                <h1 class="display-1 text-white animated slideInLeft mb-3">Mau Ngekos Dengan Aman?</h1>
                                <div class="lan">
                                    <p class="mb-5 animated slideInLeft">Bergabunglah dengan kami untuk sewa kos tanpa ribet! Kami menjamin keamanan, kenyamanan, dan harga yang terjangkau. Nikmati pengalaman menginap yang menyenangkan bersama kami!</p>
                                </div>                                
                                <a href="/users" class="btn btn-primary py-3 px-5 animated slideInLeft">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


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


<!-- Service Start -->
<div class="container-fluid container-service py-5">
    <div class="container pt-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-3"><b>Tujuan strategis & fokus operasional IC Kost</b></h1>
        </div>
        <br>
        <br>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item shadow">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-shield-check text-success"></i>
                    </div>
                    <h5 class="mb-3">Menyediakan Informasi Terpercaya</h4>
                        <p class="mb-0">Kami berkomitmen untuk menyajikan informasi yang jelas, akurat, dan dapat diandalkan, memastikan pengguna mendapatkan data yang transparan mengenai semua pilihan kos yang tersedia.</p>
                        <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item shadow ">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-calendar-check text-primary"></i>
                    </div>
                    <h5 class="mb-3">Mengoptimalkan Proses Reservasi</h4>
                        <p class="mb-4">Kami berusaha untuk mempermudah dan mempercepat proses pencarian dan reservasi kos melalui platform yang user-friendly dan efisien.</p>
                        <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item shadow">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-diagram-3 text-info"></i>
                    </div>
                    <h5 class="mb-3">Memberikan Solusi Manajement Terpadu</h4>
                        <p class="mb-4">Kami menyediakan alat dan layanan manajemen yang komprehensif untuk membantu pemilik kos dalam mengelola properti mereka secara efektif dan efisien.</p>
                        <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item shadow">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-shield-lock text-danger"></i>
                    </div>
                    <h5 class="mb-3">Memastikan Keamanan Pengguna</h4>
                        <p class="mb-4">Kami memastikan bahwa setiap pengguna merasa aman dan yakin dengan pilihan mereka melalui verifikasi dan review yang ketat.</p>
                        <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item shadow">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-diagram-2 text-primary"></i>
                    </div>
                    <h5 class="mb-3">Membangun Jaringan yang Komprehensif</h4>
                        <p class="mb-4"> Kami berupaya untuk mengumpulkan dan menyajikan informasi kos yang lengkap dan menyeluruh, mencakup berbagai daerah dan tipe properti.</p>
                        <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item shadow">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-gear-wide-connected text-success"></i>
                    </div>
                    <h5 class="mb-3">Memanfaatkan Teknologi Inovasi Berkelanjutan</h4>
                        <p class="mb-4">Kami menggunakan teknologi terbaru untuk terus berinovasi dan meningkatkan layanan kami, memastikan platform kami selalu mutakhir dan relevan.</p>
                        <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item shadow">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-people text-info"></i>
                    </div>
                    <h5 class="mb-3">Membangun Hubungan dengan Mitra</h4>
                        <p class="mb-4"> Kami menjalin hubungan yang kuat dengan mitra dan komunitas untuk menciptakan ekosistem yang saling mendukung dan bermanfaat bagi semua pihak.</p>
                        <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item shadow">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-person-circle text-primary"></i>
                    </div>
                    <h5 class="mb-3">Mengutamakan Pengguna</h4>
                        <p class="mb-4">Kami selalu menempatkan kepuasan pengguna sebagai prioritas utama, dengan memberikan layanan terbaik dan responsif terhadap kebutuhan dan masukan mereka.</p>
                        <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Appoinment Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-4">Kami Pastikan Anda Akan Selalu Mendapatkan Pelayanan Terbaik</h1>
                <br>
                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                    <div class="icon-box-primary">
                        <i class="bi bi-geo-alt text-dark fs-1"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Alamat Kantor</h5>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                    <div class="icon-box-primary">
                        <i class="bi bi-clock text-dark fs-1"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Waktu Pelayanan</h5>
                        <span>Senin-Sabtu 09am-5pm, Minggu Tutup</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Form Pelayanan</h2>
                    <form action="/send" method="post" target="_blank">
                        <?= csrf_field() ?>
                        <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="name" class="form-control" id="name" name="name" placeholder="Your Name">
                                <label for="name">Masukan Nama</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                <label for="mail">Masukan Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile">
                                <label for="mobile">Masukan No Hp</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service" name="service">
                                    <option selected>Reservasi Kamar Kost</option>
                                    <option value="">Pencarian Kost</option>
                                    <option value="">Pengelolaan Kost</option>
                                    <option value="">Layanan Pelanggan</option>
                                </select>
                                <label for="service">Pilih Layanan</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 130px"></textarea>
                                <label for="message">Pesan</label>
                            </div>
                        </div>
                        <input type="hidden" name="wa" value="6289677195688">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- Appoinment Start -->

<!-- Send wa Message Start -->


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


<!-- Testimonial Start -->
<!-- <div class="container-fluid testimonial py-5">
    <div class="container pt-5">
        <div class="row gy-5 gx-0">
            <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-4">What Clients Say About Our Lab Services!</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                <a href="" class="btn btn-primary py-3 px-5">More Testimonials</a>
            </div>
            <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white p-5">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-chat-left-quote text-dark"></i>
                            </div>
                            <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0" src="<?= base_url() ?>/assets/img/testimonial-1.jpg" alt="">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span class="text-primary">Profession</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-chat-left-quote text-dark"></i>
                            </div>
                            <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0" src="<?= base_url() ?>/assets/img/testimonial-2.jpg" alt="">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span class="text-primary">Profession</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial End -->

<?= $this->endSection(); ?>