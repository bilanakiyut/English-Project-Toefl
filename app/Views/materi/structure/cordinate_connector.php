<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinate Connector</title>
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
        body { font-family: 'Cormorant Garamond', 'Georgia', serif; background-color: var(--cream-bg); color: var(--text-dark); min-height: 100vh; overflow-x: hidden; padding-bottom: 60px; }
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
        .summary-box span { display: block; font-family: monospace; font-weight: 700; margin-top: 5px; color: #FAF4E7; font-size: 1.15rem; }
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
        <h1>Coordinate Connectors</h1>
        <p>Understanding how to connect two independent clauses using FANBOYS correctly.</p>
    </div>

    <div class="materi-wrapper">
        <div class="materi-left-scroll">
            <div class="main-card">
                <h2>The Rule of Coordinate Connectors</h2>
                <p class="intro">A <strong>coordinate connector</strong> joins two equal grammatical units. In TOEFL Structure, the most important use is connecting two complete clauses using <strong>FANBOYS</strong>: <em>for, and, nor, but, or, yet, so</em>.</p>

                <div class="sub-section">
                    <h3>What is a Coordinate Connector?</h3>
                    <p>Coordinate connectors connect two independent clauses. An independent clause already has a subject and a verb, so it can stand alone as a complete sentence.</p>
                    <p>The common pattern is:</p>
                    <p><strong>Independent Clause + comma + FANBOYS + Independent Clause</strong></p>
                </div>

                <div class="sub-section">
                    <h3>TOEFL Style Comparison Examples</h3>
                    <p>Pay attention to the punctuation and connector meaning:</p>
                    <div class="comparison-box">
                        <p><span class="badge-tag">Example 1</span><br>
                            <span class="text-wrong">Incorrect:</span> She was tired but she continued working.<br>
                            <span class="text-correct">Correct:</span> She was tired<strong>, but</strong> she continued working.
                        </p>
                    </div>
                    <div class="comparison-box" style="margin-top: 15px;">
                        <p><span class="badge-tag">Example 2</span><br>
                            <span class="text-wrong">Incorrect:</span> Because it was raining<strong>, but</strong> we stayed home.<br>
                            <span class="text-correct">Correct:</span> Because it was raining, we stayed home.<br>
                            <span class="text-correct">Correct:</span> It was raining<strong>, so</strong> we stayed home.
                        </p>
                    </div>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Exam Shortcut</h4>
                    <p>Check whether both sides of the connector are complete clauses. If yes, use a comma before FANBOYS. Also avoid using two connectors at once, such as <em>because ... but</em> or <em>although ... yet</em>.</p>
                </div>
            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ Example</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">
                <div class="example-showcase-card">
                    <h3>Coordinate Connector Analysis</h3>
                    <div class="example-nav">
                        <button class="ex-tab active" data-target="ex1">FANBOYS</button>
                        <button class="ex-tab" data-target="ex2">Compound Sentence</button>
                        <button class="ex-tab" data-target="ex3">TOEFL Trap</button>
                    </div>
                    <div class="example-slide active" id="ex1">
                        <div class="sentence-box">The test was difficult<span class="hl-modal">, but</span> the students <span class="hl-base">passed</span>.</div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box"><div class="box-label">Connector</div><div class="box-value">but</div><div class="box-desc">Used to show contrast between two complete clauses.</div></div>
                            <div class="analysis-box elem-box"><div class="box-label">Function</div><div class="box-value">Contrast</div><div class="box-desc">The second clause gives an opposite or unexpected result.</div></div>
                        </div>
                    </div>
                    <div class="example-slide" id="ex2">
                        <div class="sentence-box">The rain stopped<span class="hl-modal">, so</span> we <span class="hl-base">continued</span> the trip.</div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box"><div class="box-label">Clause 1</div><div class="box-value">The rain stopped</div><div class="box-desc">A complete sentence with subject and verb.</div></div>
                            <div class="analysis-box elem-box"><div class="box-label">Clause 2</div><div class="box-value">we continued the trip</div><div class="box-desc">Another complete sentence connected by <em>so</em>.</div></div>
                        </div>
                    </div>
                    <div class="example-slide" id="ex3">
                        <div class="sentence-box">Because it was raining<span class="hl-modal">, but</span> we stayed inside.</div>
                        <div class="analysis-grid">
                            <div class="analysis-box elem-box"><div class="box-label">Error</div><div class="box-value">because + but</div><div class="box-desc">Do not use two connectors to join the same clauses.</div></div>
                            <div class="analysis-box elem-box"><div class="box-label">Correction</div><div class="box-value">Remove but</div><div class="box-desc">Correct: <em>Because it was raining, we stayed inside.</em></div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Coordinate Connector Quiz</div>
                <div class="quiz-body">
                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" The exam was very difficult, ______ he managed to get an A. "</p>
                        <ul class="options-grid"><li class="option-item" data-correct="false">A. and</li><li class="option-item" data-correct="true">B. yet</li><li class="option-item" data-correct="false">C. so</li><li class="option-item" data-correct="false">D. or</li></ul>
                        <div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div>
                    </div>
                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" It was raining heavily, ______ we decided to cancel the outdoor picnic. "</p>
                        <ul class="options-grid"><li class="option-item" data-correct="true">A. so</li><li class="option-item" data-correct="false">B. but</li><li class="option-item" data-correct="false">C. nor</li><li class="option-item" data-correct="false">D. yet</li></ul>
                        <div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div>
                    </div>
                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" You can take the bus to the station, ______ you can call a taxi. "</p>
                        <ul class="options-grid"><li class="option-item" data-correct="false">A. and</li><li class="option-item" data-correct="true">B. or</li><li class="option-item" data-correct="false">C. nor</li><li class="option-item" data-correct="false">D. yet</li></ul>
                        <div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div>
                    </div>
                    <div class="question-wrapper" data-step="4" style="display: none;">
                        <div class="quiz-progress">4/5</div>
                        <p class="question-text" style="font-style: normal;"><strong>Identify the ERROR:</strong><br><br>Although the lecture was long <span class="error-underline">but</span><span class="error-label">A</span> the students <span class="error-underline">remained</span><span class="error-label">B</span> focused <span class="error-underline">until</span><span class="error-label">C</span> the end <span class="error-underline">D</span>.</p>
                        <ul class="options-grid"><li class="option-item" data-correct="true">A. but</li><li class="option-item" data-correct="false">B. remained</li><li class="option-item" data-correct="false">C. until</li><li class="option-item" data-correct="false">D. end</li></ul>
                        <div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div>
                    </div>
                    <div class="question-wrapper" data-step="5" style="display: none;">
                        <div class="quiz-progress">5/5</div>
                        <p class="question-text" style="font-style: normal;"><strong>Identify the ERROR:</strong><br><br>The music was loud <span class="error-underline">and</span><span class="error-label">A</span> the neighbors <span class="error-underline">complained</span><span class="error-label">B</span> because it <span class="error-underline">was</span><span class="error-label">C</span> midnight <span class="error-underline">D</span>.</p>
                        <ul class="options-grid"><li class="option-item" data-correct="true">A. and</li><li class="option-item" data-correct="false">B. complained</li><li class="option-item" data-correct="false">C. was</li><li class="option-item" data-correct="false">D. midnight</li></ul>
                        <div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div>
                    </div>
                    <div class="quiz-footer"><button id="btn-next-question" class="btn-next" style="display: none;">NEXT</button></div>
                </div>
            </div>
        </div>

        <div class="materi-right-sticky">
            <div class="pattern-card">
                <h3>🔗 Compound Formula</h3>
                <div class="summary-box"><strong>Basic Structure</strong><span>Clause + , + FANBOYS + Clause</span></div>
                <div class="summary-box"><strong>FANBOYS</strong><span>for, and, nor, but, or, yet, so</span></div>
                <span style="font-size: 0.95rem; opacity: 0.85; display: block; margin-top: 15px; text-align: center; font-style: italic;">One connector is enough!</span>
            </div>
            <div class="video-card"><h3>Video Lesson</h3><p>Watch expert breakdown</p><div class="video-container"><iframe src="https://www.youtube.com/embed/qdG1JwriOwM" title="Coordinate Connectors" allowfullscreen></iframe></div></div>
        </div>
    </div>

    <script>
        const quizDatabase = {
            1: { correctText: "Correct! The two clauses show contrast. <strong>Yet</strong> works like <em>but</em> and connects two independent clauses.", wrongText: "Look at the meaning. The first clause says the exam was difficult, but the second clause gives an unexpected result. You need a contrast connector.", formula: "Clause + , + yet + Clause" },
            2: { correctText: "Right! The second clause is the result of the first clause, so the correct connector is <strong>so</strong>.", wrongText: "This sentence needs a result connector. Heavy rain caused the picnic cancellation, so use <strong>so</strong>.", formula: "Cause Clause + , + so + Result Clause" },
            3: { correctText: "Excellent! The sentence offers two alternatives, so <strong>or</strong> is the correct coordinate connector.", wrongText: "The sentence gives a choice between two actions. Use <strong>or</strong> for alternatives.", formula: "Option 1 + , + or + Option 2" },
            4: { correctText: "Correct! The error is <strong>but</strong>. Since <em>Although</em> already introduces contrast, do not add <em>but</em>.", wrongText: "This is a double-connector trap. <em>Although</em> and <em>but</em> should not be used together to connect the same idea.", formula: "Although + Clause, Clause (not: although + but)" },
            5: { correctText: "Perfect! The error is <strong>and</strong>. The sentence already has <em>because</em> to connect the reason, so the extra coordinate connector makes the structure awkward.", wrongText: "Avoid stacking connectors. Use either a coordinate connector pattern or a subordinate connector pattern.", formula: "Use one connector pattern only" }
        };
        const btnExamples = document.getElementById('btn-toggle-examples');
        const btnExercise = document.getElementById('btn-toggle-exercise');
        const examplesSec = document.getElementById('examples-display-section');
        const quizSec = document.getElementById('quiz-section');
        btnExamples.addEventListener('click', function () { quizSec.style.display = 'none'; btnExercise.classList.remove('btn-active-state'); if (examplesSec.style.display === 'flex') { examplesSec.style.display = 'none'; this.classList.remove('btn-active-state'); } else { examplesSec.style.display = 'flex'; this.classList.add('btn-active-state'); examplesSec.scrollIntoView({ behavior: 'smooth' }); } });
        btnExercise.addEventListener('click', function () { examplesSec.style.display = 'none'; btnExamples.classList.remove('btn-active-state'); if (quizSec.style.display === 'block') { quizSec.style.display = 'none'; this.classList.remove('btn-active-state'); } else { quizSec.style.display = 'block'; this.classList.add('btn-active-state'); quizSec.scrollIntoView({ behavior: 'smooth' }); } });
        document.querySelectorAll('.ex-tab').forEach(tab => { tab.addEventListener('click', function () { document.querySelectorAll('.ex-tab').forEach(t => t.classList.remove('active')); document.querySelectorAll('.example-slide').forEach(s => s.classList.remove('active')); this.classList.add('active'); document.getElementById(this.getAttribute('data-target')).classList.add('active'); }); });
        let currentStep = 1;
        document.querySelectorAll('.option-item').forEach(item => { item.addEventListener('click', function () { const wrapper = this.closest('.question-wrapper'); if (wrapper.getAttribute('data-answered') === 'true') return; const isCorrect = this.getAttribute('data-correct') === 'true'; const step = wrapper.getAttribute('data-step'); const expCard = wrapper.querySelector('.explanation-card'); const expTitle = wrapper.querySelector('.explanation-title'); const expContent = wrapper.querySelector('.explanation-content'); const formulaBox = wrapper.querySelector('.inner-formula-box'); if (isCorrect) { this.classList.add('correct'); expTitle.innerHTML = "🏆 Excellent!"; expContent.innerHTML = quizDatabase[step].correctText; } else { this.classList.add('wrong'); expTitle.innerHTML = "💡 Explanation"; expContent.innerHTML = quizDatabase[step].wrongText; wrapper.querySelectorAll('.option-item').forEach(opt => { if (opt.getAttribute('data-correct') === 'true') opt.classList.add('correct'); }); } if (quizDatabase[step].formula) { formulaBox.innerHTML = quizDatabase[step].formula; formulaBox.style.display = 'inline-block'; } expCard.style.display = 'block'; wrapper.setAttribute('data-answered', 'true'); document.getElementById('btn-next-question').style.display = 'block'; }); });
        document.getElementById('btn-next-question').addEventListener('click', function () { document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'none'; currentStep++; if (currentStep <= 5) { document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'block'; this.style.display = 'none'; } else { alert("🎉 Great job! You have mastered Coordinate Connectors."); currentStep = 1; document.querySelectorAll('.question-wrapper').forEach(w => { w.style.display = 'none'; w.removeAttribute('data-answered'); w.querySelector('.explanation-card').style.display = 'none'; w.querySelector('.inner-formula-box').style.display = 'none'; w.querySelectorAll('.option-item').forEach(o => o.className = 'option-item'); }); document.querySelector('.question-wrapper[data-step="1"]').style.display = 'block'; quizSec.style.display = 'none'; btnExercise.classList.remove('btn-active-state'); this.style.display = 'none'; } });
    </script>
</body>
</html>
