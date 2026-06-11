<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering Parallel Structure</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon-dark: #4A121A;   /* Warna background card utama kiri */
            --maroon-light: #5C1E26;  /* Variasi warna tip box */
            --maroon-heading: #430c17;/* Warna teks judul utama di atas */
            --gold-card: #9E8559;     /* Warna card pola kanan figma */
            --gold-inner: #877048;    /* Kotak rumus di dalam card emas */
            --gold-light: #F4EFE3;    /* Background note cream-emas */
            --gold-border: #E6DBC4;   /* Border note */
            --cream-bg: #FAF4E7;      /* Warna background seluruh halaman */
            --card-white: #FFFDF9;
            --text-light: #FFFDF9;
            --text-dark: #2a0d15;

            /* Warna khusus Analisis Bagan Paralel */
            --tag-elem-bg: #F5EEF0;
            --tag-elem-txt: #78281F;
            --tag-conj-bg: #EAECEE;
            --tag-conj-txt: #566573;
            --hl-parallel: #877048;
            --hl-conj: #B2BABB;
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

        /* ================= KOLOM KIRI (MATERI KOTAK MAROON) ================= */
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

        .sub-section {
            margin-bottom: 35px;
        }

        .sub-section h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.35rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: #FFFDF9;
            letter-spacing: 0.5px;
        }

        .sub-section p {
            font-size: 1.1rem;
            opacity: 0.85;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .badge-type {
            background-color: rgba(255, 253, 249, 0.15);
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.9rem;
            font-style: normal;
        }

        .comparison-box {
            background-color: rgba(255, 255, 255, 0.04);
            border-radius: 12px;
            padding: 18px 22px;
            margin-top: 12px;
            border-left: 3px solid rgba(255, 253, 249, 0.2);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .comparison-box p { font-size: 1.1rem; line-height: 1.5; margin-bottom: 0; }
        .text-wrong { color: #FF6B6B; font-weight: 600; }
        .text-correct { color: #2ECC71; font-weight: 600; }

        .tip-box {
            background-color: var(--maroon-light);
            border-radius: 12px;
            padding: 22px 25px;
            margin-top: 25px;
            border: 1px solid rgba(255, 253, 249, 0.1);
        }
        .tip-box h4 { font-family: 'Playfair Display', serif; font-size: 1.15rem; font-weight: 700; margin-bottom: 8px; }

        /* Tombol Aksi */
        .action-buttons {
            display: flex;
            gap: 20px;
        }

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
            font-size: 1.45rem;
            color: #333333;
            margin-bottom: 25px;
            line-height: 1.4;
        }

        .hl-p1 { background-color: var(--hl-parallel); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }
        .hl-c { border-bottom: 2px solid var(--hl-conj); color: #7F8C8D; padding-bottom: 2px; font-weight: 700; }

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
        .analysis-box.elem-box { background-color: var(--tag-elem-bg); border-left-color: var(--tag-elem-txt); }
        .analysis-box.conj-box { background-color: var(--tag-connector-bg); border-left-color: var(--tag-connector-txt); }

        .box-label { font-family: sans-serif; font-size: 0.75rem; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 3px; }
        .elem-box .box-label { color: var(--tag-elem-txt); }
        .conj-box .box-label { color: #566573; }

        .box-value { font-family: 'Playfair Display', serif; font-size: 1.2rem; font-weight: 700; margin-bottom: 3px; color: #111; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 3px; }
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

        .explanation-card { display: none; background-color: #F4EFE3; border: 1px solid #E6DBC4; border-radius: 12px; padding: 25px; margin-bottom: 30px; color: #5C4A33; }
        .explanation-title { font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; }
        .inner-formula-box { display: inline-block; background-color: #ffffff; border: 1px solid #E1D5BA; border-radius: 8px; padding: 12px 20px; margin-top: 15px; font-family: 'Courier New', Courier, monospace; font-weight: 700; color: #877048; line-height: 1.4; }

        .quiz-footer { display: flex; justify-content: flex-end; }
        .btn-next { background-color: #4A121A; color: #ffffff; border: none; padding: 14px 50px; font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: 1.15rem; letter-spacing: 2px; border-radius: 25px; cursor: pointer; text-transform: uppercase; }

        /* ================= KOLOM KANAN (STICKY PATTERNS & VIDEO) ================= */
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
            margin-bottom: 15px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .formula-box {
            background-color: var(--gold-inner);
            padding: 14px;
            border-radius: 10px;
            font-family: sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-align: center;
        }

        .pattern-example { font-size: 1rem; opacity: 0.9; display: block; margin-top: 12px; line-height: 1.4; font-style: italic; }

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
        <a href="#">Soal</a>
        <a href="#">TOEFL</a>
        <a href="#">History</a>
        <a href="#">About Us</a>
    </nav>

    <div class="materi-header">
        <h1>Mastering Parallel Structure</h1>
        <p>Navigate parallel structures to master the most challenging parts of the TOEFL structure section.</p>
    </div>

    <div class="materi-wrapper">
        
        <div class="materi-left-scroll">
            
            <div class="main-card">
                <h2>1. What is Parallel Structure?</h2>
                <p class="intro"><strong>Parallel structure</strong> (also called parallelism) is a fundamental grammar rule that requires words or phrases in a sentence to share the same grammatical form.<br><br>
                The Core Concept: Parallel means <strong>"equal"</strong> or <strong>"balanced."</strong> If a sentence contains a list or a comparison, every item in that list must follow the exact same grammatical pattern.</p>

                <div class="sub-section">
                    <h3>A. Parallel Structure with Words (Adjectives or Nouns)</h3>
                    <p>When listing individual characteristics or items, the word classes must remain equal.</p>
                    <div class="comparison-box">
                        <p><span class="text-correct">Correct:</span> She is <strong>smart</strong> <em class="badge-type">adjective</em>, <strong>kind</strong> <em class="badge-type">adjective</em>, and <strong>friendly</strong> <em class="badge-type">adjective</em>.</p>
                    </div>
                </div>

                <div class="sub-section">
                    <h3>B. Parallel Structure with Verbs</h3>
                    <p>The verbs used in a list must consistently stick to the same tense or format. If the first verb uses <em>-ing</em>, all subsequent verbs must use <em>-ing</em>. If it starts with an infinitive (to + verb), the rest must match.</p>
                    <div class="comparison-box">
                        <p><span class="text-wrong">Incorrect:</span> She likes <strong>reading</strong>, <strong>writing</strong>, and <strong>to listen</strong>.</p>
                        <p><span class="text-correct">Correct:</span> She likes <strong>reading</strong>, <strong>writing</strong>, and <strong>listening</strong>.</p>
                        <p><span class="text-correct">Correct:</span> I want <strong>to study</strong>, <strong>to work</strong>, and <strong>to travel</strong>.</p>
                    </div>
                </div>

                <div class="sub-section">
                    <h3>C. Parallel Structure with Phrases</h3>
                    <p>A phrase is a group of words that functions together without a subject and a verb. All phrases in a series must share the same structural pattern.</p>
                    <div class="comparison-box">
                        <p><span class="text-wrong">Incorrect:</span> She enjoys <strong>playing the piano</strong>, <strong>reading books</strong>, and <strong>to watch movies</strong>.</p>
                        <p><span class="text-correct">Correct:</span> She enjoys <strong>playing the piano</strong>, <strong>reading books</strong>, and <strong>watching movies</strong>.</p>
                        <p><span class="text-correct">Correct:</span> He is interested in <strong>learning English</strong>, <strong>studying abroad</strong>, and <strong>gaining experience</strong>.</p>
                    </div>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Tip</h4>
                    <p>Never mix grammatical categories within lists (e.g., mixing a noun with a verb phrase). Always identify the conjunction (and, but, or) to check if components on both sides are perfectly balanced!</p>
                </div>
            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ Example</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">
                <div class="example-showcase-card">
                    <h3>Bagan Analisis Elemen Paralel</h3>
                    <div class="sentence-box">
                        The job requires <span class="hl-p1">patience</span>, <span class="hl-p1">dedication</span>, <span class="hl-c">and</span> <span class="hl-p1">intelligence</span>.
                    </div>
                    <div class="analysis-grid">
                        <div class="analysis-box elem-box">
                            <div class="box-label">Element 1</div>
                            <div class="box-value">Patience</div>
                            <div class="box-desc">Noun (Kata Benda) tunggal yang mengawali deretan syarat pekerjaan.</div>
                        </div>
                        <div class="analysis-box elem-box">
                            <div class="box-label">Element 2</div>
                            <div class="box-value">Dedication</div>
                            <div class="box-desc">Noun (Kata Benda) kedua. Wajib setara bentuk dengan elemen pertama.</div>
                        </div>
                        <div class="analysis-box elem-box">
                            <div class="box-label">Element 3</div>
                            <div class="box-value">Intelligence</div>
                            <div class="box-desc">Noun (Kata Benda) ketiga setelah konjungsi paralel "and". Semuanya seimbang!</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Parallelism Practice Check</div>
                <div class="quiz-body">
                    
                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" The ideal candidate must be motivated, innovative, and ______ under pressure. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. ability to work</li>
                            <li class="option-item" data-correct="false">B. working well</li>
                            <li class="option-item" data-correct="true">C> able to work</li>
                            <li class="option-item" data-correct="false">D. he works well</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" To complete the project, they need to gather data, analyze the results, and ______ a final report. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. write</li>
                            <li class="option-item" data-correct="false">B. writing</li>
                            <li class="option-item" data-correct="false">C. will write</li>
                            <li class="option-item" data-correct="false">D. the writing of</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" Atmospheric trace gases are important because they help block harmful radiation, regulate climate, and ______ greenhouse effects. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. the control of</li>
                            <li class="option-item" data-correct="true">B. control</li>
                            <li class="option-item" data-correct="false">C. controlling</li>
                            <li class="option-item" data-correct="false">D. they control</li>
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
                            The online system <span class="error-underline">allows</span><span class="error-label">A</span> users to check balances, 
                            <span class="error-underline">pay bills</span><span class="error-label">B</span>, and 
                            <span class="error-underline">requesting</span><span class="error-label">C</span> official statements 
                            <span class="error-underline">securely</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. allows</li>
                            <li class="option-item" data-correct="false">B. pay bills</li>
                            <li class="option-item" data-correct="true">C. requesting</li>
                            <li class="option-item" data-correct="false">D. securely</li>
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
                            The new seminar was <span class="error-underline">not only</span><span class="error-label">A</span> 
                            <span class="error-underline">informative</span><span class="error-label">B</span> but also 
                            <span class="error-underline">provided inspiration</span><span class="error-label">C</span> to all 
                            <span class="error-underline">attendees</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. not only</li>
                            <li class="option-item" data-correct="false">B. informative</li>
                            <li class="option-item" data-correct="true">C. provided inspiration</li>
                            <li class="option-item" data-correct="false">D. attendees</li>
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
                <h3>📋 Nouns Pattern</h3>
                <div class="formula-box">
                    Noun + Noun + Noun
                </div>
                <span class="pattern-example">
                    Ex: She likes <strong>reading</strong>, <strong>writing</strong>, and <strong>speaking</strong> English.
                </span>
            </div>

            <div class="pattern-card">
                <h3>🎨 Adjectives Pattern</h3>
                <div class="formula-box">
                    Adj + Adj + Adj
                </div>
                <span class="pattern-example">
                    Ex: The teacher is <strong>kind</strong>, <strong>patient</strong>, and <strong>helpful</strong>.
                </span>
            </div>

            <div class="pattern-card">
                <h3>⛓️ Phrases Pattern</h3>
                <div class="formula-box">
                    Phrase + Phrase + Phrase
                </div>
                <span class="pattern-example">
                    Ex: ...<strong>playing the piano</strong>, <strong>reading books</strong>, and <strong>watching movies</strong>.
                </span>
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
                correctText: "Luar biasa! Kata <strong>motivated</strong> dan <strong>innovative</strong> adalah kata sifat (adjective). Maka elemen ketiga wajib berupa adjective, yaitu <strong>able to work</strong>.",
                wrongText: "<strong>TOEFL Trap: Mixed Categories.</strong> Pilihan A adalah noun phrase, B berbentuk gerund (-ing), dan D berbentuk klausa penuh. Semuanya merusak keseimbangan paralel kata sifat sebelumnya.",
                formula: "Adj (motivated) + Adj (innovative) + [and] + Adj (able to work)"
            },
            2: {
                correctText: "Benar! Kalimat ini menggunakan deretan bare infinitive setelah modal 'need to'. Deretannya adalah: *gather*, *analyze*, dan elemen terakhir wajib berupa bare infinitive tunggal: <strong>write</strong>.",
                wrongText: "Jangan terjebak mengulangi kata 'to' jika di awal sudah diwakili oleh kesatuan bare infinitive seri. Pilihan B (-ing) dan C (will) melanggar aturan keseimbangan.",
                formula: "Need to + [Verb 1 (gather) + Verb 1 (analyze) + and + Verb 1 (write)]"
            },
            3: {
                correctText: "Sempurna! Frasa penjelas di dalam kalimat adalah kata kerja dasar (Plural Present): *help block...*, *regulate...*, maka pengisi tempat kosong terakhir wajib berupa kata kerja murni dasar yaitu <strong>control</strong>.",
                wrongText: "Pilihan D (*they control*) salah karena menambahkan Subject baru yang merusak kesatuan struktur paralel predikat langsung.",
                formula: "They help + [Verb 1 (block) + Verb 1 (regulate) + and + Verb 1 (control)]"
            },
            4: {
                correctText: "Tepat sekali! Elemen C (requesting) bersalah. Deretan paralel diatur oleh 'to' infinitive di awal kalimat: *to check balances*, *[to] pay bills*, maka kata berikutnya wajib berbentuk kata kerja dasar dasar (*request*), bukan format *-ing*.",
                wrongText: "Pola paralel yang berjalan di kalimat ini adalah bare infinitive berurutan setelah penanda infinitive utama: *check* (B1), *pay* (B1), harusnya *request* (B1).",
                formula: "To + [check (V1), pay (V1), and <span style='color:#E74C3C;'>request (V1)</span>]"
            },
            5: {
                correctText: "Brilian! Konjungsi berpasangan (*Correlative Conjunction*) 'not only... but also...' wajib mengapit kelas kata yang setara. Karena setelah 'not only' adalah kata sifat (*informative*), maka setelah 'but also' wajib kata sifat langsung (*inspiring*), bukan malah membentuk klausa kata kerja (*provided inspiration*).",
                wrongText: "Pilihan C membuat kalimat menjadi tidak seimbang karena merubah struktur Adjective menjadi Verb Phrase di tengah jalan.",
                formula: "Not only + Adjective (informative) + But also + <span style='color:#E74C3C;'>Adjective (inspiring)</span>"
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
                alert("🎉 Amazing! You have completed the Parallel Structure checks.");
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