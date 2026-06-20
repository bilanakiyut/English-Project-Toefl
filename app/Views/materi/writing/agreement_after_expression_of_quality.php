<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agreement After Expressions of Quantity</title>
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
            --hl-quantity: #4A121A;
            --hl-noun: #877048;
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

        .text-wrong { color: #FF6B6B; font-weight: 600; }
        .text-correct { color: #2ECC71; font-weight: 600; }

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

        .hl-quantity { color: var(--hl-quantity); font-weight: 700; border-bottom: 2px dashed var(--hl-quantity); }
        .hl-noun { background-color: var(--hl-noun); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }

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
        <h1>Agreement After Expressions of Quantity</h1>
        <p>Understanding verb agreement after quantity expressions such as all of, some of, most of, and half of.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <div class="main-card">
                <h2>The Quantity Agreement Rule</h2>
                <p class="intro">Dalam TOEFL Structure, beberapa expression of quantity seperti <strong>all of, most of, some of, half of, a lot of,</strong> dan <strong>part of</strong> menentukan bentuk verb berdasarkan noun setelah kata <strong>of</strong>. Jadi, fokus utamanya bukan pada kata quantity-nya, tetapi pada noun yang mengikuti <em>of</em>.</p>

                <div class="sub-section">
                    <h3>What is an Expression of Quantity?</h3>
                    <p>Expression of quantity adalah frasa yang menunjukkan jumlah atau bagian dari sesuatu. Pola umumnya adalah:</p>
                    <p><strong>Quantity Expression + of + Noun + Verb</strong></p>
                    <p>Jika noun setelah <strong>of</strong> berbentuk plural, verb juga plural. Jika noun setelah <strong>of</strong> singular atau uncountable, verb harus singular.</p>
                </div>

                <div class="sub-section">
                    <h3>TOEFL Style Comparison Examples</h3>
                    <p>Perhatikan contoh benar dan salah berikut agar tidak tertipu saat mengerjakan soal TOEFL:</p>

                    <div class="comparison-box">
                        <p>
                            <span class="badge-tag">Example 1</span><br>
                            <span class="text-wrong">Incorrect:</span> All of the water <strong>are</strong> contaminated.<br>
                            <span class="text-correct">Correct:</span> All of the water <strong>is</strong> contaminated.
                        </p>
                    </div>

                    <div class="comparison-box" style="margin-top: 15px;">
                        <p>
                            <span class="badge-tag">Example 2</span><br>
                            <span class="text-wrong">Incorrect:</span> Most of the students <strong>is</strong> present today.<br>
                            <span class="text-correct">Correct:</span> Most of the students <strong>are</strong> present today.
                        </p>
                    </div>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Exam Shortcut</h4>
                    <p>Jika soal memiliki pola <strong>quantity + of + noun</strong>, langsung lihat noun setelah <strong>of</strong>. Jika noun-nya plural seperti <em>students/books/employees</em>, gunakan verb plural. Jika noun-nya singular atau uncountable seperti <em>water/money/cake/luggage</em>, gunakan verb singular.</p>
                </div>
            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ Example</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">

                <div class="example-showcase-card">
                    <h3>Bagan Analisis Quantity Agreement</h3>

                    <div class="example-nav">
                        <button class="ex-tab active" data-target="ex1">Uncountable Noun</button>
                        <button class="ex-tab" data-target="ex2">Plural Noun</button>
                        <button class="ex-tab" data-target="ex3">TOEFL Trap</button>
                    </div>

                    <div class="example-slide active" id="ex1">
                        <div class="sentence-box">
                            <span class="hl-quantity">All of</span> the <span class="hl-noun">water</span> <span class="hl-quantity">is</span> contaminated.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Noun After "of"</div>
                                <div class="box-value">water</div>
                                <div class="box-desc"><em>Water</em> termasuk uncountable noun, sehingga dianggap singular dalam agreement.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Correct Verb</div>
                                <div class="box-value">is</div>
                                <div class="box-desc">Karena noun setelah <em>of</em> singular/uncountable, verb yang benar adalah <strong>is</strong>, bukan <em>are</em>.</div>
                            </div>
                        </div>
                    </div>

                    <div class="example-slide" id="ex2">
                        <div class="sentence-box">
                            <span class="hl-quantity">Most of</span> the <span class="hl-noun">students</span> <span class="hl-quantity">are</span> present today.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Noun After "of"</div>
                                <div class="box-value">students</div>
                                <div class="box-desc"><em>Students</em> adalah plural noun. Maka verb juga harus plural.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Correct Verb</div>
                                <div class="box-value">are</div>
                                <div class="box-desc">Verb mengikuti <em>students</em>, sehingga bentuk yang benar adalah <strong>are</strong>, bukan <em>is</em>.</div>
                            </div>
                        </div>
                    </div>

                    <div class="example-slide" id="ex3">
                        <div class="sentence-box">
                            <span class="hl-quantity">Some of</span> the <span class="hl-noun">luggage</span> <span class="hl-quantity">is</span> missing.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">TOEFL Trap</div>
                                <div class="box-value">luggage</div>
                                <div class="box-desc"><em>Luggage</em> terlihat seperti benda banyak, tetapi dalam bahasa Inggris termasuk uncountable noun.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Verb Agreement</div>
                                <div class="box-value">is</div>
                                <div class="box-desc">Karena <em>luggage</em> uncountable, verb harus singular. Jadi yang benar adalah <strong>is</strong>.</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Quantity Agreement Quiz</div>
                <div class="quiz-body">

                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" All of the water ______ contaminated after the flood. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. is</li>
                            <li class="option-item" data-correct="false">B. are</li>
                            <li class="option-item" data-correct="false">C. were</li>
                            <li class="option-item" data-correct="false">D. have</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" Most of the students ______ ready for the final TOEFL test. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. is</li>
                            <li class="option-item" data-correct="true">B. are</li>
                            <li class="option-item" data-correct="false">C. was</li>
                            <li class="option-item" data-correct="false">D. has</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" Half of the cake ______ eaten before the guests arrived. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. was</li>
                            <li class="option-item" data-correct="false">B. were</li>
                            <li class="option-item" data-correct="false">C. are</li>
                            <li class="option-item" data-correct="false">D. have</li>
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
                            Some of <span class="error-underline">the luggage</span><span class="error-label">A</span>
                            <span class="error-underline">are</span><span class="error-label">B</span>
                            <span class="error-underline">missing</span><span class="error-label">C</span>
                            after the <span class="error-underline">flight</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. the luggage</li>
                            <li class="option-item" data-correct="true">B. are</li>
                            <li class="option-item" data-correct="false">C. missing</li>
                            <li class="option-item" data-correct="false">D. flight</li>
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
                            All of <span class="error-underline">the employees</span><span class="error-label">A</span>
                            <span class="error-underline">is</span><span class="error-label">B</span>
                            <span class="error-underline">working</span><span class="error-label">C</span>
                            on the new <span class="error-underline">project</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. the employees</li>
                            <li class="option-item" data-correct="true">B. is</li>
                            <li class="option-item" data-correct="false">C. working</li>
                            <li class="option-item" data-correct="false">D. project</li>
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

        <div class="materi-right-sticky">

            <div class="pattern-card">
                <h3>🔒 The Quantity Formula</h3>

                <div class="summary-box">
                    <strong>Common Quantity Expressions</strong>
                    all of, most of, some of, half of, a lot of, part of, none of.
                </div>

                <div class="summary-box">
                    <strong>Syntax Structure</strong>
                    Verb mengikuti noun setelah kata <em>of</em>.
                    <span>QUANTITY + OF + NOUN + VERB</span>
                </div>

                <div class="summary-box">
                    <strong>Quick Verification</strong>
                    <span>Some of the water is</span>
                    <span>Some of the books are</span>
                </div>

                <span style="font-size: 0.95rem; opacity: 0.85; display: block; margin-top: 15px; text-align: center; font-style: italic;">
                    Look after "of" before choosing the verb!
                </span>
            </div>

            <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/J8Yrm0FP5GQ" title="Quantity Agreement Lesson" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>

    <script>
        const quizDatabase = {
            1: {
                correctText: "Tepat! Noun setelah <strong>of</strong> adalah <em>water</em>. Kata <em>water</em> termasuk uncountable noun, sehingga verb yang digunakan harus singular: <strong>is</strong>.",
                wrongText: "Perhatikan noun setelah <strong>of</strong>. Pada kalimat ini, noun-nya adalah <em>water</em>, bukan plural noun. Karena <em>water</em> uncountable, verb yang benar adalah <strong>is</strong>.",
                formula: "All of + water (uncountable) → singular verb: is"
            },
            2: {
                correctText: "Benar! Noun setelah <strong>of</strong> adalah <em>students</em>, yaitu plural noun. Karena itu verb yang tepat adalah <strong>are</strong>.",
                wrongText: "Jangan fokus hanya pada <em>Most of</em>. Lihat noun setelah <strong>of</strong>: <em>students</em>. Karena plural, verb harus plural: <strong>are</strong>.",
                formula: "Most of + students (plural) → plural verb: are"
            },
            3: {
                correctText: "Brilian! Noun setelah <strong>of</strong> adalah <em>cake</em>. Dalam konteks ini, <em>cake</em> dianggap singular/uncountable, sehingga verb yang benar adalah <strong>was</strong>.",
                wrongText: "Periksa noun setelah <strong>of</strong>: <em>cake</em>. Karena bukan plural noun, gunakan singular verb. Bentuk yang benar adalah <strong>was</strong>.",
                formula: "Half of + cake (singular/uncountable) → singular verb: was"
            },
            4: {
                correctText: "Benar! Bagian B (<em>are</em>) adalah ERROR. Noun setelah <strong>of</strong> adalah <em>luggage</em>, yaitu uncountable noun. Jadi verb yang benar adalah <strong>is</strong>.",
                wrongText: "Ini jebakan TOEFL. <em>Luggage</em> terlihat seperti benda banyak, tetapi dalam grammar termasuk uncountable noun. Jadi verb-nya harus singular: <strong>is</strong>.",
                formula: "Some of the luggage + <span style='color:#E74C3C;'>are (SALAH)</span> → Some of the luggage + <span style='color:#27AE60;'>is (BENAR)</span>"
            },
            5: {
                correctText: "Sempurna! Bagian B (<em>is</em>) adalah ERROR. Noun setelah <strong>of</strong> adalah <em>employees</em>, yaitu plural noun. Jadi verb yang benar adalah <strong>are</strong>.",
                wrongText: "Lihat noun setelah <strong>of</strong>: <em>employees</em>. Karena plural, verb harus plural. Maka <em>is</em> salah dan harus diganti menjadi <strong>are</strong>.",
                formula: "All of the employees + <span style='color:#E74C3C;'>is (SALAH)</span> → All of the employees + <span style='color:#27AE60;'>are (BENAR)</span>"
            }
        };

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

        document.querySelectorAll('.ex-tab').forEach(tab => {
            tab.addEventListener('click', function () {
                document.querySelectorAll('.ex-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.example-slide').forEach(s => s.classList.remove('active'));
                this.classList.add('active');
                document.getElementById(this.getAttribute('data-target')).classList.add('active');
            });
        });

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
                alert("🎉 Excellent! You have completed the Quantity Agreement Quiz.");
                currentStep = 1;
                document.querySelectorAll('.question-wrapper').forEach(w => {
                    w.style.display = 'none';
                    w.removeAttribute('data-answered');
                    const exp = w.querySelector('.explanation-card');
                    const formula = w.querySelector('.inner-formula-box');
                    if (exp) exp.style.display = 'none';
                    if (formula) formula.style.display = 'none';
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
