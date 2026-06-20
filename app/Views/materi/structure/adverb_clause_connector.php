<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adverb Clause Connector</title>
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
        nav { display: flex; justify-content: flex-end; align-items: center; padding: 30px 70px; gap: 35px; }
        nav a { text-decoration: none; color: var(--text-dark); font-family: 'Cormorant Garamond', serif; font-weight: 600; font-size: 0.95rem; letter-spacing: 2px; text-transform: uppercase; }
        .materi-header { text-align: center; margin-bottom: 45px; padding: 0 20px; }
        .materi-header h1 { font-family: 'Playfair Display', serif; font-size: 2.6rem; color: var(--maroon-heading); font-weight: 700; margin-bottom: 10px; }
        .materi-header p { font-size: 1.1rem; color: #6a575b; letter-spacing: 0.5px; }
        .materi-wrapper { max-width: 1200px; margin: 0 auto 60px; padding: 0 40px; display: grid; grid-template-columns: 1.6fr 1fr; gap: 40px; align-items: start; }
        .materi-left-scroll { display: flex; flex-direction: column; gap: 25px; }
        .main-card { background-color: var(--maroon-dark); border-radius: 20px; padding: 45px 40px; color: var(--text-light); box-shadow: 0 15px 35px rgba(67, 12, 23, 0.1); }
        .main-card h2 { font-family: 'Playfair Display', serif; font-size: 1.8rem; font-weight: 600; margin-bottom: 20px; border-bottom: 1px solid rgba(255, 253, 249, 0.15); padding-bottom: 15px; }
        .main-card p.intro { font-size: 1.2rem; line-height: 1.6; margin-bottom: 30px; opacity: 0.95; }
        .sub-section { margin-bottom: 35px; }
        .sub-section h3 { font-family: 'Playfair Display', serif; font-size: 1.45rem; font-weight: 600; margin-bottom: 15px; color: #FFFDF9; }
        .sub-section p { font-size: 1.1rem; opacity: 0.85; line-height: 1.6; margin-bottom: 12px; }
        .comparison-box { background-color: rgba(255, 255, 255, 0.04); border-radius: 12px; padding: 20px 24px; margin-top: 12px; border-left: 3px solid rgba(255, 253, 249, 0.2); display: flex; flex-direction: column; gap: 12px; }
        .comparison-box p { font-size: 1.1rem; line-height: 1.5; margin-bottom: 0; }
        .text-wrong { color: #FF6B6B; font-weight: 600; }
        .text-correct { color: #2ECC71; font-weight: 600; }
        .badge-tag { background-color: rgba(255, 253, 249, 0.12); padding: 2px 8px; border-radius: 4px; font-size: 0.85rem; font-family: sans-serif; font-weight: 600; letter-spacing: 0.5px; color: #D9CBB0; display: inline-block; margin-bottom: 4px; }
        .tip-box { background-color: var(--maroon-light); border-radius: 12px; padding: 22px 25px; margin-top: 25px; border: 1px solid rgba(255, 253, 249, 0.1); }
        .tip-box h4 { font-family: 'Playfair Display', serif; font-size: 1.15rem; font-weight: 700; margin-bottom: 8px; }
        .tip-box p { font-size: 1.05rem; opacity: 0.85; line-height: 1.5; }
        .action-buttons { display: flex; gap: 20px; }
        .btn { padding: 14px 35px; border-radius: 12px; font-size: 1.05rem; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease; cursor: pointer; border: none; font-family: 'Cormorant Garamond', serif; }
        .btn-exercise { background-color: var(--maroon-dark); color: var(--text-light); }
        .btn-example { background-color: var(--gold-card); color: var(--text-light); }
        .btn:hover { transform: translateY(-2px); opacity: 0.9; }
        .btn-active-state { box-shadow: inset 0 0 10px rgba(0,0,0,0.3); opacity: 0.85; }
        .btn-exercise.btn-active-state { background-color: #631b25 !important; }
        .btn-example.btn-active-state { background-color: #7a6640 !important; }
        .examples-display-section { display: none; flex-direction: column; gap: 30px; animation: fadeIn 0.4s ease forwards; }
        .example-showcase-card { background-color: #ffffff; border: 1px solid rgba(0, 0, 0, 0.05); border-radius: 20px; padding: 35px; box-shadow: 0 10px 25px rgba(0,0,0,0.02); }
        .example-showcase-card h3 { font-family: 'Playfair Display', serif; font-size: 1.5rem; color: #430c17; margin-bottom: 20px; }
        .sentence-box { background-color: #ffffff; border: 1px solid #EAEAEA; border-radius: 12px; padding: 25px; text-align: center; font-size: 1.4rem; color: #333333; margin-bottom: 25px; line-height: 1.5; }
        .hl-modal { color: var(--hl-modal); font-weight: 700; border-bottom: 2px dashed var(--hl-modal); }
        .hl-base { background-color: var(--hl-base); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }
        .analysis-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .analysis-box { border-radius: 10px; padding: 18px; border-left: 4px solid #BDC3C7; display: flex; flex-direction: column; gap: 5px; }
        .analysis-box.elem-box { background-color: var(--tag-elem-bg); border-left-color: var(--tag-elem-txt); }
        .box-label { font-family: sans-serif; font-size: 0.75rem; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 3px; color: var(--tag-elem-txt); }
        .box-value { font-family: 'Playfair Display', serif; font-size: 1.25rem; font-weight: 700; margin-bottom: 3px; color: #111; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 3px; }
        .box-desc { font-size: 0.95rem; line-height: 1.4; color: #555; }
        .example-nav { display: flex; gap: 10px; margin-bottom: 20px; flex-wrap: wrap; }
        .ex-tab { padding: 8px 20px; border-radius: 20px; border: 2px solid var(--gold-card); background: transparent; color: var(--gold-card); font-family: 'Cormorant Garamond', serif; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.2s; }
        .ex-tab.active, .ex-tab:hover { background-color: var(--gold-card); color: #fff; }
        .example-slide { display: none; }
        .example-slide.active { display: block; }
        .quiz-section { display: none; border-radius: 15px; overflow: hidden; box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05); animation: fadeIn 0.4s ease forwards; }
        .practice-header-card { background-color: var(--maroon-dark); color: var(--text-light); text-align: center; padding: 16px; font-family: 'Playfair Display', serif; font-size: 1.4rem; }
        .quiz-body { background-color: #ffffff; border: 1px solid rgba(0,0,0,0.06); border-top: none; border-radius: 0 0 15px 15px; padding: 40px; }
        .quiz-progress { color: var(--maroon-dark); font-family: 'Playfair Display', serif; font-weight: 700; font-size: 1.25rem; margin-bottom: 25px; }
        .question-text { font-size: 1.35rem; text-align: center; color: var(--text-dark); margin-bottom: 35px; line-height: 1.5; font-style: italic; }
        .question-text .error-underline { text-decoration: underline; font-weight: 700; display: inline-block; margin: 0 3px; color: #4A121A; font-style: normal; }
        .question-text .error-label { font-size: 0.8rem; font-family: sans-serif; font-weight: bold; vertical-align: super; color: var(--gold-card); margin-left: 2px; }
        .options-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; list-style: none; margin-bottom: 30px; }
        .option-item { background-color: #ffffff; border: 1px solid #dcdcdc; border-radius: 12px; padding: 18px 24px; font-size: 1.1rem; color: var(--text-dark); cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: all 0.2s; font-family: 'Cormorant Garamond', serif; }
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
        .materi-right-sticky { position: sticky; top: 30px; display: flex; flex-direction: column; gap: 25px; }
        .pattern-card { background-color: var(--gold-card); border-radius: 20px; padding: 25px; color: var(--text-light); box-shadow: 0 10px 25px rgba(158, 134, 89, 0.1); }
        .pattern-card h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 18px; font-weight: 700; }
        .summary-box { background-color: var(--gold-inner); padding: 15px; border-radius: 8px; font-size: 1.05rem; line-height: 1.4; margin-bottom: 12px; box-shadow: inset 0 2px 4px rgba(0,0,0,0.05); }
        .summary-box span { display: block; font-family: monospace; font-weight: 700; margin-top: 5px; color: #FAF4E7; font-size: 1.1rem; }
        .video-card { background-color: var(--maroon-dark); border-radius: 20px; padding: 25px; color: var(--text-light); box-shadow: 0 10px 25px rgba(67, 12, 23, 0.1); }
        .video-card h3 { font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 600; margin-bottom: 4px; }
        .video-card p { font-size: 0.95rem; opacity: 0.7; margin-bottom: 15px; }
        .video-container { position: relative; width: 100%; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 992px) { .materi-wrapper { grid-template-columns: 1fr; } .materi-right-sticky { position: relative; top: 0; } nav { padding: 20px; justify-content: center; } .analysis-grid { grid-template-columns: 1fr; } .options-grid { grid-template-columns: 1fr; } }
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
        <h1>Adverb Clause Connector</h1>
        <p>Mastering cause, contrast, time, and condition connectors in TOEFL structure.</p>
    </div>

    <div class="materi-wrapper">
        <div class="materi-left-scroll">
            <div class="main-card">
                <h2>What is an Adverb Clause Connector?</h2>
                <p class="intro">An <strong>adverb clause</strong> adalah dependent clause yang menjelaskan waktu, alasan, syarat, pertentangan, atau cara suatu action terjadi. Clause ini biasanya diawali connector seperti <em>because, although, when, while, after, before, if, unless</em>.</p>

                <div class="sub-section">
                    <h3>Common Adverb Connectors</h3>
                    <p><strong>Cause:</strong> because, since<br>
                    <strong>Contrast:</strong> although, even though, while<br>
                    <strong>Time:</strong> when, before, after, while, until<br>
                    <strong>Condition:</strong> if, unless</p>
                </div>

                <div class="sub-section">
                    <h3>TOEFL Style Comparison Examples</h3>
                    <div class="comparison-box">
                        <p><span class="badge-tag">Example 1</span><br>
                        <span class="text-wrong">Incorrect:</span> Because he was tired, <strong>but</strong> he continued working.<br>
                        <span class="text-correct">Correct:</span> Because he was tired, he continued working.</p>
                    </div>
                    <div class="comparison-box" style="margin-top: 15px;">
                        <p><span class="badge-tag">Example 2</span><br>
                        <span class="text-wrong">Incorrect:</span> Although it was raining, <strong>but</strong> we went outside.<br>
                        <span class="text-correct">Correct:</span> Although it was raining, we went outside.</p>
                    </div>
                </div>

                <div class="sub-section">
                    <h3>Main TOEFL Rule</h3>
                    <p>Adverb connector sudah cukup untuk menghubungkan dependent clause dengan independent clause. Karena itu, jangan tambahkan conjunction kedua seperti <em>but, so, and</em> setelah koma.</p>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Exam Shortcut</h4>
                    <p>Jika kalimat sudah diawali <strong>because/although/when/if</strong>, setelah koma langsung lanjutkan main clause. Jangan tambahkan <em>but</em> atau <em>so</em>. Ini salah satu jebakan Written Expression yang paling sering muncul.</p>
                </div>
            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ Example</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">
                <div class="example-showcase-card">
                    <h3>Adverb Clause Pattern Analysis</h3>
                    <div class="example-nav">
                        <button class="ex-tab active" data-target="ex1">Cause</button>
                        <button class="ex-tab" data-target="ex2">Contrast</button>
                        <button class="ex-tab" data-target="ex3">TOEFL Trap</button>
                    </div>

                    <div class="example-slide active" id="ex1">
                        <div class="sentence-box"><span class="hl-modal">Because</span> she studied hard, <span class="hl-base">she passed</span> the exam.</div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box"><div class="box-label">Adverb Connector</div><div class="box-value">Because</div><div class="box-desc">Because menunjukkan alasan atau cause.</div></div>
                            <div class="analysis-box elem-box"><div class="box-label">Main Clause</div><div class="box-value">she passed the exam</div><div class="box-desc">Setelah dependent clause, langsung masuk main clause tanpa conjunction tambahan.</div></div>
                        </div>
                    </div>

                    <div class="example-slide" id="ex2">
                        <div class="sentence-box"><span class="hl-modal">Although</span> it was raining, <span class="hl-base">we went</span> outside.</div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box"><div class="box-label">Adverb Connector</div><div class="box-value">Although</div><div class="box-desc">Although menunjukkan pertentangan atau contrast.</div></div>
                            <div class="analysis-box elem-box"><div class="box-label">Correct Structure</div><div class="box-value">Although + Clause, Main Clause</div><div class="box-desc">Tidak perlu menambahkan “but” setelah koma.</div></div>
                        </div>
                    </div>

                    <div class="example-slide" id="ex3">
                        <div class="sentence-box"><span class="hl-modal">Because</span> he was sick, <span class="hl-base">but</span> he came to class.</div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box"><div class="box-label">Error</div><div class="box-value">Because ... but</div><div class="box-desc">Because sudah menjadi connector, jadi but tidak boleh ditambahkan.</div></div>
                            <div class="analysis-box elem-box"><div class="box-label">Correct Pattern</div><div class="box-value">Because he was sick, he came...</div><div class="box-desc">Hapus conjunction kedua setelah koma.</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Adverb Clause Connector Quiz</div>
                <div class="quiz-body">
                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" ______ she was tired, she finished the report. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. Because</li>
                            <li class="option-item" data-correct="false">B. But</li>
                            <li class="option-item" data-correct="false">C. And</li>
                            <li class="option-item" data-correct="false">D. So</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" ______ it was raining, they played football. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. Although</li>
                            <li class="option-item" data-correct="false">B. Because</li>
                            <li class="option-item" data-correct="false">C. So</li>
                            <li class="option-item" data-correct="false">D. And</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" ______ you finish your homework, you may watch television. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. After</li>
                            <li class="option-item" data-correct="false">B. But</li>
                            <li class="option-item" data-correct="false">C. Because</li>
                            <li class="option-item" data-correct="false">D. So</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="4" style="display: none;">
                        <div class="quiz-progress">4/5</div>
                        <p class="question-text" style="font-style: normal;"><strong>Identify the ERROR:</strong><br><br>
                            <span class="error-underline">Because</span><span class="error-label">A</span>
                            he was <span class="error-underline">late</span><span class="error-label">B</span>,
                            <span class="error-underline">but</span><span class="error-label">C</span>
                            he attended the <span class="error-underline">meeting</span><span class="error-label">D</span>.</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Because</li>
                            <li class="option-item" data-correct="false">B. late</li>
                            <li class="option-item" data-correct="true">C. but</li>
                            <li class="option-item" data-correct="false">D. meeting</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="5" style="display: none;">
                        <div class="quiz-progress">5/5</div>
                        <p class="question-text" style="font-style: normal;"><strong>Identify the ERROR:</strong><br><br>
                            <span class="error-underline">Although</span><span class="error-label">A</span>
                            she studied <span class="error-underline">hard</span><span class="error-label">B</span>,
                            <span class="error-underline">so</span><span class="error-label">C</span>
                            she failed the <span class="error-underline">test</span><span class="error-label">D</span>.</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Although</li>
                            <li class="option-item" data-correct="false">B. hard</li>
                            <li class="option-item" data-correct="true">C. so</li>
                            <li class="option-item" data-correct="false">D. test</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box"></div>
                        </div>
                    </div>
                    <div class="quiz-footer"><button id="btn-next-question" class="btn-next" style="display: none;">NEXT</button></div>
                </div>
            </div>
        </div>
        <div class="materi-right-sticky">
            <div class="pattern-card">
                <h3>🔗 Cause Connector</h3>
                <div class="summary-box"><strong>Formula</strong><span>Because/Since + S + V, S + V</span></div>
                <div class="summary-box"><strong>Example</strong><span>Because she studied, she passed.</span></div>
            </div>
            <div class="pattern-card">
                <h3>⚖️ Contrast Connector</h3>
                <div class="summary-box"><strong>Formula</strong><span>Although/Even though + S + V, S + V</span></div>
                <div class="summary-box"><strong>Warning</strong><span>Although..., but... = wrong</span></div>
            </div>
            <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container"><iframe src="https://www.youtube.com/embed/zT66DSmkFOs" title="Adverb Clause Connector" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>

    <script>
        const quizDatabase = {
            "1": {
                        "correctText": "Benar! <strong>Because</strong> menunjukkan alasan. Kalimat lengkapnya memiliki dependent clause + main clause.",
                        "wrongText": "Kalimat ini membutuhkan connector alasan. <em>But, and, so</em> bukan adverb connector untuk membuka dependent clause seperti ini.",
                        "formula": "Because + S + V, S + V"
            },
            "2": {
                        "correctText": "Tepat! <strong>Although</strong> menunjukkan contrast: meskipun hujan, mereka tetap bermain football.",
                        "wrongText": "Konteksnya pertentangan, bukan sebab. Gunakan <strong>Although</strong>, lalu langsung main clause setelah koma.",
                        "formula": "Although + S + V, S + V"
            },
            "3": {
                        "correctText": "Sempurna! <strong>After</strong> menunjukkan urutan waktu: setelah kamu menyelesaikan PR, kamu boleh menonton TV.",
                        "wrongText": "Kalimat ini membutuhkan time connector. <em>But/so</em> bukan connector yang tepat untuk dependent clause di awal kalimat.",
                        "formula": "After + S + V, S + V"
            },
            "4": {
                        "correctText": "Benar! Error ada pada C (<em>but</em>). Setelah <strong>Because</strong>, jangan tambahkan <em>but</em> setelah koma.",
                        "wrongText": "Ini jebakan umum TOEFL. <strong>Because</strong> sudah menghubungkan clause, jadi <em>but</em> harus dihapus.",
                        "formula": "Because he was late, <span style='color:#E74C3C;'>but</span> he attended → Because he was late, he attended"
            },
            "5": {
                        "correctText": "Tepat! Error ada pada C (<em>so</em>). Setelah <strong>Although</strong>, jangan tambahkan <em>so</em> setelah koma.",
                        "wrongText": "Although sudah menunjukkan pertentangan. Tidak boleh digabung dengan <em>so</em> setelah koma.",
                        "formula": "Although she studied hard, <span style='color:#E74C3C;'>so</span> she failed → Although she studied hard, she failed"
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
                alert("🎉 Great! You have completed the Adverb Clause Connector quiz.");
                currentStep = 1;
                document.querySelectorAll('.question-wrapper').forEach(w => {
                    w.style.display = 'none';
                    w.removeAttribute('data-answered');
                    w.querySelector('.explanation-card').style.display = 'none';
                    w.querySelector('.inner-formula-box').style.display = 'none';
                    w.querySelectorAll('.option-item').forEach(o => o.className = 'option-item');
                });
                document.querySelector('.question-wrapper[data-step="1"]').style.display = 'block';
                quizSec.style.display = 'none';
                btnExercise.classList.remove('btn-active-state');
                this.style.display = 'none';
            }
        });
    </script>
</body>
</html>
