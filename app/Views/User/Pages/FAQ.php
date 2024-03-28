<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

<!-- tentang.html -->
    <div class="about">
    <br>
        <div class="container mt-5">
            <div class="breadcrumb">
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a class="active">FAQ</a>
            </div>
            <p>Cari Informasi disini..</p>
            <div class="input">
                <button class="btn-search fas fa-search"></button>
                <input type="text" placeholder="search" class="search">
            </div>
        </div>
        <br><br><br><br>
        <div class="container mt-5 mb-5">
        <p>Pertanyaan yang sering diajukan</p>
        
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                // Array of card data
                $cards = [
                    ["title" => "Di mana saya bisa menemukan informasi tentang kebijakan pemerintah dan peraturan daerah?", "text" => "Informasi tentang kebijakan, peraturan, dan layanan publik dapat ditemukan melalui portal e-Government atau situs web resmi pemerintah yang terhubung dengan e-Government."],
                    ["title" => "Di mana saya bisa menemukan informasi tentang kebijakan pemerintah dan peraturan daerah?", "text" => "Informasi tentang kebijakan, peraturan, dan layanan publik dapat ditemukan melalui portal e-Government atau situs web resmi pemerintah yang terhubung dengan e-Government."],
                    ["title" => "Di mana saya bisa menemukan informasi tentang kebijakan pemerintah dan peraturan daerah?", "text" => "Informasi tentang kebijakan, peraturan, dan layanan publik dapat ditemukan melalui portal e-Government atau situs web resmi pemerintah yang terhubung dengan e-Government."],
                    ["title" => "Di mana saya bisa menemukan informasi tentang kebijakan pemerintah dan peraturan daerah?", "text" => "Informasi tentang kebijakan, peraturan, dan layanan publik dapat ditemukan melalui portal e-Government atau situs web resmi pemerintah yang terhubung dengan e-Government."],
                    ["title" => "Di mana saya bisa menemukan informasi tentang kebijakan pemerintah dan peraturan daerah?", "text" => "Informasi tentang kebijakan, peraturan, dan layanan publik dapat ditemukan melalui portal e-Government atau situs web resmi pemerintah yang terhubung dengan e-Government."],
                    ["title" => "Di mana saya bisa menemukan informasi tentang kebijakan pemerintah dan peraturan daerah?", "text" => "Informasi tentang kebijakan, peraturan, dan layanan publik dapat ditemukan melalui portal e-Government atau situs web resmi pemerintah yang terhubung dengan e-Government."],
                ];

                // Loop through each card data
                foreach ($cards as $card) {
                    ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card['title']; ?></h5>
                                <br>
                                <p class="card-text"><?php echo $card['text']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php $this->endSection(); ?>
