<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Flashcards - English Learning Journey</title>
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

            --correct-bg: #F0FBF4;
            --correct-border: #2ECC71;
            --correct-text: #1A7A40;
            --correct-tag-bg: #D4EFDF;

            --incorrect-bg: #FDF0F0;
            --incorrect-border: #E74C3C;
            --incorrect-text: #922B21;
            --incorrect-tag-bg: #FADBD8;

            --chosen-wrong-bg: #FDEDEC;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            background-color: var(--cream-bg);
            color: var(--text-dark);
            min-height: 100vh;
            padding-bottom: 80px;
        }

        /* ===== TOP BAR ===== */
        .top-bar {
            background-color: var(--cream-bg);
            padding: 20px 40px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid var(--gold-border);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .back-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: var(--maroon-dark);
            font-weight: 700;
            font-size: 1rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            transition: opacity 0.2s;
        }

        .back-btn:hover { opacity: 0.7; }

        .back-arrow {
            width: 32px;
            height: 32px;
            background-color: var(--maroon-dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
        }

        /* ===== PROFILE + STATS SECTION ===== */
        .hero-section {
            max-width: 1100px;
            margin: 30px auto 0;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 25px;
            align-items: stretch;
        }

        .profile-card {
            background-color: white;
            border: 1px solid var(--gold-border);
            border-radius: 20px;
            padding: 28px 30px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .profile-top {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .avatar {
            width: 68px;
            height: 68px;
            background-color: var(--gold-light);
            border: 2px solid var(--gold-border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--gold-inner);
            flex-shrink: 0;
        }

        .profile-info h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            color: var(--maroon-heading);
            font-weight: 700;
        }

        .profile-info .subtitle {
            font-size: 0.95rem;
            color: #888;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .topic-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .topic-tag {
            background-color: var(--gold-light);
            border: 1px solid var(--gold-border);
            color: var(--gold-inner);
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .stats-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 12px;
        }

        .stat-box {
            background-color: var(--gold-light);
            border-radius: 14px;
            padding: 14px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .stat-icon.rank { background-color: var(--gold-border); color: var(--gold-inner); }
        .stat-icon.score { background-color: #e8f4e8; color: #2e7d32; }
        .stat-icon.time { background-color: var(--incorrect-tag-bg); color: var(--maroon-dark); }

        .stat-info .label {
            font-size: 0.75rem;
            color: #999;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-family: sans-serif;
        }

        .stat-info .value {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1.1;
        }

        .stat-info .value span {
            font-size: 0.9rem;
            font-family: 'Cormorant Garamond', serif;
            opacity: 0.7;
        }

        /* ===== ACCURACY CARD ===== */
        .accuracy-card {
            background-color: var(--maroon-dark);
            border-radius: 20px;
            padding: 28px 30px;
            color: var(--text-light);
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 15px;
        }

        .accuracy-label {
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            opacity: 0.7;
        }

        .accuracy-value {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 700;
            line-height: 1;
            color: white;
        }

        .accuracy-bar-wrap {
            background-color: rgba(255,255,255,0.15);
            border-radius: 999px;
            height: 8px;
            overflow: hidden;
        }

        .accuracy-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, #2ECC71, #82e0aa);
            border-radius: 999px;
            transition: width 1s ease;
        }

        .accuracy-detail {
            display: flex;
            justify-content: space-between;
            font-size: 0.95rem;
            opacity: 0.85;
        }

        .accuracy-detail .correct { color: #82e0aa; font-weight: 600; }
        .accuracy-detail .incorrect { color: #f1948a; font-weight: 600; }

        /* ===== REVIEW SECTION HEADER ===== */
        .review-header {
            max-width: 1100px;
            margin: 40px auto 25px;
            padding: 0 40px;
        }

        .review-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: var(--maroon-heading);
            font-style: italic;
            border-bottom: 2px solid var(--gold-border);
            padding-bottom: 12px;
        }

        /* ===== FLASHCARD GRID ===== */
        .flashcards-grid {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        /* ===== SINGLE FLASHCARD ===== */
        .flashcard {
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.06);
        }

        /* --- Card Header --- */
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 22px;
        }

        .flashcard.correct .card-header { background-color: #9E8559; }
        .flashcard.incorrect .card-header { background-color: var(--maroon-dark); }

        .card-number {
            font-family: sans-serif;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.85);
        }

        .card-status-tag {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 5px 14px;
            border-radius: 999px;
            font-size: 0.88rem;
            font-weight: 700;
            font-family: sans-serif;
        }

        .flashcard.correct .card-status-tag {
            background-color: rgba(46,204,113,0.2);
            color: #d5f5e3;
            border: 1px solid rgba(46,204,113,0.3);
        }

        .flashcard.incorrect .card-status-tag {
            background-color: rgba(231,76,60,0.2);
            color: #fadbd8;
            border: 1px solid rgba(231,76,60,0.3);
        }

        /* --- Card Body --- */
        .card-body {
            background-color: white;
            padding: 24px 22px 20px;
        }

        .question-sentence {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
            text-align: center;
            margin-bottom: 22px;
            font-style: italic;
        }

        /* --- Options --- */
        .options-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 9px;
            margin-bottom: 20px;
        }

        .opt {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 16px;
            border-radius: 10px;
            font-size: 1rem;
            border: 1px solid transparent;
            transition: none;
        }

        .opt-letter {
            width: 26px;
            height: 26px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.82rem;
            font-weight: 700;
            font-family: sans-serif;
            flex-shrink: 0;
        }

        /* Default (neutral) */
        .opt.neutral {
            background-color: #f7f7f7;
            border-color: #e8e8e8;
            color: #777;
        }
        .opt.neutral .opt-letter { background-color: #e8e8e8; color: #777; }

        /* Correct answer */
        .opt.is-correct {
            background-color: var(--correct-bg);
            border-color: var(--correct-border);
            color: var(--correct-text);
            font-weight: 600;
        }
        .opt.is-correct .opt-letter { background-color: var(--correct-border); color: white; }

        /* Wrong choice (user picked this but it's wrong) */
        .opt.is-wrong-pick {
            background-color: var(--chosen-wrong-bg);
            border-color: var(--incorrect-border);
            color: var(--incorrect-text);
        }
        .opt.is-wrong-pick .opt-letter { background-color: var(--incorrect-border); color: white; }

        .opt-icon {
            margin-left: auto;
            font-size: 1rem;
        }

        /* --- Grammar Note --- */
        .grammar-note {
            border-radius: 10px;
            padding: 16px 18px;
        }

        .flashcard.correct .grammar-note { background-color: #F4EFE3; }
        .flashcard.incorrect .grammar-note { background-color: #FDF5F5; }

        .grammar-note-title {
            font-family: sans-serif;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .flashcard.correct .grammar-note-title { color: var(--gold-inner); }
        .flashcard.incorrect .grammar-note-title { color: var(--maroon-dark); }

        .grammar-note p {
            font-size: 0.98rem;
            line-height: 1.6;
            color: #555;
        }

        .grammar-note strong { color: var(--maroon-dark); }

        /* ===== FINISH BUTTON ===== */
        .finish-section {
            max-width: 1100px;
            margin: 40px auto 0;
            padding: 0 40px;
            display: flex;
            justify-content: center;
        }

        .finish-btn {
            background-color: var(--maroon-dark);
            color: white;
            border: none;
            padding: 16px 60px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.15rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            border-radius: 999px;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.2s;
        }

        .finish-btn:hover { opacity: 0.85; transform: translateY(-2px); }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .hero-section { grid-template-columns: 1fr; }
            .flashcards-grid { grid-template-columns: 1fr; }
            .stats-row { grid-template-columns: 1fr 1fr; }
            .hero-section, .review-header, .flashcards-grid, .finish-section { padding: 0 20px; }
            .top-bar { padding: 16px 20px; }
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <a href="#" class="back-btn">
            <div class="back-arrow">&#8592;</div>
            BACK
        </a>
    </div>

    <!-- HERO: PROFILE + ACCURACY -->
    <div class="hero-section">

        <!-- Profile Card -->
        <div class="profile-card">
            <div class="profile-top">
                <div class="avatar">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="4"/>
                        <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
                    </svg>
                </div>
                <div class="profile-info">
                    <h2>Alya Zilyanti</h2>
                    <div class="subtitle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                        TOEFL Practice
                    </div>
                    <div class="topic-tags">
                        <span class="topic-tag">Structure</span>
                        <span class="topic-tag">Writing</span>
                        <span class="topic-tag">Reading</span>
                        <span class="topic-tag">Listening</span>
                    </div>
                </div>
            </div>

            <div class="stats-row">
                <div class="stat-box">
                    <div class="stat-icon rank">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="8 6 12 2 16 6"/><line x1="12" y1="2" x2="12" y2="15"/><path d="M20 21H4l2-6h12z"/></svg>
                    </div>
                    <div class="stat-info">
                        <div class="label">Current Rank</div>
                        <div class="value">19<span>/30</span></div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="stat-icon score">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <div class="stat-info">
                        <div class="label">Score</div>
                        <div class="value">493</div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="stat-icon time">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="stat-info">
                        <div class="label">Time Spent</div>
                        <div class="value">12h <span>45m</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accuracy Card -->
        <div class="accuracy-card">
            <div class="accuracy-label">Accuracy</div>
            <div class="accuracy-value">60%</div>
            <div class="accuracy-bar-wrap">
                <div class="accuracy-bar-fill" style="width: 60%;"></div>
            </div>
            <div class="accuracy-detail">
                <span class="correct">&#10003; 84 Correct</span>
                <span class="incorrect">&#10007; 56 Incorrect</span>
            </div>
            <div style="font-size:0.85rem; opacity:0.6; margin-top:4px; font-family:sans-serif; letter-spacing:1px;">out of 140 questions</div>
        </div>

    </div>

    <!-- REVIEW HEADER -->
    <div class="review-header">
        <h1>Review Flashcards</h1>
    </div>

    <!-- FLASHCARD GRID -->
    <div class="flashcards-grid">

        <!-- ===== CARD 1 — CORRECT ===== -->
        <div class="flashcard correct">
            <div class="card-header">
                <span class="card-number">Question 01</span>
                <span class="card-status-tag">&#10003; Correct</span>
            </div>
            <div class="card-body">
                <p class="question-sentence">
                    "The researchers _____ the experiment three times before concluding the results."
                </p>
                <ul class="options-list">
                    <li class="opt is-correct">
                        <span class="opt-letter">A</span>
                        <span>had performed</span>
                        <span class="opt-icon">&#10003;</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">B</span>
                        <span>was performing</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">C</span>
                        <span>There</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">D</span>
                        <span>Because</span>
                    </li>
                </ul>
                <div class="grammar-note">
                    <div class="grammar-note-title">Grammar Note</div>
                    <p>The <strong>Past Perfect</strong> is used to describe an action completed before another action in the past. Here, the performing happened before the concluding.</p>
                </div>
            </div>
        </div>

        <!-- ===== CARD 2 — INCORRECT ===== -->
        <div class="flashcard incorrect">
            <div class="card-header">
                <span class="card-number">Question 02</span>
                <span class="card-status-tag">&#10007; Incorrect</span>
            </div>
            <div class="card-body">
                <p class="question-sentence">
                    "Neither the student nor his teachers _____ aware of the schedule change."
                </p>
                <ul class="options-list">
                    <li class="opt is-wrong-pick">
                        <span class="opt-letter">A</span>
                        <span>Was</span>
                        <span class="opt-icon">&#10007;</span>
                    </li>
                    <li class="opt is-correct">
                        <span class="opt-letter">B</span>
                        <span>Were</span>
                        <span class="opt-icon">&#10003;</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">C</span>
                        <span>There</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">D</span>
                        <span>Because</span>
                    </li>
                </ul>
                <div class="grammar-note">
                    <div class="grammar-note-title">Grammar Note</div>
                    <p>In <strong>Subject-Verb Agreement</strong> with "neither/nor", the verb must agree with the subject closest to it. "Teachers" is plural, so "were" is required.</p>
                </div>
            </div>
        </div>

        <!-- ===== CARD 3 — CORRECT ===== -->
        <div class="flashcard correct">
            <div class="card-header">
                <span class="card-number">Question 03</span>
                <span class="card-status-tag">&#10003; Correct</span>
            </div>
            <div class="card-body">
                <p class="question-sentence">
                    "By the time she arrived, the meeting _____ already."
                </p>
                <ul class="options-list">
                    <li class="opt neutral">
                        <span class="opt-letter">A</span>
                        <span>ended</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">B</span>
                        <span>has ended</span>
                    </li>
                    <li class="opt is-correct">
                        <span class="opt-letter">C</span>
                        <span>had ended</span>
                        <span class="opt-icon">&#10003;</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">D</span>
                        <span>was ending</span>
                    </li>
                </ul>
                <div class="grammar-note">
                    <div class="grammar-note-title">Grammar Note</div>
                    <p>The signal phrase <strong>"By the time"</strong> followed by Simple Past triggers the Past Perfect in the main clause. The meeting ended before she arrived.</p>
                </div>
            </div>
        </div>

        <!-- ===== CARD 4 — INCORRECT ===== -->
        <div class="flashcard incorrect">
            <div class="card-header">
                <span class="card-number">Question 04</span>
                <span class="card-status-tag">&#10007; Incorrect</span>
            </div>
            <div class="card-body">
                <p class="question-sentence">
                    "Each of the students _____ required to submit a report."
                </p>
                <ul class="options-list">
                    <li class="opt is-correct">
                        <span class="opt-letter">A</span>
                        <span>is</span>
                        <span class="opt-icon">&#10003;</span>
                    </li>
                    <li class="opt is-wrong-pick">
                        <span class="opt-letter">B</span>
                        <span>are</span>
                        <span class="opt-icon">&#10007;</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">C</span>
                        <span>were</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">D</span>
                        <span>have been</span>
                    </li>
                </ul>
                <div class="grammar-note">
                    <div class="grammar-note-title">Grammar Note</div>
                    <p><strong>"Each"</strong> is always singular, even when followed by a plural noun ("of the students"). The correct verb form is singular: <strong>is</strong>, not "are".</p>
                </div>
            </div>
        </div>

        <!-- ===== CARD 5 — CORRECT ===== -->
        <div class="flashcard correct">
            <div class="card-header">
                <span class="card-number">Question 05</span>
                <span class="card-status-tag">&#10003; Correct</span>
            </div>
            <div class="card-body">
                <p class="question-sentence">
                    "The committee _____ its decision after a long debate."
                </p>
                <ul class="options-list">
                    <li class="opt neutral">
                        <span class="opt-letter">A</span>
                        <span>announce</span>
                    </li>
                    <li class="opt is-correct">
                        <span class="opt-letter">B</span>
                        <span>announced</span>
                        <span class="opt-icon">&#10003;</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">C</span>
                        <span>announces</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">D</span>
                        <span>were announcing</span>
                    </li>
                </ul>
                <div class="grammar-note">
                    <div class="grammar-note-title">Grammar Note</div>
                    <p><strong>Collective nouns</strong> like "committee" take a singular verb in American English. Since the context implies a completed action, Simple Past <strong>announced</strong> is correct.</p>
                </div>
            </div>
        </div>

        <!-- ===== CARD 6 — INCORRECT ===== -->
        <div class="flashcard incorrect">
            <div class="card-header">
                <span class="card-number">Question 06</span>
                <span class="card-status-tag">&#10007; Incorrect</span>
            </div>
            <div class="card-body">
                <p class="question-sentence">
                    "If she _____ harder, she would have passed the exam."
                </p>
                <ul class="options-list">
                    <li class="opt neutral">
                        <span class="opt-letter">A</span>
                        <span>studied</span>
                    </li>
                    <li class="opt is-wrong-pick">
                        <span class="opt-letter">B</span>
                        <span>would study</span>
                        <span class="opt-icon">&#10007;</span>
                    </li>
                    <li class="opt is-correct">
                        <span class="opt-letter">C</span>
                        <span>had studied</span>
                        <span class="opt-icon">&#10003;</span>
                    </li>
                    <li class="opt neutral">
                        <span class="opt-letter">D</span>
                        <span>has studied</span>
                    </li>
                </ul>
                <div class="grammar-note">
                    <div class="grammar-note-title">Grammar Note</div>
                    <p>This is a <strong>Third Conditional</strong> structure. The pattern is: <em>If + had + past participle → would have + past participle</em>. It refers to an unreal past situation.</p>
                </div>
            </div>
        </div>

    </div>

    <!-- FINISH BUTTON -->
    <div class="finish-section">
        <button class="finish-btn" onclick="window.location.href = '<?= base_url('quiz_toefl') ?>';'">
            Back to Home
        </button>
    </div>

<script>
    // ===== READ QUIZ RESULT FROM SESSIONSTORAGE =====
    (function(){
        const raw = sessionStorage.getItem('quizResult');
        if(!raw) return;
        try {
            const d     = JSON.parse(raw);
            const total   = d.total      || 100;
            const correct = d.answered   || 0;
            const wrong   = d.unanswered || 0;
            const pct     = Math.round((correct / total) * 100);

            // Accuracy card
            const accVal  = document.querySelector('.accuracy-value');
            const accFill = document.querySelector('.accuracy-bar-fill');
            const accCor  = document.querySelector('.accuracy-detail .correct');
            const accInc  = document.querySelector('.accuracy-detail .incorrect');
            const accTot  = document.querySelector('.accuracy-card div:last-child');

            if(accVal)  accVal.textContent   = pct + '%';
            if(accFill) accFill.style.width  = pct + '%';
            if(accCor)  accCor.innerHTML     = '&#10003; ' + correct + ' Correct';
            if(accInc)  accInc.innerHTML     = '&#10007; ' + wrong   + ' Incorrect';
            if(accTot)  accTot.textContent   = 'out of ' + total + ' questions';

            // Score stat box (index 1)
            const scoreVal = document.querySelectorAll('.stat-info .value')[1];
            if(scoreVal) scoreVal.textContent = correct * 5;

            sessionStorage.removeItem('quizResult');
        } catch(e){}
    })();
</script>
</body>
</html>