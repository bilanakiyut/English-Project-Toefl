<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz TOEFL</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            min-height: 100vh;
            /* Gradasi diperkuat: Putih hanya di 10% teratas, sisanya didominasi cokelat */
            background: linear-gradient(180deg, #FFFFFF 0%, #F2E5C6 20%, #E6D2A8 100%);
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
        }

        /* Lingkaran dekoratif menempel di kanan bawah frame */
        .decorative-blob {
            position: absolute;
            bottom: 40px;
            right: 40px;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, #9F4E5C 0%, rgba(159, 78, 92, 0) 70%);
            filter: blur(90px);
            z-index: 1;
            pointer-events: none;
        }

        /* NAVBAR */
        nav { 
            position: relative; 
            z-index: 10; 
            display: flex; 
            justify-content: flex-end; 
            padding: 30px 70px; 
            gap: 35px; 
        }
        nav a { text-decoration: none; color: #5C1A24; font-family: 'Playfair Display', serif; font-weight: 600; font-size: 0.95rem; letter-spacing: 2px; text-transform: uppercase; }

        /* CONTENT */
        .page-content { 
            flex: 1;
            position: relative;
            z-index: 2;
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 40px; 
        }

        .quiz-container {
            position: relative;
            width: 100%;
            max-width: 700px;
        }

        .frame-svg {
            width: 100%;
            height: auto;
            display: block;
        }

        /* GLASS CARD */
        .glass-card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 75%;
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 28px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .glass-card h1 { font-family: 'Playfair Display', serif; font-size: 1.8rem; color: #5C1A24; margin-bottom: 15px; }
        .glass-card p { font-family: 'Playfair Display', serif; font-weight: 600; font-size: 0.95rem; line-height: 1.6; color: #5C1A24; margin-bottom: 25px; }

        .btn-start {
            display: inline-block;
            padding: 12px 45px;
            border-radius: 30px;
            background: linear-gradient(135deg, #C0303F 0%, #6E1623 100%);
            color: #FFFDF9;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-start:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(110,22,35,0.4); }
    </style>
</head>
<body>

    <div class="decorative-blob"></div>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('materi') ?>">Material</a>
        <a href="<?= base_url('quiz/soal') ?>">Soal</a>
        <a href="<?= base_url('quiz_toefl') ?>">TOEFL</a>
        <a href="<?= base_url('dashboard_history') ?>">History</a>
    </nav>

    <div class="page-content">
        <div class="quiz-container">
            <img src="<?= base_url('assets/images/Frame 8.svg') ?>" alt="Frame 8" class="frame-svg">
            
            <div class="glass-card">
                <h1>QUIZ TOEFL</h1>
                <p>Test your English skills through TOEFL-style questions covering Structure, Reading, and Listening. Complete the quiz to evaluate your understanding and improve your performance.</p>
                <a href="<?= base_url('quiz/quiz-soal') ?>" class="btn-start">START</a>
            </div>
        </div>
    </div>

</body>
</html>