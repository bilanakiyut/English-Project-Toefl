<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing Modules - English Learning Journey</title>
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

        /* EFEK INTERAKTIF HOVER */
        .book-card:hover {
            transform: scale(1.08) translateY(-10px); 
            box-shadow: 0 25px 45px rgba(139, 43, 66, 0.15); 
            border-color: rgba(139, 43, 66, 0.25);
        }

        .book-card:active {
            transform: scale(1.02) translateY(-4px);
        }

        /* WRAPPER GAMBAR FRAME WRITING */
        .book-img-wrapper {
            width: 100%;
            height: 140px; 
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 10px; 
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
        <img src="<?php echo base_url('assets/images/header-writing.svg'); ?>" alt="Writing Header Banner">
    </div>

   <div class="section-container">
        <h2 class="section-title">Writing Expression 1</h2>
        <div class="books-grid">
            
            <a href="<?= base_url('materi/writin/subject-verb-agreement') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/6.png'); ?>" alt="Subject - Verb Agreement"></div>
                <h3>Subject - Verb Agreement</h3>
                <p>Mastering the correct agreement between subjects and verbs.</p>
            </a>

            <a href="<?= base_url('materi/writing/agreement-prepositional') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/7.png'); ?>" alt="Agreement after Prepositional Phrases"></div>
                <h3>Agreement after Prepositional Phrases</h3>
                <p>Understanding subject-verb agreement after prepositional phrases.</p>
            </a>

            <a href="<?= base_url('materi/writing/agreement-quantity') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/8.png'); ?>" alt="Agreement after Expressions of Quantity"></div>
                <h3>Agreement after Expressions of Quantity</h3>
                <p>Learning agreement rules used with quantity expressions.</p>
            </a>

            <a href="<?= base_url('materi/writing/agreement-certain-words') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/9.png'); ?>" alt="Agreement after Certain Words"></div>
                <h3>Agreement after Certain Words</h3>
                <p>Mastering singular subject agreements after specific indefinite pronouns.</p>
            </a>

            <a href="<?= base_url('materi/writing/parallel-structure') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/10.png'); ?>" alt="Parallel Structure"></div>
                <h3>Parallel Structure</h3>
                <p>Using parallel structures with words, verbs, and phrases correctly.</p>
            </a>

            <a href="<?= base_url('materi/writing/parallel-coordinate') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/11.png'); ?>" alt="Parallel with Coordinate Conjunctions"></div>
                <h3>Parallel with Coordinate Conjunctions</h3>
                <p>Ensuring structure balance when using and, but, or or conjunctions.</p>
            </a>

            <a href="<?= base_url('materi/writing/parallel-paired') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/12.png'); ?>" alt="Parallel with Paired Conjunctions"></div>
                <h3>Parallel with Paired Conjunctions</h3>
                <p>Mastering parallelism with both...and, either...or, and neither...nor.</p>
            </a>
        </div>

        <hr class="section-divider">

        <h2 class="section-title">Writing Expression 2</h2>
        <div class="books-grid">
            
            <a href="<?= base_url('materi/writing/present-participle') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/13.png'); ?>" alt="Present & Past Participle"></div>
                <h3>Present & Past Participle</h3>
                <p>Learning how participles are used correctly in sentences.</p>
            </a>

            <a href="<?= base_url('materi/writing/past-participle') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/14.png'); ?>" alt="Past Participle after Have"></div>
                <h3>Past Participle after Have</h3>
                <p>Understanding past participles used with perfect tenses.</p>
            </a>

            <a href="<?= base_url('materi/writing/present-participle-after-be') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/15.png'); ?>" alt="Present or Past Participle after Be"></div>
                <h3>Present or Past Participle after Be</h3>
                <p>Learning participles used after forms of be.</p>
            </a>

            <a href="<?= base_url('materi/writing/base-form') ?>" class="book-card">
                <div class="book-img-wrapper"><img src="<?= base_url('assets/images/16.png'); ?>" alt="Base Form Verb after Modals"></div>
                <h3>Base Form Verb after Modals</h3>
                <p>Using the correct base verb form after modal verbs.</p>
            </a>
        </div>
    </div>

</body>
</html>