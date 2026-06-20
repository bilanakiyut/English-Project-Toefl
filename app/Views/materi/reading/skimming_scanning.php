<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering Skimming & Scanning</title>
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

        /* ================= SCROLLABLE CARD ================= */
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

        .main-card-scroll p.intro {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
            opacity: 0.95;
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
        <h1>Mastering Skimming & Scanning</h1>
        <p>Learn how to locate main ideas and specific information efficiently in TOEFL Reading passages.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <!-- ================= MATERI (SCROLLABLE) ================= -->
            <div class="main-card-scroll">

                <!-- ================= SECTION 1 ================= -->
                <div class="inner-section">
                    <h2>1. Reading Strategies: Skimming & Scanning</h2>

                    <p class="intro">
                        Time is highly limited in the TOEFL Reading section. Reading every
                        word carefully is often inefficient. Therefore, successful TOEFL
                        test-takers use strategic reading techniques such as
                        <strong>Skimming</strong> and <strong>Scanning</strong> to locate
                        information quickly and accurately.
                    </p>

                    <div class="connectors-group-flex">

                        <div class="group-box">
                            <h3>Skimming Focus</h3>
                            <p class="desc">Understanding the general idea and overall structure of a text.</p>
                            <div class="badge-container">
                                <div class="badge-item">Main Idea</div>
                                <div class="badge-item">Topic</div>
                                <div class="badge-item">Overview</div>
                                <div class="badge-item">Structure</div>
                            </div>
                        </div>

                        <div class="group-box">
                            <h3>Scanning Focus</h3>
                            <p class="desc">Finding specific details without reading the whole passage.</p>
                            <div class="badge-container">
                                <div class="badge-item">Names</div>
                                <div class="badge-item">Dates</div>
                                <div class="badge-item">Numbers</div>
                                <div class="badge-item">Details</div>
                            </div>
                        </div>

                    </div>

                    <div class="tip-box">
                        <h4>⚠️ TOEFL Reading Tip</h4>
                        <p>First skim the passage to understand the overall topic, then scan the passage when answering detail questions. Combining these strategies can significantly improve both speed and accuracy.</p>
                    </div>
                </div>

                <!-- ================= SECTION 2 ================= -->
                <div class="inner-section">
                    <h2>2. What is Skimming?</h2>

                    <p class="intro">
                        Skimming is a fast reading technique used to obtain the general
                        idea of a passage without focusing on every detail.
                    </p>

                    <h3 style="margin-bottom:15px; color:#D9CBB0;">Main Purposes of Skimming</h3>

                    <ul>
                        <li>Understand the overall topic of the text.</li>
                        <li>Identify the main idea of each paragraph.</li>
                        <li>Recognize how information is organized.</li>
                        <li>Build a quick understanding before reading questions.</li>
                    </ul>

                    <h3 style="margin-bottom:15px; margin-top:25px; color:#D9CBB0;">Skimming Techniques</h3>

                    <ul>
                        <li>Read the title first to predict the topic.</li>
                        <li>Read the first and last sentence of each paragraph.</li>
                        <li>Pay attention to repeated keywords.</li>
                        <li>Ignore unnecessary details and examples.</li>
                        <li>Make a quick conclusion about the passage.</li>
                    </ul>
                </div>

                <!-- ================= SECTION 3 ================= -->
                <div class="inner-section">
                    <h2>3. What is Scanning?</h2>

                    <p class="intro">
                        Scanning is a reading technique used to locate specific
                        information such as names, dates, numbers, facts, and keywords.
                    </p>

                    <h3 style="margin-bottom:15px; color:#D9CBB0;">Main Purposes of Scanning</h3>

                    <ul>
                        <li>Find specific information quickly.</li>
                        <li>Locate names, dates, and numbers.</li>
                        <li>Answer detail questions efficiently.</li>
                        <li>Save time during reading tests.</li>
                        <li>Focus only on required information.</li>
                    </ul>

                    <h3 style="margin-bottom:15px; margin-top:25px; color:#D9CBB0;">How to Use Scanning (5-Step Formula)</h3>

                    <ul>
                        <li>Read the question first.</li>
                        <li>Identify the keyword.</li>
                        <li>Do not read the whole text.</li>
                        <li>Find the keyword and read nearby sentences carefully.</li>
                        <li>Take the exact answer from the text.</li>
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

                <!-- ================= SKIMMING EXAMPLE ================= -->
                <div class="example-showcase-card">
                    <h3>Skimming Example</h3>

                    <div class="sentence-box">
                        <strong>Using the Internet Wisely</strong><br><br>
                        Many students enjoy using the internet to study and search
                        for information. They can watch educational videos, read
                        online articles, and join virtual classes. However,
                        students should also manage their time wisely so they do not
                        spend too much time playing games or using social media.
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Main Idea</div>
                            <div class="box-value">Internet for Learning</div>
                            <div class="box-desc">Students use the internet as a learning tool.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Topic</div>
                            <div class="box-value">Internet Usage</div>
                            <div class="box-desc">The passage discusses educational use of the internet.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Conclusion</div>
                            <div class="box-value">Use It Wisely</div>
                            <div class="box-desc">Students should avoid spending too much time on games and social media.</div>
                        </div>
                    </div>
                </div>

                <!-- ================= SCANNING EXAMPLE ================= -->
                <div class="example-showcase-card">
                    <h3>Scanning Example</h3>

                    <div class="sentence-box">
                        <strong>Improving Study Concentration</strong><br><br>
                        Many students find it difficult to concentrate while studying.
                        They often use their phones or get distracted by social media.
                        As a result, they cannot complete their tasks effectively.<br><br>
                        To overcome this problem, students can study in a quiet
                        environment. They can also set a specific time for studying
                        and <span class="hl-answer">avoid</span> using their
                        <span class="hl-answer">phones</span>.
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Keyword</div>
                            <div class="box-value">Avoid</div>
                            <div class="box-desc">Search for the word connected to the question.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Location</div>
                            <div class="box-value">Last Paragraph</div>
                            <div class="box-desc">The answer appears near the keyword.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Answer</div>
                            <div class="box-value">Using Phones</div>
                            <div class="box-desc">Students should avoid using their phones while studying.</div>
                        </div>
                    </div>
                </div>

                <!-- ================= TIP CARD ================= -->
                <div class="main-card">
                    <h2>📖 TOEFL Reading Strategy Tip</h2>

                    <p class="intro">
                        One of the most common mistakes in TOEFL Reading is reading
                        every word from beginning to end before answering questions.
                        This wastes valuable time.
                    </p>

                    <div class="tip-box">
                        <h4>Correct Strategy</h4>
                        <p>Use <strong>Skimming</strong> first to understand the passage quickly. Then use <strong>Scanning</strong> to locate specific details required by the questions.</p>
                    </div>

                    <div class="tip-box" style="margin-top:20px;">
                        <h4>Wrong Strategy</h4>
                        <p>Reading every sentence carefully before looking at the questions often causes time management problems during the TOEFL test.</p>
                    </div>
                </div>

            </div>

            <!-- ================= QUIZ SECTION ================= -->
            <div id="quiz-section" class="quiz-section">

                <div class="practice-header-card">TOEFL Reading Practice</div>

                <div class="quiz-body">

                    <!-- PASSAGE -->
                    <div style="background:#F4EFE3; padding:25px; border-radius:15px; margin-bottom:35px; line-height:1.8; font-size:1.1rem;">
                        <strong>The Evolution of Digital Classrooms</strong><br><br>
                        Online learning platforms have fundamentally transformed
                        modern education systems by making materials accessible
                        from anywhere in the world.
                        Teachers can easily distribute digital resources,
                        track student milestones, and conduct synchronous
                        virtual discussions.
                        However, an unexpected consequence of this shift is
                        the rising rate of student digital fatigue, caused by
                        extended hours staring at screens.<br><br>
                        To alleviate this issue, educational experts recommend
                        implementing brief intervals of physical movement
                        during study blocks.
                        Furthermore, institutions are urged to promote
                        blended learning modules, which harmoniously combine
                        traditional offline textbooks with digital components.
                        By utilizing these integrated strategies, schools
                        can enhance student wellness while sustaining
                        top-tier academic progress.
                    </div>

                    <!-- Q1 -->
                    <div class="question-wrapper" data-step="1" style="display:block;">
                        <div class="quiz-progress">1 / 4</div>
                        <p class="question-text">According to the passage, what causes digital fatigue among students?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Difficult assignments</li>
                            <li class="option-item" data-correct="true">B. Extended hours staring at screens</li>
                            <li class="option-item" data-correct="false">C. Internet connection problems</li>
                            <li class="option-item" data-correct="false">D. Expensive devices</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Scanning Question</div>
                            <p>The passage explicitly states that digital fatigue is caused by extended hours staring at screens.</p>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="question-wrapper" data-step="2" style="display:none;">
                        <div class="quiz-progress">2 / 4</div>
                        <p class="question-text">Which component is mentioned in blended learning modules?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Virtual Reality</li>
                            <li class="option-item" data-correct="true">B. Traditional textbooks</li>
                            <li class="option-item" data-correct="false">C. Night classes</li>
                            <li class="option-item" data-correct="false">D. Mobile games</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Scanning Question</div>
                            <p>The passage directly mentions traditional offline textbooks.</p>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="question-wrapper" data-step="3" style="display:none;">
                        <div class="quiz-progress">3 / 4</div>
                        <p class="question-text">What is the main idea of the passage?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Technical specifications of online learning</li>
                            <li class="option-item" data-correct="false">B. Textbooks are better than technology</li>
                            <li class="option-item" data-correct="true">C. Benefits, drawbacks, and solutions of digital classrooms</li>
                            <li class="option-item" data-correct="false">D. Computer maintenance costs</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Skimming Question</div>
                            <p>This question asks for the overall idea of the passage, not a specific detail.</p>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="question-wrapper" data-step="4" style="display:none;">
                        <div class="quiz-progress">4 / 4</div>
                        <p class="question-text">What solution do experts recommend to reduce digital fatigue?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Remove online learning</li>
                            <li class="option-item" data-correct="true">B. Physical movement during study blocks</li>
                            <li class="option-item" data-correct="false">C. Replace teachers with AI</li>
                            <li class="option-item" data-correct="false">D. More examinations</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">Scanning Question</div>
                            <p>The passage clearly states that physical movement intervals can help alleviate digital fatigue.</p>
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
                <h3>👁️ Skimming</h3>
                <div class="formula-box">Title → First & Last Sentence → Main Idea</div>
            </div>

            <div class="pattern-card">
                <h3>🔍 Scanning</h3>
                <div class="formula-box">Question → Keyword → Locate → Answer</div>
            </div>

            <div class="pattern-card">
                <h3>🎯 TOEFL Goal</h3>
                <div class="formula-box">Skim First, Then Scan for Details</div>
            </div>

             <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/mbsAtyoNIpU?si=qan3kjQTyHM_r1I7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

            if (currentStep <= 4) {
                document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'block';
                this.style.display = 'none';
            } else {
                alert("🎉 Congratulations! You have completed the Reading Strategies Practice.");
                location.reload();
            }
        });
    </script>

</body>
</html>