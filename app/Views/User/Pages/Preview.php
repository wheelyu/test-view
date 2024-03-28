<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <!-- tentang.html -->
    <div class="about">
        
        <div class="container mt-5">
        <br>
            <div class="print-hide">
                <div class="breadcrumbs">
                    <a href="/">Beranda &nbsp;</a>
                    <i class="fa fa-angle-right"></i>
                    <a href="/">Tentang SPBE</a>
                    <i class="fa fa-angle-right"></i>
                    <a class="active">Dokumen SPBE</a>
                </div>
            </div>
        </div>
        
        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-md preview-title">
                    <h8>12062023 Final Paparan Perubahan Pedoman 6-2023</h8>
                </div>
                <div class="col-md preview-print" >
                    <button class="btn btn-light" id="printButton"><i class="fa fa-print"></i></button>
                    <button class="btn btn-light"><i class="fa fa-arrow-down"></i></button>
                    <button class="btn btn-light"><i class="fa fa-share"></i></button>
                </div>
            </div>
            <div class="preview-file">
                <img src="img/regulasi.png" ></img>
            </div>
        </div>

        <br><br>
    </div>
    <!-- tentang.html -->
    <?php $this->endSection(); ?>