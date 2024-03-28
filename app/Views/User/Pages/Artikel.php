<?php
    $data = [
        ["img/Judul.png", "Peluang dan Tantangan Implementasi Transisi Energi di Indonesia Pasca KTT G20 Bali", "lorem10", "last updated","Halaman"],
        ["img/artikel.png", "Stunting", "stunting adalah permasalahan kesehatan", "last updated","Halaman"],
        ["img/artikel.png", "diskominfo", "diskominfo adalah instansi yang bergerak di bidang komunikasi", "last updated","Halaman"],
        ["img/artikel.png", "website spbe", "website ini adalah sebuah website spbe", "last updated","Halaman"],
        ["img/artikel.png", "pemerintah", "pemerintah adalah pemerintah", "last updated","Halaman"],

    ];
?>
<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <div class="bg">
        <div class="container ">
            <br><br><br>
            <div class="breadcrumb">
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a class="active">Artikel</a>
            </div>
            <h3>Artikel yang memuat informasi seputar SPBE
                di Kabupaten Pesawaran </h3>
            <h3></h3>
            <br>
            <div class="semua">
                <div class="kotak"></div>
                <div class="isi">
                    <h4>TOP 3</h4>
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
    </div>
    <div><br></div>
    <div class="berita">
        <div class="container">
            <div class="card w-100">
                <table class="judul">
                    <tr>
                        <th>ARTIKEL LAINNYA<br></th>
                        <br>
                    </tr>
                </table>
                <div class="container">
                    <div class="card w-100">
                        <div class="container">
                            <div class="row w-100">
                                    <div class="card-body">
                                        <table id="example" class="table table-hover isi">
                                            <thead>
                                                <tr>
                                                    <th>Artikel Terbaru</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $row): ?>
                                                <tr>
                                                    <td><img src="<?= $row[0] ?>" width="100"></td>
                                                    <td>
                                                        <div>
                                                            <a href="<?= $row[4] ?>"><?= $row[1] ?></a>
                                                        </div>
                                                        <p>
                                                            <?= $row[2] ?>
                                                        </p>
                                                        <small><?= $row[3] ?></small>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                            </div>
                        </div>
                    </div><br><br>
                </div>
            </div><br>
        </div>
    </div>
    <script>
        
    </script>
    <?php $this->endSection(); ?>
