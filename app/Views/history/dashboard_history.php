<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - History</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root{
        --maroon:#7A1230;
        --maroon-dark:#5A0F20;
        --gold:#B4A478;
        --gold-dark:#9E8559;
        --cream:#FFF7E7;
        --white:#FFFFFF;
        --text:#5A0F20;
    }

    *{margin:0;padding:0;box-sizing:border-box;}

    html, body{
        width:100%;
        max-width:100%;
        overflow-x:hidden;
        height:100%;
    }

    body{
        font-family:'Cormorant Garamond', serif;
        background:#fff;
        color:var(--text);
        overflow-x:hidden;
        min-height:100vh;
        display:flex;
        flex-direction:column;
    }

    /* ================= TOP AREA (gradient + nav + wave, all one block) ================= */
    .top-area{
        position:relative;
        background:linear-gradient(180deg,#D9CAA4 0%,#B5A477 100%);
        z-index:3;
        padding-bottom:70px;
    }

    nav{
        max-width:100%;
        display:flex;
        justify-content:flex-end;
        align-items:center;
        gap:32px;
        padding:28px 60px;
        flex-wrap:wrap;
        position:relative;
        z-index:5;
    }

    nav a{
        text-decoration:none;
        color:var(--maroon-dark);
        font-family:'Cormorant Garamond', serif;
        font-size:0.95rem;
        font-weight:700;
        letter-spacing:2px;
        text-transform:uppercase;
        white-space:nowrap;
    }

    nav a:hover{
        color:var(--maroon);
    }

    .wave-divider{
        position:absolute;
        left:0;
        bottom:-1px;
        width:100%;
        line-height:0;
        z-index:1;
    }

    .wave-divider svg{
        display:block;
        width:100%;
        height:60px;
    }

    /* ================= MAIN SECTION ================= */
    .history-section{
        position:relative;
        background:#fff;
        flex:1;
        padding:30px 40px 50px;
        overflow:hidden;
        display:flex;
        align-items:center;
    }

    .history-section::after{
        content:"";
        position:absolute;
        left:0;
        bottom:0;
        width:100%;
        height:55%;
        background:var(--maroon);
        z-index:0;
    }

    .history-layout{
        position:relative;
        z-index:1;
        max-width:1100px;
        width:100%;
        margin:0 auto;
        display:grid;
        grid-template-columns:1fr 1fr 1fr;
        column-gap:24px;
        align-items:start;
    }

    /* ================= LEFT CARD ================= */
    .test-card{
        width:100%;
        min-height:210px;
        background:var(--maroon);
        color:#fffdf7;
        border-radius:32px 32px 0 32px;
        padding:30px 30px;
        box-shadow:4px 5px 14px rgba(0,0,0,.25);
    }

    .test-heading{
        display:flex;
        align-items:center;
        gap:18px;
        margin-bottom:14px;
    }

    .test-heading svg{
        width:38px;
        height:38px;
        stroke:#fffdf7;
        flex:0 0 auto;
    }

    .test-heading h3{
        font-family:'Playfair Display', serif;
        font-size:1.6rem;
        line-height:1;
        font-weight:700;
        color:#fffdf7;
    }

    .test-card p{
        font-size:1.2rem;
        line-height:1.25;
        font-weight:500;
        max-width:280px;
        color:#fffdf7;
    }

    /* ================= CENTER CARD ================= */
    .performance-card{
        width:100%;
        margin-top:-30px;
        border-radius:13px 13px 18px 18px;
        overflow:hidden;
        background:var(--gold);
        box-shadow:0 0 10px rgba(158,133,89,.9);
    }

    .performance-card img{
        width:100%;
        height:260px;
        display:block;
        object-fit:cover;
        object-position:center top;
        border-radius:13px 13px 0 0;
    }

    .performance-body{
        background:var(--cream);
        border-radius:18px 18px 0 0;
        padding:16px 22px 0;
    }

    .performance-body h3{
        font-family:'Playfair Display', serif;
        font-size:1.55rem;
        line-height:1;
        font-weight:700;
        color:var(--maroon-dark);
        display:inline-block;
        padding-bottom:6px;
        margin-bottom:10px;
        border-bottom:2px dashed var(--maroon-dark);
    }

    .performance-body p{
        font-size:1.05rem;
        line-height:1.2;
        font-weight:500;
        color:var(--maroon-dark);
        margin-bottom:9px;
    }

    .performance-body .quote{
        font-size:0.92rem;
        font-style:italic;
        margin-bottom:13px;
    }

    .btn-history{
        display:block;
        width:calc(100% + 44px);
        margin-left:-22px;
        background:var(--gold);
        color:#fffdf7;
        text-align:center;
        text-decoration:none;
        border-radius:38px 38px 0 0;
        padding:13px 10px 16px;
        font-family:'Playfair Display', serif;
        font-size:1.5rem;
        font-weight:700;
        box-shadow:inset 0 2px 0 rgba(255,255,255,.16);
    }

    .btn-history:hover{
        background:#a99768;
    }

    /* ================= RIGHT CARD ================= */
    .score-card{
        width:100%;
        min-height:210px;
        margin-top:330px;
        background:var(--cream);
        border:2px solid var(--gold-dark);
        border-radius:0 32px 32px 32px;
        padding:24px 28px 26px;
        box-shadow:0 0 10px rgba(158,133,89,.85);
    }

    .score-heading{
        display:flex;
        align-items:center;
        gap:16px;
        margin-bottom:14px;
    }

    .score-heading svg{
        width:32px;
        height:32px;
        stroke:var(--maroon-dark);
        flex:0 0 auto;
    }

    .score-heading h3{
        font-family:'Playfair Display', serif;
        font-size:1.5rem;
        line-height:1;
        font-weight:700;
        color:var(--maroon-dark);
    }

    .score-card p{
        font-size:1.15rem;
        line-height:1.2;
        font-weight:500;
        color:var(--maroon-dark);
    }

    /* ================= RESPONSIVE ================= */
    @media(max-width:1100px){
        .history-layout{
            grid-template-columns:1fr;
            gap:24px;
            max-width:420px;
        }

        .performance-card{
            margin-top:0;
        }

        .score-card{
            margin-top:0;
            border-radius:24px;
        }

        .history-section{
            padding-top:40px;
            padding-bottom:60px;
        }

        .history-section::after{
            height:auto;
            top:170px;
            bottom:0;
        }
    }

    @media(max-width:600px){
        nav{
            padding:20px 18px 0;
            gap:12px;
            justify-content:center;
            flex-wrap:wrap;
        }

        nav a{font-size:.8rem;}

        .top-area{
            padding-bottom:40px;
        }

        .history-section{
            padding:30px 18px 60px;
        }

        .test-card,
        .score-card{
            padding:24px 22px;
            border-radius:24px;
        }

        .test-heading h3,
        .score-heading h3{
            font-size:1.3rem;
        }

        .test-card p,
        .score-card p{
            font-size:1.05rem;
        }

        .performance-card img{
            height:220px;
        }

        .performance-body h3{
            font-size:1.3rem;
        }

        .performance-body p{
            font-size:0.98rem;
        }

        .btn-history{
            font-size:1.25rem;
        }
    }
</style>
</head>
<body>

    <div class="top-area">
        <nav>
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('materi') ?>">Material</a>
            <a href="<?= base_url('quiz') ?>">Soal</a>
            <a href="#">TOEFL</a>
            <a href="<?= base_url('history') ?>">History</a>
            <a href="#">About Us</a>
        </nav>

        <div class="wave-divider">
            <svg viewBox="0 0 1440 130" preserveAspectRatio="none">
                <path d="M0,70 C230,5 360,120 610,76 C800,42 915,4 1120,65 C1230,96 1340,82 1440,70 L1440,130 L0,130 Z" fill="#ffffff"></path>
            </svg>
        </div>
    </div>

    <section class="history-section">
        <div class="history-layout">

            <div class="test-card">
                <div class="test-heading">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="14" height="18" rx="1.7"></rect>
                        <path d="M7 7h7M7 11h6M7 15h4"></path>
                        <circle cx="17" cy="16" r="3"></circle>
                        <path d="M19.3 18.3L22 21"></path>
                    </svg>
                    <h3>Test History</h3>
                </div>
                <p>Review every completed TOEFL practice test and revisit your past results anytime.</p>
            </div>

            <div class="performance-card">
                <img src="<?= base_url('assets/images/Rectangle 43.png') ?>" alt="Person reviewing test history">

                <div class="performance-body">
                    <h3>Performance History</h3>
                    <p>Track your TOEFL progress through score history, performance trends, and detailed test results.</p>
                    <p class="quote">"Every score tells a story of improvement."</p>
                    <a href="<?= base_url('history/history') ?>" class="btn-history">Check history</a>
                </div>
            </div>

            <div class="score-card">
                <div class="score-heading">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 19V5"></path>
                        <path d="M4 19h17"></path>
                        <path d="M7 15l3-5 4 3 4-7"></path>
                        <circle cx="7" cy="15" r="1.5"></circle>
                        <circle cx="10" cy="10" r="1.5"></circle>
                        <circle cx="14" cy="13" r="1.5"></circle>
                        <circle cx="18" cy="6" r="1.5"></circle>
                    </svg>
                    <h3>Score Analysis</h3>
                </div>
                <p>Discover performance trends, identify improvement opportunities, and stay on track toward your target score.</p>
            </div>

        </div>
    </section>

</body>
</html>