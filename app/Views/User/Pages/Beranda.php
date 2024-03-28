<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <div class="bg mt-5">        
        <div class="container mt-5">
            <br>
            <div class="margin-card">        
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                        // Array of card data
                        $artikel = [
                            ["link" => "Halaman","img" => "judul.png", "title" => "Peluang dan Tantangan Implementasi Transisi Energi di Indonesia Pasca KTT G20 Bali"],
                            ["link" => "Artikel", "img" => "artikel.png","title" => "Pemerintah Kabupaten Pesawaran Gelar Vaksin Guna Pencegahan Stunting Pada Anak"],
                            ["link" => "Artikel", "img" => "artikel.png","title" => "Pemerintah Kabupaten Pesawaran Gelar Vaksin Guna Pencegahan Stunting Pada Anak"],
                            // ["img"artikel.png", "title" => "Indeks 2021"],
                            // ["img" => "indeks.png", "title" => "Indeks 2022"],
                            // ["img" => "indeks.png", "title" => "Indeks 2023"],
                        ];

                        foreach ($artikel as $card) {
                            ?>
                            <div class="col">
                                <div class="card w-100 artikel">
                                <img src="img\<?php echo $card['img']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><?php echo $card['title']; ?></button></p>
                                    <a href="<?php echo $card['link'];?>"><button type="button" class="btn btn-danger">Lihat Selengkapnya</button></a>
                                </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="button">
            <div class="row justify-content-end btn-container">
                <div class="col-auto">
                    <a href="Artikel"><button type="button" class="btn btn-danger">Lihat Artikel lainnya <i class="fas fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="tentang"> 
        <div class="container">
            <h5 class="fw-bold">TENTANG SPBE</h5>
            <img src="img\tentang.png" alt="...">
            <p>Sistem Pemerintahan Berbasis Elektronik (SPBE) 
                merupakan penyelenggaraan pemerintahan yang memanfaatkan 
                teknologi informasi dan komunikasi untuk memberikan layanan 
                kepada Pengguna SPBE. Untuk memastikan pelaksanaan SPBE di 
                Instansi Pusat dan Pemerintah Daerah selaras dengan prinsip 
                terintegrasi dan terpadu, maka Instansi Pusat dan Pemerintah 
                Daerah diharapkan menerapkan unsur-unsur SPBE sesuai dengan 
                kerangka kerja Tata Kelola SPBE dan Manajemen SPBE agar penerapan 
                SPBE dapat berjalan efektif, efisien, dan berkesinambungan, serta 
                dapat menghasilkan layanan SPBE yang berkualitas dan optimal.</p>
        </div>
    </div>
        <div class="indeks">
            <div class="container">
                <h5 class="fw-bold text-center mt-5 mb-5">INDEKS SPBE</h5>
                
            <div class="row row-cols-1 row-cols-md-3 g-4" >
                <?php
                    // Array of card data
                    $indeks = [
                        ["img" => "indeks.png", "title" => "Indeks 2021"],
                        ["img" => "indeks.png", "title" => "Indeks 2022"],
                        ["img" => "indeks.png", "title" => "Indeks 2023"],
                        // ["img" => "indeks.png", "title" => "Indeks 2021"],
                        // ["img" => "indeks.png", "title" => "Indeks 2022"],
                        // ["img" => "indeks.png", "title" => "Indeks 2023"],
                    ];

                    foreach ($indeks as $card) {
                        ?>
                        <div class="col">
                            <div class="card border-1">
                            <img src="img\<?php echo $card['img']; ?>" class="card-img-top" alt="...">
                                <div class="card-body"> 
                                    <a href="Indeks"><button type="button" class="btna btn-danger"><?php echo $card['title']; ?></button></a>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
            <br>
            <div class="container">
                <div class="button">
                    <div class="row justify-content-end btn-container">
                        <div class="col-auto">
                        <a href="Indeks"><button type="button" class="btn btn-danger">Lihat lainnya <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="aplikasi">
            <div class="container">
                <h5 class="fw-bold text-center mt-5 mb-5">APLIKASI SPBE</h5>
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active visually-hidden" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="visually-hidden"aria-label="Slide 2"></button>
            </div>
            <center><div class="carousel-inner">
                <div class="carousel-item active mb-5">
                    <a href="#">
                        <img src="img/SIPD.png" class="img-zoom">
                    </a>
                    <a href="#">
                        <img src="img/JDIHN.png" class="img-zoom">
                    </a>
                    <a href="#">
                        <img src="img/SIPD.png" class="img-zoom">
                    </a>
                    <a href="#">
                        <img src="img/JDIHN.png" class="img-zoom">
                    </a>
                </div>
                <div class="carousel-item mb-5">
                    <a href="#">
                        <img src="img/SIPD.png" class="img-zoom">
                    </a>
                    <a href="#">
                        <img src="img/JDIHN.png" class="img-zoom">
                    </a>
                    <a href="#">
                        <img src="img/SIPD.png" class="img-zoom">
                    </a>
                    <a href="#">
                        <img src="img/JDIHN.png" class="img-zoom">
                    </a>
                </div></center>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="fas fa-arrow-left" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="fas fa-arrow-right" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>