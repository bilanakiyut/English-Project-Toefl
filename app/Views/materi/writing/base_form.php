<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Form Verb After Modals</title>
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
            --hl-modal: #4A121A;
            --hl-base: #877048;
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

        .hl-modal { color: var(--hl-modal); font-weight: 700; border-bottom: 2px dashed var(--hl-modal); }
        .hl-base { background-color: var(--hl-base); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }

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
        <a href="#">Soal</a>
        <a href="#">TOEFL</a>
        <a href="#">History</a>
        <a href="#">About Us</a>
    </nav>

    <div class="materi-header">
        <h1>Base Form Verb After Modals</h1>
        <p>Understanding the absolute requirement of bare infinitives following modal auxiliaries.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <div class="main-card">
                <h2>The Absolute Rule of Modals</h2>
                <p class="intro">Aturan dasar dalam TOEFL structure menyatakan bahwa setelah kata kerja bantu berupa <strong>Modals</strong> (seperti <em>will, can, should, must</em>, dll), kata kerja selanjutnya <strong>wajib</strong> menggunakan bentuk dasar atau <strong>Base Form Verb</strong> (Bare Infinitive).</p>

                <div class="sub-section">
                    <h3>What is a Base Form?</h3>
                    <p>Base form adalah kata kerja asli dari kamus yang murni tanpa ada imbuhan apa pun. Artinya, setelah modal <strong>TIDAK BOLEH</strong> diikuti oleh:</p>
                    <p>
                        ❌ Verb + -ing &nbsp;(e.g., <em>will drinking</em>) <br>
                        ❌ Verb + -s/-es &nbsp;(e.g., <em>will drinks</em>) <br>
                        ❌ Past Form / Past Participle &nbsp;(e.g., <em>will drank / will drunk</em>) <br>
                        ❌ To + Verb &nbsp;(e.g., <em>will to drink</em>)
                    </p>
                </div>

                <div class="sub-section">
                    <h3>TOEFL Style Comparison Examples</h3>
                    <p>Perhatikan struktur pengecoh yang sering muncul di lembar ujian:</p>

                    <div class="comparison-box">
                        <p>
                            <span class="badge-tag">Example 1</span><br>
                            <span class="text-wrong">Incorrect:</span> The student can <strong>leaves</strong> the classroom early.<br>
                            <span class="text-correct">Correct:</span> The student can <strong>leave</strong> the classroom early.
                        </p>
                    </div>

                    <div class="comparison-box" style="margin-top: 15px;">
                        <p>
                            <span class="badge-tag">Example 2</span><br>
                            <span class="text-wrong">Incorrect:</span> You should <strong>taking</strong> the exam seriously.<br>
                            <span class="text-correct">Correct:</span> You should <strong>take</strong> the exam seriously.
                        </p>
                    </div>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Exam Shortcut</h4>
                    <p>Jika kamu melihat modal auxiliary di soal pencarian error (Written Expression), langsung periksa kata kerja tepat setelahnya. Jika ada imbuhan <em>-ing, -ed, -s</em>, atau ada kata <em>to</em>, maka bagian kata kerja itulah yang salah dan harus kamu pilih!</p>
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
                    <h3>Bagan Analisis Modal + Base Form</h3>

                    <div class="example-nav">
                        <button class="ex-tab active" data-target="ex1">Modal + Base</button>
                        <button class="ex-tab" data-target="ex2">Modal + Not</button>
                        <button class="ex-tab" data-target="ex3">Modal + Be</button>
                    </div>

                    <!-- Example 1: Basic Modal + Base Form -->
                    <div class="example-slide active" id="ex1">
                        <div class="sentence-box">
                            All participants <span class="hl-modal">must</span> <span class="hl-base">submit</span> their forms before Friday.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Modal Auxiliary</div>
                                <div class="box-value">must</div>
                                <div class="box-desc">Modal yang menyatakan kewajiban penuh. Tidak berubah bentuk untuk subjek apapun — tidak ada <em>musts</em> atau <em>musting</em>.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Base Form Verb — Wajib!</div>
                                <div class="box-value">submit</div>
                                <div class="box-desc">Kata kerja dasar tanpa imbuhan. Pilihan <em>submits / submitted / submitting</em> semuanya <strong>salah</strong> setelah modal.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 2: Negative Modal -->
                    <div class="example-slide" id="ex2">
                        <div class="sentence-box">
                            Students <span class="hl-modal">should not</span> <span class="hl-base">bring</span> electronic devices to the exam hall.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Negative Modal</div>
                                <div class="box-value">should not</div>
                                <div class="box-desc">Penambahan <em>not</em> setelah modal tidak mengubah aturan. Kata kerja yang mengikuti <em>not</em> tetap wajib berbentuk <strong>Base Form</strong>.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Base Form Verb — Tetap Wajib!</div>
                                <div class="box-value">bring</div>
                                <div class="box-desc">Meskipun ada <em>not</em> di antara modal dan verb, polanya tetap: <strong>Modal + not + Base Form</strong>. Bukan <em>brings</em> atau <em>bringing</em>.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 3: Modal + Be + Adjective -->
                    <div class="example-slide" id="ex3">
                        <div class="sentence-box">
                            The new policy <span class="hl-modal">will</span> <span class="hl-base">be</span> effective starting next semester.
                        </div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box">
                                <div class="box-label">Modal Auxiliary</div>
                                <div class="box-value">will</div>
                                <div class="box-desc">Modal yang menyatakan prediksi atau kepastian masa depan. Berlaku untuk semua subjek tanpa perubahan bentuk.</div>
                            </div>
                            <div class="analysis-box elem-box">
                                <div class="box-label">Base Form: "be"</div>
                                <div class="box-value">be</div>
                                <div class="box-desc">Kata kerja <em>be</em> adalah base form dari <em>is/am/are/was/were</em>. Setelah modal, wajib kembali ke bentuk dasar <strong>be</strong>, bukan <em>is</em> atau <em>are</em>.</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- ========== QUIZ SECTION ========== -->
            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Modal + Base Form Quiz</div>
                <div class="quiz-body">

                    <!-- Q1 -->
                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" The manager insisted that every employee must ______ the new safety protocol before operating any machinery. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. follows</li>
                            <li class="option-item" data-correct="false">B. following</li>
                            <li class="option-item" data-correct="true">C. follow</li>
                            <li class="option-item" data-correct="false">D. followed</li>
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
                        <p class="question-text">" According to the travel advisory, tourists should not ______ restricted archaeological sites without an official guide. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. entered</li>
                            <li class="option-item" data-correct="false">B. entering</li>
                            <li class="option-item" data-correct="false">C. enters</li>
                            <li class="option-item" data-correct="true">D. enter</li>
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
                        <p class="question-text">" The proposed amendment to the constitution will ______ effective only after it is ratified by two-thirds of the parliament. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. is</li>
                            <li class="option-item" data-correct="false">B. being</li>
                            <li class="option-item" data-correct="true">C. be</li>
                            <li class="option-item" data-correct="false">D. been</li>
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
                            All researchers <span class="error-underline">must</span><span class="error-label">A</span>
                            <span class="error-underline">submits</span><span class="error-label">B</span>
                            their <span class="error-underline">findings</span><span class="error-label">C</span>
                            to the <span class="error-underline">committee</span><span class="error-label">D</span> by the end of the month.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. must</li>
                            <li class="option-item" data-correct="true">B. submits</li>
                            <li class="option-item" data-correct="false">C. findings</li>
                            <li class="option-item" data-correct="false">D. committee</li>
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
                            The new <span class="error-underline">regulation</span><span class="error-label">A</span>
                            states that all vendors <span class="error-underline">should</span><span class="error-label">B</span>
                            <span class="error-underline">to register</span><span class="error-label">C</span>
                            their products with the <span class="error-underline">authority</span><span class="error-label">D</span> before selling.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. regulation</li>
                            <li class="option-item" data-correct="false">B. should</li>
                            <li class="option-item" data-correct="true">C. to register</li>
                            <li class="option-item" data-correct="false">D. authority</li>
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
                <h3>🔒 The Modal Formula</h3>

                <div class="summary-box">
                    <strong>Common Modals Set</strong>
                    will, would, can, could, shall, should, may, might, must.
                </div>

                <div class="summary-box">
                    <strong>Syntax Structure</strong>
                    Wajib kembali ke kata kerja dasar murni.
                    <span>MODAL + BASE FORM VERB</span>
                </div>

                <div class="summary-box">
                    <strong>Quick Verification</strong>
                    <span>You must go (bukan goes / going)</span>
                </div>

                <span style="font-size: 0.95rem; opacity: 0.85; display: block; margin-top: 15px; text-align: center; font-style: italic;">
                    No suffix, no prefix, just the pure verb root!
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
        // ===== QUIZ DATABASE =====
        const quizDatabase = {
            1: {
                correctText: "Tepat! Setelah modal <strong>must</strong>, kata kerja wajib menggunakan <strong>Base Form</strong>. Pilihan A (<em>follows</em>) salah karena ada imbuhan -s. Pilihan B (<em>following</em>) salah karena -ing. Pilihan D (<em>followed</em>) salah karena merupakan past form.",
                wrongText: "<strong>TOEFL Modal Rule Breach!</strong> Setelah modal auxiliary (must/can/will/should/dll), kata kerja yang mengikutinya wajib berbentuk <strong>Base Form</strong> — murni tanpa imbuhan apapun.",
                formula: "must + follow (Base Form, bukan follows / following / followed)"
            },
            2: {
                correctText: "Benar! Kehadiran kata <em>not</em> di antara modal dan verb tidak mengubah aturan. Setelah <strong>should not</strong>, kata kerja tetap wajib berbentuk <strong>Base Form</strong>. Maka jawabannya adalah <em>enter</em>.",
                wrongText: "Ingat: <strong>Modal + not + Base Form</strong>. Sisipan <em>not</em> tidak mengubah aturan. Kata kerja setelahnya tetap harus base form — bukan <em>entered, entering,</em> maupun <em>enters</em>.",
                formula: "should not + enter (Base Form tetap berlaku setelah 'not')"
            },
            3: {
                correctText: "Brilian! Modal <strong>will</strong> diikuti oleh base form dari kata kerja <em>be</em>. Kata <em>be</em> adalah bentuk dasar dari <em>is/am/are</em>. Setelah modal, <em>is</em> dan <em>are</em> berubah kembali menjadi <strong>be</strong>.",
                wrongText: "Ingat bahwa kata kerja <em>be</em> memiliki banyak bentuk: <em>is, am, are, was, were, been, being</em>. Namun setelah modal, semua bentuk itu kembali ke bentuk dasarnya: <strong>be</strong>.",
                formula: "will + be (Base Form dari is/am/are — bukan 'is' atau 'being')"
            },
            4: {
                correctText: "Benar! Bagian B (<em>submits</em>) adalah ERROR. Setelah modal <strong>must</strong>, kata kerja tidak boleh mendapat imbuhan <strong>-s/-es</strong>. Bentuk yang benar adalah <strong>submit</strong> (Base Form).",
                wrongText: "Ini jebakan klasik TOEFL! Setelah melihat kata <em>must</em>, langsung periksa verb berikutnya. Kata <em>submits</em> memiliki imbuhan <em>-s</em> yang melanggar aturan Modal + Base Form.",
                formula: "must + <span style='color:#E74C3C;'>submits (SALAH)</span> → seharusnya: must + <span style='color:#27AE60;'>submit (Base Form)</span>"
            },
            5: {
                correctText: "Sempurna! Bagian C (<em>to register</em>) adalah ERROR. Setelah modal <strong>should</strong>, kata kerja wajib berbentuk <strong>Base Form (Bare Infinitive)</strong> — tanpa kata <em>to</em>. Bentuk yang benar cukup <strong>register</strong> saja.",
                wrongText: "Jebakan ini dikenal sebagai <em>Full Infinitive vs Bare Infinitive</em>. Modal selalu diikuti <em>Bare Infinitive</em> (tanpa 'to'). Penambahan kata <em>to</em> setelah modal adalah error yang sering diuji TOEFL.",
                formula: "should + <span style='color:#E74C3C;'>to register (SALAH)</span> → seharusnya: should + <span style='color:#27AE60;'>register (Bare Infinitive)</span>"
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
                alert("🎉 Brilliant! You have completely mastered the Modal + Base Form Verb rules.");
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