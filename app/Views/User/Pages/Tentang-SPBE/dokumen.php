<?php
    $data =[
        ["preview","12062023 Final Paparan Perubahan Pedoman 6-2023"],
        ["/","12062023 Final Paparan Perubahan Pedoman 6-2024"],
        ["/","12062024 Final Paparan Perubahan Pedoman 6-2024"],
        ["/","12062023 Final Paparan Perubahan Pedoman 6-2025"],
        ["/","12062025 Final Paparan Perubahan Pedoman 6-2025"],
        ["/","12062025 Final Paparan Perubahan Pedoman 6-2025"],
        ["/","12062023 Final Paparan Perubahan Pedoman 6-2023"],
        ["/","12062023 Final Paparan Perubahan Pedoman 6-2023"],
        ["/","12062023 Final Paparan Perubahan Pedoman 6-2023"],
        ["/","12062023 Final Paparan Perubahan Pedoman 6-2023"],
        ["/","12062023 Final Paparan Perubahan Pedoman 6-2023"],
        ["/","12062023 Final Paparan Perubahan Pedoman 6-2023"],
    ];
?>
<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <!-- tentang.html -->
    <div class="about">
        
        <div class="container mt-5">
        <br>
        <div class="breadcrumbs" style="width: 440px;">
            
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a href="/">Tentang SPBE</a>
                <i class="fa fa-angle-right"></i>
                <a class="active">Dokumen SPBE</a>
            </div>
        </div>
        <br><br><br><br><br><br>
        <div class="container mt-5">
            <div class="card w-100" style="width: 18rem;">
                <table class="judul">
                    <tr>
                        <th>DOKUMEN SPBE<br></th>
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
                                                    <th>Nama Dokumen</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $row): ?>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <a href="<?= $row[0] ?>"><?= $row[1] ?></a>
                                                        </div>
                                                        
                                                    </td>
                                                    <td>
                                                    <a href="img/regulasi.pdf" download class="dl"><center><i class="fas fa-arrow-down"></i></center></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
            </div>
        </div>
        <br><br>
    </div>
    <!-- tentang.html -->
    <?php $this->endSection(); ?>
