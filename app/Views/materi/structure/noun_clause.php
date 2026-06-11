<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering Noun Clause Connectors & Examples</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon-dark: #4A1521;   /* Warna utama brand / background gelap */
            --maroon-light: #5A1E2B;  /* Variasi komponen internal */
            --maroon-heading: #54111E;/* Warna teks judul utama */
            --gold-card: #9E8659;     /* Warna card kanan / aksen */
            --gold-inner: #877148;    /* Kotak rumus / highlight */
            --gold-light: #F4EFE3;    /* Background note cream-emas */
            --gold-border: #E6DBC4;   /* Border note */
            --cream-bg: #FAF6EE;      /* Background halaman */
            --text-light: #FFFDF9;
            --text-dark: #2A0D14;
            
            /* Warna khusus Analisis Bagan (Sesuai Gambar Mockup) */
            --tag-connector-bg: #EAECEE;
            --tag-connector-txt: #566573;
            --tag-subject-bg: #F5EEF0;
            --tag-subject-txt: #78281F;
            --tag-verb-bg: #F9EBEA;
            --tag-verb-txt: #7B241C;
            --hl-connector: #B2BABB;
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
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* ================= HEADER UTAMA ================= */
        .materi-header {
            text-align: center;
            margin-bottom: 40px;
            padding: 0 20px;
        }

        .materi-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: var(--maroon-heading);
            font-weight: 700;
            margin-bottom: 8px;
        }

        .materi-header p {
            font-size: 1.1rem;
            color: #614D52;
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

        /* ================= KOLOM KIRI ================= */
        .materi-left-scroll {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        /* CARD MATERI POKOK */
        .main-card {
            background-color: var(--maroon-dark);
            border-radius: 20px;
            padding: 40px;
            color: var(--text-light);
            box-shadow: 0 15px 30px rgba(74, 21, 33, 0.1);
        }

        .main-card h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.1rem;
            font-weight: 600;
            margin-bottom: 25px;
            border-bottom: 1px solid rgba(255, 253, 249, 0.2);
            padding-bottom: 15px;
        }

        .main-card p.intro {
            font-size: 1.25rem;
            line-height: 1.5;
            margin-bottom: 35px;
            opacity: 0.95;
        }

        .connectors-group-flex {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .group-box h3 { font-size: 1.3rem; font-weight: 600; margin-bottom: 8px; }
        .group-box p.desc { font-size: 0.95rem; font-style: italic; opacity: 0.7; margin-bottom: 15px; line-height: 1.3; }
        
        .badge-container { display: flex; flex-wrap: wrap; gap: 10px; }
        .badge-item {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 6px 16px;
            border-radius: 8px;
            font-size: 1.05rem;
            min-width: 60px;
            text-align: center;
        }

        .tip-box {
            background-color: var(--maroon-light);
            border-radius: 12px;
            padding: 20px 25px;
            margin-top: 15px;
            border-left: 4px solid #E67E22;
        }
        .tip-box h4 { font-size: 1.15rem; font-weight: 700; margin-bottom: 8px; }
        .tip-box p { font-size: 1.05rem; opacity: 0.85; line-height: 1.4; }

        /* MANAGEMENT BUTTONS */
        .action-buttons {
            display: flex;
            gap: 20px;
        }

        .btn {
            padding: 14px 30px;
            border-radius: 12px;
            font-size: 1.15rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: none;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
        }

        .btn:hover { transform: translateY(-2px); }
        .btn-exercise { background-color: var(--maroon-dark); color: var(--text-light); }
        .btn-example { background-color: var(--gold-card); color: var(--text-light); }
        .btn-active-state { background-color: #631b25 !important; box-shadow: inset 0 0 10px rgba(0,0,0,0.3); }

        /* ================= EXAMPLES BAGAN SECTION (PROPER DISPLAY FIX) ================= */
        .examples-display-section {
            display: none; /* Dikontrol via JS (Akan diset ke 'flex') */
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
            color: var(--maroon-heading);
            margin-bottom: 20px;
        }

        .sentence-box {
            background-color: #ffffff;
            border: 1px solid #EAEAEA;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            font-size: 1.55rem;
            color: #333333;
            margin-bottom: 25px;
            line-height: 1.4;
        }

        /* Marker Highlight Sesuai Gambar Mockup */
        .hl-conn { border-bottom: 2px solid var(--hl-connector); color: #7F8C8D; padding-bottom: 2px; font-weight: 700; }
        .hl-subj { background-color: #7B241C; color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }
        .hl-verb { background-color: #877148; color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }

        /* Grid Analisis Bagan 3 Kolom */
        .analysis-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 15px;
        }

        .analysis-box {
            border-radius: 10px;
            padding: 18px;
            border-left: 4px solid #BDC3C7;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .analysis-box.conn-box { background-color: var(--tag-connector-bg); border-left-color: var(--tag-connector-txt); }
        .analysis-box.subj-box { background-color: var(--tag-subject-bg); border-left-color: var(--tag-subject-txt); }
        .analysis-box.verb-box { background-color: var(--tag-verb-bg); border-left-color: var(--tag-verb-txt); }

        .box-label { font-family: sans-serif; font-size: 0.75rem; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 3px; }
        .conn-box .box-label { color: var(--tag-connector-txt); }
        .subj-box .box-label { color: var(--tag-subject-txt); }
        .verb-box .box-label { color: var(--tag-verb-txt); }

        .box-value { font-family: 'Playfair Display', serif; font-size: 1.2rem; font-weight: 700; margin-bottom: 3px; color: #111; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 3px; }
        .box-desc { font-size: 0.95rem; line-height: 1.4; color: #555; }

        .gold-alert-note {
            background-color: var(--gold-light);
            border: 1px solid var(--gold-border);
            border-radius: 12px;
            padding: 15px 20px;
            text-align: center;
            font-size: 1.05rem;
            color: #5C4A33;
        }

        /* GRAMMAR TIP BOX MAROON (BOTTOM SECTION IMAGES) */
        .premium-tip-maroon-card {
            background-color: var(--maroon-dark);
            border-radius: 20px;
            padding: 35px;
            color: var(--text-light);
            display: flex;
            gap: 25px;
            box-shadow: 0 12px 30px rgba(74, 21, 33, 0.15);
        }

        .tip-icon-square {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 12px;
            height: fit-content;
        }
        .tip-icon-square svg { width: 30px; height: 30px; fill: #FFFDF9; }

        .tip-main-wrapper { flex: 1; }
        .tip-main-wrapper h4 { font-family: 'Playfair Display', serif; font-size: 1.5rem; margin-bottom: 5px; }
        .tip-main-wrapper p.subtitle { font-size: 1.1rem; opacity: 0.8; margin-bottom: 20px; }

        .wrong-right-compare-box {
            background-color: rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }
        .compare-line { font-size: 1.15rem; }
        .compare-line strong { font-family: sans-serif; font-size: 0.8rem; letter-spacing: 1px; width: 85px; display: inline-block; }
        .line-correct strong { color: #2ECC71; }
        .line-wrong strong { color: #E74C3C; opacity: 0.7; }
        .line-wrong { opacity: 0.5; text-decoration: line-through; }

        .tip-footer-banner {
            font-size: 1.1rem;
            font-weight: 700;
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 15px;
            letter-spacing: 0.5px;
        }

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
        
        .question-text .error-underline { text-decoration: underline; font-weight: 700; display: inline-block; margin: 0 5px; color: #4A1521; }
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

        .explanation-card { display: none; background-color: #F4EFE3; border: 1px solid #E6DBC4; border-radius: 12px; padding: 25px; margin-bottom: 30px; color: #5C4A33; }
        .explanation-title { font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; }
        .inner-formula-box { display: inline-block; background-color: #ffffff; border: 1px solid #E1D5BA; border-radius: 8px; padding: 12px 20px; margin-top: 15px; font-family: 'Courier New', Courier, monospace; font-weight: 700; color: #877148; line-height: 1.4; }

        .quiz-footer { display: flex; justify-content: flex-end; }
        .btn-next { background-color: #4A121A; color: #ffffff; border: none; padding: 14px 50px; font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: 1.15rem; letter-spacing: 2px; border-radius: 25px; cursor: pointer; text-transform: uppercase; }

        /* ================= KOLOM KANAN (STICKY) ================= */
        .materi-right-sticky { position: sticky; top: 30px; display: flex; flex-direction: column; gap: 25px; }
        .pattern-card { background-color: var(--gold-card); border-radius: 20px; padding: 25px; color: var(--text-light); }
        .pattern-card h3 { font-size: 1.15rem; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 15px; font-weight: 600; }
        .formula-box { background-color: var(--gold-inner); padding: 15px; border-radius: 10px; font-family: 'Courier New', Courier, monospace; font-size: 1.05rem; font-weight: 700; text-align: center; letter-spacing: 0.5px; }
        
        .video-card { background-color: var(--maroon-dark); border-radius: 20px; padding: 25px; color: var(--text-light); }
        .video-card h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 600; margin-bottom: 5px; }
        .video-card p { font-size: 1rem; opacity: 0.7; margin-bottom: 15px; }
        .video-container { position: relative; width: 100%; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        @media (max-width: 992px) {
            .materi-wrapper { grid-template-columns: 1fr; padding: 0 20px; }
            .materi-right-sticky { position: relative; top: 0; }
            nav { padding: 20px; justify-content: center; }
            .analysis-grid { grid-template-columns: 1fr; }
            .premium-tip-maroon-card { flex-direction: column; }
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

    <div class="materi-header">
        <h1>Mastering Noun Clause Connectors</h1>
        <p>Navigate complex noun clauses to master the most challenging parts of the TOEFL structure section.</p>
    </div>

    <div class="materi-wrapper">
        
        <div class="materi-left-scroll">
            
            <div class="main-card">
                <h2>1. What is a Noun Clause?</h2>
                <p class="intro">A noun clause is a group of words that functions together as a <u>noun</u>. It can be a subject, object of verb, or object of preposition.</p>

                <div class="connectors-group-flex">
                    <div class="group-box">
                        <h3>2. Group 1 Connectors</h3>
                        <p class="desc">Standard connectors for dependent clauses with separate subject/verb.</p>
                        <div class="badge-container">
                            <div class="badge-item">what</div>
                            <div class="badge-item">when</div>
                            <div class="badge-item">that</div>
                            <div class="badge-item">if</div>
                        </div>
                    </div>

                    <div class="group-box">
                        <h3>3. Group 2 Connectors</h3>
                        <p class="desc">Connectors that can also function as the subject.</p>
                        <div class="badge-container">
                            <div class="badge-item">who</div>
                            <div class="badge-item">whoever</div>
                            <div class="badge-item">whatever</div>
                        </div>
                    </div>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Tip</h4>
                    <p>Never use question word order (V+S) inside a noun clause. It must be S+V.</p>
                </div>
            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ View Examples</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Practice Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">
                
                <div class="example-showcase-card">
                    <h3>Noun Clause as Object</h3>
                    <div class="sentence-box">
                        The committee knows <span class="hl-conn">when</span> <span class="hl-subj">the results</span> <span class="hl-verb">will be published.</span>
                    </div>
                    <div class="analysis-grid">
                        <div class="analysis-box conn-box">
                            <div class="box-label">Connector</div>
                            <div class="box-value">When</div>
                            <div class="box-desc">Introduces the noun clause and indicates time.</div>
                        </div>
                        <div class="analysis-box subj-box">
                            <div class="box-label">Subject</div>
                            <div class="box-value">the results</div>
                            <div class="box-desc">The subject of the noun clause. It refers to the information that will be published.</div>
                        </div>
                        <div class="analysis-box verb-box">
                            <div class="box-label">Verb</div>
                            <div class="box-value">will be published</div>
                            <div class="box-desc">The verb of the noun clause. It is in the passive voice and shows a future action.</div>
                        </div>
                    </div>
                </div>

                <div class="example-showcase-card">
                    <h3>Noun Clause as Subject</h3>
                    <div class="sentence-box" style="margin-bottom: 20px;">
                        <span class="hl-conn">What</span> <span class="hl-subj">he</span> <span class="hl-verb">said</span> is not relevant to the current discussion.
                    </div>
                    <div class="sentence-box">
                        <span class="hl-conn">Whether</span> <span class="hl-subj">the team</span> <span class="hl-verb">wins</span> depends on their defense.
                    </div>
                    <div class="gold-alert-note" style="margin-top: 20px;">
                        <strong>Note:</strong> When the clause acts as a subject, it is treated as a singular unit, necessitating a singular verb (e.g., "is", "depends").
                    </div>
                </div>

                <div class="premium-tip-maroon-card">
                    <div class="tip-icon-square">
                        <svg viewBox="0 0 24 24"><path d='M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12z'/></svg>
                    </div>
                    <div class="tip-main-wrapper">
                        <h4>Grammar Tip: Word Order Mastery</h4>
                        <p class="subtitle">A common trap on the TOEFL is using question word order (Verb + Subject) inside a noun clause.</p>
                        <div class="wrong-right-compare-box">
                            <div class="compare-line line-correct"><strong>Correct :</strong> "I know what <span style="text-decoration: underline;">the time is</span>."</div>
                            <div class="compare-line line-wrong"><strong>Wrong :</strong> "I know what <span style="text-decoration: underline;">is the time</span>."</div>
                        </div>
                        <div class="tip-footer-banner">Always use statement word order after the connector!</div>
                    </div>
                </div>

            </div>

            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Practice Check</div>
                <div class="quiz-body">
                    
                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" The committee has not yet decided ______ the new policy will be implemented next semester. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. that</li>
                            <li class="option-item" data-correct="true">B. whether</li>
                            <li class="option-item" data-correct="false">C. which</li>
                            <li class="option-item" data-correct="false">D. whose</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" ______ remains a mystery to the researchers. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Why did the species become extinct</li>
                            <li class="option-item" data-correct="true">B. Why the species became extinct</li>
                            <li class="option-item" data-correct="false">C. The species became extinct why</li>
                            <li class="option-item" data-correct="false">D. Did the species become extinct</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" The professor asked the students ______ before submitting their reports. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. what sources had they used</li>
                            <li class="option-item" data-correct="true">B. what sources they had used</li>
                            <li class="option-item" data-correct="false">C. they had used what sources</li>
                            <li class="option-item" data-correct="false">D. what had sources they used</li>
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
                            <span class="error-underline">Nobody knows</span><span class="error-label">A</span> 
                            <span class="error-underline">whether</span><span class="error-label">B</span> 
                            <span class="error-underline">the project</span><span class="error-label">C</span> 
                            <span class="error-underline">will be completed on time.</span><span class="error-label">D</span>
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Nobody knows</li>
                            <li class="option-item" data-correct="false">B. whether</li>
                            <li class="option-item" data-correct="true">C. the project</li>
                            <li class="option-item" data-correct="false">D. will be completed on time</li>
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
                            The manager <span class="error-underline">explained</span><span class="error-label">A</span> 
                            <span class="error-underline">how should the employees respond</span><span class="error-label">B</span> 
                            <span class="error-underline">to customer complaints</span><span class="error-label">C</span> 
                            <span class="error-underline">professionally.</span><span class="error-label">D</span>
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. explained</li>
                            <li class="option-item" data-correct="true">B. how should the employees respond</li>
                            <li class="option-item" data-correct="false">C. to customer complaints</li>
                            <li class="option-item" data-correct="false">D. professionally</li>
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
                <h3>🎛️ STANDARD</h3>
                <div class="formula-box">S + V + Conn + S + V</div>
            </div>
            <div class="pattern-card">
                <h3>🗂️ SUBJECT-CONN</h3>
                <div class="formula-box">S + V + Conn/Subj + V</div>
            </div>
            <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>

    <script>
        const quizDatabase = {
            1: {
                correctText: "Keren! Kamu memilih <strong>whether</strong> yang berarti \"apakah\". Dalam konteks ini, komite belum memutuskan suatu pilihan alternatif (apakah kebijakan baru akan diterapkan atau tidak).",
                wrongText: "<strong>TOEFL Trap: Meaning Context.</strong> Pilihan 'that' kurang tepat karena kalimat mengekspresikan ketidakpastian (has not yet decided). Konektor 'whether' digunakan untuk merujuk pada situasi alternatif bersyarat.",
                formula: "STRUCTURE ANALYSIS:<br>S (The committee) + V (has not yet decided) + Conn (whether) + Noun Clause [S (the new policy) + V (will be implemented)]"
            },
            2: {
                correctText: "Tepat sekali! Noun clause yang berfungsi sebagai <strong>Subject</strong> di awal kalimat wajib menggunakan susunan pernyataan normal (Subject + Verb), bukan inversi kalimat tanya.",
                wrongText: "<strong>TOEFL Trap: Question Word Inversion.</strong> Pilihan A salah karena menggunakan pola tanya 'did the species become'. Ingat, noun clause di dalam kalimat berbentuk S+V.",
                formula: "NOUN CLAUSE AS SUBJECT:<br>[Conn (Why) + S (the species) + V (became extinct)] + Main Verb (remains) + Complement"
            },
            3: {
                correctText: "Luar biasa! Konektor <strong>what sources</strong> bertindak sebagai satu kesatuan objek kata tanya, kemudian wajib diikuti susunan normal Subject (they) + Verb (had used).",
                wrongText: "<strong>TOEFL Trap: Inverted Embedded Question.</strong> Pilihan A salah karena membalik urutan pembantu 'had they used' (pola kalimat tanya). Di dalam ujian TOEFL, jebakan membalik auxiliary verb sebelum subject sering muncul.",
                formula: "COMPLEX NOUN CLAUSE:<br>S (The professor) + V (asked) + Indirect Obj + Noun Clause [Conn (what sources) + S (they) + V (had used)]"
            },
            4: {
                correctText: "Benar! Struktur kalimat ini sebenarnya membutuhkan kejelasan komponen klausa yang utuh setelah subjek penyusun di dalam struktur noun clause.",
                wrongText: "<strong>TOEFL Trap: Omitted Clause Separator.</strong> Di lembar soal TOEFL asli, bagian C dianggap bermasalah karena kalimat ini membutuhkan pemisah klausa yang ideal agar 'the project' terdefinisikan seutuhnya sebagai kesatuan subjek baru di dalam Noun Clause pengikut kata 'whether'.",
                formula: "RECONSTRUCTION:<br>Nobody knows (S+V) + [whether (Conn) + <span style='color:#2ECC71'>the project (S)</span> + will be completed (V)]"
            },
            5: {
                correctText: "Sempurna! Kamu berhasil melihat kesalahan fatal inversi modal 'should'. Frasa 'should the employees respond' adalah struktur kalimat tanya terbalik.",
                wrongText: "<strong>TOEFL Trap: Modal Inversion.</strong> Di dalam Noun Clause, kata kerja modal (should/can/will) dilarang mendahului subjek. Struktur kalimat tersebut wajib diubah kembali menjadi pola normal S+V.",
                formula: "CORRECTION:<br>...explained + [how (Conn) + <span style='color:#E74C3C; text-decoration:line-through;'>should the employees respond</span>]<br>👉 Harus diubah: <strong>the employees (S) + should respond (V)</strong>"
            }
        };

        const btnExamples = document.getElementById('btn-toggle-examples');
        const btnExercise = document.getElementById('btn-toggle-exercise');
        const examplesSec = document.getElementById('examples-display-section');
        const quizSec = document.getElementById('quiz-section');

        // Tab Event 1: Tampilkan Showcase Bagan Contoh
        btnExamples.addEventListener('click', function() {
            quizSec.style.display = 'none';
            btnExercise.classList.remove('btn-active-state');
            
            if(examplesSec.style.display === 'flex') {
                examplesSec.style.display = 'none';
                this.classList.remove('btn-active-state');
            } else {
                examplesSec.style.display = 'flex'; // Menampilkan elemen flex container bagan
                this.classList.add('btn-active-state');
                examplesSec.scrollIntoView({ behavior: 'smooth' });
            }
        });

        // Tab Event 2: Tampilkan Kuis Latihan
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

        // Logika Internal Kuis Latihan
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
                alert("🎉 Amazing! You have finished all 5 TOEFL practice checks.");
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