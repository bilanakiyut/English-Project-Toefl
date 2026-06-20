<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parallel Structure with Paired Conjunctions</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon-dark: #4A121A;   /* Background card utama kiri */
            --maroon-light: #5C1E26;  /* Warna tip box & penekanan kata */
            --maroon-heading: #430c17;/* Judul utama atas */
            --gold-card: #9E8559;     /* Card pola kanan premium */
            --gold-inner: #877048;    /* Box list pasangan di kolom kanan */
            --gold-light: #F4EFE3;    /* Background penjelas */
            --gold-border: #E6DBC4;
            --cream-bg: #FAF4E7;      /* Background seluruh halaman */
            --card-white: #FFFDF9;
            --text-light: #FFFDF9;
            --text-dark: #2a0d15;

            /* Warna Khusus Bagan Analisis */
            --tag-elem-bg: #F5EEF0;
            --tag-elem-txt: #78281F;
            --tag-conj-bg: #EAECEE;
            --tag-conj-txt: #566573;
            --hl-parallel: #877048;
            --hl-conj: #4A121A;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            background-color: var(--cream-bg);
            color: var(--text-dark);
            min-height: 100vh;
            padding-bottom: 60px;
        }

        /* ================= NAVBAR PREMIUM ================= */
        nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 30px 70px;
            gap: 35px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-dark);
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* ================= HEADER UTAMA ================= */
        .materi-header {
            text-align: center;
            margin-bottom: 45px;
            padding: 0 20px;
        }

        .materi-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.6rem;
            color: var(--maroon-heading);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .materi-header p {
            font-size: 1.1rem;
            color: #6a575b;
            letter-spacing: 0.5px;
        }

        /* ================= LAYOUT DUA KOLOM ================= */
        .materi-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1.6fr 1fr;
            gap: 40px;
            align-items: start;
        }

        /* ================= KOLOM KIRI (MATERI UTAMA) ================= */
        .materi-left-scroll {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .main-card {
            background-color: var(--maroon-dark);
            border-radius: 20px;
            padding: 45px 40px;
            color: var(--text-light);
            box-shadow: 0 15px 35px rgba(67, 12, 23, 0.1);
        }

        .main-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 253, 249, 0.15);
            padding-bottom: 15px;
        }

        .main-card p.intro {
            font-size: 1.15rem;
            line-height: 1.6;
            margin-bottom: 35px;
            opacity: 0.95;
        }

        .sub-section { margin-bottom: 35px; }
        .sub-section h3 { font-family: 'Playfair Display', serif; font-size: 1.45rem; font-weight: 600; margin-bottom: 15px; color: #FFFDF9; }

        .rules-list { list-style: none; padding-left: 0; }
        .rules-list li { font-size: 1.1rem; margin-bottom: 20px; line-height: 1.5; opacity: 0.95; }
        .rules-list strong { color: #FAF6EE; font-size: 1.15rem; }

        .comparison-box {
            background-color: rgba(255, 255, 255, 0.04);
            border-radius: 12px;
            padding: 20px 24px;
            margin-top: 12px;
            border-left: 3px solid rgba(255, 253, 249, 0.2);
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .comparison-box p { font-size: 1.1rem; line-height: 1.5; margin-bottom: 0; }

        .badge-tag {
            background-color: rgba(255, 253, 249, 0.12);
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-family: sans-serif;
            font-weight: 600;
            letter-spacing: 0.5px;
            color: #D9CBB0;
            display: inline-block;
            margin-bottom: 4px;
        }

        .tip-box {
            background-color: var(--maroon-light);
            border-radius: 12px;
            padding: 22px 25px;
            margin-top: 25px;
            border: 1px solid rgba(255, 253, 249, 0.1);
        }
        .tip-box h4 { font-family: 'Playfair Display', serif; font-size: 1.15rem; font-weight: 700; margin-bottom: 8px; }
        .tip-box p { font-size: 1.05rem; opacity: 0.85; line-height: 1.5; }

        /* Tombol Aksi */
        .action-buttons { display: flex; gap: 20px; }
        .btn {
            padding: 14px 35px;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }
        .btn-exercise { background-color: var(--maroon-dark); color: var(--text-light); }
        .btn-example { background-color: var(--gold-card); color: var(--text-light); }
        .btn:hover { transform: translateY(-2px); opacity: 0.9; }
        .btn-active-state { background-color: #631b25 !important; box-shadow: inset 0 0 10px rgba(0,0,0,0.3); }

        /* ================= EXAMPLES BAGAN SECTION ================= */
        .examples-display-section {
            display: none;
            flex-direction: column;
            gap: 30px;
            animation: fadeIn 0.4s ease forwards;
        }

        .example-showcase-card {
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.02);
        }

        .example-showcase-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #430c17;
            margin-bottom: 20px;
        }

        .sentence-box {
            background-color: #ffffff;
            border: 1px solid #EAEAEA;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            font-size: 1.4rem;
            color: #333333;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .hl-m1 { color: var(--hl-conj); font-weight: 700; border-bottom: 2px dashed var(--hl-conj); }
        .hl-p1 { background-color: var(--hl-parallel); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }

        .analysis-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .analysis-box {
            border-radius: 10px;
            padding: 18px;
            border-left: 4px solid #BDC3C7;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .analysis-box.elem-box { background-color: var(--tag-elem-bg); border-left-color: var(--tag-elem-txt); }
        
        .box-label { font-family: sans-serif; font-size: 0.75rem; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 3px; color: var(--tag-elem-txt); }
        .box-value { font-family: 'Playfair Display', serif; font-size: 1.25rem; font-weight: 700; margin-bottom: 3px; color: #111; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 3px; }
        .box-desc { font-size: 0.95rem; line-height: 1.4; color: #555; }

        /* ================= INTERACTIVE QUIZ SECTION ================= */
        .quiz-section {
            display: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            animation: fadeIn 0.4s ease forwards;
        }

        .practice-header-card {
            background-color: var(--maroon-dark);
            color: var(--text-light);
            text-align: center;
            padding: 16px;
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
        }

        .quiz-body {
            background-color: #ffffff;
            border: 1px solid rgba(0,0,0,0.06);
            border-top: none;
            border-radius: 0 0 15px 15px;
            padding: 40px;
        }

        .quiz-progress { color: var(--maroon-dark); font-family: 'Playfair Display', serif; font-weight: 700; font-size: 1.25rem; margin-bottom: 25px; }
        .question-text { font-size: 1.35rem; text-align: center; color: var(--text-dark); margin-bottom: 35px; line-height: 1.5; }
        
        .question-text .error-underline { text-decoration: underline; font-weight: 700; display: inline-block; margin: 0 5px; color: #4A121A; }
        .question-text .error-label { font-size: 0.8rem; font-family: sans-serif; font-weight: bold; vertical-align: super; color: var(--gold-card); margin-left: 2px; }

        .options-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; list-style: none; margin-bottom: 30px; }
        .option-item {
            background-color: #ffffff; border: 1px solid #dcdcdc; border-radius: 12px;
            padding: 18px 24px; font-size: 1.1rem; color: var(--text-dark);
            cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: all 0.2s;
        }
        .option-item:hover { background-color: #fcfbfa; border-color: var(--gold-card); }
        
        .option-item.correct { background-color: #E8F8F0 !important; border-color: #2ECC71 !important; color: #27AE60 !important; font-weight: 600; }
        .option-item.correct::after { content: "✓"; background-color: #2ECC71; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; }
        
        .option-item.wrong { background-color: #FCE4E4 !important; border-color: #E74C3C !important; color: #C0392B !important; }
        .option-item.wrong::after { content: "✕"; background-color: #E74C3C; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; }

        .explanation-card { display: none; background-color: var(--gold-light); border: 1px solid var(--gold-border); border-radius: 12px; padding: 25px; margin-bottom: 30px; color: #5C4A33; }
        .explanation-title { font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; }
        .inner-formula-box { display: inline-block; background-color: #ffffff; border: 1px solid #E1D5BA; border-radius: 8px; padding: 12px 20px; margin-top: 15px; font-family: 'Courier New', Courier, monospace; font-weight: 700; color: #877048; line-height: 1.4; }

        .quiz-footer { display: flex; justify-content: flex-end; }
        .btn-next { background-color: #4A121A; color: #ffffff; border: none; padding: 14px 50px; font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: 1.15rem; letter-spacing: 2px; border-radius: 25px; cursor: pointer; text-transform: uppercase; }

        /* ================= KOLOM KANAN (STICKY PAIRS) ================= */
        .materi-right-sticky { position: sticky; top: 30px; display: flex; flex-direction: column; gap: 25px; }
        
        .pattern-card {
            background-color: var(--gold-card);
            border-radius: 20px;
            padding: 25px;
            color: var(--text-light);
            box-shadow: 0 10px 25px rgba(158, 134, 89, 0.1);
        }

        .pattern-card h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 18px;
            font-weight: 700;
        }

        .pair-grid { display: flex; flex-direction: column; gap: 10px; }
        .pair-row {
            background-color: var(--gold-inner);
            padding: 12px 15px;
            border-radius: 8px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.05rem;
            font-weight: 700;
            display: flex;
            justify-content: space-between;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
        }
        .pair-row span:last-child { color: #FAF4E7; }

        .video-card {
            background-color: var(--maroon-dark);
            border-radius: 20px;
            padding: 25px;
            color: var(--text-light);
            box-shadow: 0 10px 25px rgba(67, 12, 23, 0.1);
        }
        .video-card h3 { font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 600; margin-bottom: 4px; }
        .video-card p { font-size: 0.95rem; opacity: 0.7; margin-bottom: 15px; }

        .video-container { position: relative; width: 100%; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        @media (max-width: 992px) {
            .materi-wrapper { grid-template-columns: 1fr; }
            .materi-right-sticky { position: relative; top: 0; }
            nav { padding: 20px; justify-content: center; }
            .analysis-grid { grid-template-columns: 1fr; }
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

    <div class="materi-header">
        <h1>Parallel Structure with Paired Conjunctions</h1>
        <p>Mastering correlative conjunctions to ensure perfect grammatical balance.</p>
    </div>

    <div class="materi-wrapper">
        
        <div class="materi-left-scroll">
            
            <div class="main-card">
                <h2>Correlative Conjunctions Overview</h2>
                <p class="intro"><strong>Paired (correlative) conjunctions</strong> come in strict, fixed sets that cannot be mixed or interchanged. They are used specifically to connect two equal grammatical units within a sentence.</p>

                <div class="sub-section">
                    <h3>The Two Golden Rules for Paired Conjunctions</h3>
                    <ul class="rules-list">
                        <li>
                            <strong>1. Check the Pair:</strong> <br>
                            Ensure the conjunction is matched with its exact legal partner. For example, <em>Both</em> must always go with <em>and</em>, never ever with <em>or</em>.
                        </li>
                        <li>
                            <strong>2. Check the Structure:</strong> <br>
                            The grammatical element immediately following the first conjunction must perfectly match the element following the second conjunction. If a noun follows part one, a noun must follow part two.
                        </li>
                    </ul>
                </div>

                <div class="sub-section">
                    <h3>Correct Examples Breakdown</h3>
                    <p>Observe how the structure following both markers is identical:</p>
                    
                    <div class="comparison-box">
                        <p>
                            <span class="badge-tag">Adjectives</span> <br>
                            The lecture was <strong>both</strong> <em>informative</em> <strong>and</strong> <em>enjoyable</em>.
                        </p>
                        <p>
                            <span class="badge-tag">Nouns</span> <br>
                            He gave tickets to <strong>either</strong> <em>the doctor</em> <strong>or</strong> <em>the nurse</em>.
                        </p>
                        <p>
                            <span class="badge-tag">Prepositional Phrases</span> <br>
                            <strong>Not only</strong> <em>from the checking account</em> <strong>but also</strong> <em>from the savings account</em>.
                        </p>
                    </div>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Tip</h4>
                    <p>In the structure section, look out for "illegal combinations" like <em>either...nor</em> or <em>neither...or</em>. If the pairing is legal, immediately verify Rule #2: ensure the word classes following both indicators match flawlessly!</p>
                </div>
            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ Example</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">
                <div class="example-showcase-card">
                    <h3>Bagan Analisis Paired Conjunction</h3>
                    <div class="sentence-box">
                        She is <span class="hl-m1">not only</span> <span class="hl-p1">highly talented</span> <span class="hl-m1">but also</span> <span class="hl-p1">extremely humble</span>.
                    </div>
                    <div class="analysis-grid">
                        <div class="analysis-box elem-box">
                            <div class="box-label">Sisi Pertama (Setelah Not Only)</div>
                            <div class="box-value">Highly talented</div>
                            <div class="box-desc">Berbentuk <strong>Adjective Phrase</strong> (Adverb + Adjective) yang menerangkan karakteristik subjek.</div>
                        </div>
                        <div class="analysis-box elem-box">
                            <div class="box-label">Sisi Kedua (Setelah But Also)</div>
                            <div class="box-value">Extremely humble</div>
                            <div class="box-desc">Wajib berbentuk <strong>Adjective Phrase</strong> sejenis. Struktur seimbang sempurna!</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Paired Conjunction Quiz Check</div>
                <div class="quiz-body">
                    
                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" According to the new campus regulations, students may register for the seminar either online ______ in person at the administration office. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. and</li>
                            <li class="option-item" data-correct="true">B. or</li>
                            <li class="option-item" data-correct="false">C. nor</li>
                            <li class="option-item" data-correct="false">D. but also</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" To build a reliable system, the developer must focus not only on optimizing security ______ enhancing user experience. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. and also</li>
                            <li class="option-item" data-correct="false">B. but as well</li>
                            <li class="option-item" data-correct="true">C. but also</li>
                            <li class="option-item" data-correct="false">D. or</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" The modern algorithm is both exceptionally efficient in data sorting ______ remarkably accurate in predictive analytics. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. and</li>
                            <li class="option-item" data-correct="false">B. or</li>
                            <li class="option-item" data-correct="false">C. nor</li>
                            <li class="option-item" data-correct="false">D. as well as</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="4" style="display: none;">
                        <div class="quiz-progress">4/5</div>
                        <p class="question-text" style="font-style: normal;">
                            <strong>Identify the ERROR:</strong><br><br>
                            The research committee <span class="error-underline">neither</span><span class="error-label">A</span> approved the initial budget proposal 
                            <span class="error-underline">or</span><span class="error-label">B</span> provided any alternative 
                            <span class="error-underline">funding</span><span class="error-label">C</span> sources for the <span class="error-underline">project</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. neither</li>
                            <li class="option-item" data-correct="true">B. or</li>
                            <li class="option-item" data-correct="false">C. funding</li>
                            <li class="option-item" data-correct="false">D. project</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="5" style="display: none;">
                        <div class="quiz-progress">5/5</div>
                        <p class="question-text" style="font-style: normal;">
                            <strong>Identify the ERROR:</strong><br><br>
                            The incoming data architect <span class="error-underline">is</span><span class="error-label">A</span> 
                            not only expert <span class="error-underline">at Python</span><span class="error-label">B</span> 
                            but also <span class="error-underline">enjoys</span><span class="error-label">C</span> designing cloud network infrastructures 
                            <span class="error-underline">efficiently</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. is</li>
                            <li class="option-item" data-correct="false">B. at Python</li>
                            <li class="option-item" data-correct="true">C. enjoys</li>
                            <li class="option-item" data-correct="false">D. efficiently</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="quiz-footer">
                        <button id="btn-next-question" class="btn-next" style="display: none;">NEXT</button>
                    </div>

                </div>
            </div>

        </div>

        <div class="materi-right-sticky">
            
            <div class="pattern-card">
                <h3>🔒 The 4 Absolute Pairs</h3>
                
                <div class="pair-grid">
                    <div class="pair-row">
                        <span>Both</span> <span>==> and</span>
                    </div>
                    <div class="pair-row">
                        <span>Either</span> <span>==> or</span>
                    </div>
                    <div class="pair-row">
                        <span>Neither</span> <span>==> nor</span>
                    </div>
                    <div class="pair-row">
                        <span>Not Only</span> <span>==> but also</span>
                    </div>
                </div>
                
                <span style="font-size: 0.95rem; opacity: 0.85; display: block; margin-top: 15px; text-align: center; font-style: italic;">
                    These sets are fixed and can never be mixed!
                </span>
            </div>

            <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/2kts_9VYi-8?si=6MX4qOKVXHpq_xPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>

    <script>
        const quizDatabase = {
            1: {
                correctText: "Luar biasa! Di awal kalimat terdapat kata petunjuk kunci <strong>either</strong> (either online). Pasangan baku mutlak untuk <em>either</em> adalah <strong>or</strong>.",
                wrongText: "<strong>TOEFL Rule #1 Breach: Pairs Matching.</strong> Jangan mencampuradukkan pasangan correlative conjunction. Pasangan <em>either</em> adalah <em>or</em>, bukan and, nor, atau but also.",
                formula: "Either + [online (Adverb)] + OR + [in person (Adverbial Phrase)]"
            },
            2: {
                correctText: "Tepat sekali! Penanda kalimat bagian pertama menggunakan frasa <strong>not only</strong>. Pasangan baku yang mutlak dan lengkap adalah <strong>but also</strong>.",
                wrongText: "Pilihan A, B, dan D salah karena bukan merupakan pasangan resmi/legal dari 'not only' dalam standar tata bahasa Inggris formal (TOEFL).",
                formula: "Not only + [optimizing... (Gerund Phrase)] + BUT ALSO + [enhancing... (Gerund Phrase)]"
            },
            3: {
                correctText: "Brilian! Kalimat ini diawali dengan indikator pasangan kata <strong>both</strong> (both exceptionally efficient...). Pasangan sah untuk <em>both</em> hanyalah <strong>and</strong>.",
                wrongText: "Ingat aturan dasar: Both selalu berpasangan dengan And. Pilihan D (*as well as*) sering mengecoh karena artinya mirip, namun ilegal secara aturan struktural paralel berpasangan.",
                formula: "Both + [exceptionally efficient...] + AND + [remarkably accurate...]"
            },
            4: {
                correctText: "Benar! Bagian B (*or*) adalah elemen yang **salah (ERROR)**. Karena kalimat diawali dengan kata penolak <strong>neither</strong> di titik A, maka konjungsi tengahnya wajib diganti menjadi <strong>nor</strong> agar seimbang.",
                wrongText: "Ini adalah jebakan klasik TOEFL tipe Error Recognition yang paling sering keluar. Selalu periksa kecocokan kata berpasangan terlebih dahulu.",
                formula: "Neither... + <span style='color:#E74C3C;'>NOR (bukan or)</span>..."
            },
            5: {
                correctText: "Sempurna! Elemen C (*enjoys*) adalah **ERROR**. Setelah kata 'not only' terdapat struktur frasa kata sifat (*expert at Python*). Maka setelah 'but also', struktur kalimat tidak boleh berbelok menjadi kata kerja (*enjoys...*), melainkan harus langsung menggunakan kata sifat yang setara seperti *proficient in...*.",
                wrongText: "Struktur tidak seimbang karena melanggar Rule #2: menyandingkan noun/adjective phrase dengan verb clause utuh (*enjoys designing...*).",
                formula: "Not only + [expert at... (Adjective)] + But also + <span style='color:#E74C3C;'>[enjoys... (MELANGGAR karena berbentuk VERB)]</span>"
            }
        };

        const btnExamples = document.getElementById('btn-toggle-examples');
        const btnExercise = document.getElementById('btn-toggle-exercise');
        const examplesSec = document.getElementById('examples-display-section');
        const quizSec = document.getElementById('quiz-section');

        btnExamples.addEventListener('click', function() {
            quizSec.style.display = 'none';
            btnExercise.classList.remove('btn-active-state');
            
            if(examplesSec.style.display === 'flex') {
                examplesSec.style.display = 'none';
                this.classList.remove('btn-active-state');
            } else {
                examplesSec.style.display = 'flex';
                this.classList.add('btn-active-state');
                examplesSec.scrollIntoView({ behavior: 'smooth' });
            }
        });

        btnExercise.addEventListener('click', function() {
            examplesSec.style.display = 'none';
            btnExamples.classList.remove('btn-active-state');

            if(quizSec.style.display === 'block') {
                quizSec.style.display = 'none';
                this.classList.remove('btn-active-state');
            } else {
                quizSec.style.display = 'block';
                this.classList.add('btn-active-state');
                quizSec.scrollIntoView({ behavior: 'smooth' });
            }
        });

        // Logika Pengoperasian Kuis
        let currentStep = 1;
        document.querySelectorAll('.option-item').forEach(item => {
            item.addEventListener('click', function() {
                const wrapper = this.closest('.question-wrapper');
                if (wrapper.getAttribute('data-answered') === 'true') return;
                
                const isCorrect = this.getAttribute('data-correct') === 'true';
                const step = wrapper.getAttribute('data-step');
                const expCard = wrapper.querySelector('.explanation-card');
                const expTitle = wrapper.querySelector('.explanation-title');
                const expContent = wrapper.querySelector('.explanation-content');
                const formulaBox = wrapper.querySelector('.inner-formula-box');

                if (isCorrect) {
                    this.classList.add('correct');
                    expTitle.innerHTML = "🏆 Excellent!";
                    expContent.innerHTML = quizDatabase[step].correctText;
                } else {
                    this.classList.add('wrong');
                    expTitle.innerHTML = "💡 Explanation";
                    expContent.innerHTML = quizDatabase[step].wrongText;
                    wrapper.querySelectorAll('.option-item').forEach(opt => {
                        if(opt.getAttribute('data-correct') === 'true') opt.classList.add('correct');
                    });
                }

                if(quizDatabase[step].formula) {
                    formulaBox.innerHTML = quizDatabase[step].formula;
                    formulaBox.style.display = 'inline-block';
                }

                expCard.style.display = 'block';
                wrapper.setAttribute('data-answered', 'true');
                document.getElementById('btn-next-question').style.display = 'block';
            });
        });

        document.getElementById('btn-next-question').addEventListener('click', function() {
            document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'none';
            currentStep++;
            
            if(currentStep <= 5) {
                document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'block';
                this.style.display = 'none';
            } else {
                alert("🎉 Brilliant! You have completely mastered the Paired Conjunction parallel check rules.");
                currentStep = 1;
                document.querySelectorAll('.question-wrapper').forEach(w => {
                    w.style.display = 'none';
                    w.removeAttribute('data-answered');
                    w.querySelector('.explanation-card').style.display = 'none';
                    w.querySelectorAll('.option-item').forEach(o => o.className = 'option-item');
                });
                document.querySelector(`.question-wrapper[data-step="1"]`).style.display = 'block';
                quizSec.style.display = 'none';
                btnExercise.classList.remove('btn-active-state');
                this.style.display = 'none';
            }
        });
    </script>
</body>
</html>