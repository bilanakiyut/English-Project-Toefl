<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulary Questions - English Learning Journey</title>
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

        /* ================= NAVBAR ================= */
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

        /* ================= MAIN HEADER ================= */
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

        /* ================= TWO COLUMN LAYOUT ================= */
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

        /* ================= MAIN CARD ================= */
        .main-card {
            background-color: var(--maroon-dark);
            border-radius: 20px;
            padding: 45px 40px;
            color: var(--text-light);
            box-shadow: 0 15px 35px rgba(67, 12, 23, 0.1);
        }

        .main-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.9rem;
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

        .main-card-scroll {
            background-color: var(--maroon-dark);
            border-radius: 20px;
            padding: 45px 25px 45px 40px;
            color: var(--text-light);
            box-shadow: 0 15px 35px rgba(67, 12, 23, 0.1);
            max-height: 650px;
            overflow-y: auto;
        }

        .main-card-scroll::-webkit-scrollbar { width: 8px; }
        .main-card-scroll::-webkit-scrollbar-track { background: rgba(255,255,255,0.05); border-radius: 10px; }
        .main-card-scroll::-webkit-scrollbar-thumb { background: var(--gold-card); border-radius: 10px; }

        .main-card-scroll .inner-section {
            padding-right: 15px;
            margin-bottom: 35px;
            padding-bottom: 35px;
            border-bottom: 1px solid rgba(255,253,249,0.1);
        }

        .main-card-scroll .inner-section:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .main-card-scroll h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.9rem;
            font-weight: 600;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 253, 249, 0.15);
            padding-bottom: 15px;
        }

        .sub-section { margin-bottom: 40px; }

        .sub-section h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #D9CBB0;
            letter-spacing: 0.5px;
        }

        .sub-section p {
            font-size: 1.15rem;
            opacity: 0.85;
            line-height: 1.55;
            margin-bottom: 15px;
        }

        /* ================= TWO-COLUMN GROUP BOXES ================= */
        .connectors-group-flex {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }

        .group-box {
            background-color: rgba(255, 255, 255, 0.04);
            border-radius: 12px;
            padding: 22px;
            border-left: 3px solid rgba(255, 253, 249, 0.2);
        }

        .group-box h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #FFFDF9;
        }

        .group-box .desc {
            font-size: 1.05rem;
            opacity: 0.8;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .badge-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .badge-item {
            background-color: var(--gold-card);
            color: var(--text-light);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        /* ================= TIP BOX ================= */
        .tip-box {
            background-color: var(--maroon-light);
            border-radius: 12px;
            padding: 22px 25px;
            margin-top: 25px;
            border: 1px solid rgba(255, 253, 249, 0.1);
        }

        .tip-box h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: #FFFDF9;
        }

        .tip-box p {
            font-size: 1.05rem;
            opacity: 0.85;
            line-height: 1.5;
            color: var(--text-light);
        }

        /* ================= GENERIC LIST STYLES ================= */
        .main-card ul, .main-card-scroll ul {
            list-style: none;
            padding-left: 0;
        }

        .main-card ul li, .main-card-scroll ul li {
            font-size: 1.1rem;
            line-height: 1.7;
            opacity: 0.9;
            padding: 10px 0 10px 32px;
            position: relative;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .main-card ul li:last-child, .main-card-scroll ul li:last-child { border-bottom: none; }

        .main-card ul li::before, .main-card-scroll ul li::before {
            content: "›";
            position: absolute;
            left: 6px;
            color: var(--gold-card);
            font-weight: 800;
            font-size: 1.3rem;
            line-height: 1.4;
        }

        /* ================= ACTION BUTTONS ================= */
        .action-buttons {
            display: flex;
            gap: 20px;
        }

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

        .btn-exercise { background-color: var(--maroon-dark); color: var(--text-light); border: 1px solid rgba(255,253,249,0.2); }
        .btn-example { background-color: var(--gold-card); color: var(--text-light); }
        .btn:hover { transform: translateY(-2px); opacity: 0.9; }
        .btn-active-state { box-shadow: inset 0 0 10px rgba(0,0,0,0.3); opacity: 0.85; }
        .btn-exercise.btn-active-state { background-color: #631b25 !important; }
        .btn-example.btn-active-state { background-color: #7a6640 !important; }

        /* ================= EXAMPLES SECTION ================= */
        .examples-display-section {
            display: none;
            flex-direction: column;
            gap: 25px;
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
            text-align: left;
            font-size: 1.15rem;
            color: #333333;
            margin-bottom: 25px;
            line-height: 1.7;
        }

        .sentence-box strong { color: #430c17; }

        .hl-keyword {
            background: #566573;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
        }

        .hl-location {
            background: #78281F;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
        }

        .hl-answer {
            background: #877148;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
        }

        .analysis-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .analysis-box {
            border-radius: 10px;
            padding: 18px;
            border-left: 4px solid #BDC3C7;
            display: flex;
            flex-direction: column;
            gap: 5px;
            background-color: #F8F6F2;
        }

        .analysis-box.keyword-box { border-left-color: #877048; background-color: #F4EFE3; }
        .analysis-box.location-box { border-left-color: #9E8559; background-color: #F5EEF0; }
        .analysis-box.answer-box { border-left-color: #4A121A; background-color: #FBEFEF; }

        .box-label {
            font-family: sans-serif;
            font-size: 0.75rem;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 3px;
            color: #78281F;
        }

        .box-value {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 3px;
            color: #111;
            border-bottom: 1px solid rgba(0,0,0,0.08);
            padding-bottom: 6px;
        }

        .box-desc {
            font-size: 0.95rem;
            line-height: 1.4;
            color: #555;
        }

        /* ================= QUIZ SECTION ================= */
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

        .quiz-progress {
            color: var(--maroon-dark);
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 25px;
        }

        .question-text {
            font-size: 1.3rem;
            text-align: left;
            color: var(--text-dark);
            margin-bottom: 30px;
            line-height: 1.5;
            font-style: italic;
        }

        .options-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
            list-style: none;
            margin-bottom: 30px;
        }

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
            line-height: 1.4;
        }

        .option-item:hover { background-color: #fcfbfa; border-color: var(--gold-card); }

        .explanation-card {
            display: none;
            background-color: var(--gold-light);
            border: 1px solid var(--gold-border);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            color: #5C4A33;
        }

        .explanation-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #430c17;
        }

        .explanation-card p {
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .quiz-footer { display: flex; justify-content: flex-end; }

        .btn-next {
            background-color: #4A121A;
            color: #ffffff;
            border: none;
            padding: 14px 50px;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 1.15rem;
            letter-spacing: 2px;
            border-radius: 25px;
            cursor: pointer;
            text-transform: uppercase;
        }

        /* ================= RIGHT COLUMN ================= */
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
            margin-bottom: 15px;
            font-weight: 700;
        }

        .formula-box {
            background-color: var(--gold-inner);
            padding: 15px;
            border-radius: 8px;
            font-size: 1.05rem;
            line-height: 1.4;
            font-family: monospace;
            font-weight: 700;
            color: #FAF4E7;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
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
        <h1>Vocabulary Questions</h1>
        <p>Learn how to determine the meaning of words and phrases through context.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <!-- ================= MATERI (SCROLLABLE) ================= -->
            <div class="main-card-scroll">

            <!-- ================= SECTION 1 ================= -->
            <div class="inner-section">
                <h2>1. Understanding Vocabulary Questions</h2>

                <p class="intro">
                    Vocabulary Questions are common in TOEFL Reading tests.
                    These questions ask you to determine the meaning of a word
                    or phrase based on the context of the passage rather than
                    relying solely on memorization.
                </p>

                <div class="connectors-group-flex">

                    <div class="group-box">
                        <h3>Vocabulary Skills</h3>
                        <p class="desc">Understanding words through context.</p>
                        <div class="badge-container">
                            <div class="badge-item">Synonyms</div>
                            <div class="badge-item">Meaning</div>
                            <div class="badge-item">Context</div>
                            <div class="badge-item">Inference</div>
                        </div>
                    </div>

                    <div class="group-box">
                        <h3>Context Clues</h3>
                        <p class="desc">Using surrounding information to identify meanings.</p>
                        <div class="badge-container">
                            <div class="badge-item">Definition</div>
                            <div class="badge-item">Example</div>
                            <div class="badge-item">Contrast</div>
                            <div class="badge-item">Restatement</div>
                        </div>
                    </div>

                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Vocabulary Tip</h4>
                    <p>Never translate a word directly. Always use the surrounding sentence to determine the intended meaning.</p>
                </div>
            </div>

            <!-- ================= SECTION 2 ================= -->
            <div class="inner-section">
                <h2>2. What are Vocabulary Questions?</h2>

                <p class="intro">
                    Vocabulary Questions require readers to determine the meaning
                    of a word or phrase within a specific context.
                </p>

                <h3 style="margin-bottom:15px; color:#D9CBB0;">Purpose of Vocabulary Questions</h3>

                <ul>
                    <li>Measure vocabulary understanding.</li>
                    <li>Test contextual interpretation skills.</li>
                    <li>Identify synonym relationships.</li>
                    <li>Recognize word usage within passages.</li>
                    <li>Improve reading comprehension accuracy.</li>
                </ul>
            </div>

            <!-- ================= SECTION 3 ================= -->
            <div class="inner-section">
                <h2>3. How to Answer Vocabulary Questions</h2>

                <ul>
                    <li>Read the entire sentence containing the word.</li>
                    <li>Look at the sentence before and after it.</li>
                    <li>Identify clues from examples or explanations.</li>
                    <li>Replace the word with each answer choice.</li>
                    <li>Choose the option that fits naturally.</li>
                </ul>
            </div>

            </div>
            <!-- ================= END MATERI SCROLL ================= -->

            <!-- ================= ACTION BUTTONS ================= -->
            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ View Examples</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Practice Exercise</button>
            </div>

            <!-- ================= EXAMPLES SECTION ================= -->
            <div id="examples-display-section" class="examples-display-section">

                <!-- ================= EXAMPLE 1 ================= -->
                <div class="example-showcase-card">
                    <h3>Vocabulary Example 1</h3>

                    <div class="sentence-box">
                        <strong>The Library in Green City</strong><br><br>
                        The library in Green City was built in 1995.
                        It is one of the most <span class="hl-keyword">popular</span>
                        places for students because it provides thousands of books
                        and free internet access.
                        Many students visit the library every day to study,
                        read books, or complete their assignments.
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Word</div>
                            <div class="box-value">Popular</div>
                            <div class="box-desc">The target vocabulary word.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Context</div>
                            <div class="box-value">Many Students Visit</div>
                            <div class="box-desc">The library is frequently visited.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Meaning</div>
                            <div class="box-value">Famous</div>
                            <div class="box-desc">Popular means well-known or liked by many people.</div>
                        </div>
                    </div>
                </div>

                <!-- ================= EXAMPLE 2 ================= -->
                <div class="example-showcase-card">
                    <h3>Vocabulary Example 2</h3>

                    <div class="sentence-box">
                        <strong>Avoiding Distractions While Studying</strong><br><br>
                        Many students find it difficult to concentrate while studying
                        because they often use their <span class="hl-keyword">phones</span>
                        or open social media.
                        As a result, they cannot complete their tasks effectively
                        and sometimes finish their homework late.
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Word</div>
                            <div class="box-value">Phones</div>
                            <div class="box-desc">Vocabulary being analyzed.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Context</div>
                            <div class="box-value">Studying</div>
                            <div class="box-desc">Used while studying.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Meaning</div>
                            <div class="box-value">Mobile Devices</div>
                            <div class="box-desc">Refers to smartphones or mobile phones.</div>
                        </div>
                    </div>
                </div>

                <!-- TIP CARD -->
                <div class="main-card">
                    <h2>📚 Vocabulary Strategy Tip</h2>

                    <p class="intro">
                        TOEFL Vocabulary Questions do not always test dictionary
                        meanings. Instead, they often test the meaning of a word
                        within a specific context.
                    </p>

                    <div class="tip-box">
                        <h4>Correct Strategy</h4>
                        <p>Read the sentence carefully and use context clues before looking at the answer choices.</p>
                    </div>

                    <div class="tip-box" style="margin-top:20px;">
                        <h4>Avoid This Mistake</h4>
                        <p>Do not choose an answer based only on memorization. The word may have a different meaning in the passage.</p>
                    </div>
                </div>

            </div>

            <!-- ================= QUIZ SECTION ================= -->
            <div id="quiz-section" class="quiz-section">

                <div class="practice-header-card">TOEFL Vocabulary Practice</div>

                <div class="quiz-body">

                    <!-- PASSAGE -->
                    <div style="background:#F4EFE3; padding:25px; border-radius:15px; margin-bottom:35px; line-height:1.8; font-size:1.1rem;">
                        <strong>The Evolution of Digital Classrooms</strong><br><br>
                        Online learning platforms have fundamentally transformed modern
                        education systems by making materials accessible from anywhere
                        in the world.
                        Teachers can easily distribute digital resources, track student
                        milestones, and conduct synchronous virtual discussions.
                        However, an unexpected consequence of this shift is the rising
                        rate of student digital fatigue.
                        <br><br>
                        To alleviate this issue, educational experts recommend
                        implementing brief intervals of physical movement during
                        study blocks.
                        Furthermore, institutions are urged to promote blended
                        learning modules.
                        By utilizing these integrated strategies, schools can
                        enhance student wellness while sustaining top-tier
                        academic progress.
                    </div>

                    <!-- Q1 -->
                    <div class="question-wrapper" data-step="1" style="display:block;">
                        <div class="quiz-progress">1 / 5</div>
                        <p class="question-text">The word "transformed" is closest in meaning to ______.</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Damaged</li>
                            <li class="option-item" data-correct="true">B. Changed</li>
                            <li class="option-item" data-correct="false">C. Built</li>
                            <li class="option-item" data-correct="false">D. Abandoned</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Vocabulary Explanation</div>
                            <p>"Transformed" means changed significantly or improved.</p>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="question-wrapper" data-step="2" style="display:none;">
                        <div class="quiz-progress">2 / 5</div>
                        <p class="question-text">The word "alleviate" can best be replaced by ______.</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Increase</li>
                            <li class="option-item" data-correct="true">B. Reduce</li>
                            <li class="option-item" data-correct="false">C. Ignore</li>
                            <li class="option-item" data-correct="false">D. Create</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Vocabulary Explanation</div>
                            <p>"Alleviate" means to make a problem less severe or reduce it.</p>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="question-wrapper" data-step="3" style="display:none;">
                        <div class="quiz-progress">3 / 5</div>
                        <p class="question-text">The word "wellness" is closest in meaning to ______.</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. Health</li>
                            <li class="option-item" data-correct="false">B. Sickness</li>
                            <li class="option-item" data-correct="false">C. Intelligence</li>
                            <li class="option-item" data-correct="false">D. Speed</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Vocabulary Explanation</div>
                            <p>"Wellness" refers to good health and overall well-being.</p>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="question-wrapper" data-step="4" style="display:none;">
                        <div class="quiz-progress">4 / 5</div>
                        <p class="question-text">The word "accessible" is closest in meaning to ______.</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. Available</li>
                            <li class="option-item" data-correct="false">B. Hidden</li>
                            <li class="option-item" data-correct="false">C. Expensive</li>
                            <li class="option-item" data-correct="false">D. Damaged</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Vocabulary Explanation</div>
                            <p>"Accessible" means easy to obtain, reach, or use.</p>
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="question-wrapper" data-step="5" style="display:none;">
                        <div class="quiz-progress">5 / 5</div>
                        <p class="question-text">The word "implementing" is closest in meaning to ______.</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. Applying</li>
                            <li class="option-item" data-correct="false">B. Removing</li>
                            <li class="option-item" data-correct="false">C. Forgetting</li>
                            <li class="option-item" data-correct="false">D. Reducing</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Vocabulary Explanation</div>
                            <p>"Implementing" means putting a plan or strategy into action.</p>
                        </div>
                    </div>

                    <div class="quiz-footer">
                        <button id="btn-next-question" class="btn-next" style="display:none;">Next Question</button>
                    </div>

                </div>
            </div>

        </div>

        <!-- ================= RIGHT COLUMN ================= -->
        <div class="materi-right-sticky">

            <div class="pattern-card">
                <h3>📚 Vocabulary</h3>
                <div class="formula-box">Word → Context → Meaning</div>
            </div>

            <div class="pattern-card">
                <h3>🔍 Context Clues</h3>
                <div class="formula-box">Sentence → Clue → Synonym</div>
            </div>

            <div class="pattern-card">
                <h3>🎯 TOEFL Goal</h3>
                <div class="formula-box">Understand Meaning Through Context</div>
            </div>

              <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/nCM4TSq31lk?si=YAZe9PrceWscSLV2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>

    <script>
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

        let currentStep = 1;

        document.querySelectorAll('.option-item').forEach(option => {
            option.addEventListener('click', function () {
                const wrapper = this.closest('.question-wrapper');
                if (wrapper.dataset.answered === "true") return;

                const isCorrect = this.dataset.correct === "true";
                wrapper.dataset.answered = "true";

                wrapper.querySelectorAll('.option-item').forEach(item => {
                    if (item.dataset.correct === "true") {
                        item.style.background = "#E8F8F0";
                        item.style.borderColor = "#2ECC71";
                        item.style.color = "#27AE60";
                        item.style.fontWeight = "600";
                    }
                });

                if (!isCorrect) {
                    this.style.background = "#FDEDEC";
                    this.style.borderColor = "#E74C3C";
                    this.style.color = "#C0392B";
                }

                wrapper.querySelector('.explanation-card').style.display = 'block';
                document.getElementById('btn-next-question').style.display = 'inline-block';
            });
        });

        document.getElementById('btn-next-question').addEventListener('click', function () {
            document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'none';
            currentStep++;

            if (currentStep <= 5) {
                document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'block';
                this.style.display = 'none';
            } else {
                alert("🎉 Congratulations! You have completed the Vocabulary Questions Practice.");
                location.reload();
            }
        });
    </script>

</body>
</html>