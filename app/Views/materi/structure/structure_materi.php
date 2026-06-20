<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structure Modules - English Learning Journey</title>
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

        /* ================= HEADER BANNER UTAMA ================= */
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

        /* ================= TRIK SAKTI: GRID HORIZONTAL UNTUK DIGESER ================= */
        .books-grid {
            display: flex; /* Diubah dari grid menjadi flex agar memanjang ke samping */
            gap: 30px; 
            margin-bottom: 50px;
            overflow-x: auto; /* MEMUNCULKAN FUNGSI GESER HORIZONTAL */
            scroll-behavior: smooth;
            padding: 20px 10px; /* Jeda padding biar bayangan kartu tidak terpotong saat digeser */
            
            /* Trik agar saat digeser terasa halus di HP/Trackpad Mac */
            -webkit-overflow-scrolling: touch; 
            scroll-snap-type: x mandatory; /* Menjaga kartu ngerem pas di tengah-tengah */
        }

        /* SEMBUNYIKAN SCROLLBAR BAWAH BIAR ESTETIK SEPERTI FIGMA */
        .books-grid::-webkit-scrollbar {
            display: none; /* Menghilangkan bentuk bar hitam/abu-abu bawaan browser */
        }
        .books-grid {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        /* ================= STYLING KARTU BUKU KOTAK PUTIH ================= */
        .book-card {
            background-color: var(--card-white); 
            border-radius: 16px;
            padding: 30px 20px; 
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 10px 25px rgba(42, 13, 21, 0.05); 
            border: 1px solid rgba(139, 43, 66, 0.06);
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1); 
            
            /* SANGAT PENTING: Mengunci ukuran kartu agar tidak menciut saat memanjang ke samping */
            flex: 0 0 260px; 
            scroll-snap-align: start; /* Titik pengereman geser */
        }

        /* HOVER EFFECT (Kombinasi Geser Naik + Zoom Halus) */
        .book-card:hover {
            transform: translateY(-8px); 
            box-shadow: 0 20px 35px rgba(139, 43, 66, 0.12); 
            border-color: rgba(139, 43, 66, 0.2);
        }

        /* WRAPPER GAMBAR BUKU */
        .book-img-wrapper {
            width: 100%;
            max-width: 160px; 
            height: 220px;
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
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--maroon);
            margin-bottom: 12px;
            line-height: 1.2;
        }

        .book-card p {
            font-size: 1.02rem;
            color: #614d52;
            line-height: 1.4;
        }

        /* LINE GRADIENT EMAS */
        .section-divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #D9CBB0, transparent);
            border: none;
            margin: 50px 0;
        }

        /* RESPONSIVE DESIGN (Tetap Responsif dan Fleksibel Digeser) */
        @media (max-width: 1024px) {
            nav { padding: 25px 40px; }
            .section-container { padding: 0 20px; }
            .header-banner img { max-width: 100%; margin-left: 0; margin-right: 0; }
            .book-card { flex: 0 0 240px; } /* Kartu sedikit mengecil di tablet */
        }

        @media (max-width: 600px) {
            nav { padding: 20px; justify-content: center; gap: 15px; }
            nav a { font-size: 0.85rem; letter-spacing: 1px; }
            .book-card { flex: 0 0 80%; } /* Kartu melebar pas 1 buku penuh di layar HP saat di-swipe */
            .section-title { font-size: 1.8rem; text-align: left; padding-left: 10px; }
            .header-banner { padding: 0 10px; margin-bottom: 40px; }
        }
    </style>
</head>
<body>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('materi') ?>">Material</a>
        <a href="<?= base_url('quiz_toefl') ?>">TOEFL</a>
       <a href="<?= base_url('dashboard_history') ?>">History</a>
        <a href="#">About Us</a>
    </nav>

    <div class="header-banner">
        <img src="<?php echo base_url('assets/images/header-structure.svg'); ?>" alt="Structure Header">
    </div>

    <div class="section-container">

        <h2 class="section-title">Structure 1</h2>
        
        <div class="books-grid">
            
            <a href="<?= base_url('materi/structure/singular-plural-nouns') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-singular-plural.png'); ?>" alt="Singular & Plural">
                </div>
                <h3>Singular & Plural</h3>
                <p>Mastering noun identification and agreement rules.</p>
            </a>

            <a href="<?= base_url('materi/structure/countable-uncountable-noun') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-countable-uncountable.png'); ?>" alt="Countable & Uncountable">
                </div>
                <h3>Countable & Uncountable</h3>
                <p>Learning how to identify and use nouns based on quantity and measurement.</p>
            </a>

            <a href="<?= base_url('materi/structure/subject-object-pronouns') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-subject-object.png'); ?>" alt="Subject & Object Pronouns">
                </div>
                <h3>Subject & Object Pronouns</h3>
                <p>Using pronouns correctly as subjects and objects in sentences.</p>
            </a>

            <a href="<?= base_url('materi/structure/possessive-pronoun') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-possesive-pronoun.png'); ?>" alt="Possessives Pronoun">
                </div>
                <h3>Possessives Pronoun</h3>
                <p>Learning pronouns that show ownership and possession.</p>
            </a>

        </div>

        <hr class="section-divider">

        <h2 class="section-title">Structure 2</h2>

        <div class="books-grid">
            
        <a href="<?= base_url('materi/structure/cordinate-connector') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-coordinate-connector.png'); ?>" alt="Coordinate Connectors">
                </div>
                <h3>Coordinate Connectors</h3>
                <p>Understanding connectors used to join equal ideas in sentences.</p>
            </a>

            <a href="<?= base_url('materi/structure/adverb-clause-connector') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-adverb-clause.png'); ?>" alt="Adverb Clause Connectors">
                </div>
                <h3>Adverb Clause Connectors</h3>
                <p>Learning connectors that explain time, reason, condition, and contrast.</p>
            </a>

                <a href="<?= base_url('materi/structure/noun-clause-connector') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-noun-clause.png'); ?>" alt="Noun Clause Connectors">
                </div>
                <h3>Noun Clause Connectors</h3>
                <p>Understanding connectors used to introduce noun clauses.</p>
            </a>

            <a href="<?= base_url('materi/structure/adjective-clause-connector') ?>" class="book-card">
                <div class="book-img-wrapper">
                    <img src="<?php echo base_url('assets/images/book-adjective-clause.png'); ?>" alt="Adjective Clause Connectors">
                </div>
                <h3>Adjective Clause Connectors</h3>
                <p>Learning how adjective clauses describe nouns in sentences.</p>
            </a>

        </div>

    </div>

</body>
</html>