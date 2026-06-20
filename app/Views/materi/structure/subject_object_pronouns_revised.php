<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject and Object Pronouns</title>
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
        nav { display: flex; justify-content: flex-end; align-items: center; padding: 30px 70px; gap: 35px; }
        nav a { text-decoration: none; color: var(--text-dark); font-weight: 600; font-size: 0.95rem; letter-spacing: 2px; text-transform: uppercase; }
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
        .hl-keyword { color: var(--hl-keyword); font-weight: 700; border-bottom: 2px dashed var(--hl-keyword); }
        .hl-form { background-color: var(--hl-form); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }
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
        @media (max-width: 992px) { .materi-wrapper { grid-template-columns: 1fr; } .materi-right-sticky { position: relative; top: 0; } nav { padding: 20px; justify-content: center; flex-wrap: wrap; } .analysis-grid { grid-template-columns: 1fr; } .options-grid { grid-template-columns: 1fr; } }
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
        <h1>Subject and Object Pronouns</h1>
        <p>Understanding when pronouns act as subjects, objects, or objects of prepositions in TOEFL grammar.</p>
    </div>
    <div class="materi-wrapper">
        <div class="materi-left-scroll">
            <div class="main-card">
                <h2>The Pronoun Case Rule</h2>
                <p class="intro"><strong>Subject pronouns</strong> digunakan sebagai pelaku aksi, sedangkan <strong>object pronouns</strong> digunakan sebagai penerima aksi atau setelah preposition. Dalam TOEFL, kesalahan yang sering muncul adalah memakai <em>he/she/they/I</em> di posisi objek atau memakai <em>him/her/them/me</em> di posisi subjek.</p>
                <div class="sub-section"><h3>What is a Subject Pronoun?</h3><p>Subject pronoun berada sebelum verb dan berfungsi sebagai pelaku. Contohnya: <em>I, you, he, she, it, we, they</em>.</p><div class="comparison-box"><p><span class="badge-tag">Example 1</span><br><span class="text-wrong">Incorrect:</span> <strong>Her</strong> called the manager.<br><span class="text-correct">Correct:</span> <strong>She</strong> called the manager.</p></div></div>
                <div class="sub-section"><h3>What is an Object Pronoun?</h3><p>Object pronoun muncul setelah verb atau preposition. Contohnya: <em>me, you, him, her, it, us, them</em>.</p><div class="comparison-box"><p><span class="badge-tag">Example 2</span><br><span class="text-wrong">Incorrect:</span> The teacher helped <strong>they</strong>.<br><span class="text-correct">Correct:</span> The teacher helped <strong>them</strong>.</p></div></div>
                <div class="sub-section"><h3>TOEFL Style Comparison Examples</h3><div class="comparison-box"><p><span class="badge-tag">Example 3</span><br><span class="text-wrong">Incorrect:</span> This gift is for <strong>he</strong>.<br><span class="text-correct">Correct:</span> This gift is for <strong>him</strong>.</p></div></div>
                <div class="tip-box"><h4>⚠️ TOEFL Exam Shortcut</h4><p>Jika pronoun berada sebelum verb sebagai pelaku, gunakan subject pronoun. Jika pronoun berada setelah verb atau setelah preposition seperti <em>for, to, with, between, by</em>, gunakan object pronoun.</p></div>
            </div>
            <div class="action-buttons"><button id="btn-toggle-examples" class="btn btn-example">👁️ Example</button><button id="btn-toggle-exercise" class="btn btn-exercise">📝 Exercise</button></div>
            <div id="examples-display-section" class="examples-display-section">
                <div class="example-showcase-card"><h3>Subject & Object Pronoun Analysis</h3><div class="example-nav"><button class="ex-tab active" data-target="ex1">Subject Pronoun</button><button class="ex-tab" data-target="ex2">Object Pronoun</button><button class="ex-tab" data-target="ex3">TOEFL Trap</button></div>
                    <div class="example-slide active" id="ex1"><div class="sentence-box"><span class="hl-form">She</span> <span class="hl-keyword">called</span> the manager.</div><div class="analysis-grid"><div class="analysis-box elem-box"><div class="box-label">Pronoun Position</div><div class="box-value">Before Verb</div><div class="box-desc">Pronoun berada sebelum verb sehingga menjadi subject.</div></div><div class="analysis-box elem-box"><div class="box-label">Correct Form</div><div class="box-value">She</div><div class="box-desc">Gunakan subject pronoun: I, he, she, we, they.</div></div></div></div>
                    <div class="example-slide" id="ex2"><div class="sentence-box">The manager asked <span class="hl-form">them</span> to finish the report.</div><div class="analysis-grid"><div class="analysis-box elem-box"><div class="box-label">Pronoun Position</div><div class="box-value">After Verb</div><div class="box-desc">Pronoun berada setelah verb <em>asked</em>, jadi harus object pronoun.</div></div><div class="analysis-box elem-box"><div class="box-label">Correct Form</div><div class="box-value">them</div><div class="box-desc">Bukan <em>they</em>, karena posisinya sebagai objek.</div></div></div></div>
                    <div class="example-slide" id="ex3"><div class="sentence-box">This task is for <span class="hl-form">him</span>, not <span class="hl-keyword">he</span>.</div><div class="analysis-grid"><div class="analysis-box elem-box"><div class="box-label">Preposition</div><div class="box-value">for</div><div class="box-desc">Setelah preposition harus memakai object pronoun.</div></div><div class="analysis-box elem-box"><div class="box-label">TOEFL Trap</div><div class="box-value">for he ❌</div><div class="box-desc">Bentuk benar adalah <em>for him</em>.</div></div></div></div>
                </div>
            </div>
            <div id="quiz-section" class="quiz-section"><div class="practice-header-card">Subject and Object Pronouns Quiz</div><div class="quiz-body">
                <div class="question-wrapper" data-step="1" style="display: block;"><div class="quiz-progress">1/5</div><p class="question-text">" ______ went to the store to buy some supplies for the project. "</p><ul class="options-grid"><li class="option-item" data-correct="false">A. Me</li><li class="option-item" data-correct="false">B. Him</li><li class="option-item" data-correct="true">C. She</li><li class="option-item" data-correct="false">D. Us</li></ul><div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div></div>
                <div class="question-wrapper" data-step="2" style="display: none;"><div class="quiz-progress">2/5</div><p class="question-text">" The manager asked ______ to finish the report by tomorrow morning. "</p><ul class="options-grid"><li class="option-item" data-correct="false">A. they</li><li class="option-item" data-correct="true">B. them</li><li class="option-item" data-correct="false">C. we</li><li class="option-item" data-correct="false">D. he</li></ul><div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div></div>
                <div class="question-wrapper" data-step="3" style="display: none;"><div class="quiz-progress">3/5</div><p class="question-text">" Between you and ______, I think this plan will succeed. "</p><ul class="options-grid"><li class="option-item" data-correct="false">A. I</li><li class="option-item" data-correct="true">B. me</li><li class="option-item" data-correct="false">C. myself</li><li class="option-item" data-correct="false">D. mine</li></ul><div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div></div>
                <div class="question-wrapper" data-step="4" style="display: none;"><div class="quiz-progress">4/5</div><p class="question-text" style="font-style: normal;"><strong>Identify the ERROR:</strong><br><br>It is important for <span class="error-underline">he</span><span class="error-label">A</span> to <span class="error-underline">submit</span><span class="error-label">B</span> the document <span class="error-underline">to</span><span class="error-label">C</span> <span class="error-underline">us</span><span class="error-label">D</span> immediately.</p><ul class="options-grid"><li class="option-item" data-correct="true">A. he</li><li class="option-item" data-correct="false">B. submit</li><li class="option-item" data-correct="false">C. to</li><li class="option-item" data-correct="false">D. us</li></ul><div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div></div>
                <div class="question-wrapper" data-step="5" style="display: none;"><div class="quiz-progress">5/5</div><p class="question-text" style="font-style: normal;"><strong>Identify the ERROR:</strong><br><br>The professor gave <span class="error-underline">they</span><span class="error-label">A</span> <span class="error-underline">extra time</span><span class="error-label">B</span> because <span class="error-underline">she</span><span class="error-label">C</span> felt <span class="error-underline">sorry</span><span class="error-label">D</span>.</p><ul class="options-grid"><li class="option-item" data-correct="true">A. they</li><li class="option-item" data-correct="false">B. extra time</li><li class="option-item" data-correct="false">C. she</li><li class="option-item" data-correct="false">D. sorry</li></ul><div class="explanation-card"><div class="explanation-title"></div><p class="explanation-content"></p><div class="inner-formula-box"></div></div></div>
                <div class="quiz-footer"><button id="btn-next-question" class="btn-next" style="display: none;">NEXT</button></div>
            </div></div>
        </div>
        <div class="materi-right-sticky"><div class="pattern-card"><h3>👤 Pronoun Case Key</h3><div class="summary-box"><strong>Subject Pronouns</strong>Before verb as the doer.<span>I / he / she / we / they</span></div><div class="summary-box"><strong>Object Pronouns</strong>After verb as receiver.<span>me / him / her / us / them</span></div><div class="summary-box"><strong>Preposition Rule</strong><span>for him, to us, with them</span></div></div><div class="video-card"><h3>Video Lesson</h3><p>Watch expert breakdown</p><div class="video-container"><iframe src="https://www.youtube.com/embed/boxixZkx0WU" title="Subject and object pronouns" allowfullscreen></iframe></div></div></div>
    </div>

    <script>
        const quizDatabase = {
    1: { correctText: "Correct! The blank is before the verb, so it needs a subject pronoun: <strong>She</strong>.", wrongText: "Object pronouns like <em>me, him, us</em> cannot be used as the subject of the sentence.", formula: "Subject Pronoun (She) + Verb (went)" },
    2: { correctText: "Correct! After the verb <em>asked</em>, we need an object pronoun: <strong>them</strong>.", wrongText: "After a verb, use an object pronoun. <em>They</em> is a subject pronoun, so it is incorrect here.", formula: "Verb (asked) + Object Pronoun (them)" },
    3: { correctText: "Perfect! <em>Between</em> is a preposition, so the pronoun after it must be an object pronoun: <strong>me</strong>.", wrongText: "After a preposition, do not use <em>I</em>. Use <em>me</em>.", formula: "Preposition (between) + Object Pronoun (me)" },
    4: { correctText: "Correct! Part A is the error. After the preposition <em>for</em>, use <strong>him</strong>, not <em>he</em>.", wrongText: "The word after a preposition must be an object pronoun.", formula: "for + <span style='color:#E74C3C;'>he</span> → for + <span style='color:#27AE60;'>him</span>" },
    5: { correctText: "Correct! Part A is the error. After <em>gave</em>, use <strong>them</strong>, not <em>they</em>.", wrongText: "The pronoun after a transitive verb is the object, so it must be in object form.", formula: "gave + <span style='color:#E74C3C;'>they</span> → gave + <span style='color:#27AE60;'>them</span>" }
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
                alert("🎉 Great work! You have completed this practice section.");
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
