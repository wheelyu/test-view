
    <?php
        $judul = ["Peluang dan Tantangan  Implementasi Transisi Energi di Indonesia Pasca KTT G20 Bali","Jum'at","8 Maret 2024","11.05"];
        
    ?>
    <?= $this->extend('User/Layout/master'); ?>

    <?= $this->section('content'); ?>

    <!-- tentang.html -->
    <div class="about">
        <br>
        <div class="container mt-5">
            <div class="breadcrumb">
                
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a href="Artikel">Artikel</a>
                <i class="fa fa-angle-right"></i>
                <a class="active"><?= $judul[0] ?></a>
            </div>
        </div>
        
        <div class="container mt-5">
            <br><br><br>
            <div class="card w-100">
            <h5 class="card-judul"><?= $judul[0] ?></h5>
                <img src="img/judul.png" class="card-img-top" alt="...">
                <small><?= $judul[1] ?>, <?= $judul[2] ?>   |  <?= $judul[3] ?></small>
                <br><br>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, voluptatem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, id.
                </p>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum qui et consequatur eligendi, modi alias cum? Laudantium optio odio debitis laboriosam minima velit sunt deleniti, quis quos officiis dolorum porro vitae itaque quasi commodi mollitia dicta nesciunt voluptates natus ratione ad quidem cumque sit ipsum! Nulla eligendi alias vitae accusantium ad ea cum nostrum vel, cumque perspiciatis rem quam dolorem totam eveniet suscipit libero iure saepe doloremque expedita velit obcaecati? Laborum quisquam natus commodi voluptas magnam consequatur odit esse fuga, minus numquam iusto. Laboriosam, iusto labore architecto repudiandae corporis amet modi rerum! Praesentium maiores cum minima quos quibusdam, deserunt minus?
                </p>
                <br><br>
                </div>
        </div>
    
        <br><br>
    </div>
    <!-- tentang.html -->
    <?php $this->endSection(); ?>
