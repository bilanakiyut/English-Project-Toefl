<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listening to Short Conversations - English Learning Journey</title>
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
        <h1>Listening to Short Conversations</h1>
        <p>Part A of TOEFL Listening Comprehension: catching meaning from short two-line conversations.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <div class="main-card-scroll">

            <div class="inner-section">
                <h2>1. Listening Comprehension Overview</h2>

                <p class="intro">
                    Listening Comprehension is the first section of the TOEFL ITP test.
                    It consists of 50 questions that require test takers to listen to
                    conversations or talks and answer questions based on the information
                    they hear.
                </p>

                <h3 style="margin-bottom:15px; color:#D9CBB0;">Three Parts of Listening Comprehension</h3>

                <div class="connectors-group-flex">

                    <div class="group-box">
                        <h3>Part A</h3>
                        <p class="desc">Short conversations between two speakers, each followed by one question about stated or implied information.</p>
                        <div class="badge-container">
                            <div class="badge-item">Two Speakers</div>
                            <div class="badge-item">One Question</div>
                        </div>
                    </div>

                    <div class="group-box">
                        <h3>Part B</h3>
                        <p class="desc">Longer, more detailed conversations that require understanding the main idea and important details.</p>
                        <div class="badge-container">
                            <div class="badge-item">Longer Dialogue</div>
                            <div class="badge-item">Main Idea</div>
                        </div>
                    </div>

                </div>

                <div class="group-box" style="margin-bottom:0;">
                    <h3>Part C</h3>
                    <p class="desc">Longer talks or lectures lasting about 2.5 minutes, each followed by several questions.</p>
                    <div class="badge-container">
                        <div class="badge-item">Lectures</div>
                        <div class="badge-item">Multiple Questions</div>
                    </div>
                </div>
            </div>

            <div class="inner-section">
                <h2>2. Part A: Listening to Short Conversations</h2>

                <p class="intro">
                    A short conversation consists of two lines spoken by two different
                    speakers. After the conversation, a question is asked about what was
                    stated or implied.
                </p>

                <h3 style="margin-bottom:15px; color:#D9CBB0;">Strategy 1 &amp; 2: Focus and Restatement</h3>

                <ul>
                    <li><strong style="color:#FFFDF9;">Focus on the Second Speaker</strong> — the correct answer is often found in the second speaker's statement.</li>
                    <li><strong style="color:#FFFDF9;">Look for a Restatement</strong> — the correct answer is usually a paraphrase, not the exact words used in the conversation.</li>
                </ul>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Listening Tip</h4>
                    <p>If you do not understand anything, choose the answer that sounds most different from what you heard, because TOEFL often uses paraphrases.</p>
                </div>
            </div>

            <div class="inner-section">
                <h2>3. Strategy 3: Grammar and Expressions</h2>

                <p class="intro">
                    Pay attention to commonly tested grammar structures and expressions.
                    Recognizing these patterns helps you understand what the speakers
                    really mean.
                </p>

                <div class="connectors-group-flex">

                    <div class="group-box">
                        <h3>Grammar Structures</h3>
                        <p class="desc">Patterns frequently tested in conversations.</p>
                        <div class="badge-container">
                            <div class="badge-item">Passive Voice</div>
                            <div class="badge-item">Negative Statements</div>
                            <div class="badge-item">Wishes</div>
                            <div class="badge-item">Conditionals</div>
                        </div>
                    </div>

                    <div class="group-box">
                        <h3>Functional Expressions</h3>
                        <p class="desc">Common ways speakers express attitudes.</p>
                        <div class="badge-container">
                            <div class="badge-item">Agreement</div>
                            <div class="badge-item">Uncertainty</div>
                            <div class="badge-item">Suggestions</div>
                            <div class="badge-item">Surprise</div>
                        </div>
                    </div>

                </div>

                <div class="group-box" style="margin-bottom:0;">
                    <h3>Idiomatic Expressions</h3>
                    <p class="desc">Expressions whose meaning is not literal.</p>
                    <div class="badge-container">
                        <div class="badge-item">Phrasal Verbs</div>
                        <div class="badge-item">Three-Word Phrasal Verbs</div>
                        <div class="badge-item">Idioms</div>
                    </div>
                </div>
            </div>

            <div class="inner-section">
                <h2>4. Strategies 4–7: Test-Taking Habits</h2>

                <ul>
                    <li><strong style="color:#FFFDF9;">Answer from Easiest to Hardest</strong> — questions are generally arranged from easier to more difficult.</li>
                    <li><strong style="color:#FFFDF9;">Never Leave Any Answer Blank</strong> — always choose an answer, even if you are unsure.</li>
                    <li><strong style="color:#FFFDF9;">Focus on Keywords and Main Ideas</strong> — even without full understanding, keywords can lead you to the correct answer.</li>
                    <li><strong style="color:#FFFDF9;">Be Ready for the Next Question</strong> — there are only about 12 seconds between questions.</li>
                </ul>

                <div class="tip-box">
                    <h4>⏱️ Time Management</h4>
                    <p>Use the short 12-second gap wisely: mark your answer immediately, then prepare to read the next question's options.</p>
                </div>
            </div>

            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ View Examples</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Practice Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">

                <div class="example-showcase-card">
                    <h3>Conversation Example</h3>

                    <div class="sentence-box">
                        <strong>Conversation:</strong><br><br>
                        <strong>Man:</strong> I heard the library closes earlier on weekends now.<br>
                        <strong>Woman:</strong> Yes, it <span class="hl-keyword">shuts at 6 PM</span> instead of 9 PM starting this month.<br><br>
                        <strong>Question:</strong> What does the woman say about the library?
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Focus</div>
                            <div class="box-value">Second Speaker</div>
                            <div class="box-desc">The woman's line contains the key information needed to answer.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Keyword</div>
                            <div class="box-value">Shuts at 6 PM</div>
                            <div class="box-desc">The exact words heard in the conversation.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Paraphrase</div>
                            <div class="box-value">Closes Earlier</div>
                            <div class="box-desc">The correct answer choice restates "shuts at 6 PM" as "closes earlier than before."</div>
                        </div>
                    </div>
                </div>

                <div class="example-showcase-card">
                    <h3>Identifying Expressions</h3>

                    <div class="sentence-box">
                        <strong>Conversation:</strong><br><br>
                        <strong>Woman:</strong> Don't you think we should call the technician about the printer?<br>
                        <strong>Man:</strong> <span class="hl-keyword">That's a good idea</span> — I'll do it right now.<br><br>
                        <strong>Question:</strong> What does the man mean?
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Expression Type</div>
                            <div class="box-value">Agreement</div>
                            <div class="box-desc">"That's a good idea" is a functional expression showing agreement.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Function</div>
                            <div class="box-value">Suggestion Accepted</div>
                            <div class="box-desc">The woman's question is actually a suggestion.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Meaning</div>
                            <div class="box-value">He Agrees To Call</div>
                            <div class="box-desc">The man agrees with the suggestion and will act on it.</div>
                        </div>
                    </div>
                </div>

                <div class="main-card">
                    <h2>💡 Part A Strategy Summary</h2>

                    <p class="intro">
                        Short Conversation questions test how well you can catch the
                        second speaker's meaning, recognize paraphrases, and identify
                        grammar and expressions.
                    </p>

                    <div class="tip-box">
                        <h4>Correct Strategy</h4>
                        <p>Listen carefully to the second speaker, expect the answer to be a paraphrase, and watch for grammar or idiomatic clues.</p>
                    </div>

                    <div class="tip-box" style="margin-top:20px;">
                        <h4>Avoid This Mistake</h4>
                        <p>Do not choose an answer simply because it repeats the exact words you heard — TOEFL usually paraphrases the correct answer.</p>
                    </div>
                </div>

            </div>

            <div id="quiz-section" class="quiz-section">

<div class="practice-header-card">
    TOEFL Short Conversation Practice
</div>

<div class="quiz-body">

    <div style="background:#F4EFE3; padding:25px; border-radius:15px; margin-bottom:35px; line-height:1.8; font-size:1.1rem;">
        
        Read each short conversation and choose the best answer to the question that follows.
    </div>

    <div id="quiz-container"></div>

    <div class="quiz-footer">
        <button id="btn-next-question"
                class="btn-next"
                style="display:none;">
            Next Question
        </button>
    </div>


</div>

            </div>

        </div>

        <div class="materi-right-sticky">

            <div class="pattern-card">
                <h3>🎧 Part A Focus</h3>
                <div class="formula-box">Second Speaker → Paraphrase → Answer</div>
            </div>

            <div class="pattern-card">
                <h3>📐 Grammar &amp; Expressions</h3>
                <div class="formula-box">Structure + Expression = Meaning</div>
            </div>

            <div class="pattern-card">
                <h3>🎯 TOEFL Goal</h3>
                <div class="formula-box">Catch Meaning in 12 Seconds</div>
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

    const examplesSection = document.getElementById('examples-display-section');
    const quizSection = document.getElementById('quiz-section');

    const quizContainer = document.getElementById('quiz-container');
    const nextButton = document.getElementById('btn-next-question');

    let currentStep = 1;
    let totalQuestions = 0;
    let currentAudio = null;



    /*
    |--------------------------------------------------------------------------
    | TOGGLE SECTION
    |--------------------------------------------------------------------------
    */

    btnExamples.addEventListener('click', () => {

        quizSection.style.display = 'none';
        btnExercise.classList.remove('btn-active-state');

        const isVisible = examplesSection.style.display === 'flex';

        examplesSection.style.display = isVisible ? 'none' : 'flex';

        btnExamples.classList.toggle('btn-active-state');

        if (!isVisible) {
            examplesSection.scrollIntoView({
                behavior: 'smooth'
            });
        }

    });


    btnExercise.addEventListener('click', () => {

        examplesSection.style.display = 'none';
        btnExamples.classList.remove('btn-active-state');

        const isVisible = quizSection.style.display === 'block';

        quizSection.style.display = isVisible ? 'none' : 'block';

        btnExercise.classList.toggle('btn-active-state');

        if (!isVisible) {
            quizSection.scrollIntoView({
                behavior: 'smooth'
            });
        }

    });



    /*
    |--------------------------------------------------------------------------
    | FETCH QUIZ DATA
    |--------------------------------------------------------------------------
    */

    async function loadQuiz()
    {
        try {

            const response = await fetch('/data/listening_short.json');

            const questions = await response.json();

            totalQuestions = questions.length;

            renderQuestions(questions);

            initQuiz();

        } catch (error) {

            console.error('Failed to load quiz:', error);

        }
    }



    /*
    |--------------------------------------------------------------------------
    | RENDER QUESTIONS
    |--------------------------------------------------------------------------
    */

    function renderQuestions(questions)
    {
        questions.forEach((question, index) => {

            const step = index + 1;

            const html = `
                <div class="question-wrapper"
                     data-step="${step}"
                     style="${step === 1 ? 'display:block;' : 'display:none;'}">

                    <div class="quiz-progress">
                        ${step} / ${questions.length}
                    </div>

                    <div class="audio-box" style="margin-bottom:25px;">
                        <button class="btn-next"
                                onclick="playAudio('${question.audio}')">
                            ▶ Play Audio
                        </button>
                    </div>

                    <ul class="options-grid">

                        ${renderOption('A', question.a, question.correct_answer)}

                        ${renderOption('B', question.b, question.correct_answer)}

                        ${renderOption('C', question.c, question.correct_answer)}

                        ${renderOption('D', question.d, question.correct_answer)}

                    </ul>

                    <div class="explanation-card">

                        <div class="explanation-title">
                            Explanation
                        </div>

                        <p>${question.explanation}</p>

                    </div>

                </div>
            `;

            quizContainer.innerHTML += html;

        });
    }



    /*
    |--------------------------------------------------------------------------
    | RENDER SINGLE OPTION
    |--------------------------------------------------------------------------
    */

    function renderOption(label, text, correctAnswer)
    {
        return `
            <li class="option-item"
                data-correct="${correctAnswer === label}">
                ${label}. ${text}
            </li>
        `;
    }



    /*
    |--------------------------------------------------------------------------
    | INIT QUIZ
    |--------------------------------------------------------------------------
    */

    function initQuiz()
    {
        const options = document.querySelectorAll('.option-item');

        options.forEach(option => {

            option.addEventListener('click', handleAnswer);

        });
    }



    /*
    |--------------------------------------------------------------------------
    | HANDLE ANSWER
    |--------------------------------------------------------------------------
    */

    function handleAnswer()
    {
        const wrapper = this.closest('.question-wrapper');

        if (wrapper.dataset.answered === 'true') {
            return;
        }

        wrapper.dataset.answered = 'true';

        const isCorrect = this.dataset.correct === 'true';

        highlightCorrectAnswer(wrapper);

        if (!isCorrect) {
            highlightWrongAnswer(this);
        }

        showExplanation(wrapper);

        nextButton.style.display = 'inline-block';
    }



    /*
    |--------------------------------------------------------------------------
    | HIGHLIGHT CORRECT ANSWER
    |--------------------------------------------------------------------------
    */

    function highlightCorrectAnswer(wrapper)
    {
        wrapper.querySelectorAll('.option-item').forEach(item => {

            if (item.dataset.correct === 'true') {

                item.style.background = '#E8F8F0';
                item.style.borderColor = '#2ECC71';
                item.style.color = '#27AE60';
                item.style.fontWeight = '600';

            }

        });
    }



    /*
    |--------------------------------------------------------------------------
    | HIGHLIGHT WRONG ANSWER
    |--------------------------------------------------------------------------
    */

    function highlightWrongAnswer(element)
    {
        element.style.background = '#FDEDEC';
        element.style.borderColor = '#E74C3C';
        element.style.color = '#C0392B';
    }



    /*
    |--------------------------------------------------------------------------
    | SHOW EXPLANATION
    |--------------------------------------------------------------------------
    */

    function showExplanation(wrapper)
    {
        wrapper.querySelector('.explanation-card')
               .style.display = 'block';
    }



    /*
    |--------------------------------------------------------------------------
    | NEXT QUESTION
    |--------------------------------------------------------------------------
    */

    nextButton.addEventListener('click', () => {
        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }
        const currentQuestion = document.querySelector(
            `.question-wrapper[data-step="${currentStep}"]`
        );

        currentQuestion.style.display = 'none';

        currentStep++;

        if (currentStep <= totalQuestions) {

            const nextQuestion = document.querySelector(
                `.question-wrapper[data-step="${currentStep}"]`
            );

            nextQuestion.style.display = 'block';

            nextButton.style.display = 'none';

        } else {

            alert('🎉 Congratulations! You completed the quiz.');

            location.reload();

        }

    });



    /*
    |--------------------------------------------------------------------------
    | PLAY AUDIO
    |--------------------------------------------------------------------------
    */

    function playAudio(src)
{
// stop previous audio
if (currentAudio) {

    currentAudio.pause();

    currentAudio.currentTime = 0;
}

// play new audio
currentAudio = new Audio(src);

currentAudio.play();

}


    /*
    |--------------------------------------------------------------------------
    | START QUIZ
    |--------------------------------------------------------------------------
    */

    loadQuiz();

</script>


</body>
</html>