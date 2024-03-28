<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $main ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        font-family: 'Poppins';
    }
    @media print{
        @page{
            margin-bottom: 10px;
        }
        .navbar, .btn, .print-hide, .preview-title,footer,a,i{
            display: none;
        }
        img{
            transform: scale(1.3);
        }
    }
    </style>
    <link href="assets/user/<?= $title ?>/styles.css" rel="stylesheet">
    <link href="assets/user/<?= $styles ?>/styles.css" rel="stylesheet">
    <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script defer src="script\script.js"></script>
    <link rel="icon" href="img\Logo SPBE.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <img src="img\Logo SPBE.png" class="logo">
                <div>
                    <a class="SPBE">SPBE</a>
                    <a class="kabupaten">Kabupaten Pesawaran</a>
                </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= $navbar == 'beranda' ? 'aktif' : '' ?>" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang SPBE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?= $navbar == 'vismis' ? 'aktif' : '' ?>" href="Visimisi">Visi dan Misi </a></li>
                            <li><a class="dropdown-item <?= $navbar == 'tujuan' ? 'aktif' : '' ?>" href="Tujuan">Tujuan dan Sasaran</a></li>
                            <li><a class="dropdown-item <?= $navbar == 'dokumen' ? 'aktif' : '' ?>" href="Dokumen">Dokumen SPBE</a></li>
                            <li><a class="dropdown-item <?= $navbar == 'Regulasi' ? 'aktif' : '' ?>" href="Regulasi">Regulasi SPBE</a></li>
                            <li><a class="dropdown-item <?= $navbar == 'Indeks' ? 'aktif' : '' ?>" href="Indeks">Indeks SPBE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Domain SPBE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?= $navbar == 'Kebijakan' ? 'aktif' : '' ?>" href="Kebijakan">Kebijakan SPBE</a></li>
                            <li><a class="dropdown-item <?= $navbar == 'Tata' ? 'aktif' : '' ?>" href="Tata">Tata Kelola SPBE</a></li>
                            <li><a class="dropdown-item <?= $navbar == 'Manajemen' ? 'aktif' : '' ?>" href="Manajemen">Manajemen SPBE</a></li>
                            <li><a class="dropdown-item <?= $navbar == 'Layanan' ? 'aktif' : '' ?>" href="Layanan">Layanan SPBE</a></li>
                            <li><a class="dropdown-item <?= $navbar == 'Arsip' ? 'aktif' : '' ?>" href="Arsip">Arsip SPBE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?= $navbar == 'Tentang' ? 'aktif' : '' ?>" href="Tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $navbar == 'Kontak' ? 'aktif' : '' ?>" href="Kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
</body>
</html>
