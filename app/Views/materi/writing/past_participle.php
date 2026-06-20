<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Present and Past Participle Rules</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon-dark: #4A121A;
            --maroon-light: #5C1E26;
            --maroon-heading: #430c17;
            --gold-card: #9E8559;
            --gold-inner: #877048;
            --gold-light: #F4EFE3;
            --gold-border: #E6DBC4;
            --cream-bg: #FAF4E7;
            --card-white: #FFFDF9;
            --text-light: #FFFDF9;
            --text-dark: #2a0d15;

            --tag-elem-bg: #F5EEF0;
            --tag-elem-txt: #78281F;
            --hl-parallel: #877048;
            --hl-conj: #4A121A;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            background-color: var(--cream-bg);
            color: var(--text-dark);
            min-height: 100vh;
            overflow-x: hidden;
            padding-bottom: 60px;
        }

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

        .materi-wrapper {
            max-width: 1200px;
            margin: 0 auto 60px;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1.6fr 1fr;
            gap: 40px;
            align-items: start;
        }

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
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 253, 249, 0.15);
            padding-bottom: 15px;
        }

        .main-card p.intro {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
            opacity: 0.95;
        }

        .sub-section { margin-bottom: 35px; }

        .sub-section h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.45rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #FFFDF9;
        }

        .types-list { list-style: none; padding-left: 0; margin-bottom: 25px; }
        .types-list li { font-size: 1.15rem; margin-bottom: 15px; line-height: 1.5; opacity: 0.95; }
        .types-list strong { color: #FAF6EE; }

        .premium-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1.05rem;
            background-color: rgba(255, 255, 255, 0.03);
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid rgba(255, 253, 249, 0.1);
        }

        .premium-table th {
            background-color: rgba(255, 253, 249, 0.1);
            color: #FFFDF9;
            text-align: left;
            padding: 14px 15px;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 1.15rem;
            letter-spacing: 0.5px;
        }

        .premium-table td {
            padding: 14px 15px;
            border-bottom: 1px solid rgba(255, 253, 249, 0.05);
            color: rgba(255, 253, 249, 0.9);
            font-size: 1.1rem;
        }

        .premium-table tr:last-child td { border-bottom: none; }

        .highlight-participle {
            color: #FAF4E7 !important;
            font-weight: 600;
            background-color: rgba(158, 134, 89, 0.15);
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

        /* Action Buttons */
        .action-buttons { display: flex; gap: 20px; }
        .btn {
            padding: 14px 35px;
            border-radius: 12px;
            font-size: 1.05rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            font-family: 'Cormorant Garamond', serif;
        }
        .btn-exercise { background-color: var(--maroon-dark); color: var(--text-light); }
        .btn-example { background-color: var(--gold-card); color: var(--text-light); }
        .btn:hover { transform: translateY(-2px); opacity: 0.9; }
        .btn-active-state { box-shadow: inset 0 0 10px rgba(0,0,0,0.3); opacity: 0.85; }
        .btn-exercise.btn-active-state { background-color: #631b25 !important; }
        .btn-example.btn-active-state { background-color: #7a6640 !important; }

        /* ========== EXAMPLES SECTION ========== */
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

        .hl-have { color: var(--hl-conj); font-weight: 700; border-bottom: 2px dashed var(--hl-conj); }
        .hl-v3 { background-color: var(--hl-parallel); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }

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

        .example-nav { display: flex; gap: 10px; margin-bottom: 20px; flex-wrap: wrap; }
        .ex-tab {
            padding: 8px 20px;
            border-radius: 20px;
            border: 2px solid var(--gold-card);
            background: transparent;
            color: var(--gold-card);
            font-family: 'Cormorant Garamond', serif;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }
        .ex-tab.active { background-color: var(--gold-card); color: #fff; }
        .ex-tab:hover { background-color: var(--gold-card); color: #fff; }

        .example-slide { display: none; }
        .example-slide.active { display: block; }

        /* ========== QUIZ SECTION ========== */
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
            background-color: #ffffff;
            border: 1px solid #dcdcdc;
            border-radius: 12px;
            padding: 18px 24px;
            font-size: 1.1rem;
            color: var(--text-dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.2s;
            font-family: 'Cormorant Garamond', serif;
        }
        .option-item:hover { background-color: #fcfbfa; border-color: var(--gold-card); }
        .option-item.correct { background-color: #E8F8F0 !important; border-color: #2ECC71 !important; color: #27AE60 !important; font-weight: 600; }
        .option-item.correct::after { content: "✓"; background-color: #2ECC71; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; }
        .option-item.wrong { background-color: #FCE4E4 !important; border-color: #E74C3C !important; color: #C0392B !important; }
        .option-item.wrong::after { content: "✕"; background-color: #E74C3C; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; }

        .explanation-card { display: none; background-color: var(--gold-light); border: 1px solid var(--gold-border); border-radius: 12px; padding: 25px; margin-bottom: 30px; color: #5C4A33; }
        .explanation-title { font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; }
        .inner-formula-box { display: none; background-color: #ffffff; border: 1px solid #E1D5BA; border-radius: 8px; padding: 12px 20px; margin-top: 15px; font-family: 'Courier New', Courier, monospace; font-weight: 700; color: #877048; line-height: 1.4; }

        .quiz-footer { display: flex; justify-content: flex-end; }
        .btn-next { background-color: #4A121A; color: #ffffff; border: none; padding: 14px 50px; font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: 1.15rem; letter-spacing: 2px; border-radius: 25px; cursor: pointer; text-transform: uppercase; }

        /* ========== RIGHT COLUMN ========== */
        .materi-right-sticky {
            position: sticky;
            top: 30px;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

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

        .summary-box {
            background-color: var(--gold-inner);
            padding: 15px;
            border-radius: 8px;
            font-size: 1.05rem;
            line-height: 1.4;
            margin-bottom: 12px;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
        }

        .summary-box span {
            display: block;
            font-family: monospace;
            font-weight: 700;
            margin-top: 5px;
            color: #FAF4E7;
            font-size: 1.15rem;
        }

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
            .options-grid { grid-template-columns: 1fr; }
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
        <h1>Understanding Present and Past Participles</h1>
        <p>Mastering the core forms of verbs and their fundamental usage in perfect tenses.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <div class="main-card">
                <h2>What is a Participle?</h2>
                <p class="intro">A <strong>participle</strong> is a word formed from a base verb that can function either as a verb (to form tenses) or as an adjective (to describe nouns). To fully grasp their usage, it is essential to look at how a verb generally branches into its core forms.</p>

                <div class="sub-section">
                    <h3>There are two main types of participles:</h3>
                    <ul class="types-list">
                        <li>
                            • <strong>Present Participle:</strong> Created by adding the suffix <strong>-ing</strong> to the base verb (e.g., <em>drinking, playing</em>).
                        </li>
                        <li>
                            • <strong>Past Participle:</strong> For regular verbs, it is created by adding <strong>-ed</strong> or <strong>-d</strong> (e.g., <em>played</em>). For irregular verbs, the form is inconsistent and must be memorized (e.g., <em>drunk</em>).
                        </li>
                    </ul>
                </div>

                <div class="sub-section">
                    <h3>Core Verb Forms Reference Table</h3>
                    <p>Observe the transition from the base form down to both participle branches:</p>

                    <table class="premium-table">
                        <thead>
                            <tr>
                                <th>Base Form</th>
                                <th>Present Tense</th>
                                <th>Past Tense</th>
                                <th style="background-color: rgba(255,253,249,0.15);">Present Participle</th>
                                <th style="background-color: rgba(255,253,249,0.15);">Past Participle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Drink</td>
                                <td>Drinks</td>
                                <td>Drank</td>
                                <td class="highlight-participle">Drinking</td>
                                <td class="highlight-participle">Drunk</td>
                            </tr>
                            <tr>
                                <td>Play</td>
                                <td>Plays</td>
                                <td>Played</td>
                                <td class="highlight-participle">Playing</td>
                                <td class="highlight-participle">Played</td>
                            </tr>
                            <tr>
                                <td>Write</td>
                                <td>Writes</td>
                                <td>Wrote</td>
                                <td class="highlight-participle">Writing</td>
                                <td class="highlight-participle">Written</td>
                            </tr>
                            <tr>
                                <td>Go</td>
                                <td>Goes</td>
                                <td>Went</td>
                                <td class="highlight-participle">Going</td>
                                <td class="highlight-participle">Gone</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Core Rule: Past Participle After HAVE</h4>
                    <p>Ketika sebuah <em>participle</em> digunakan sebagai kata kerja aktif setelah kata bantu <strong>HAVE (has, have, had)</strong>, maka bentuk yang wajib digunakan adalah <strong>Past Participle (V3)</strong> untuk membentuk <em>Perfect Tense</em> (e.g., <em>He has worked</em> atau <em>He has been working</em>). Jangan pernah menggunakan base form atau verb-ing langsung setelah kelompok HAVE!</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ Example</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Exercise</button>
            </div>

            <!-- ========== EXAMPLES SECTION ========== -->
            <div id="examples-display-section" class="examples-display-section">

                <div class="example-showcase-card">
                    <h3>Bagan Analisis Participle</h3>

                    <div class="example-nav">
                        <button class="ex-tab active" data-target="ex1">Present Perfect</button>
                        <button class="ex-tab" data-target="ex2">Past Perfect</button>
                        <button class="ex-tab" data-target="ex3">Perfect Continuous</button>
                    </div>

                    <!-- Example 1 -->
                    <div class="example-slide active" id="ex1">
                        <div class="sentence-box">
                            She <span class="hl-have">has</span> <span class="hl-v3">written</span> three novels since last year.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Auxiliary Verb (Kata Bantu)</div>
                                <div class="box-value">has</div>
                                <div class="box-desc">Bentuk <strong>HAVE</strong> untuk subjek orang ketiga tunggal (she/he/it). Ini adalah penanda wajib <em>Present Perfect Tense</em>.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Past Participle (V3) — Wajib!</div>
                                <div class="box-value">written</div>
                                <div class="box-desc">Bentuk V3 dari kata kerja <em>write</em>. Setelah kelompok HAVE, hanya V3 yang boleh digunakan — bukan <em>wrote</em> (V2) atau <em>writing</em>.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 2 -->
                    <div class="example-slide" id="ex2">
                        <div class="sentence-box">
                            They <span class="hl-have">had</span> <span class="hl-v3">finished</span> the project before the deadline.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Auxiliary Verb (Kata Bantu)</div>
                                <div class="box-value">had</div>
                                <div class="box-desc">Bentuk <strong>HAD</strong> digunakan untuk semua subjek pada <em>Past Perfect Tense</em>. Menyatakan aksi yang selesai sebelum aksi lampau lainnya.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Past Participle (V3) — Wajib!</div>
                                <div class="box-value">finished</div>
                                <div class="box-desc">V3 dari kata kerja reguler <em>finish</em> (ditambah <strong>-ed</strong>). Polanya tetap sama: <strong>HAD + V3</strong>, tidak pernah berubah.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 3 -->
                    <div class="example-slide" id="ex3">
                        <div class="sentence-box">
                            He <span class="hl-have">has</span> <span class="hl-v3">been</span> working here for five years.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Pola Perfect Continuous</div>
                                <div class="box-value">has been</div>
                                <div class="box-desc"><strong>HAVE + been</strong> (V3 dari <em>be</em>) membentuk awal dari <em>Present Perfect Continuous</em>. Perhatikan: <em>been</em> sendiri adalah Past Participle!</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Present Participle (V-ing)</div>
                                <div class="box-value">working</div>
                                <div class="box-desc">Dalam <em>Perfect Continuous</em>, V-ing hadir setelah <em>been</em>, bukan langsung setelah HAVE. Urutan wajib: <strong>HAVE + been + V-ing</strong>.</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- ========== QUIZ SECTION ========== -->
            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Participle Usage Quiz</div>
                <div class="quiz-body">

                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" The research team has ______ a breakthrough discovery that could change modern medicine. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. make</li>
                            <li class="option-item" data-correct="false">B. making</li>
                            <li class="option-item" data-correct="true">C. made</li>
                            <li class="option-item" data-correct="false">D. makes</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" By the time the guests arrived, the chef had already ______ all the dishes for the banquet. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. prepare</li>
                            <li class="option-item" data-correct="false">B. preparing</li>
                            <li class="option-item" data-correct="false">C. prepares</li>
                            <li class="option-item" data-correct="true">D. prepared</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" The students have been ______ very hard for the upcoming national exam. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. studied</li>
                            <li class="option-item" data-correct="true">B. studying</li>
                            <li class="option-item" data-correct="false">C. study</li>
                            <li class="option-item" data-correct="false">D. studies</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="4" style="display: none;">
                        <div class="quiz-progress">4/5</div>
                        <p class="question-text" style="font-style: normal;">
                            <strong>Identify the ERROR:</strong><br><br>
                            The committee <span class="error-underline">has</span><span class="error-label">A</span> 
                            <span class="error-underline">review</span><span class="error-label">B</span> 
                            all submitted <span class="error-underline">applications</span><span class="error-label">C</span> 
                            and will announce the <span class="error-underline">results</span><span class="error-label">D</span> next Monday.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. has</li>
                            <li class="option-item" data-correct="true">B. review</li>
                            <li class="option-item" data-correct="false">C. applications</li>
                            <li class="option-item" data-correct="false">D. results</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="5" style="display: none;">
                        <div class="quiz-progress">5/5</div>
                        <p class="question-text" style="font-style: normal;">
                            <strong>Identify the ERROR:</strong><br><br>
                            Professor Wells <span class="error-underline">had</span><span class="error-label">A</span> 
                            been <span class="error-underline">teach</span><span class="error-label">B</span> 
                            linguistics at the university for over <span class="error-underline">two decades</span><span class="error-label">C</span> 
                            before she <span class="error-underline">retired</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. had</li>
                            <li class="option-item" data-correct="true">B. teach</li>
                            <li class="option-item" data-correct="false">C. two decades</li>
                            <li class="option-item" data-correct="false">D. retired</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="quiz-footer">
                        <button id="btn-next-question" class="btn-next" style="display: none;">NEXT</button>
                    </div>

                </div>
            </div>

        </div>

        <!-- ========== RIGHT COLUMN ========== -->
        <div class="materi-right-sticky">

            <div class="pattern-card">
                <h3>🔒 Golden Verb Rule</h3>

                <div class="summary-box">
                    <strong>Past Participle After HAVE</strong>
                    Digunakan untuk menunjukkan aksi yang telah selesai (Perfect Tense).
                    <span>Have / Has / Had + Past Participle (V3)</span>
                </div>

                <div class="summary-box">
                    <strong>Active Perfect Example</strong>
                    <span>He has worked.</span>
                </div>

                <div class="summary-box">
                    <strong>Continuous Perfect Example</strong>
                    <span>He has been working.</span>
                </div>

                <span style="font-size: 0.95rem; opacity: 0.85; display: block; margin-top: 15px; text-align: center; font-style: italic;">
                    Always pair HAVE families with a Past Participle!
                </span>
            </div>

            <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/X4ZkUUXQj9c?si=dlMgjk-L3lIpfB7I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>

    <script>
        // ===== QUIZ DATABASE =====
        const quizDatabase = {
            1: {
                correctText: "Tepat! Setelah kata bantu <strong>has</strong> (bagian dari kelompok HAVE), wajib menggunakan <strong>Past Participle (V3)</strong>. Bentuk V3 dari kata kerja tidak beraturan <em>make</em> adalah <strong>made</strong>.",
                wrongText: "<strong>TOEFL Core Rule Breach!</strong> Setelah kelompok HAVE (has/have/had), bentuk kata kerja yang wajib digunakan adalah <strong>Past Participle (V3)</strong>. Pilihan A (base form), B (present participle), dan D (present tense) semuanya ilegal dalam posisi ini.",
                formula: "has + made (V3 dari 'make')"
            },
            2: {
                correctText: "Brilian! Frasa <em>By the time...</em> mengindikasikan <em>Past Perfect Tense</em>. Setelah <strong>had</strong>, wajib menggunakan V3. Kata kerja reguler <em>prepare</em> membentuk V3 dengan menambahkan <strong>-d</strong> menjadi <strong>prepared</strong>.",
                wrongText: "Perhatikan konteks kalimat: 'By the time the guests arrived' menunjukkan suatu aksi yang selesai sebelum aksi lain di masa lampau — ini adalah pola <em>Past Perfect</em>. Rumusnya: <strong>had + V3</strong>.",
                formula: "had + prepared (V3 reguler: prepare + d)"
            },
            3: {
                correctText: "Luar biasa! Ini adalah pola <strong>Present Perfect Continuous</strong>. Polanya: <em>have/has + been + V-ing</em>. Karena posisinya setelah <em>been</em>, yang dibutuhkan adalah <strong>Present Participle (-ing)</strong>, bukan V3.",
                wrongText: "Ingat perbedaan posisi: dalam <em>Perfect Continuous</em>, urutan yang benar adalah <strong>have/has + been + V-ing</strong>. V-ing hadir SETELAH kata <em>been</em>, sedangkan <em>been</em> sendiri adalah V3 yang langsung setelah HAVE.",
                formula: "have been + studying (V-ing setelah 'been')"
            },
            4: {
                correctText: "Benar! Bagian B (<em>review</em>) adalah ERROR. Setelah kata bantu <strong>has</strong>, bentuk kata kerja wajib berupa <strong>Past Participle (V3)</strong>. Kata <em>review</em> adalah base form, sehingga harus diubah menjadi <strong>reviewed</strong>.",
                wrongText: "Ini adalah jebakan umum TOEFL tipe Error Recognition. Selalu periksa setiap kata kerja yang mengikuti HAVE (has/have/had) — pastikan berbentuk V3, bukan base form.",
                formula: "has + <span style='color:#E74C3C;'>review (SALAH)</span> → seharusnya: has + <span style='color:#27AE60;'>reviewed (V3)</span>"
            },
            5: {
                correctText: "Sempurna! Bagian B (<em>teach</em>) adalah ERROR. Dalam pola <em>Past Perfect Continuous</em>, urutan wajibnya adalah <strong>had + been + V-ing</strong>. Posisi setelah <em>been</em> menuntut bentuk <em>-ing</em>, sehingga <em>teach</em> harus diubah menjadi <strong>teaching</strong>.",
                wrongText: "Perhatikan strukturnya: <em>had been ____</em>. Ini adalah pola <em>Past Perfect Continuous</em> dengan rumus <strong>had + been + V-ing</strong>. Kata <em>teach</em> (base form) tidak bisa mengisi posisi tersebut.",
                formula: "had been + <span style='color:#E74C3C;'>teach (SALAH)</span> → seharusnya: had been + <span style='color:#27AE60;'>teaching (V-ing)</span>"
            }
        };

        // ===== TOGGLE BUTTONS =====
        const btnExamples = document.getElementById('btn-toggle-examples');
        const btnExercise = document.getElementById('btn-toggle-exercise');
        const examplesSec = document.getElementById('examples-display-section');
        const quizSec = document.getElementById('quiz-section');

        btnExamples.addEventListener('click', function() {
            quizSec.style.display = 'none';
            btnExercise.classList.remove('btn-active-state');

            if (examplesSec.style.display === 'flex') {
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

            if (quizSec.style.display === 'block') {
                quizSec.style.display = 'none';
                this.classList.remove('btn-active-state');
            } else {
                quizSec.style.display = 'block';
                this.classList.add('btn-active-state');
                quizSec.scrollIntoView({ behavior: 'smooth' });
            }
        });

        // ===== EXAMPLE TABS =====
        document.querySelectorAll('.ex-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.ex-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.example-slide').forEach(s => s.classList.remove('active'));
                this.classList.add('active');
                document.getElementById(this.getAttribute('data-target')).classList.add('active');
            });
        });

        // ===== QUIZ LOGIC =====
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
                        if (opt.getAttribute('data-correct') === 'true') opt.classList.add('correct');
                    });
                }

                if (quizDatabase[step].formula) {
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

            if (currentStep <= 5) {
                document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'block';
                this.style.display = 'none';
            } else {
                alert("🎉 Brilliant! You have completely mastered the Present and Past Participle rules.");
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