<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding Present and Past Participle</title>
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
            --hl-keyword: #4A121A;
            --hl-form: #877048;
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

        .sub-section p {
            font-size: 1.1rem;
            opacity: 0.85;
            line-height: 1.6;
            margin-bottom: 12px;
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

        .hl-keyword { color: var(--hl-keyword); font-weight: 700; border-bottom: 2px dashed var(--hl-keyword); }
        .hl-form { background-color: var(--hl-form); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }

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
        .ex-tab.active, .ex-tab:hover { background-color: var(--gold-card); color: #fff; }

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
        .question-text { font-size: 1.35rem; text-align: center; color: var(--text-dark); margin-bottom: 35px; line-height: 1.5; font-style: italic; }
        .question-text .error-underline { text-decoration: underline; font-weight: 700; display: inline-block; margin: 0 3px; color: #4A121A; font-style: normal; }
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
            font-size: 1.1rem;
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
        <p>Mastering the core forms of verbs before diving into complex structures.</p>
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
                                <td>Take</td>
                                <td>Takes</td>
                                <td>Took</td>
                                <td class="highlight-participle">Taking</td>
                                <td class="highlight-participle">Taken</td>
                            </tr>
                            <tr>
                                <td>Write</td>
                                <td>Writes</td>
                                <td>Wrote</td>
                                <td class="highlight-participle">Writing</td>
                                <td class="highlight-participle">Written</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tip-box">
                    <h4>⚠️ Study Tip</h4>
                    <p>Mengingat bentuk irregular past participle (seperti <em>drunk, taken, written</em>) sangat penting karena bentuk inilah yang paling sering diuji dalam TOEFL Structure section!</p>
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
                    <h3>Bagan Analisis Bentuk Participle</h3>

                    <div class="example-nav">
                        <button class="ex-tab active" data-target="ex1">Present Participle</button>
                        <button class="ex-tab" data-target="ex2">Past Participle (Regular)</button>
                        <button class="ex-tab" data-target="ex3">Past Participle (Irregular)</button>
                    </div>

                    <!-- Example 1: Present Participle as Adjective -->
                    <div class="example-slide active" id="ex1">
                        <div class="sentence-box">
                            The <span class="hl-form">boiling</span> water in the pot is ready for the pasta.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Base Verb</div>
                                <div class="box-value">boil</div>
                                <div class="box-desc">Kata kerja dasar yang menjadi asal pembentukan participle. Tambahkan <strong>-ing</strong> untuk membentuk Present Participle.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Present Participle → Adjective</div>
                                <div class="box-value">boiling</div>
                                <div class="box-desc">Di sini <em>boiling</em> berfungsi sebagai <strong>adjective</strong> yang menerangkan kata benda <em>water</em>. Present Participle dapat berperan sebagai kata sifat maupun pembentuk tenses progresif.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 2: Regular Past Participle -->
                    <div class="example-slide" id="ex2">
                        <div class="sentence-box">
                            The <span class="hl-form">damaged</span> bridge was closed to all vehicles immediately.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Base Verb (Regular)</div>
                                <div class="box-value">damage</div>
                                <div class="box-desc">Kata kerja reguler. Untuk membentuk Past Participle, cukup tambahkan <strong>-d</strong> (karena berakhiran -e) atau <strong>-ed</strong> pada umumnya.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Past Participle → Adjective</div>
                                <div class="box-value">damaged</div>
                                <div class="box-desc">Di sini <em>damaged</em> berfungsi sebagai <strong>adjective</strong> yang menerangkan <em>bridge</em>. Past Participle sering digunakan sebagai adjective dengan makna pasif: "jembatan yang telah rusak."</div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 3: Irregular Past Participle -->
                    <div class="example-slide" id="ex3">
                        <div class="sentence-box">
                            The report <span class="hl-keyword">was</span> <span class="hl-form">written</span> by the senior analyst last quarter.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Base Verb (Irregular)</div>
                                <div class="box-value">write → wrote → written</div>
                                <div class="box-desc">Kata kerja <em>write</em> adalah irregular verb. Bentuk Past Participle-nya (<strong>written</strong>) tidak mengikuti pola -ed dan wajib dihafal.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Past Participle → Passive Voice</div>
                                <div class="box-value">was written</div>
                                <div class="box-desc">Kombinasi <em>was + written</em> membentuk <strong>Simple Past Passive</strong>. Ini adalah fungsi utama Past Participle kedua: membangun kalimat pasif bersama <em>be</em>.</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- ========== QUIZ SECTION ========== -->
            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Participle Forms Quiz</div>
                <div class="quiz-body">

                    <!-- Q1 -->
                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" The ______ child sat quietly in the corner, absorbed in his book. (bore) "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. boring</li>
                            <li class="option-item" data-correct="true">B. bored</li>
                            <li class="option-item" data-correct="false">C. bore</li>
                            <li class="option-item" data-correct="false">D. bores</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" The documentary about ______ glaciers raised global awareness about climate change. (melt) "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. melted</li>
                            <li class="option-item" data-correct="true">B. melting</li>
                            <li class="option-item" data-correct="false">C. melt</li>
                            <li class="option-item" data-correct="false">D. melts</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" The ancient manuscript, ______ by scholars for centuries, was finally decoded last year. (seek) "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. seeking</li>
                            <li class="option-item" data-correct="false">B. seeked</li>
                            <li class="option-item" data-correct="true">C. sought</li>
                            <li class="option-item" data-correct="false">D. seeks</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <!-- Q4: Error Recognition -->
                    <div class="question-wrapper" data-step="4" style="display: none;">
                        <div class="quiz-progress">4/5</div>
                        <p class="question-text" style="font-style: normal;">
                            <strong>Identify the ERROR:</strong><br><br>
                            The <span class="error-underline">exhausting</span><span class="error-label">A</span>
                            athletes <span class="error-underline">collapsed</span><span class="error-label">B</span>
                            at the <span class="error-underline">finish</span><span class="error-label">C</span>
                            line after the <span class="error-underline">grueling</span><span class="error-label">D</span> marathon.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. exhausting</li>
                            <li class="option-item" data-correct="false">B. collapsed</li>
                            <li class="option-item" data-correct="false">C. finish</li>
                            <li class="option-item" data-correct="false">D. grueling</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <!-- Q5: Error Recognition -->
                    <div class="question-wrapper" data-step="5" style="display: none;">
                        <div class="quiz-progress">5/5</div>
                        <p class="question-text" style="font-style: normal;">
                            <strong>Identify the ERROR:</strong><br><br>
                            The letter <span class="error-underline">was</span><span class="error-label">A</span>
                            <span class="error-underline">wrote</span><span class="error-label">B</span>
                            by the <span class="error-underline">ambassador</span><span class="error-label">C</span>
                            to address the <span class="error-underline">ongoing</span><span class="error-label">D</span> dispute.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. was</li>
                            <li class="option-item" data-correct="true">B. wrote</li>
                            <li class="option-item" data-correct="false">C. ambassador</li>
                            <li class="option-item" data-correct="false">D. ongoing</li>
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
                <h3>🔍 Quick Identification</h3>

                <div class="summary-box">
                    <strong>Present Participle Branch</strong>
                    Sering dikenal sebagai bentuk dasar + ing.
                    <span>Base Verb + -ing</span>
                </div>

                <div class="summary-box">
                    <strong>Past Participle Branch</strong>
                    Bisa berupa akhiran regular maupun acak (irregular).
                    <span>Base Verb + -ed / -d / V3</span>
                </div>

                <span style="font-size: 0.95rem; opacity: 0.85; display: block; margin-top: 15px; text-align: center; font-style: italic;">
                    Understand the roots before moving to syntax rules!
                </span>
            </div>

            <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wvRcrVnNVj8?si=hqSJ4rnZP7SdSB-f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>

    <script>
        // ===== QUIZ DATABASE =====
        const quizDatabase = {
            1: {
                correctText: "Tepat! Kunci soal ini adalah memahami perbedaan <strong>-ing vs -ed</strong> sebagai adjective. <em>Bored</em> (Past Participle) digunakan untuk mendeskripsikan <strong>perasaan yang dirasakan</strong> oleh subjek (orang/makhluk hidup). Sedangkan <em>boring</em> digunakan untuk mendeskripsikan sesuatu yang <strong>menyebabkan</strong> kebosanan.",
                wrongText: "Ingat kaidah klasik TOEFL: <strong>-ed participle</strong> = mendeskripsikan perasaan seseorang (<em>The child felt bored</em>). <strong>-ing participle</strong> = mendeskripsikan penyebabnya (<em>The class was boring</em>). Karena subjeknya adalah 'the child' yang merasakan, gunakan <em>bored</em>.",
                formula: "Perasaan yang dirasakan → Past Participle (-ed): bored, tired, excited, interested"
            },
            2: {
                correctText: "Benar! <em>Melting</em> adalah <strong>Present Participle</strong> yang di sini berfungsi sebagai adjective untuk menerangkan kata benda <em>glaciers</em>. Maknanya aktif: 'gletser yang sedang mencair' — menggambarkan proses yang berlangsung, sehingga -ing sangat tepat.",
                wrongText: "Perhatikan maknanya: kita perlu kata sifat yang menggambarkan gletser dalam kondisi <em>aktif mencair</em>. Pilihan <em>melted</em> (sudah selesai mencair) kurang tepat secara konteks. <strong>Present Participle (-ing)</strong> digunakan untuk mendeskripsikan proses atau aksi yang sedang terjadi.",
                formula: "Proses aktif / kondisi berlangsung → Present Participle (-ing): melting glaciers, rising temperatures"
            },
            3: {
                correctText: "Brilian! Kata kerja <em>seek</em> adalah <strong>irregular verb</strong>. Bentuk Past Participle-nya bukan <em>seeked</em> (salah kaprah yang sering terjadi), melainkan <strong>sought</strong>. Ini harus dihafal karena tidak mengikuti pola regular.",
                wrongText: "Ini adalah jebakan irregular verb yang sering muncul di TOEFL! Kata <em>seek</em> tidak beraturan: <em>seek → sought → sought</em>. Menambahkan <em>-ed</em> pada irregular verb adalah error umum yang harus dihindari.",
                formula: "seek (base) → sought (past) → sought (past participle) — IRREGULAR!"
            },
            4: {
                correctText: "Benar! Bagian A (<em>exhausting</em>) adalah ERROR. Para atlet adalah pihak yang <strong>merasakan kelelahan</strong>, bukan pihak yang <em>menyebabkan</em> kelelahan. Maka adjective yang tepat adalah <strong>exhausted</strong> (Past Participle), bukan <em>exhausting</em> (Present Participle).",
                wrongText: "Ingat kaidah -ing vs -ed: <em>exhausting</em> = menyebabkan kelelahan (misal: <em>an exhausting race</em>). <em>exhausted</em> = merasakan kelelahan (misal: <em>the exhausted athletes</em>). Karena atletlah yang merasakan, gunakan <em>exhausted</em>.",
                formula: "<span style='color:#E74C3C;'>exhausting athletes (SALAH)</span> → <span style='color:#27AE60;'>exhausted athletes (BENAR)</span>"
            },
            5: {
                correctText: "Sempurna! Bagian B (<em>wrote</em>) adalah ERROR. Dalam kalimat pasif dengan pola <strong>was + Past Participle</strong>, kata yang mengisi posisi setelah <em>was</em> haruslah V3. Kata <em>wrote</em> adalah Past Tense (V2), bukan Past Participle (V3). Bentuk yang benar adalah <strong>written</strong>.",
                wrongText: "Jebakan klasik: membedakan V2 (Past Tense) dan V3 (Past Participle) pada irregular verb. Pola passive voice adalah <strong>be + V3</strong>. Kata <em>wrote</em> adalah V2 — tidak bisa mengisi posisi V3 dalam kalimat pasif.",
                formula: "was + <span style='color:#E74C3C;'>wrote (V2 — SALAH)</span> → was + <span style='color:#27AE60;'>written (V3 — BENAR)</span>"
            }
        };

        // ===== TOGGLE BUTTONS =====
        const btnExamples = document.getElementById('btn-toggle-examples');
        const btnExercise = document.getElementById('btn-toggle-exercise');
        const examplesSec = document.getElementById('examples-display-section');
        const quizSec = document.getElementById('quiz-section');

        btnExamples.addEventListener('click', function () {
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

        btnExercise.addEventListener('click', function () {
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
            tab.addEventListener('click', function () {
                document.querySelectorAll('.ex-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.example-slide').forEach(s => s.classList.remove('active'));
                this.classList.add('active');
                document.getElementById(this.getAttribute('data-target')).classList.add('active');
            });
        });

        // ===== QUIZ LOGIC =====
        let currentStep = 1;

        document.querySelectorAll('.option-item').forEach(item => {
            item.addEventListener('click', function () {
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

        document.getElementById('btn-next-question').addEventListener('click', function () {
            document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'none';
            currentStep++;

            if (currentStep <= 5) {
                document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'block';
                this.style.display = 'none';
            } else {
                alert("🎉 Brilliant! You have completely mastered the Present and Past Participle forms.");
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