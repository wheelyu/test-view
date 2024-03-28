<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <!-- tentang.html -->
    <div class="about">
        
        <div class="container mt-5">
        <br>
        <div class="breadcrumbs" style="width: 300px;">
            
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a class="active">Tentang Kami</a>
            </div>
        </div>
        
        <div class="container mt-5">
            <div class="card w-100" style="width: 18rem;">
                <table class="judul">
                    <tr>
                        <th>TENTANG KAMI<br></th>
                        <br>
                    </tr>
                </table>
                <div class="carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicator" hidden>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <center> <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img\kamii.png" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img\kamii.png" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img\kamii.png" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\kamii.png" class="d-block w-50" alt="...">
                        </div>
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
                <div class="card-body">
                    <div class="card w-100 mt-5" style="width: 18rem;">
                        <div class="semua">
                            <div class="kotak">
                            </div>
                            <div class="isi">
                                <br>
                                <h4 class="card-title mt-1">VISI DAN MISI DISKOMINFOTIKSAN PESAWARAN</h4>
                                <h7><strong>Visi</strong></h7>
                                <ol>
                                    <p>Terwujudnya Pusat Informasi Dan Komunikasi Untuk Menunjang Pembangunan Daerah Menuju Lampung Unggul Dan Berdaya Saing</p>
                                </ol>
                                    
                                <h7><strong>Misi</strong></h7>
                                <ol>
                                    <p>Meningkatkan Daya Dukung Infrastruktur Teknologi Komunikasi dan Informasi untuk Memperluas Akses Masyarakat terhadap Informasi Pembangunan Daerah.</p>
                                    <p>Meningkatkan Kompetensi Sumber Daya Manusia bidang Komunikasi dan Informatika secara Profesional.</p>
                                    <p>Meningkatkan Kualitas Layanan Komunikasi dan Informasi kepada Masyarakat dalam rangka Mewujudkan Masyarakat Berbudaya Informasi</p>
                                </ol>
                                
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <!-- tentang.html -->
    <?php $this->endSection(); ?>