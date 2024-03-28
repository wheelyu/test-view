<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <!-- tentang.html -->
    <div class="about">
        
        <div class="container mt-5">
        <br>
        <div class="breadcrumbs" style="width: 490px;">
            
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a href="/">Tentang SPBE</a>
                <i class="fa fa-angle-right"></i>
                <a class="active">Tujuan dan Sasaran</a>
            </div>
        </div>
        <br><br><br><br><br><br>
        <div class="container mt-5">
            <div class="card w-100" style="width: 18rem;">
                <table class="judul">
                    <tr>
                        <th>TUJUAN DAN SASARAN<br></th>
                        <br>
                    </tr>
                </table>
                <div class="container d-flex">
                    <div class="latar ">
                        <img src="img/bgs1.png" width="130" height="636">
                        <div class="ics">
                            <img class="img-one"src="img/bgs2.png">
                        </div>
                        <div class="scnd">
                            <img src="img/bgs2.png">
                        </div>
                    </div>
                    <div class="visi">
                        <h1>TUJUAN</h1>
                        <p>a. Mewujudkan tata kelola pemerintahan yang bersih, efektif, efisien,   
                                transparan, dan akun tabel<br>
                            b. Mewujudkan pelayanan yang berkualitas dan terpercaya<br>
                            c. Mewujudkan SPBE yang terpadu</p>
                        <br><br><br><br><br><br><br>
                        <h1>SASARAN</h1>
                        <p>a. Terwujudnya tata kelola dan manajemen SPBE yang efektif dan efisien <br>
                            b. Terwujudnya layanan SPBE yang terpadu dan berorientasi kepada pengguna  <br>             
                            c. Terselenggaranya infrastruktur SPBE yang terintegrasi <br>
                            d. Meningkatnya kapasitas sumber daya manusia SPBE</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <!-- tentang.html -->
    <?php $this->endSection(); ?>