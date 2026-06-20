<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parallel Structure with Coordinate Conjunctions</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon-dark: #4A121A;   /* Background card utama kiri */
            --maroon-light: #5C1E26;  /* Warna tip box & badge */
            --maroon-heading: #430c17;/* Judul utama halaman */
            --gold-card: #9E8559;     /* Card pola kanan (Figma style) */
            --gold-inner: #877048;    /* Box rumus di dalam card emas */
            --gold-light: #F4EFE3;    /* Background penjelasan */
            --gold-border: #E6DBC4;
            --cream-bg: #FAF4E7;      /* Background halaman */
            --card-white: #FFFDF9;
            --text-light: #FFFDF9;
            --text-dark: #2a0d15;

            /* Warna Khusus Bagan Analisis */
            --tag-elem-bg: #F5EEF0;
            --tag-elem-txt: #78281F;
            --hl-parallel: #877048;
            --hl-conj: #4A121A;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            background-color: var(--cream-bg);
            color: var(--text-dark);
            min-height: 100vh;
            padding-bottom: 60px;
        }

        /* ================= NAVBAR PREMIUM ================= */
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

        /* ================= HEADER UTAMA ================= */
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

        /* ================= LAYOUT DUA KOLOM ================= */
        .materi-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1.6fr 1fr;
            gap: 40px;
            align-items: start;
        }

        /* ================= KOLOM KIRI (MATERI UTAMA) ================= */
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
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 253, 249, 0.15);
            padding-bottom: 15px;
        }

        .main-card p.intro {
            font-size: 1.15rem;
            line-height: 1.6;
            margin-bottom: 35px;
            opacity: 0.95;
        }

        .sub-section { margin-bottom: 35px; }
        .sub-section h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 600; margin-bottom: 12px; color: #FFFDF9; letter-spacing: 0.5px; }
        .sub-section p { font-size: 1.1rem; opacity: 0.85; line-height: 1.5; margin-bottom: 15px; }

        .example-list { list-style: none; margin-bottom: 20px; padding-left: 5px; }
        .example-list li { font-size: 1.1rem; margin-bottom: 10px; line-height: 1.4; opacity: 0.9; }
        .example-list strong { color: #FAF6EE; }

        .comparison-box {
            background-color: rgba(255, 255, 255, 0.04);
            border-radius: 12px;
            padding: 18px 22px;
            margin-top: 12px;
            border-left: 3px solid rgba(255, 253, 249, 0.2);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .comparison-box p { font-size: 1.1rem; line-height: 1.5; margin-bottom: 0; }

        .text-wrong { color: #FF6B6B; font-weight: 600; }
        .text-correct { color: #2ECC71; font-weight: 600; }

        .tip-box {
            background-color: var(--maroon-light);
            border-radius: 12px;
            padding: 22px 25px;
            margin-top: 25px;
            border: 1px solid rgba(255, 253, 249, 0.1);
        }
        .tip-box h4 { font-family: 'Playfair Display', serif; font-size: 1.15rem; font-weight: 700; margin-bottom: 8px; }
        .tip-box p { font-size: 1.05rem; opacity: 0.85; line-height: 1.5; }

        /* Tombol Aksi */
        .action-buttons { display: flex; gap: 20px; }
        .btn {
            padding: 14px 35px;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }
        .btn-exercise { background-color: var(--maroon-dark); color: var(--text-light); }
        .btn-example { background-color: var(--gold-card); color: var(--text-light); }
        .btn:hover { transform: translateY(-2px); opacity: 0.9; }
        .btn-active-state { background-color: #631b25 !important; box-shadow: inset 0 0 10px rgba(0,0,0,0.3); }

        /* ================= EXAMPLES BAGAN SECTION ================= */
        .examples-display-section {
            display: none;
            flex-direction: column;
            gap: 30px;
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
            text-align: center;
            font-size: 1.35rem;
            color: #333333;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .hl-m1 { color: var(--hl-conj); font-weight: 700; text-decoration: underline; }
        .hl-p1 { background-color: var(--hl-parallel); color: #ffffff; padding: 2px 8px; border-radius: 4px; font-weight: 500; }

        .analysis-grid-three {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 15px;
        }

        .analysis-box {
            border-radius: 10px;
            padding: 18px;
            border-left: 4px solid #BDC3C7;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .analysis-box.elem-box { background-color: var(--tag-elem-bg); border-left-color: var(--tag-elem-txt); }
        
        .box-label { font-family: sans-serif; font-size: 0.75rem; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 3px; color: var(--tag-elem-txt); }
        .box-value { font-family: 'Playfair Display', serif; font-size: 1.2rem; font-weight: 700; margin-bottom: 3px; color: #111; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 3px; }
        .box-desc { font-size: 0.95rem; line-height: 1.4; color: #555; }

        /* ================= INTERACTIVE QUIZ SECTION ================= */
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

        .quiz-progress { color: var(--maroon-dark); font-family: 'Playfair Display', serif; font-weight: 700; font-size: 1.25rem; margin-bottom: 25px; }
        .question-text { font-size: 1.35rem; text-align: center; color: var(--text-dark); margin-bottom: 35px; line-height: 1.5; }
        
        .question-text .error-underline { text-decoration: underline; font-weight: 700; display: inline-block; margin: 0 5px; color: #4A121A; }
        .question-text .error-label { font-size: 0.8rem; font-family: sans-serif; font-weight: bold; vertical-align: super; color: var(--gold-card); margin-left: 2px; }

        .options-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; list-style: none; margin-bottom: 30px; }
        .option-item {
            background-color: #ffffff; border: 1px solid #dcdcdc; border-radius: 12px;
            padding: 18px 24px; font-size: 1.1rem; color: var(--text-dark);
            cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: all 0.2s;
        }
        .option-item:hover { background-color: #fcfbfa; border-color: var(--gold-card); }
        
        .option-item.correct { background-color: #E8F8F0 !important; border-color: #2ECC71 !important; color: #27AE60 !important; font-weight: 600; }
        .option-item.correct::after { content: "✓"; background-color: #2ECC71; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; }
        
        .option-item.wrong { background-color: #FCE4E4 !important; border-color: #E74C3C !important; color: #C0392B !important; }
        .option-item.wrong::after { content: "✕"; background-color: #E74C3C; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; }

        .explanation-card { display: none; background-color: var(--gold-light); border: 1px solid var(--gold-border); border-radius: 12px; padding: 25px; margin-bottom: 30px; color: #5C4A33; }
        .explanation-title { font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; }
        .inner-formula-box { display: inline-block; background-color: #ffffff; border: 1px solid #E1D5BA; border-radius: 8px; padding: 12px 20px; margin-top: 15px; font-family: 'Courier New', Courier, monospace; font-weight: 700; color: #877048; line-height: 1.4; }

        .quiz-footer { display: flex; justify-content: flex-end; }
        .btn-next { background-color: #4A121A; color: #ffffff; border: none; padding: 14px 50px; font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: 1.15rem; letter-spacing: 2px; border-radius: 25px; cursor: pointer; text-transform: uppercase; }

        /* ================= KOLOM KANAN (STICKY SCALES) ================= */
        .materi-right-sticky { position: sticky; top: 30px; display: flex; flex-direction: column; gap: 25px; }
        
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

        .scale-box {
            background-color: var(--gold-inner);
            padding: 12px;
            border-radius: 8px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 0.95rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 10px;
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
            .analysis-grid-three { grid-template-columns: 1fr; }
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
        <h1>Parallel Structure with Coordinate Conjunctions</h1>
        <p>Master the rule of balancing expressions connected by coordinate conjunctions like and, but, or or.</p>
    </div>

    <div class="materi-wrapper">
        
        <div class="materi-left-scroll">
            
            <div class="main-card">
                <h2>The Core Principle: The "Grammatical Scale"</h2>
                <p class="intro">Think of coordinate conjunctions <strong>(and, but, or)</strong> as a physical scale. Whatever grammatical form sits on the left side of the conjunction must perfectly balance the right side. Look at these balanced structural pairs:</p>

                <div class="sub-section">
                    <ul class="example-list">
                        <li>• <strong>Noun + Conjunction + Noun:</strong> <em>Software</em> <strong>and</strong> <em>hardware</em>.</li>
                        <li>• <strong>Verb + Conjunction + Verb:</strong> <em>Design</em> <strong>or</strong> <em>develop</em>.</li>
                        <li>• <strong>Adjective + Conjunction + Adjective:</strong> <em>Efficient</em> <strong>but</strong> <em>expensive</em>.</li>
                        <li>• <strong>Phrase + Conjunction + Phrase:</strong> <em>In the office</em> <strong>or</strong> <em>at the lab</em>.</li>
                    </ul>
                </div>

                <div class="sub-section">
                    <h2>Parallelism with Multiple Items</h2>
                    <p>When connecting three or more items, the rule applies to every single element. Use commas to separate them, placing the conjunction right before the final item.</p>
                    
                    <p style="font-family: monospace; font-size: 1.05rem; color: #D9CBB0; margin-bottom: 5px;">Structure Pattern: A , B , and/but/or C</p>
                    
                    <div class="comparison-box">
                        <p><span class="text-correct">✓ Correct:</span> The developer <strong>wrote</strong> the code, <strong>tested</strong> the features, and <strong>deployed</strong> the app. <br>
                        <span style="font-size: 0.95rem; opacity: 0.75; font-style: italic;">(All items are Past Tense verbs)</span></p>
                    </div>
                </div>

                <div class="sub-section">
                    <h2>Common Pitfall: Switching Word Classes</h2>
                    <p>Be careful in the TOEFL test! Sentences often look right but secretly shift from one word class to another. Make sure adjectives stay with adjectives, and nouns with nouns.</p>
                    
                    <div class="comparison-box">
                        <p><span class="text-wrong">Incorrect:</span> The interface is <strong>clean</strong> (adj), <strong>intuitive</strong> (adj), and <strong>simplicity</strong> (noun).</p>
                        <p><span class="text-correct">Correct:</span> The interface is <strong>clean</strong> (adj), <strong>intuitive</strong> (adj), and <strong>simple</strong> (adj).</p>
                    </div>
                </div>

                <div class="tip-box">
                    <h4>⚠️ TOEFL Tip</h4>
                    <p>When you see commas separating a series of items followed by a coordinate conjunction, scan the structure of each item immediately. If one item uses a different pattern, that's definitely the error in your structure test!</p>
                </div>
            </div>

            <div class="action-buttons">
                <button id="btn-toggle-examples" class="btn btn-example">👁️ Example</button>
                <button id="btn-toggle-exercise" class="btn btn-exercise">📝 Exercise</button>
            </div>

            <div id="examples-display-section" class="examples-display-section">
                <div class="example-showcase-card">
                    <h3>Bagan Analisis Deret Paralel (3 Item)</h3>
                    <div class="sentence-box">
                        An academic system must be <span class="hl-p1">secure</span>, <span class="hl-p1">user-friendly</span>, <span class="hl-m1">and</span> <span class="hl-p1">highly reliable</span>.
                    </div>
                    <div class="analysis-grid-three">
                        <div class="analysis-box elem-box">
                            <div class="box-label">Item A</div>
                            <div class="box-value">Secure</div>
                            <div class="box-desc">Berbentuk <strong>Adjective</strong> tunggal untuk mendefinisikan kriteria pertama.</div>
                        </div>
                        <div class="analysis-box elem-box">
                            <div class="box-label">Item B</div>
                            <div class="box-value">User-friendly</div>
                            <div class="box-desc">Berbentuk <strong>Adjective</strong> kedua setelah tanda koma pemisah.</div>
                        </div>
                        <div class="analysis-box elem-box">
                            <div class="box-label">Item C (Setelah 'And')</div>
                            <div class="box-value">Highly reliable</div>
                            <div class="box-desc">Berbentuk <strong>Adjective Phrase</strong>. Inti kata tetap Adjective, menjaga timbangan kelas kata tetap setara.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="quiz-section" class="quiz-section">
                <div class="practice-header-card">Coordinate Parallel Quiz Challenge</div>
                <div class="quiz-body">
                    
                    <div class="question-wrapper" data-step="1" style="display: block;">
                        <div class="quiz-progress">1/5</div>
                        <p class="question-text">" The new campus system enables users to check academic records, financial statements, and ______ course enrollment status instantly. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. modifying</li>
                            <li class="option-item" data-correct="true">B. modify</li>
                            <li class="option-item" data-correct="false">C. modification</li>
                            <li class="option-item" data-correct="false">D. to modify</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="2" style="display: none;">
                        <div class="quiz-progress">2/5</div>
                        <p class="question-text">" The database server is not only running efficiently today ______ responding slower than expected to query executions. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. and</li>
                            <li class="option-item" data-correct="true">B. but</li>
                            <li class="option-item" data-correct="false">C. or</li>
                            <li class="option-item" data-correct="false">D. nor</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="3" style="display: none;">
                        <div class="quiz-progress">3/5</div>
                        <p class="question-text">" When building web modules, junior programers often spend hours designing components, writing functions, or ______ server routing errors. "</p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. debug</li>
                            <li class="option-item" data-correct="false">B. to debug</li>
                            <li class="option-item" data-correct="true">C. debugging</li>
                            <li class="option-item" data-correct="false">D. debugged</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="4" style="display: none;">
                        <div class="quiz-progress">4/5</div>
                        <p class="question-text" style="font-style: normal;">
                            <strong>Identify the ERROR:</strong><br><br>
                            The server manager <span class="error-underline">monitors</span><span class="error-label">A</span> system logs, 
                            <span class="error-underline">fixes</span><span class="error-label">B</span> security loopholes, and 
                            <span class="error-underline">updating</span><span class="error-label">C</span> the database tables <span class="error-underline">nightly</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. monitors</li>
                            <li class="option-item" data-correct="false">B. fixes</li>
                            <li class="option-item" data-correct="true">C. updating</li>
                            <li class="option-item" data-correct="false">D. nightly</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="question-wrapper" data-step="5" style="display: none;">
                        <div class="quiz-progress">5/5</div>
                        <p class="question-text" style="font-style: normal;">
                            <strong>Identify the ERROR:</strong><br><br>
                            Statistical analysis <span class="error-underline">requires</span><span class="error-label">A</span> data that is 
                            <span class="error-underline">accurate</span><span class="error-label">B</span>, comprehensive, and 
                            has <span class="error-underline">consistency</span><span class="error-label">C</span> for valid <span class="error-underline">results</span><span class="error-label">D</span>.
                        </p>
                        <ul class="options-grid">
                            <li class="option-item" data-correct="false">A. requires</li>
                            <li class="option-item" data-correct="false">B. accurate</li>
                            <li class="option-item" data-correct="true">C. consistency</li>
                            <li class="option-item" data-correct="false">D. results</li>
                        </ul>
                        <div class="explanation-card">
                            <div class="explanation-title"></div>
                            <p class="explanation-content"></p>
                            <div class="inner-formula-box" style="display: none;"></div>
                        </div>
                    </div>

                    <div class="quiz-footer">
                        <button id="btn-next-question" class="btn-next" style="display: none;">NEXT</button>
                    </div>

                </div>
            </div>

        </div>

        <div class="materi-right-sticky">
            
            <div class="pattern-card">
                <h3>⚖️ The Grammatical Scale</h3>
                
                <div class="scale-box">
                    [ NOUN ] <===> ( and / but / or ) <===> [ NOUN ]
                </div>
                
                <div class="scale-box">
                    [ VERB-ING ] <===> ( and / but / or ) <===> [ VERB-ING ]
                </div>

                <div class="scale-box">
                    [ ADJ ] <===> ( and / but / or ) <===> [ ADJ ]
                </div>

                <div class="scale-box">
                    [ PHRASE ] <===> ( and / but / or ) <===> [ PHRASE ]
                </div>
                
                <span style="font-size: 0.95rem; opacity: 0.8; display: block; margin-top: 15px; text-align: center; font-style: italic;">
                    Both sides must have perfectly balanced weight!
                </span>
            </div>

            <div class="video-card">
                <h3>Video Lesson</h3>
                <p>Watch expert breakdown</p>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9K4Rjdp_DqQ?si=x4k2vQ86WFnfA27f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>

    <script>
        const quizDatabase = {
            1: {
                correctText: "Luar biasa! Kata kunci penentu di sini ada pada modal predikat awal yaitu frasa infinitif paralel: <strong>enables users TO [check...] , [financial statements...] , and [MODIFY...]</strong>. Karena 'to' di depan berlaku untuk seluruh deret, kata kerja selanjutnya harus kembali ke Bare Infinitive (Verb 1).",
                wrongText: "Salah. Deret ini dikendalikan oleh struktur parallel infinitive 'to check'. Pilihan A, C, dan D akan merusak keseimbangan timbangan kelas kata.",
                formula: "To + [check (V1)] , [check financial...] , and + [MODIFY (V1)]"
            },
            2: {
                correctText: "Tepat sekali! Konteks kalimat menunjukkan kontras (perbedaan arah situasi): server berjalan efisien, *tetapi* responnya lambat. Coordinate conjunction penanda kontras yang tepat adalah <strong>but</strong>.",
                wrongText: "Pilihan salah. Meskipun secara struktur paralel 'running...' dan 'responding...' sudah seimbang, konektor penanda hubungan kontras makna yang valid hanyalah 'but'.",
                formula: "[running... (Verb-ing)] + BUT (Kontras) + [responding... (Verb-ing)]"
            },
            3: {
                correctText: "Brilian! Perhatikan deret aktivitas sebelum kata hubung 'or': <strong>designing... (Gerund/V-ing)</strong> dan <strong>writing... (Gerund/V-ing)</strong>. Maka item ketiga wajib menggunakan bentuk serupa yaitu <strong>debugging</strong>.",
                wrongText: "Kurang tepat. Ingat aturan deret koma jamak: jika item A dan B berupa Verb-ing, maka item C setelah koordinat 'or' mutlak wajib berbentuk Verb-ing.",
                formula: "[designing...] (V-ing) , [writing...] (V-ing) , or + [DEBUGGING...] (V-ing)"
            },
            4: {
                correctText: "Benar! Bagian C (*updating*) adalah posisi **ERROR**. Item A (*monitors*) dan item B (*fixes*) menggunakan Simple Present Tense akhiran -s (Singular Present Verb). Maka item C wajib setara menjadi **updates**.",
                wrongText: "Jebakan paralel tipe tenses sering muncul di TOEFL. Pastikan akhiran kata kerja (-ing, -ed, -s) konsisten di sepanjang deret koma.",
                formula: "Monitors (V1+s) , fixes (V1+s) , and + <span style='color:#E74C3C;'>UPDATING (Error! Harus Updates)</span>"
            },
            5: {
                correctText: "Sempurna! Pilihan C (*consistency*) adalah poin **ERROR**. Kata penjelas sebelum koma adalah *accurate* (Adjective) dan *comprehensive* (Adjective). Maka setelah kata 'and' tidak boleh berubah menjadi Noun (*consistency*), melainkan harus diganti menjadi bentuk Adjective-nya yaitu **consistent**.",
                wrongText: "Struktur berbelok dari kelas kata Sifat (Adjective) ke kata Benda (Noun). Ini melanggar hukum keseimbangan skala paralel.",
                formula: "Accurate (Adj) , comprehensive (Adj) , and + <span style='color:#E74C3C;'>CONSISTENCY (Error! Harus Consistent)</span>"
            }
        };

        const btnExamples = document.getElementById('btn-toggle-examples');
        const btnExercise = document.getElementById('btn-toggle-exercise');
        const examplesSec = document.getElementById('examples-display-section');
        const quizSec = document.getElementById('quiz-section');

        btnExamples.addEventListener('click', function() {
            quizSec.style.display = 'none';
            btnExercise.classList.remove('btn-active-state');
            
            if(examplesSec.style.display === 'flex') {
                examplesSec.style.display = 'none';
                this.classList.remove('btn-active-state');
            } else {
                examplesSec.style.display = 'flex';
                this.classList.add('btn-active-state');
                examplesSec.scrollIntoView({ behavior: 'smooth' });
            }
        });

        btnExercise.addEventListener('click', function() {
            examplesSec.style.display = 'none';
            btnExamples.classList.remove('btn-active-state');

            if(quizSec.style.display === 'block') {
                quizSec.style.display = 'none';
                this.classList.remove('btn-active-state');
            } else {
                quizSec.style.display = 'block';
                this.classList.add('btn-active-state');
                quizSec.scrollIntoView({ behavior: 'smooth' });
            }
        });

        // Logika Pengoperasian Kuis
        let currentStep = 1;
        document.querySelectorAll('.option-item').forEach(item => {
            item.addEventListener('click', function() {
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
                        if(opt.getAttribute('data-correct') === 'true') opt.classList.add('correct');
                    });
                }

                if(quizDatabase[step].formula) {
                    formulaBox.innerHTML = quizDatabase[step].formula;
                    formulaBox.style.display = 'inline-block';
                }

                expCard.style.display = 'block';
                wrapper.setAttribute('data-answered', 'true');
                document.getElementById('btn-next-question').style.display = 'block';
            });
        });

        document.getElementById('btn-next-question').addEventListener('click', function() {
            document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'none';
            currentStep++;
            
            if(currentStep <= 5) {
                document.querySelector(`.question-wrapper[data-step="${currentStep}"]`).style.display = 'block';
                this.style.display = 'none';
            } else {
                alert("🎉 Brilliant! You have completely mastered the Coordinate Conjunction parallel scales.");
                currentStep = 1;
                document.querySelectorAll('.question-wrapper').forEach(w => {
                    w.style.display = 'none';
                    w.removeAttribute('data-answered');
                    w.querySelector('.explanation-card').style.display = 'none';
                    w.querySelectorAll('.option-item').forEach(o => o.className = 'option-item');
                });
                document.querySelector(`.question-wrapper[data-step="1"]`).style.display = 'block';
                quizSec.style.display = 'none';
                btnExercise.classList.remove('btn-active-state');
                this.style.display = 'none';
            }
        });
    </script>
</body>
</html>