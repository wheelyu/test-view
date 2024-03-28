<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

<!-- tentang.html -->
    <div class="about">
        <br>
        <div class="container mt-5">
        <div class="breadcrumb">
            
            <a href="/">Beranda &nbsp;</a>
            <i class="fa fa-angle-right"></i>
            <a class="active">Kontak</a>
        </div>
        </div>
        
        <div class="container mt-5">
            <div class="card w-100" style="width: 18rem;">
                <table class="judul">
                    <tr>
                        <th>KONTAK<br></th>
                        <br>
                    </tr>
                </table>
                <div class="container">
                <div class="form">      
                    <div class="card">
                    <div class="title ">
                        <p>Pusat Bantuan SPBE </p>
                        <p>Kabupaten Pesawaran</p>
                    </div>
                    <form class="row g-3 needs-validation m-3" novalidate>
                    <div class="col-md-100">
                        <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="row-md-6">
                        <label for="validationCustom03" class="form-label">Email</label>
                        <input type="email" class="form-control" id="validationCustom02" required>
                        <div class="invalid-feedback">
                        Please provide a valid Email.
                        </div>
                    </div>
                    <div class="row-md-6">
                        <label for="validationCustom03" class="form-label">No. Handphone</label>
                        <input type="number" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid number.
                        </div>
                    </div>
                    <div class="col-md-100">
                        <label for="validationCustom05" class="form-label">pertanyaan</label>
                        <textarea id="validationCustom04" class="form-control" required  rows="4"></textarea>
                        <div class="invalid-feedback">
                        Please provide a valid question.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                    </div>
                    <div class="faq">
                        <img src="img\faq.png">
                        <div class="teks">
                            <h5>Frequently Asked Questions</h5>
                            <p>FAQ berisi informasi yang dapat menjawab pertanyaan-pertanyaan umum yang sering diajukan.</p>
                            <a href="Faq"><button class="btn btn-primary">Cari Pertanyaan</button></button></a>
                        </div>
                        </div>
                </div>
                </div>
                <div class="container">
                    <div class="kontak mt-5">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card Alamat">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-map-marker-alt"></i>&nbsp;Alamat</h5>
                                    <p class="card-text">Komplek Perkantoran Pemerintah Kabupaten Pesawaran
                                                        Jl. Raya Kedondong, Way Layap, Kec. Gedong Tataan, 
                                                        Kab. Pesawaran, Provinsi Lampung, Indonesia, 35372</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card Telepon">
                                <div class="card-body ">
                                    <h5 class="card-title "><i class="fas fa-phone"></i>&nbsp;Telepon/Email</h5>
                                    <p class="card-text">Telp - (0721) 8032018 Fax - (0721) 8032018></p>
                                    <p class="card-text">Email - diskominfo@pesawarankab.go.id</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card Medsos">
                                <div class="card-body">
                                    <h5 class="card-title "><i class="fas fa-users"></i>&nbsp;Media Sosial</h5>
                                    <p class="card-text">Instagram : @diskominfotiksanpesawaran<br>
                                                        Facebook  : diskominfotiksan pesawaran<br>
                                                        YouTube : diskominfotiksan pesawaran</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card Jam">
                                <div class="card-body">
                                    <h5 class="card-title "><i class="fas fa-clock"></i>&nbsp;Jam Kerja</h5>
                                    <p class="card-text "><i class="fas fa-calendar"></i>&nbsp;Senin s.d. Jum’at</p>
                                    <p class="card-text "><i class="fas fa-clock"></i>&nbsp;07:30-16:00</p>
                                    
                                </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                        <center><div class="col mt-4 mb-4">
                                <div class="card w-50">
                                <div class="card-body">
                                    <h5 class="card-title">PETA</h5><br>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1047475966116!2d105.06866847572257!3d-5.401009753968891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40d2f093d4a027%3A0x35fedef26ffe058a!2sDINAS%20KOMUNIKASI%20DAN%20INFORMATIKA%20kab.%20PEsawaran!5e0!3m2!1sid!2sid!4v1710833001537!5m2!1sid!2sid" 
                                        width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                </div>
                            </div></center>
                    
                    
                </div>
            </div>
            
        </div>
        <br><br>
    </div>
    <!-- tentang.html -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Pemberitahuan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                Pesan Anda berhasil terkirim!
                Kami akan segera merespons pertanyaan Anda. Silahkan tunggu beberapa saat.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>