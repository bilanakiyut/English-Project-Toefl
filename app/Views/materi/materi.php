<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Materi - English Learning Journey</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon: #8B2B42;
            --maroon-dark: #430c17;
            --cream-light: #FAF4E7; 
            --text-dark: #2a0d15;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            background-color: var(--cream-light);
            min-height: 100vh;
            overflow-x: hidden; /* SANGAT PENTING: Agar saat gambar dipaksa mepet keluar layar, tidak muncul scrollbar bawah */
        }

        /* NAVBAR PREMIUM */
        nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 30px 70px;
            gap: 35px;
            background-color: transparent;
            position: relative;
            z-index: 10;
        }

        nav a {
            text-decoration: none;
            color: var(--text-dark);
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: color 0.3s;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -4px; left: 0;
            width: 0; height: 1px;
            background: var(--maroon);
            transition: width 0.3s ease;
        }

        nav a:hover { color: var(--maroon); }
        nav a:hover::after { width: 100%; }

        /* CONTAINER UTAMA (FULL TANPA BATAS) */
        .materi-section {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 80px;
            display: flex;
            flex-direction: column;
            gap: 35px; /* Jarak vertikal antar baris materi */
        }

        /* STRUKTUR LINK UNTUK PEMBUNGKUS */
        .materi-link {
            display: flex;
            width: 100%;
            text-decoration: none;
            transition: transform 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        /* STRUCTURE & LISTENING -> PAKSA TOTAL KEKANAN */
        .materi-link.align-right {
            justify-content: flex-end;
        }

        /* READING -> PAKSA TOTAL KEKIRI */
        .materi-link.align-left {
            justify-content: flex-start;
        }

        /* PENGATURAN UKURAN GAMBAR SVG FIGMA */
        .materi-link img {
            width: 90%; /* Dinaikkan dari 83% ke 90% agar mekar besar memenuhi layar */
            max-width: 1350px; /* Batas atas monitor besar agar tetap proporsional */
            height: auto;
            display: block;
        }

        /* TRIK SAKTI: MEMBERIKAN NEGATIVE MARGIN UNTUK MEMBUANG SISA TRANSPARAN SVG */
        .materi-link.align-right img {
            margin-right: -50px; /* Menarik kartu Structure & Listening lebih kanan lagi menembus batas monitor */
        }

        .materi-link.align-left img {
            margin-left: -50px; /* Menarik kartu Reading lebih kiri lagi menembus batas monitor */
        }

        /* HOVER EFFECT (MUTAR BALIK ARAH GESER SEDIKIT) */
        .materi-link.align-right:hover {
            transform: translateX(-15px);
        }
        .materi-link.align-left:hover {
            transform: translateX(15px);
        }

        /* RESPONSIF UNTUK HANDPHONE */
        @media (max-width: 900px) {
            nav { padding: 20px; justify-content: center; gap: 20px; }
            .materi-section { gap: 20px; }
            .materi-link img { 
                width: 100%; 
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
            .materi-link.align-right:hover, .materi-link.align-left:hover { 
                transform: translateY(-5px); 
            }
        }
    </style>
</head>
<body>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/materi') ?>">Material</a>
        <a href="<?= base_url('quiz_toefl') ?>">TOEFL</a>
       <a href="<?= base_url('dashboard_history') ?>">History</a>
        <a href="#">About Us</a>
    </nav>

    <div class="materi-section">

        <a href="<?= base_url('materi/structure/structure') ?>" class="materi-link align-right" style="cursor: pointer; display: flex;">
            <img src="<?php echo base_url('assets/images/materi-structure.svg'); ?>" alt="Materi Structure" style="pointer-events: none;">
        </a>

    
        <a href="<?= base_url('materi/writing/writing') ?>" class="materi-link align-left" style="cursor: pointer; display: flex;">
            <img src="<?php echo base_url('assets/images/materi-writing.svg'); ?>" alt="Materi Writing" style="pointer-events: none;">
        </a>

        <a href="<?= base_url('materi/reading/reading') ?>" class="materi-link align-right" style="cursor: pointer; display: flex;">
            <img src="<?php echo base_url('assets/images/materi-reading.svg'); ?>" alt="Materi Reading" style="pointer-events: none;">
        </a>

        <a href="<?= base_url('materi/listening/listening') ?>" class="materi-link align-left" style="cursor: pointer; display: flex;">
            <img src="<?php echo base_url('assets/images/materi-listening.svg'); ?>" alt="Materi Listening" style="pointer-events: none;">
        </a>

    </div>

</body>
</html>