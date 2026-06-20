<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>References Questions - English Learning Journey</title>
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

        .main-card-scroll p.intro {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
            opacity: 0.95;
        }

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
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #FFFDF9;
        }

        .group-box .desc {
            font-size: 1rem;
            opacity: 0.8;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .badge-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .badge-item {
            background-color: var(--gold-card);
            color: var(--text-light);
            padding: 5px 14px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

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

        /* Pattern table for pronoun reference words */
        .pronoun-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 1rem;
        }

        .pronoun-table th {
            background-color: rgba(255,255,255,0.08);
            padding: 10px 14px;
            text-align: left;
            font-family: 'Playfair Display', serif;
            font-size: 1.05rem;
            border-bottom: 1px solid rgba(255,255,255,0.12);
        }

        .pronoun-table td {
            padding: 10px 14px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            opacity: 0.85;
        }

        .pronoun-table tr:last-child td { border-bottom: none; }

        .pronoun-table .pronoun-word {
            background-color: var(--gold-card);
            color: white;
            padding: 2px 10px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 0.95rem;
            display: inline-block;
            margin: 2px 3px;
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

        .btn-exercise { background-color: var(--maroon-dark); color: var(--text-light); border: 1px solid rgba(255,253,249,0.2); }
        .btn-example { background-color: var(--gold-card); color: var(--text-light); }
        .btn:hover { transform: translateY(-2px); opacity: 0.9; }
        .btn-active-state { box-shadow: inset 0 0 10px rgba(0,0,0,0.3); opacity: 0.85; }
        .btn-exercise.btn-active-state { background-color: #631b25 !important; }
        .btn-example.btn-active-state { background-color: #7a6640 !important; }

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

        .hl-keyword { background: #566573; color: white; padding: 2px 8px; border-radius: 4px; }
        .hl-location { background: #78281F; color: white; padding: 2px 8px; border-radius: 4px; }
        .hl-answer { background: #877148; color: white; padding: 2px 8px; border-radius: 4px; }

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

        .passage-box {
            background: #F4EFE3;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 35px;
            line-height: 1.8;
            font-size: 1.1rem;
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

        .explanation-card p { font-size: 1.05rem; line-height: 1.6; }

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
            line-height: 1.5;
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
}    </style>
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
        <h1>References Questions</h1>
        <p>Learn how to identify what pronouns and reference words stand for in a passage.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <div class="main-card-scroll">

                <!-- SECTION 1 -->
                <div class="inner-section">
                    <h2>1. Understanding References Questions</h2>

                    <p class="intro">
                        Reference questions ask one simple thing:
                        <strong>"What does this word refer to?"</strong>
                        A pronoun like <em>they</em>, <em>it</em>, or <em>this</em> always
                        replaces a noun mentioned earlier — your job is to find that noun.
                    </p>

                    <div class="connectors-group-flex">
                        <div class="group-box">
                            <h3>Focus Area</h3>
                            <p class="desc">You do NOT need to understand the full passage. Just focus on the sentences around the highlighted word.</p>
                        </div>
                        <div class="group-box">
                            <h3>Golden Rule</h3>
                            <p class="desc">The answer is almost always found in the sentence <strong>right before</strong> the highlighted word. Never jump too far.</p>
                        </div>
                    </div>

                    <div class="tip-box">
                        <h4>⚠️ TOEFL References Tip</h4>
                        <p>Always substitute your answer back into the sentence. If it reads naturally and makes sense, that is your answer.</p>
                    </div>
                </div>

                <!-- SECTION 2 -->
                <div class="inner-section">
                    <h2>2. How to Recognize a References Question</h2>

                    <p class="intro">
                        References questions are easy to spot because they always follow
                        the same pattern. Look for these signals:
                    </p>

                    <ul>
                        <li>"The word <strong>[X]</strong> in the passage refers to …"</li>
                        <li>"In paragraph 2, the word <strong>'they'</strong> refers to …"</li>
                        <li>"The phrase <strong>'the former'</strong> in line 5 refers to …"</li>
                        <li>"What does <strong>'it'</strong> refer to in the passage?"</li>
                    </ul>
                </div>

                <!-- SECTION 3 -->
                <div class="inner-section">
                    <h2>3. Common Reference Words</h2>

                    <p class="intro">
                        These are the words most commonly tested in References Questions.
                        When you see any of them highlighted in a TOEFL passage, find the noun it replaces.
                    </p>

                    <div class="connectors-group-flex">
                        <div class="group-box">
                            <h3>Subject Pronouns</h3>
                            <p class="desc">Replace the subject of a sentence.</p>
                            <div class="badge-container">
                                <div class="badge-item">he</div>
                                <div class="badge-item">she</div>
                                <div class="badge-item">it</div>
                                <div class="badge-item">they</div>
                                <div class="badge-item">we</div>
                            </div>
                        </div>
                        <div class="group-box">
                            <h3>Object Pronouns</h3>
                            <p class="desc">Replace the object of a verb or preposition.</p>
                            <div class="badge-container">
                                <div class="badge-item">him</div>
                                <div class="badge-item">her</div>
                                <div class="badge-item">it</div>
                                <div class="badge-item">them</div>
                                <div class="badge-item">us</div>
                            </div>
                        </div>
                        <div class="group-box">
                            <h3>Possessive Adjectives</h3>
                            <p class="desc">Show ownership — point back to a noun.</p>
                            <div class="badge-container">
                                <div class="badge-item">his</div>
                                <div class="badge-item">her</div>
                                <div class="badge-item">its</div>
                                <div class="badge-item">their</div>
                                <div class="badge-item">our</div>
                            </div>
                        </div>
                        <div class="group-box">
                            <h3>Other Reference Words</h3>
                            <p class="desc">Common in TOEFL formal texts.</p>
                            <div class="badge-container">
                                <div class="badge-item">the former</div>
                                <div class="badge-item">the latter</div>
                                <div class="badge-item">one</div>
                                <div class="badge-item">another</div>
                                <div class="badge-item">which</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 4 -->
                <div class="inner-section">
                    <h2>4. Step-by-Step Strategy</h2>

                    <ul>
                        <li>Find the highlighted word in the passage.</li>
                        <li>Read that sentence and the one before it.</li>
                        <li>Ask: "Who or what is being talked about just before this word?"</li>
                        <li>Substitute your answer back into the sentence.</li>
                        <li>If it reads naturally, that is your answer.</li>
                    </ul>

                    <div class="tip-box">
                        <h4>💡 Remember: the former / the latter</h4>
                        <p><strong>The former</strong> = the first item mentioned. <strong>The latter</strong> = the second item mentioned.<br>Example: "Edison and Tesla were inventors. <em>The former</em> was more famous." → The former = Edison.</p>
                    </div>
                </div>

            </div>

            <!-- ACTION BUTTONS -->
            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ View Examples</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Practice Exercise</button>
            </div>

            <!-- EXAMPLES SECTION -->
            <div id="examples-display-section" class="examples-display-section">

                <!-- EXAMPLE 1 -->
                <div class="example-showcase-card">
                    <h3>References Example 1 — Subject Pronoun</h3>

                    <div class="sentence-box">
                        <span class="hl-location">Dolphins</span> are highly intelligent.
                        <span class="hl-keyword">They</span> have been observed using tools
                        and teaching skills to their young.
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Reference Word</div>
                            <div class="box-value">"They"</div>
                            <div class="box-desc">Subject pronoun — needs a noun antecedent.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Look Before</div>
                            <div class="box-value">Previous Sentence</div>
                            <div class="box-desc">The sentence before mentions "Dolphins".</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Answer</div>
                            <div class="box-value">Dolphins</div>
                            <div class="box-desc">"Dolphins have been observed…" reads naturally. ✓</div>
                        </div>
                    </div>
                </div>

                <!-- EXAMPLE 2 -->
                <div class="example-showcase-card">
                    <h3>References Example 2 — The Former / The Latter</h3>

                    <div class="sentence-box">
                        <span class="hl-location">Thomas Edison</span> and
                        <span class="hl-keyword">Nikola Tesla</span> were both brilliant inventors.
                        However, <span class="hl-answer">the former</span> became far more
                        famous during his lifetime.
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Reference Word</div>
                            <div class="box-value">"The Former"</div>
                            <div class="box-desc">Refers to the first of two people mentioned.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Order Listed</div>
                            <div class="box-value">Edison → Tesla</div>
                            <div class="box-desc">Edison is listed first, Tesla second.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Answer</div>
                            <div class="box-value">Thomas Edison</div>
                            <div class="box-desc">The former = first mentioned = Edison. ✓</div>
                        </div>
                    </div>
                </div>

                <!-- TIP CARD -->
                <div class="main-card">
                    <h2>🔗 References Strategy Tip</h2>

                    <p class="intro">
                        References questions are among the most straightforward in TOEFL
                        Reading — if you follow the substitution rule consistently.
                    </p>

                    <div class="tip-box">
                        <h4>Correct Strategy</h4>
                        <p>Go back to the sentence before the highlighted word, find the noun it replaces, and test it by substituting it back in. If the sentence sounds correct, you have your answer.</p>
                    </div>

                    <div class="tip-box" style="margin-top:20px;">
                        <h4>Avoid This Mistake</h4>
                        <p>Do not choose a noun just because it appears near the highlighted word. Always check if the substitution makes logical and grammatical sense.</p>
                    </div>
                </div>

            </div>

            <!-- QUIZ SECTION -->
            <div id="quiz-section" class="quiz-section">

                <div class="practice-header-card">TOEFL References Practice</div>

                <div class="quiz-body">

                    <!-- Q1 -->
                    <div class="question-wrapper" data-step="1" style="display:block;">
                        <div class="quiz-progress">1 / 5</div>
                        <div class="passage-box">
                            Dolphins are highly intelligent. <strong>They</strong> have been observed using tools and teaching skills to their young.
                        </div>
                        <p class="question-text">What does "they" refer to?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Skills</li>
                            <li class="option-item" data-correct="false">B. Young</li>
                            <li class="option-item" data-correct="true">C. Dolphins</li>
                            <li class="option-item" data-correct="false">D. Tools</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">References Explanation</div>
                            <p>"They" is a subject pronoun. The sentence before introduces "Dolphins" as the subject. Substituting: "Dolphins have been observed using tools…" reads naturally. ✓</p>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="question-wrapper" data-step="2" style="display:none;">
                        <div class="quiz-progress">2 / 5</div>
                        <div class="passage-box">
                            The Amazon rainforest is home to millions of species. Many of <strong>them</strong> have not yet been discovered.
                        </div>
                        <p class="question-text">What does "them" refer to?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Rainforests</li>
                            <li class="option-item" data-correct="true">B. Species</li>
                            <li class="option-item" data-correct="false">C. Millions</li>
                            <li class="option-item" data-correct="false">D. Discoveries</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">References Explanation</div>
                            <p>"Them" replaces "species" from the previous sentence. "Many of the species have not yet been discovered" makes perfect sense. ✓</p>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="question-wrapper" data-step="3" style="display:none;">
                        <div class="quiz-progress">3 / 5</div>
                        <div class="passage-box">
                            Thomas Edison and Nikola Tesla were both brilliant inventors. However, <strong>the former</strong> became far more famous during his lifetime.
                        </div>
                        <p class="question-text">What does "the former" refer to?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Nikola Tesla</li>
                            <li class="option-item" data-correct="false">B. Inventors</li>
                            <li class="option-item" data-correct="true">C. Thomas Edison</li>
                            <li class="option-item" data-correct="false">D. Lifetime</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">References Explanation</div>
                            <p>"The former" refers to the <strong>first</strong> of two people mentioned. Edison is listed first, Tesla second. Therefore, the former = Thomas Edison. ✓</p>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="question-wrapper" data-step="4" style="display:none;">
                        <div class="quiz-progress">4 / 5</div>
                        <div class="passage-box">
                            The Wright Brothers, Orville and Wilbur, dedicated most of their lives to the dream of human flight. They built and tested many aircraft designs before finally succeeding. On December 17, 1903, in Kitty Hawk, North Carolina, Orville made the first successful powered flight in history. <strong>It</strong> lasted only 12 seconds and covered a distance of 120 feet.
                        </div>
                        <p class="question-text">What does "it" refer to?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. The Wright Brothers</li>
                            <li class="option-item" data-correct="false">B. North Carolina</li>
                            <li class="option-item" data-correct="true">C. The first successful powered flight</li>
                            <li class="option-item" data-correct="false">D. Human history</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">References Explanation</div>
                            <p>The sentence before says "Orville made the first successful powered flight." Substituting: "The first successful powered flight lasted only 12 seconds" is perfectly natural. ✓</p>
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="question-wrapper" data-step="5" style="display:none;">
                        <div class="quiz-progress">5 / 5</div>
                        <div class="passage-box">
                            Albert Einstein and Isaac Newton are considered two of the greatest scientists in history. Einstein developed the theory of relativity, <strong>which</strong> completely changed how scientists understood space and time.
                        </div>
                        <p class="question-text">What does "which" refer to?</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. Albert Einstein</li>
                            <li class="option-item" data-correct="false">B. Isaac Newton</li>
                            <li class="option-item" data-correct="true">C. The theory of relativity</li>
                            <li class="option-item" data-correct="false">D. Space and time</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title">References Explanation</div>
                            <p>"Which" is a relative pronoun that refers back to the noun directly before it — "the theory of relativity." Substituting: "The theory of relativity completely changed how scientists understood space and time." ✓</p>
                        </div>
                    </div>

                    <div class="quiz-footer">
                        <button id="btn-next-question" class="btn-next" style="display:none;">Next Question</button>
                    </div>

                </div>
            </div>

        </div>

        <!-- RIGHT COLUMN -->
        <div class="materi-right-sticky">

            <div class="pattern-card">
                <h3>🔗 References</h3>
                <div class="formula-box">Word → Sentence Before → Noun It Replaces</div>
            </div>

            <div class="pattern-card">
                <h3>📌 Former / Latter</h3>
                <div class="formula-box">Former = 1st Mentioned
Latter = 2nd Mentioned</div>
            </div>

            <div class="pattern-card">
                <h3>🎯 TOEFL Goal</h3>
                <div class="formula-box">Substitute Back & Verify</div>
            </div>

              <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9St3d2caueM?si=ev2PVAwbQH_9x0lb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
        const totalSteps = 5;

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
            if (currentStep <= totalSteps) {
                document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'block';
                this.style.display = 'none';
            } else {
                alert("🎉 Congratulations! You have completed the References Questions Practice.");
                location.reload();
            }
        });
    </script>

</body>
</html>