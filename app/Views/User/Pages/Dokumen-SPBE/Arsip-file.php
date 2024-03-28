<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <!-- tentang.html -->
    <div class="about">
        
        <div class="container mt-5">
        <br>
            <div class="breadcrumbs" style="width: 400px;">
            
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a>DOMAIN SPBE</a>
                <i class="fa fa-angle-right"></i>
                <a class="active">ARSIP SPBE</a>
            </div>
        </div>
        <br><br><br><br><br><br>
        <div class="container mt-5">
            <div class="card w-100" style="width: 18rem;">
                <table class="judul">
                    <tr>
                        <th>ARSIP SPBE<br></th>
                        <br>
                    </tr>
                </table>
                <div class="Arsip mt-5">
                <div class="container  mb-5">

        
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                // Array of card data
                $cards = [
                    ["img" => "file","title" => "Judul kegiatan.pdf","link" => "preview"],
                    ["img" => "arsip","title" => "Judul kegiatan.png","link" => "file"],
                    ["img" => "arsip","title" => "Judul kegiatan.png","link" => "file"],
                    ["img" => "arsip","title" => "Judul kegiatan.png","link" => "file"],
                    ["img" => "arsip","title" => "Judul kegiatan.png","link" => "file"],
                    ["img" => "arsip","title" => "Judul kegiatan.png","link" => "file"],
                ];

                // Loop through each card data
                foreach ($cards as $card) {
                    ?>
                    <div class="file">
                        <div class="col">
                        <div class="card w-75">
                            <div class="card-header">
                                <?php echo $card['title']; ?>
                            </div>
                            <a href="<?php echo $card['link']; ?>">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="img/<?php echo $card['img']?>.png">
                                </h5>
                            </div>
                            </a>
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


        </div>
        <br><br>
    </div>
    <!-- tentang.html -->
    <?php $this->endSection(); ?>