<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <!-- tentang.html -->

    <div class="about">
        
        <div class="container mt-5">
        <br>
        <div class="breadcrumbs" style="width: 420px;">
            
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a href="/">Tentang SPBE</a>
                <i class="fa fa-angle-right"></i>
                <a class="active">Visi dan Misi</a>
            </div>
        </div>
        <br><br><br><br><br><br>
        <div class="container mt-5">
            <div class="card w-100" style="width: 18rem;">
                <table class="judul">
                    <tr>
                        <th>VISI DAN MISI SPBE<br></th>
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
                        <h1>VISI</h1>
                        <p>Terwujudnya sistem pemerintahan berbasis elektronik yang terpadu dan menyeluruh untuk mencapai birokrasi dan pelayanan publik yang berkinerja tinggi.</p>
                        <br><br><br><br><br><br><br>
                        <h1>MISI</h1>
                        <p>a.  Melakukan penataan dan penguatan organisasi dan tata kelola sistem             
                                pemerintahan berbasis elektronik yang terpadu<br>
                            b. Mengembangkan pelayanan publik berbasis elektronik yang terpadu, 
                                menyeluruh, dan menjangkau masyarakat luas<br>
                            c. Membangun fondasi teknologi informasi dan komunikasi yang  
                                terintegrasi, aman, dan andal<br>
                            d. Membangun SDM yang kompeten dan inovatif berbasis teknologi 
                                informasi dan komunikasi</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <!-- tentang.html -->
    <?php $this->endSection(); ?>