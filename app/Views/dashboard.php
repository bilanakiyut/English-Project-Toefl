<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Learning Journey</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon: #8B2B42;
            --maroon-dark: #430c17;
            --maroon-muted: #8f7481;
            --maroon-soft: #B35167;
            --cream: #F2E5C6;
            --text-dark: #2a0d15;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            min-height: 100vh;
            overflow-x: hidden;
            background: linear-gradient(180deg,
                #8B2B42 0%,
                #A03655 18%,
                #C4748A 38%,
                #DDB99F 55%,
                #F2E5C6 72%,
                #F2E5C6 100%
            );
        }

        /* PACK ELEMEN NAVIGASI */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 36px 70px 0;
            width: 100%;
        }

        .nav-links {
            display: flex;
            gap: 38px;
        }

        .auth-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color: rgba(242,229,198,0.9);
            font-family: 'Cormorant Garamond', serif;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: color 0.3s, letter-spacing 0.3s;
            position: relative;
        }

        /* Efek Garam Bawah Hover hanya untuk Menu Utama */
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -4px; left: 0;
            width: 0; height: 1px;
            background: var(--cream);
            transition: width 0.3s ease;
        }

        .nav-links a:hover { color: var(--cream); letter-spacing: 3px; }
        .nav-links a:hover::after { width: 100%; }

        /* Tombol Login */
        nav a.btn-login {
            border: 1px solid rgba(242, 229, 198, 0.4);
            padding: 8px 22px;
            border-radius: 18px;
            transition: all 0.3s ease;
        }

        nav a.btn-login:hover {
            border-color: var(--cream);
            background: rgba(242, 229, 198, 0.1);
            color: var(--cream);
            letter-spacing: 2px;
        }

        /* Tombol Register */
        nav a.btn-register {
            background: var(--cream);
            color: var(--maroon-dark);
            padding: 8px 22px;
            border-radius: 18px;
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(67, 12, 23, 0.15);
            transition: all 0.3s ease;
        }

        nav a.btn-register:hover {
            background: #ffffff;
            color: var(--maroon);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(67, 12, 23, 0.25);
            letter-spacing: 2px;
        }

        /* LAYOUT UTAMA */
        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 70px 70px;
            min-height: calc(100vh - 90px);
            gap: 60px;
        }

        .content { flex: 1; max-width: 500px; }

        .content h1 {
            font-family: 'Playfair Display', serif;
            color: var(--text-dark);
            font-size: 3.2rem;
            line-height: 1.15;
            font-weight: 700;
            margin-bottom: 28px;
            opacity: 0;
            animation: slideUp 0.7s ease forwards 0.2s;
        }

        .content p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: var(--text-dark);
            margin-bottom: 15px;
            font-weight: 400;
            opacity: 0;
        }
        .p-1 { animation: slideUp 0.6s ease forwards 0.7s; }
        .p-2 { animation: slideUp 0.6s ease forwards 1.0s; }
        .p-3 { animation: slideUp 0.6s ease forwards 1.3s; font-weight: 700; }

        .btn-wrap {
            margin-top: 35px;
            opacity: 0;
            animation: slideUp 0.6s ease forwards 1.7s;
        }

        .btn-start {
            display: inline-block;
            background: var(--maroon);
            color: var(--cream);
            padding: 14px 40px;
            border-radius: 25px;
            text-decoration: none;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 1.1rem;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(139,43,66,0.2);
            transition: all 0.3s ease;
        }

        .btn-start:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(139,43,66,0.4);
            background: var(--maroon-dark);
        }

        .stats {
            display: flex;
            gap: 32px;
            margin-top: 40px;
            align-items: center;
            opacity: 0;
            animation: slideUp 0.6s ease forwards 2.0s;
        }

        .stat { display: flex; flex-direction: column; gap: 2px; }

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--maroon-dark);
            line-height: 1;
        }

        .stat-label {
            font-size: 0.72rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--maroon-muted);
        }

        .stat-divider { width: 1px; height: 40px; background: #d4bc85; }

        /* IMAGE GRID & SHAPES */
        .image-grid {
            flex: 1;
            display: flex;
            gap: 20px;
            max-width: 520px;
            height: 490px;
            opacity: 0;
            animation: fadeIn 0.9s ease forwards 0.3s;
            transition: transform 0.15s ease-out;
        }

        .col-left, .col-right {
            display: flex;
            flex-direction: column;
            gap: 20px;
            flex: 1;
        }

        .shape {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 22px;
            cursor: pointer;
            width: 100%;
            box-shadow: 0 10px 25px rgba(67,12,23,0.12);
            transition: transform 0.45s cubic-bezier(.22,.68,0,1.2), box-shadow 0.4s ease;
        }

        .shape:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 45px rgba(67,12,23,0.28);
        }

        .shape::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.09) 0%, transparent 55%);
            opacity: 0;
            transition: opacity 0.4s;
            z-index: 1;
        }
        .shape:hover::after { opacity: 1; }

        .shape-label {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--cream);
            position: relative;
            z-index: 2;
        }

        .shape-sub {
            font-size: 0.72rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(242,229,198,0.55);
            margin-top: 4px;
            position: relative;
            z-index: 2;
        }

        .badge {
            position: absolute;
            top: 20px; right: 20px;
            background: rgba(242,229,198,0.1);
            border: 1px solid rgba(242,229,198,0.2);
            border-radius: 50%;
            width: 40px; height: 40px;
            display: flex; align-items: center; justify-content: center;
            z-index: 2;
        }
        .badge svg {
            width: 18px; height: 18px;
            fill: none; stroke: var(--cream);
            stroke-width: 1.6; stroke-linecap: round; stroke-linejoin: round;
        }

        .s1 {
            background-color: var(--maroon-dark);
            border-radius: 110px 0 110px 0;
            flex: 1;
            min-height: 0;
            animation: float1 5s ease-in-out infinite 0s;
        }

        .s3 {
            background-color: var(--maroon-muted);
            border-radius: 0 110px 0 110px;
            height: 175px;
            flex-shrink: 0;
            animation: float2 5s ease-in-out infinite 0.8s;
        }

        .s2 {
            background-color: var(--maroon-muted);
            border-radius: 0 110px 0 110px;
            height: 175px;
            flex-shrink: 0;
            animation: float2 5s ease-in-out infinite 1.5s;
        }

        .s4 {
            background-color: var(--maroon-dark);
            border-radius: 110px 0 110px 0;
            flex: 1;
            min-height: 0;
            animation: float1 5s ease-in-out infinite 2.2s;
        }

        /* KEYFRAMES ANIMASI */
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.98); }
            to   { opacity: 1; transform: scale(1); }
        }

        @keyframes float1 {
            0%, 100% { transform: translateY(0px); }
            50%       { transform: translateY(-10px); }
        }

        @keyframes float2 {
            0%, 100% { transform: translateY(0px); }
            50%       { transform: translateY(-10px); }
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 900px) {
            nav { 
                flex-direction: column; 
                gap: 20px; 
                padding: 22px 20px 0;
            }
            .nav-links {
                justify-content: center;
                flex-wrap: wrap;
                gap: 15px;
            }
            .auth-links {
                margin-top: 5px;
            }
            .container { flex-direction: column; padding: 36px 20px 60px; gap: 40px; }
            .content h1 { font-size: 2.5rem; text-align: center; }
            .content p { text-align: center; }
            .btn-wrap, .stats { justify-content: center; display: flex; }
            .image-grid { width: 100%; max-width: 400px; height: 380px; margin: 0 auto; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="nav-links">
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('materi') ?>">Material</a> <a href="#">Soal</a>
    <a href="#">TOEFL</a>
    <a href="#">History</a>
    <a href="#">About Us</a>
</div>

        <div class="auth-links">
            <a href="<?= base_url('login') ?>" class="btn-login">Login</a>
            <a href="<?= base_url('register') ?>" class="btn-register">Register</a>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <h1>Welcome To Your English Learning Journey</h1>
            <p class="p-1">Improve your English skills with interactive learning and TOEFL practice.</p>
            <p class="p-2">Learn structure, listening, reading, and writing in an easier and more enjoyable way.</p>
            <p class="p-3">Start your journey today and build a brighter future with better English skills.</p>

            <div class="btn-wrap">
                <a href="<?= base_url('/materi') ?>" class="btn-start">Start Learning</a>
            </div>

            <div class="stats">
                <div class="stat">
                    <span class="stat-num">4</span>
                    <span class="stat-label">Skills</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <span class="stat-num">TOEFL</span>
                    <span class="stat-label">Ready</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="col-left">
                <div class="shape s1">
                    <div class="badge">
                        <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><path d="M14 17.5h7M17.5 14v7"/></svg>
                    </div>
                    <span class="shape-label">Structure</span>
                    <span class="shape-sub">Build grammar</span>
                </div>
                <div class="shape s3">
                    <div class="badge">
                        <svg viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                    </div>
                    <span class="shape-label">Writing</span>
                    <span class="shape-sub">Express ideas</span>
                </div>
            </div>

            <div class="col-right">
                <div class="shape s2">
                    <div class="badge">
                        <svg viewBox="0 0 24 24"><path d="M3 11a9 9 0 0 1 18 0"/><path d="M6.7 11a5.3 5.3 0 0 1 10.6 0"/><path d="M9 11a3 3 0 1 1 6 0v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4z"/></svg>
                    </div>
                    <span class="shape-label">Listening</span>
                    <span class="shape-sub">Train your ear</span>
                </div>
                <div class="shape s4">
                    <div class="badge">
                        <svg viewBox="0 0 24 24"><path d="M4 19V6a2 2 0 0 1 2-2h14"/><path d="M4 19a2 2 0 1 0 0 4h14a2 2 0 0 0 0-4H4z"/><path d="M9 10h6M9 14h4"/></svg>
                    </div>
                    <span class="shape-label">Reading</span>
                    <span class="shape-sub">Expand your mind</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const grid = document.querySelector('.image-grid');
        document.addEventListener('mousemove', (e) => {
            const cx = window.innerWidth / 2;
            const cy = window.innerHeight / 2;
            const dx = (e.clientX - cx) / cx;
            const dy = (e.clientY - cy) / cy;
            grid.style.transform = `perspective(1000px) rotateY(${dx * 2.5}deg) rotateX(${-dy * 1.8}deg)`;
        });
        document.addEventListener('mouseleave', () => { grid.style.transform = 'none'; });
    </script>

</body>
</html>