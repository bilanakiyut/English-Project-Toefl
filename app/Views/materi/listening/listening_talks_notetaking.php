<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listening to Talks and Note-Taking - English Learning Journey</title>
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
        <h1>Listening to Talks and Note-Taking</h1>
        <p>Part C of TOEFL Listening Comprehension: following lectures, predicting topics, and taking effective notes.</p>
    </div>

    <div class="materi-wrapper">

        <div class="materi-left-scroll">

            <div class="main-card-scroll">

            <div class="inner-section">
                <h2>1. Part C: Listening to Talks</h2>

                <p class="intro">
                    In Part C, you listen to three talks. Each talk lasts about two
                    and a half minutes and is followed by several multiple-choice
                    questions.
                </p>

                <div class="connectors-group-flex">

                    <div class="group-box">
                        <h3>Format</h3>
                        <p class="desc">Three longer talks or lectures, each about 2.5 minutes long.</p>
                        <div class="badge-container">
                            <div class="badge-item">3 Talks</div>
                            <div class="badge-item">2.5 Minutes Each</div>
                        </div>
                    </div>

                    <div class="group-box">
                        <h3>Questions</h3>
                        <p class="desc">Several multiple-choice questions follow each talk.</p>
                        <div class="badge-container">
                            <div class="badge-item">Multiple Questions</div>
                            <div class="badge-item">Per Talk</div>
                        </div>
                    </div>

                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Part C Tip</h4>
                    <p>Because talks are long, taking brief notes on key points, names, dates, and numbers can help you answer multiple questions accurately.</p>
                </div>
            </div>

            <div class="inner-section">
                <h2>2. Strategies 1–2: Prepare Before Listening</h2>

                <ul>
                    <li><strong style="color:#FFFDF9;">Review the Answer Choices Before Listening</strong> — read the options quickly before the talk begins.</li>
                    <li><strong style="color:#FFFDF9;">Pay Close Attention to the First Sentence</strong> — the first sentence often reveals the main topic.</li>
                </ul>
            </div>

            <div class="inner-section">
                <h2>3. Strategies 3–4: During the Talk</h2>

                <ul>
                    <li><strong style="color:#FFFDF9;">Predict the Context or Situation</strong> — try to predict what the talk will be about.</li>
                    <li><strong style="color:#FFFDF9;">Follow the Answer Choices While Listening</strong> — track the information that matches the answer options.</li>
                </ul>

                <div class="tip-box">
                    <h4>📝 Note-Taking Tip</h4>
                    <p>While following the talk, jot down short keywords for names, numbers, dates, causes, and effects — these are common question targets.</p>
                </div>
            </div>

            <div class="inner-section">
                <h2>4. Strategies 5–6: After the Talk</h2>

                <ul>
                    <li><strong style="color:#FFFDF9;">Make an Educated Guess</strong> — use logical reasoning if you are unsure.</li>
                    <li><strong style="color:#FFFDF9;">Preview the Next Questions</strong> — use any remaining time to prepare for the next set of questions.</li>
                </ul>
            </div>

            <div class="inner-section">
                <h2>5. Predicting Topics and Questions</h2>

                <h3 style="margin-bottom:15px; color:#D9CBB0;">Predicting the Topic</h3>
                <p class="intro">
                    Look for ideas that appear repeatedly in the answer choices.
                </p>

                <div class="sub-section">
                    <h3>Example</h3>
                    <ul>
                        <li>Time management</li>
                        <li>Appointment calendar</li>
                        <li>Personal time-management study</li>
                    </ul>
                </div>

                <div class="tip-box">
                    <h4>Predicted Topic</h4>
                    <p>➡️ Time Management.</p>
                </div>

                <h3 style="margin:25px 0 15px; color:#D9CBB0;">Predicting the Question</h3>
                <p class="intro">
                    The answer choices can also help predict the question type.
                </p>

                <ul>
                    <li><strong style="color:#FFFDF9;">Example 1:</strong> If the choices discuss different topics, the question will probably be "What is the main topic of this talk?"</li>
                    <li><strong style="color:#FFFDF9;">Example 2:</strong> If the choices are time durations, the question will probably be "How long...?"</li>
                </ul>
            </div>

            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ View Examples</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Practice Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">

                <div class="example-showcase-card">
                    <h3>Topic Prediction Example</h3>

                    <div class="sentence-box">
                        <strong>Answer Choices (before listening):</strong><br><br>
                        A. Keeping a daily <span class="hl-keyword">appointment calendar</span><br>
                        B. Tips for better <span class="hl-keyword">time management</span><br>
                        C. Results of a <span class="hl-keyword">personal time-management study</span><br>
                        D. Using alarms to stay on schedule
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Repeated Idea</div>
                            <div class="box-value">Time / Schedule</div>
                            <div class="box-desc">All choices relate to managing time.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Question Clue</div>
                            <div class="box-value">Different Topics</div>
                            <div class="box-desc">Since choices list different ideas, the question likely asks for the main topic.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Predicted Topic</div>
                            <div class="box-value">Time Management</div>
                            <div class="box-desc">The talk is most likely about strategies or research on time management.</div>
                        </div>
                    </div>
                </div>

                <div class="example-showcase-card">
                    <h3>Note-Taking Example</h3>

                    <div class="sentence-box">
                        <strong>Talk Excerpt:</strong><br><br>
                        "Today I want to talk about a study conducted in 2019 involving 200 university students.
                        Researchers found that students who planned their day using a written schedule completed
                        <span class="hl-keyword">30% more tasks</span> than those who did not. However, the
                        study also noted that overly rigid schedules sometimes increased stress levels."
                    </div>

                    <div class="analysis-grid">
                        <div class="analysis-box keyword-box">
                            <div class="box-label">Notes: Who/When</div>
                            <div class="box-value">2019, 200 students</div>
                            <div class="box-desc">Numbers and dates are common question targets.</div>
                        </div>
                        <div class="analysis-box location-box">
                            <div class="box-label">Notes: Result</div>
                            <div class="box-value">+30% Tasks Completed</div>
                            <div class="box-desc">A key statistic likely to be asked about.</div>
                        </div>
                        <div class="analysis-box answer-box">
                            <div class="box-label">Notes: Contrast</div>
                            <div class="box-value">Rigid Schedule → Stress</div>
                            <div class="box-desc">A "however" signals a contrasting point — often tested.</div>
                        </div>
                    </div>
                </div>

                <div class="main-card">
                    <h2>💡 Part C Strategy Summary</h2>

                    <p class="intro">
                        Talks test your ability to follow longer spoken passages,
                        take useful notes, and predict both the topic and the type
                        of questions that will follow.
                    </p>

                    <div class="tip-box">
                        <h4>Correct Strategy</h4>
                        <p>Preview answer choices to predict the topic and question type, listen for the first sentence, and jot down key numbers, names, and contrasts.</p>
                    </div>

                    <div class="tip-box" style="margin-top:20px;">
                        <h4>Avoid This Mistake</h4>
                        <p>Do not try to write down every word — focus only on key facts that answer choices are likely to ask about.</p>
                    </div>
                </div>

            </div>

            <div id="quiz-section" class="quiz-section">

                <div class="practice-header-card">TOEFL Talks Practice</div>

                <div class="quiz-body">
                    <div style="background:#F4EFE3; padding:25px; border-radius:15px; margin-bottom:35px; line-height:1.8; font-size:1.1rem;">
        
        Listen carefully to each talk and choose the best answer to the questions that follow. Focus on the main idea, important details, and the speaker's purpose.
    </div>
                    <div id="quiz-container"></div>

                    <div class="quiz-footer">
                        <button id="btn-next-question" class="btn-next" style="display:none;">Next Question</button>
                    </div>

                </div>
            </div>

        </div>

        <div class="materi-right-sticky">

            <div class="pattern-card">
                <h3>🎧 Part C Focus</h3>
                <div class="formula-box">First Sentence → Predict → Note Key Facts</div>
            </div>

            <div class="pattern-card">
                <h3>📝 Note-Taking</h3>
                <div class="formula-box">Names · Numbers · Dates · Contrasts</div>
            </div>

            <div class="pattern-card">
                <h3>🎯 TOEFL Goal</h3>
                <div class="formula-box">Predict Topic &amp; Question Type</div>
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

    /*
    |--------------------------------------------------------------------------
    | ELEMENTS
    |--------------------------------------------------------------------------
    */

    const btnExamples = document.getElementById('btn-toggle-examples');
    const btnExercise = document.getElementById('btn-toggle-exercise');

    const examplesSection = document.getElementById('examples-display-section');
    const quizSection = document.getElementById('quiz-section');

    const quizContainer = document.getElementById('quiz-container');
    const nextButton = document.getElementById('btn-next-question');



    /*
    |--------------------------------------------------------------------------
    | QUIZ STATE
    |--------------------------------------------------------------------------
    */

    let currentStep = 1;
    let totalQuestions = 0;
    let currentAudio = null;



    /*
    |--------------------------------------------------------------------------
    | TOGGLE EXAMPLES
    |--------------------------------------------------------------------------
    */

    btnExamples.addEventListener('click', () => {

        quizSection.style.display = 'none';

        btnExercise.classList.remove('btn-active-state');

        const isVisible =
            examplesSection.style.display === 'flex';

        examplesSection.style.display =
            isVisible ? 'none' : 'flex';

        btnExamples.classList.toggle('btn-active-state');

        if (!isVisible) {

            examplesSection.scrollIntoView({
                behavior: 'smooth'
            });

        }

    });



    /*
    |--------------------------------------------------------------------------
    | TOGGLE QUIZ
    |--------------------------------------------------------------------------
    */

    btnExercise.addEventListener('click', () => {

        examplesSection.style.display = 'none';

        btnExamples.classList.remove('btn-active-state');

        const isVisible =
            quizSection.style.display === 'block';

        quizSection.style.display =
            isVisible ? 'none' : 'block';

        btnExercise.classList.toggle('btn-active-state');

        if (!isVisible) {

            quizSection.scrollIntoView({
                behavior: 'smooth'
            });

        }

    });



    /*
    |--------------------------------------------------------------------------
    | LOAD QUIZ JSON
    |--------------------------------------------------------------------------
    */

    async function loadQuiz()
    {
        try {

            const response =
                await fetch('/data/listening_talk.json');

            const questions =
                await response.json();

            totalQuestions = questions.length;

            renderQuestions(questions);

            initQuiz();

        } catch (error) {

            console.error(
                'Failed to load quiz:',
                error
            );

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
                     style="${step === 1
                        ? 'display:block;'
                        : 'display:none;'}">

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

                        ${renderOption(
                            'A',
                            question.a,
                            question.correct_answer
                        )}

                        ${renderOption(
                            'B',
                            question.b,
                            question.correct_answer
                        )}

                        ${renderOption(
                            'C',
                            question.c,
                            question.correct_answer
                        )}

                        ${renderOption(
                            'D',
                            question.d,
                            question.correct_answer
                        )}

                    </ul>

                    <div class="explanation-card">

                        <div class="explanation-title">
                            Explanation
                        </div>

                        <p>
                            ${question.explanation}
                        </p>

                    </div>

                </div>
            `;

            quizContainer.innerHTML += html;

        });
    }



    /*
    |--------------------------------------------------------------------------
    | RENDER OPTION
    |--------------------------------------------------------------------------
    */

    function renderOption(
        label,
        text,
        correctAnswer
    ) {

        return `
            <li class="option-item"
                data-correct="${
                    correctAnswer === label
                }">

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
        const options =
            document.querySelectorAll('.option-item');

        options.forEach(option => {

            option.addEventListener(
                'click',
                handleAnswer
            );

        });
    }



    /*
    |--------------------------------------------------------------------------
    | HANDLE ANSWER
    |--------------------------------------------------------------------------
    */

    function handleAnswer()
    {
        const wrapper =
            this.closest('.question-wrapper');

        if (wrapper.dataset.answered === 'true') {
            return;
        }

        wrapper.dataset.answered = 'true';

        const isCorrect =
            this.dataset.correct === 'true';

        highlightCorrectAnswer(wrapper);

        if (!isCorrect) {

            highlightWrongAnswer(this);

        }

        showExplanation(wrapper);

        nextButton.style.display =
            'inline-block';
    }



    /*
    |--------------------------------------------------------------------------
    | HIGHLIGHT CORRECT
    |--------------------------------------------------------------------------
    */

    function highlightCorrectAnswer(wrapper)
    {
        wrapper.querySelectorAll('.option-item')
        .forEach(item => {

            if (
                item.dataset.correct === 'true'
            ) {

                item.style.background =
                    '#E8F8F0';

                item.style.borderColor =
                    '#2ECC71';

                item.style.color =
                    '#27AE60';

                item.style.fontWeight =
                    '600';
            }

        });
    }



    /*
    |--------------------------------------------------------------------------
    | HIGHLIGHT WRONG
    |--------------------------------------------------------------------------
    */

    function highlightWrongAnswer(element)
    {
        element.style.background =
            '#FDEDEC';

        element.style.borderColor =
            '#E74C3C';

        element.style.color =
            '#C0392B';
    }



    /*
    |--------------------------------------------------------------------------
    | SHOW EXPLANATION
    |--------------------------------------------------------------------------
    */

    function showExplanation(wrapper)
    {
        wrapper.querySelector(
            '.explanation-card'
        ).style.display = 'block';
    }



    /*
    |--------------------------------------------------------------------------
    | NEXT QUESTION
    |--------------------------------------------------------------------------
    */

    nextButton.addEventListener(
        'click',
        () => {
            if (currentAudio) {
                currentAudio.pause();
                currentAudio.currentTime = 0;
            }
            const currentQuestion =
                document.querySelector(
                    `.question-wrapper[data-step="${currentStep}"]`
                );

            currentQuestion.style.display =
                'none';

            currentStep++;

            if (
                currentStep <= totalQuestions
            ) {

                const nextQuestion =
                    document.querySelector(
                        `.question-wrapper[data-step="${currentStep}"]`
                    );

                nextQuestion.style.display =
                    'block';

                nextButton.style.display =
                    'none';

            } else {

                alert(
                    '🎉 Congratulations! You completed the quiz.'
                );

                location.reload();

            }

        }
    );



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