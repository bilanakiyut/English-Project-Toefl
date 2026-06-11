<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Modules - English Learning Journey</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon: #8B2B42;
            --maroon-dark: #430c17;
            --text-dark: #2a0d15;
            --cream-bg: #FAF4E7; 
            --card-white: #FFFDF9; 
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            background-color: var(--cream-bg);
            color: var(--text-dark);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ================= NAVBAR PREMIUM ================= */
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

        /* ================= HEADER BANNER UTAMA (SAMA PERSIS DENGAN STRUCTURE) ================= */
        .header-banner {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: -10px;
            margin-bottom: 60px;
        }

        .header-banner img {
            width: 100%; 
            max-width: 1400px; 
            height: auto;
            display: block;
            margin-left: -40px;
            margin-right: -40px;
        }

        /* ================= CONTAINER SEKSI BUKU ================= */
        .section-container {
            max-width: 1200px;
            margin: 0 auto 60px;
            padding: 0 40px;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: var(--maroon);
            margin-bottom: 35px;
            font-weight: 700;
        }

        /* ================= ROW GRID HORIZONTAL (BISA DIGESER) ================= */
        .books-grid {
            display: flex; 
            gap: 35px; 
            margin-bottom: 50px;
            overflow-x: auto; 
            scroll-behavior: smooth;
            padding: 25px 15px; 
            
            -webkit-overflow-scrolling: touch; 
            scroll-snap-type: x mandatory; 
        }

        /* Sembunyikan Scrollbar */
        .books-grid::-webkit-scrollbar {
            display: none; 
        }
        .books-grid {
            -ms-overflow-style: none;  
            scrollbar-width: none;  
        }

        /* ================= STYLING KARTU BUKU KOTAK PUTIH ================= */
        .book-card {
            background-color: var(--card-white); 
            border-radius: 20px;
            padding: 35px 25px; 
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 8px 24px rgba(42, 13, 21, 0.04); 
            border: 1px solid rgba(139, 43, 66, 0.05);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), 
                        box-shadow 0.4s ease, 
                        border-color 0.4s ease; 
            
            flex: 0 0 280px; 
            scroll-snap-align: start; 
        }

        /* EFEK INTERAKTIF: Kartu Membesar Nyata Saat Hover */
        .book-card:hover {
            transform: scale(1.08) translateY(-10px); 
            box-shadow: 0 25px 45px rgba(139, 43, 66, 0.15); 
            border-color: rgba(139, 43, 66, 0.25);
        }

        .book-card:active {
            transform: scale(1.02) translateY(-4px);
        }

        /* WRAPPER GAMBAR BUKU */
        .book-img-wrapper {
            width: 100%;
            max-width: 180px; 
            height: 200px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .book-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: contain; 
        }

        /* TYPOGRAPHY KARTU */
        .book-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--maroon);
            margin-bottom: 12px;
            line-height: 1.25;
        }

        .book-card p {
            font-size: 0.98rem;
            color: #6a575b;
            line-height: 1.45;
        }

        /* LINE GRADIENT PEMBATAS EMAS */
        .section-divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #D9CBB0, transparent);
            border: none;
            margin: 50px 0;
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1024px) {
            nav { padding: 25px 40px; }
            .section-container { padding: 0 20px; }
            .header-banner img { max-width: 100%; margin-left: 0; margin-right: 0; }
            .book-card { flex: 0 0 260px; } 
        }

        @media (max-width: 600px) {
            nav { padding: 20px; justify-content: center; gap: 15px; }
            nav a { font-size: 0.85rem; letter-spacing: 1px; }
            .book-card { flex: 0 0 85%; } 
            .section-title { font-size: 1.8rem; }
            .header-banner { padding: 0 10px; margin-bottom: 40px; }
        }
    </style>
</head>
<body>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('materi') ?>">Material</a>
        <a href="#">Soal</a>
        <a href="#">TOEFL</a>
        <a href="#">History</a>
        <a href="#">About Us</a>
    </nav>

    <div class="header-banner">
        <img src="<?php echo base_url('assets/images/header-reading.svg'); ?>" alt="Reading Header Banner">
    </div>

    <div class="section-container">

        <h2 class="section-title">Reading Strategies</h2>
        
        <div class="books-grid">
            <a href="<?= base_url('materi/reading/skimming-scanning') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-reading1.png'); ?>" alt="Skimming & Scanning">
                </div>
                <h3>Skimming & Scanning</h3>
                <p>Learning fast reading techniques to find important information efficiently.</p>
            </a>

            <a href="<?= base_url('materi/reading/vocabulary') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-reading2.png'); ?>" alt="Vocabulary Questions">
                </div>
                <h3>Vocabulary Questions</h3>
                <p>Improving understanding of word meanings through context clues in passages.</p>
            </a>

        </div>

        <hr class="section-divider">

        <h2 class="section-title">Reading for Details</h2>

        <div class="books-grid">
            
            <a href="<?= base_url('materi/reading/main-idea') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-reading3.png'); ?>" alt="Understanding Main Ideas">
                </div>
                <h3>Understanding Main Ideas</h3>
                <p>Identifying the primary point or core argument of various English texts.</p>
            </a>

            <a href="#" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-reading4.png'); ?>" alt="Stated Detail Information">
                </div>
                <h3>Stated Detail Information</h3>
                <p>Finding and analyzing specific information directly mentioned in the text.</p>
            </a>

            <a href="#" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-reading5.png'); ?>" alt="Unstated Detail Information">
                </div>
                <h3>Unstated Detail Information</h3>
                <p>Recognizing facts or points that are NOT mentioned or untrue based on the passage.</p>
            </a>

        </div>

    </div>

</body>
</html>