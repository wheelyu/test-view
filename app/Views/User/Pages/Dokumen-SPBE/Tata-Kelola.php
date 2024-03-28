<?= $this->extend('User/Layout/master'); ?>

<?= $this->section('content'); ?>

    <!-- tentang.html -->
    <div class="about">
        
        <div class="container mt-5">
        <br>
        <div class="breadcrumbs"style="width: 450px;">
            
                <a href="/">Beranda &nbsp;</a>
                <i class="fa fa-angle-right"></i>
                <a>Domain SPBE</a>
                <i class="fa fa-angle-right"></i>
                <a class="active">Tata Kelola SPBE</a>
            </div>
        </div>
        <br><br><br><br><br><br>
        <div class="container mt-5">
            <div class="card w-100" style="width: 18rem;">
                <table class="judul">
                    <tr>
                        <th>TATA KELOLA SPBE<br></th>
                        <br>
                    </tr>
                </table>
                <div class="regulasi">

                    
                    <div class="container">
                    <div class="d-flex">
                        <a id="toggleBtn" class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#peraturan-presiden" role="button" aria-expanded="false" aria-controls="peraturan-presiden">
                            <h8>
                            <i id="icon" class="fas fa-plus"></i> &nbsp;&nbsp;Aspek 2 : Perencanaan Strategis SPBE
                            </h8>
                        </a>
                    </div>

                    <div class="collapse" id="peraturan-presiden">
                        <div class="card card-body">
                            <ul>
                                <li><a href="preview">Indikator 4 : Arsitektur SPBE Pemerintah Daerah</a></li>
                                <li><a href="preview">Indikator 5 : Arsitektur SPBE Pemerintah Daerah</a></li>
                                <li><a href="preview">Indikator 6 : Arsitektur SPBE Pemerintah Daerah</a></li>
                            </ul>
                        </div>
                    </div>

                    </div>
                    <div class="container mt-2">
                        <div class="d-flex">
                            <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#peraturan-menteri" role="button" aria-expanded="false" aria-controls="peraturan-menteri">
                                <h8>
                                <i class="fas fa-plus"></i> &nbsp;&nbsp;Aspek 2 : Perencanaan Strategis SPBE
                                </h8>
                            </a>
                        </div>
                        
                        <div class="collapse" id="peraturan-menteri">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                    <div class="container mt-2">
                        <div class="d-flex">
                            <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#keputusan-menteri" role="button" aria-expanded="false" aria-controls="keputusan-menteri">
                                <h8>
                                <i class="fas fa-plus"></i> &nbsp;&nbsp;Aspek 2 : Perencanaan Strategis SPBE
                                </h8>    
                            </a>
                        </div>
                        
                        <div class="collapse" id="keputusan-menteri">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                    <div class="container mt-2">
                        <div class="d-flex">
                            <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#surat-menteri" role="button" aria-expanded="false" aria-controls="surat-menteri">
                                
                                <h8>
                                <i class="fas fa-plus"></i> &nbsp;&nbsp;Aspek 2 : Perencanaan Strategis SPBE
                                </h8>
                            </a>
                        </div>
                        
                        <div class="collapse" id="surat-menteri">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>    

</div>
        </div>
        <br><br>
    </div>
    <!-- tentang.html -->
<script>
    document.getElementById('toggleBtn').addEventListener('click', function() {
        var icon = document.getElementById('icon');
        if (icon.classList.contains('fa-plus')) {
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
        } else {
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
        }
    });
</script>
<?php $this->endSection(); ?>