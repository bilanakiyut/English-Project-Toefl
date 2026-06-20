<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stated Detail Information - English Learning Journey</title>
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

        .inner-section {
            padding-right: 15px;
            margin-bottom: 35px;
            padding-bottom: 35px;
            border-bottom: 1px solid rgba(255,253,249,0.1);
        }

        .inner-section:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .main-card-scroll h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.9rem;
            font-weight: 600;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255,253,249,0.15);
            padding-bottom: 15px;
        }

        .main-card-scroll p {
            font-size: 1.15rem;
            line-height: 1.55;
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .connectors-group-flex {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }

        .group-box {
            background-color: rgba(255,255,255,0.04);
            border-radius: 12px;
            padding: 22px;
            border-left: 3px solid rgba(255,253,249,0.2);
        }

        .group-box h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
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
        }

        .tip-box {
            background-color: var(--maroon-light);
            border-radius: 12px;
            padding: 22px 25px;
            margin-top: 25px;
            border: 1px solid rgba(255,253,249,0.1);
        }

        .tip-box h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.15rem;
            margin-bottom: 8px;
            color: #FFFDF9;
        }

        .tip-box p {
            font-size: 1.05rem;
            opacity: 0.85;
            line-height: 1.5;
            color: var(--text-light);
        }

        .main-card ul,
        .main-card-scroll ul {
            list-style: none;
            padding-left: 0;
        }

        .main-card ul li,
        .main-card-scroll ul li {
            font-size: 1.1rem;
            line-height: 1.7;
            opacity: 0.9;
            padding: 10px 0 10px 32px;
            position: relative;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .main-card ul li::before,
        .main-card-scroll ul li::before {
            content: "›";
            position: absolute;
            left: 6px;
            color: var(--gold-card);
            font-weight: 800;
            font-size: 1.3rem;
        }

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

        .btn-example {
            background-color: var(--gold-card);
            color: var(--text-light);
        }

        .btn-exercise {
            background-color: var(--maroon-dark);
            color: var(--text-light);
            border: 1px solid rgba(255,253,249,0.2);
        }

        .btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .btn-active-state {
            box-shadow: inset 0 0 10px rgba(0,0,0,0.3);
            opacity: 0.85;
        }

        .examples-display-section {
            display: none;
            flex-direction: column;
            gap: 25px;
            animation: fadeIn 0.4s ease forwards;
        }

        .example-showcase-card {
            background-color: #ffffff;
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
            font-size: 1.15rem;
            color: #333;
            margin-bottom: 25px;
            line-height: 1.7;
        }

        .sentence-box strong {
            color: #430c17;
        }

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
            background-color: #F8F6F2;
        }

        .keyword-box {
            border-left-color: #877048;
            background-color: #F4EFE3;
        }

        .location-box {
            border-left-color: #9E8559;
            background-color: #F5EEF0;
        }

        .answer-box {
            border-left-color: #4A121A;
            background-color: #FBEFEF;
        }

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
            color: #111;
            border-bottom: 1px solid rgba(0,0,0,0.08);
            padding-bottom: 6px;
            margin-bottom: 6px;
        }

        .box-desc {
            font-size: 0.95rem;
            line-height: 1.4;
            color: #555;
        }

        .quiz-section {
            display: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
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
            transition: all 0.2s;
            font-family: 'Cormorant Garamond', serif;
            line-height: 1.4;
        }

        .option-item:hover {
            background-color: #fcfbfa;
            border-color: var(--gold-card);
        }

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

        .quiz-footer {
            display: flex;
            justify-content: flex-end;
        }

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
            box-shadow: 0 10px 25px rgba(158,134,89,0.1);
        }

        .pattern-card h3 {
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
        <h1>Stated Detail Information</h1>
        <p>Learn how to find answers that are directly stated in a reading passage.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <div class="main-card-scroll">

                <div class="inner-section">
                    <h2>1. Understanding Stated Detail Information</h2>

                    <p class="intro">
                        Stated Detail Information questions are common in TOEFL Reading tests.
                        These questions ask you to find specific facts or details that are directly
                        mentioned in the passage.
                    </p>

                    <div class="connectors-group-flex">

                        <div class="group-box">
                            <h3>Stated Detail Skills</h3>
                            <p class="desc">Finding facts that are clearly written in the passage.</p>
                            <div class="badge-container">
                                <div class="badge-item">Facts</div>
                                <div class="badge-item">Details</div>
                                <div class="badge-item">Keywords</div>
                                <div class="badge-item">Scanning</div>
                            </div>
                        </div>

                        <div class="group-box">
                            <h3>Question Clues</h3>
                            <p class="desc">Recognizing question patterns that ask for direct information.</p>
                            <div class="badge-container">
                                <div class="badge-item">Who</div>
                                <div class="badge-item">When</div>
                                <div class="badge-item">Where</div>
                                <div class="badge-item">What</div>
                            </div>
                        </div>

                    </div>

                    <div class="tip-box">
                        <h4>⚠️ TOEFL Stated Detail Tip</h4>
                        <p>
                            Do not guess based on outside knowledge. The correct answer must be supported
                            directly by information in the passage.
                        </p>
                    </div>
                </div>

                <div class="inner-section">
                    <h2>2. What are Stated Detail Information Questions?</h2>

                    <p class="intro">
                        Stated Detail Information questions ask about information that appears directly
                        in the text. The answer may use the same words from the passage or a paraphrased form.
                    </p>

                    <h3 style="margin-bottom:15px; color:#D9CBB0;">Purpose of Stated Detail Questions</h3>

                    <ul>
                        <li>Identify directly stated facts in a passage.</li>
                        <li>Locate specific details quickly and accurately.</li>
                        <li>Recognize important names, dates, places, and reasons.</li>
                        <li>Understand information that is clearly written.</li>
                        <li>Avoid answers that are not mentioned in the passage.</li>
                    </ul>
                </div>

                <div class="inner-section">
                    <h2>3. How to Answer Stated Detail Information Questions</h2>

                    <ul>
                        <li>Read the question carefully.</li>
                        <li>Underline or remember the keyword from the question.</li>
                        <li>Scan the passage to find the same keyword or similar meaning.</li>
                        <li>Read the sentence around the keyword.</li>
                        <li>Choose the answer that matches the passage directly.</li>
                    </ul>
                </div>

            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ View Examples</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Practice Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">

                <div class="example-showcase-card">
                    <h3>Stated Detail Information Example 1</h3>

                    <div class="sentence-box">
                        <strong>The Gateway Arch</strong><br><br>
                        The Gateway Arch, standing majestically in St. Louis, Missouri,
                        is the world's tallest man-made monument.
                        Constructed entirely from stainless steel, this iconic 630-foot
                        structure was designed by architect
                        <span class="hl-answer">Eero Saarinen</span>
                        in 1947 to celebrate the westward expansion of the United States.
                        Although construction did not officially begin until 1963 due to
                        structural revisions and funding delays, it was finally completed
                        in October 1965.
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Question Keyword</div>
                            <div class="box-value">Who designed?</div>
                            <div class="box-desc">The question asks about the designer.</div>
                        </div>

                        <div class="analysis-box location-box">
                            <div class="box-label">Passage Location</div>
                            <div class="box-value">Designed by</div>
                            <div class="box-desc">The sentence directly says who designed it.</div>
                        </div>

                        <div class="analysis-box answer-box">
                            <div class="box-label">Correct Answer</div>
                            <div class="box-value">Eero Saarinen</div>
                            <div class="box-desc">The answer is directly stated in the passage.</div>
                        </div>
                    </div>
                </div>

                <div class="example-showcase-card">
                    <h3>Stated Detail Information Example 2</h3>

                    <div class="sentence-box">
                        <strong>The Gateway Arch</strong><br><br>
                        Although construction did not officially begin until 1963 due to
                        structural revisions and funding delays, it was finally
                        <span class="hl-answer">completed in October 1965</span>.
                        Today, the monument welcomes over four million visitors annually.
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Question Keyword</div>
                            <div class="box-value">Completed</div>
                            <div class="box-desc">The question asks about the completion year.</div>
                        </div>

                        <div class="analysis-box location-box">
                            <div class="box-label">Passage Location</div>
                            <div class="box-value">October 1965</div>
                            <div class="box-desc">The passage gives the year clearly.</div>
                        </div>

                        <div class="analysis-box answer-box">
                            <div class="box-label">Correct Answer</div>
                            <div class="box-value">1965</div>
                            <div class="box-desc">The construction was completed in 1965.</div>
                        </div>
                    </div>
                </div>

                <div class="main-card">
                    <h2>📚 Stated Detail Strategy Tip</h2>

                    <p class="intro">
                        In Stated Detail Information questions, the correct answer is not hidden.
                        You only need to locate the matching sentence in the passage carefully.
                    </p>

                    <div class="tip-box">
                        <h4>Correct Strategy</h4>
                        <p>Find the keyword in the question, then scan the passage for the same keyword or related idea.</p>
                    </div>

                    <div class="tip-box" style="margin-top:20px;">
                        <h4>Avoid This Mistake</h4>
                        <p>Do not choose an answer just because it sounds logical. Choose only what the passage directly states.</p>
                    </div>
                </div>

            </div>

            <div id="quiz-section" class="quiz-section">

                <div class="practice-header-card">TOEFL Stated Detail Information Practice</div>

                <div class="quiz-body">

                    <div style="background:#F4EFE3; padding:25px; border-radius:15px; margin-bottom:35px; line-height:1.8; font-size:1.1rem;">
                        <strong>The Gateway Arch</strong><br><br>

                        The Gateway Arch, standing majestically in St. Louis, Missouri,
                        is the world's tallest man-made monument.

                        Constructed entirely from stainless steel, this iconic 630-foot
                        structure was designed by architect Eero Saarinen in 1947 to celebrate
                        the westward expansion of the United States.

                        Although construction did not officially begin until 1963 due to
                        structural revisions and funding delays, it was finally completed
                        in October 1965.
                        <br><br>

                        Today, the monument welcomes over four million visitors annually.
                        Tourists can ride a unique tram system to the top observation deck
                        to view the city.

                        However, visitors are not permitted to bring large backpacks or
                        outside food into the historical monument for safety optimization.
                    </div>

                    <div class="question-wrapper" data-step="1" style="display:block;">
                        <div class="quiz-progress">1 / 5</div>
                        <p class="question-text">According to the passage, where is the Gateway Arch located?</p>

                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Chicago, Illinois</li>
                            <li class="option-item" data-correct="true">B. St. Louis, Missouri</li>
                            <li class="option-item" data-correct="false">C. Dallas, Texas</li>
                            <li class="option-item" data-correct="false">D. Denver, Colorado</li>
                        </ul>

                        <div class="explanation-card">
                            <div class="explanation-title">Explanation</div>
                            <p>The passage states that the Gateway Arch stands in St. Louis, Missouri.</p>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="2" style="display:none;">
                        <div class="quiz-progress">2 / 5</div>
                        <p class="question-text">What material was used to construct the Gateway Arch?</p>

                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Concrete</li>
                            <li class="option-item" data-correct="false">B. Aluminum</li>
                            <li class="option-item" data-correct="true">C. Stainless Steel</li>
                            <li class="option-item" data-correct="false">D. Iron</li>
                        </ul>

                        <div class="explanation-card">
                            <div class="explanation-title">Explanation</div>
                            <p>The passage directly states that the Gateway Arch was constructed entirely from stainless steel.</p>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="3" style="display:none;">
                        <div class="quiz-progress">3 / 5</div>
                        <p class="question-text">Why was the Gateway Arch designed?</p>

                        <ul class="options-grid">
                            <li class="option-item" data-correct="true">A. To celebrate the westward expansion of the United States</li>
                            <li class="option-item" data-correct="false">B. To honor Eero Saarinen</li>
                            <li class="option-item" data-correct="false">C. To attract tourists from other countries</li>
                            <li class="option-item" data-correct="false">D. To serve as a government building</li>
                        </ul>

                        <div class="explanation-card">
                            <div class="explanation-title">Explanation</div>
                            <p>The passage says the structure was designed to celebrate the westward expansion of the United States.</p>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="4" style="display:none;">
                        <div class="quiz-progress">4 / 5</div>
                        <p class="question-text">Approximately how many visitors does the Gateway Arch welcome each year?</p>

                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. One million visitors</li>
                            <li class="option-item" data-correct="false">B. Two million visitors</li>
                            <li class="option-item" data-correct="true">C. Over four million visitors</li>
                            <li class="option-item" data-correct="false">D. Ten million visitors</li>
                        </ul>

                        <div class="explanation-card">
                            <div class="explanation-title">Explanation</div>
                            <p>The passage states that the monument welcomes over four million visitors annually.</p>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="5" style="display:none;">
                        <div class="quiz-progress">5 / 5</div>
                        <p class="question-text">Which item are visitors NOT allowed to bring into the monument?</p>

                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Cameras</li>
                            <li class="option-item" data-correct="false">B. Smartphones</li>
                            <li class="option-item" data-correct="false">C. Water bottles</li>
                            <li class="option-item" data-correct="true">D. Large backpacks</li>
                        </ul>

                        <div class="explanation-card">
                            <div class="explanation-title">Explanation</div>
                            <p>The passage says visitors are not permitted to bring large backpacks or outside food into the monument.</p>
                        </div>
                    </div>

                    <div class="quiz-footer">
                        <button id="btn-next-question" class="btn-next" style="display:none;">Next Question</button>
                    </div>

                </div>
            </div>

        </div>

        <div class="materi-right-sticky">

            <div class="pattern-card">
                <h3>📖 Stated Detail</h3>
                <div class="formula-box">Question → Keyword → Exact Detail</div>
            </div>

            <div class="pattern-card">
                <h3>🔍 Strategy</h3>
                <div class="formula-box">Scan → Locate → Verify</div>
            </div>

            <div class="pattern-card">
                <h3>🎯 TOEFL Goal</h3>
                <div class="formula-box">Identify Directly Stated Information</div>
            </div>

             <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/jNsHHax9L7g?si=aWVJ6ubSYJ_IBDwH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                alert("🎉 Congratulations! You have completed the Stated Detail Information Practice.");
                location.reload();
            }
        });
    </script>

</body>
</html>