<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulary Question </title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --maroon-dark: #4A1521;
            --maroon-light: #5A1E2B;
            --maroon-heading: #54111E;

            --gold-card: #9E8659;
            --gold-inner: #877148;

            --gold-light: #F4EFE3;
            --gold-border: #E6DBC4;

            --cream-bg: #FAF6EE;

            --text-light: #FFFDF9;
            --text-dark: #2A0D14;

            --tag-keyword-bg: #EAECEE;
            --tag-keyword-txt: #566573;

            --tag-location-bg: #F5EEF0;
            --tag-location-txt: #78281F;

            --tag-answer-bg: #F9EBEA;
            --tag-answer-txt: #7B241C;
        }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Cormorant Garamond', serif;
            background:var(--cream-bg);
            color:var(--text-dark);
            min-height:100vh;
            padding-bottom:60px;
        }

        /* ================= NAVBAR ================= */

        nav{
            display:flex;
            justify-content:flex-end;
            align-items:center;
            padding:30px 70px;
            gap:35px;
        }

        nav a{
            text-decoration:none;
            color:var(--text-dark);
            font-weight:600;
            font-size:.95rem;
            letter-spacing:2px;
            text-transform:uppercase;
        }

        /* ================= HEADER ================= */

        .materi-header{
            text-align:center;
            margin-bottom:40px;
            padding:0 20px;
        }

        .materi-header h1{
            font-family:'Playfair Display', serif;
            font-size:2.8rem;
            color:var(--maroon-heading);
            margin-bottom:10px;
        }

        .materi-header p{
            font-size:1.1rem;
            color:#614D52;
        }

        /* ================= WRAPPER ================= */

        .materi-wrapper{
            max-width:1200px;
            margin:auto;
            padding:0 40px;
            display:grid;
            grid-template-columns:1.6fr 1fr;
            gap:40px;
            align-items:start;
        }

        .materi-left-scroll{
            display:flex;
            flex-direction:column;
            gap:25px;
        }

        /* ================= MAIN CARD ================= */

        .main-card{
            background:var(--maroon-dark);
            border-radius:20px;
            padding:40px;
            color:var(--text-light);
            box-shadow:0 15px 30px rgba(74,21,33,.1);
        }

        .main-card h2{
            font-size:2rem;
            margin-bottom:20px;
            border-bottom:1px solid rgba(255,255,255,.15);
            padding-bottom:15px;
        }

        .intro{
            font-size:1.25rem;
            line-height:1.6;
            margin-bottom:30px;
        }

        .connectors-group-flex{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:30px;
            margin-bottom:35px;
        }

        .group-box h3{
            font-size:1.35rem;
            margin-bottom:8px;
        }

        .group-box .desc{
            font-size:1rem;
            opacity:.8;
            margin-bottom:15px;
        }

        .badge-container{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
        }

        .badge-item{
            background:rgba(255,255,255,.12);
            padding:8px 16px;
            border-radius:8px;
            font-size:1rem;
        }

        /* ================= TIP BOX ================= */

        .tip-box{
            background:var(--maroon-light);
            border-radius:12px;
            padding:20px 25px;
            border-left:4px solid #E67E22;
        }

        .tip-box h4{
            margin-bottom:10px;
            font-size:1.2rem;
        }

        .tip-box p{
            line-height:1.5;
        }

        /* ================= BUTTONS ================= */

        .action-buttons{
            display:flex;
            gap:20px;
        }

        .btn{
            padding:14px 30px;
            border-radius:12px;
            text-decoration:none;
            border:none;
            cursor:pointer;
            font-size:1.1rem;
            font-weight:600;
            transition:.3s;
        }

        .btn:hover{
            transform:translateY(-2px);
        }

        .btn-example{
            background:var(--gold-card);
            color:white;
        }

        .btn-exercise{
            background:var(--maroon-dark);
            color:white;
        }

        .btn-active-state{
            background:#631b25 !important;
        }

        /* ================= EXAMPLE SECTION ================= */

        .examples-display-section{
            display:none;
            flex-direction:column;
            gap:30px;
            animation:fadeIn .4s ease;
        }

        .example-showcase-card{
            background:white;
            border-radius:20px;
            padding:35px;
            box-shadow:0 10px 25px rgba(0,0,0,.05);
        }

        .example-showcase-card h3{
            font-family:'Playfair Display', serif;
            color:var(--maroon-heading);
            margin-bottom:20px;
            font-size:1.5rem;
        }

        .sentence-box{
            border:1px solid #EAEAEA;
            border-radius:12px;
            padding:25px;
            font-size:1.3rem;
            line-height:1.6;
            margin-bottom:25px;
        }

        .hl-keyword{
            background:#566573;
            color:white;
            padding:2px 8px;
            border-radius:4px;
        }

        .hl-location{
            background:#78281F;
            color:white;
            padding:2px 8px;
            border-radius:4px;
        }

        .hl-answer{
            background:#877148;
            color:white;
            padding:2px 8px;
            border-radius:4px;
        }

        .analysis-grid{
            display:grid;
            grid-template-columns:1fr 1fr 1fr;
            gap:15px;
        }

        .analysis-box{
            padding:18px;
            border-radius:12px;
        }

        .keyword-box{
            background:var(--tag-keyword-bg);
        }

        .location-box{
            background:var(--tag-location-bg);
        }

        .answer-box{
            background:var(--tag-answer-bg);
        }

        .box-label{
            font-size:.8rem;
            font-weight:bold;
            margin-bottom:5px;
            letter-spacing:1px;
        }

        .box-value{
            font-size:1.2rem;
            font-weight:700;
            margin-bottom:5px;
        }

        /* ================= QUIZ ================= */

        .quiz-section{
            display:none;
            border-radius:15px;
            overflow:hidden;
            animation:fadeIn .4s ease;
        }

        .practice-header-card{
            background:var(--maroon-dark);
            color:white;
            text-align:center;
            padding:16px;
            font-size:1.4rem;
            font-family:'Playfair Display', serif;
        }

        .quiz-body{
            background:white;
            padding:40px;
        }

        .question-text{
            font-size:1.3rem;
            margin-bottom:30px;
            text-align:center;
        }

        .options-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:15px;
            list-style:none;
        }

        .option-item{
            border:1px solid #ddd;
            padding:18px;
            border-radius:12px;
            cursor:pointer;
            transition:.2s;
        }

        .option-item:hover{
            border-color:var(--gold-card);
        }
        .question-wrapper{
    margin-bottom:20px;
}

.quiz-progress{
    text-align:right;
    margin-bottom:15px;
    font-weight:bold;
    color:#777;
}

.explanation-card{
    display:none;
    margin-top:20px;
    background:#F9F9F9;
    border-left:4px solid #9E8659;
    padding:18px;
    border-radius:10px;
}

.explanation-title{
    font-weight:bold;
    margin-bottom:8px;
    color:#54111E;
}

.quiz-footer{
    text-align:center;
    margin-top:30px;
}

        /* ================= SIDEBAR ================= */

        .materi-right-sticky{
            position:sticky;
            top:30px;
            display:flex;
            flex-direction:column;
            gap:25px;
        }

        .pattern-card{
            background:var(--gold-card);
            border-radius:20px;
            padding:25px;
            color:white;
        }

        .pattern-card h3{
            margin-bottom:15px;
            letter-spacing:2px;
        }

        .formula-box{
            background:var(--gold-inner);
            padding:15px;
            border-radius:10px;
            text-align:center;
            font-weight:700;
        }

        @keyframes fadeIn{
            from{
                opacity:0;
                transform:translateY(10px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        @media(max-width:992px){

            .materi-wrapper{
                grid-template-columns:1fr;
            }

            .materi-right-sticky{
                position:relative;
            }

            .analysis-grid{
                grid-template-columns:1fr;
            }

        }
    </style>
</head>

<body>

<nav>
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('materi') ?>">Material</a>
    <a href="#">Soal</a>
    <a href="#">TOEFL</a>
    <a href="#">History</a>
    <a href="#">About Us</a>
</nav>

<div class="materi-header">
    <h1>Vocabulary Questions</h1>
    <p>
        Learn how to locate main ideas and specific information efficiently in TOEFL Reading passages.
    </p>
</div>

<div class="materi-wrapper">

<div class="materi-left-scroll">
    <div class="main-card">

    <h2>1. Vocabulary Questions</h2>

    <p class="intro">
        Vocabulary Questions are common in TOEFL Reading tests.
        These questions ask you to determine the meaning of a word
        or phrase based on the context of the passage rather than
        relying solely on memorization.
    </p>

    <div class="connectors-group-flex">

        <div class="group-box">

            <h3>Vocabulary Skills</h3>

            <p class="desc">
                Understanding words through context.
            </p>

            <div class="badge-container">
                <div class="badge-item">Synonyms</div>
                <div class="badge-item">Meaning</div>
                <div class="badge-item">Context</div>
                <div class="badge-item">Inference</div>
            </div>

        </div>

        <div class="group-box">

            <h3>Context Clues</h3>

            <p class="desc">
                Using surrounding information to identify meanings.
            </p>

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

        <p>
            Never translate a word directly. Always use the
            surrounding sentence to determine the intended meaning.
        </p>

    </div>

</div>
<div class="main-card">

    <h2>2. What are Vocabulary Questions?</h2>

    <p class="intro">
        Vocabulary Questions require readers to determine the meaning
        of a word or phrase within a specific context.
    </p>

    <h3 style="margin-bottom:15px;">
        Purpose of Vocabulary Questions
    </h3>

    <ul style="line-height:1.8;font-size:1.1rem;padding-left:25px;">

        <li>Measure vocabulary understanding.</li>

        <li>Test contextual interpretation skills.</li>

        <li>Identify synonym relationships.</li>

        <li>Recognize word usage within passages.</li>

        <li>Improve reading comprehension accuracy.</li>

    </ul>

</div>
<div class="main-card">

    <h2>3. How to Answer Vocabulary Questions</h2>

    <ul style="line-height:1.9;font-size:1.1rem;padding-left:25px;">

        <li>
            Read the entire sentence containing the word.
        </li>

        <li>
            Look at the sentence before and after it.
        </li>

        <li>
            Identify clues from examples or explanations.
        </li>

        <li>
            Replace the word with each answer choice.
        </li>

        <li>
            Choose the option that fits naturally.
        </li>

    </ul>

</div>
<div class="action-buttons">

    <button
        id="btn-toggle-examples"
        class="btn btn-example">

        👁️ View Examples

    </button>

    <button
        id="btn-toggle-exercise"
        class="btn btn-exercise">

        📝 Practice Exercise

    </button>

</div>
<div class="action-buttons">
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
                <div class="box-label">WORD</div>
                <div class="box-value">
                    Popular
                </div>
                <div class="box-desc">
                    The target vocabulary word.
                </div>
            </div>

            <div class="analysis-box location-box">
                <div class="box-label">CONTEXT</div>
                <div class="box-value">
                    Many Students Visit
                </div>
                <div class="box-desc">
                    The library is frequently visited.
                </div>
            </div>

            <div class="analysis-box answer-box">
                <div class="box-label">MEANING</div>
                <div class="box-value">
                    Famous
                </div>
                <div class="box-desc">
                    Popular means well-known or liked by many people.
                </div>
            </div>

        </div>

    </div>

    <!-- ================= EXAMPLE 2 ================= -->

    <div class="example-showcase-card">

        <h3>Vocabulary Example 2</h3>

        <div class="sentence-box">

            <strong>Avoiding Distractions While Studying</strong><br><br>

            Many students find it difficult to concentrate while studying
            because they often use their
            <span class="hl-keyword">phones</span>
            or open social media.

            As a result, they cannot complete their tasks effectively
            and sometimes finish their homework late.

        </div>

        <div class="analysis-grid">

            <div class="analysis-box keyword-box">
                <div class="box-label">WORD</div>
                <div class="box-value">
                    Phones
                </div>
                <div class="box-desc">
                    Vocabulary being analyzed.
                </div>
            </div>

            <div class="analysis-box location-box">
                <div class="box-label">CONTEXT</div>
                <div class="box-value">
                    Studying
                </div>
                <div class="box-desc">
                    Used while studying.
                </div>
            </div>

            <div class="analysis-box answer-box">
                <div class="box-label">MEANING</div>
                <div class="box-value">
                    Mobile Devices
                </div>
                <div class="box-desc">
                    Refers to smartphones or mobile phones.
                </div>
            </div>

        </div>

    </div>

    <!-- ================= TIP CARD ================= -->

    <div class="main-card">

        <h2>📚 Vocabulary Strategy Tip</h2>

        <p class="intro">

            TOEFL Vocabulary Questions do not always test dictionary
            meanings. Instead, they often test the meaning of a word
            within a specific context.

        </p>

        <div class="tip-box">

            <h4>Correct Strategy</h4>

            <p>

                Read the sentence carefully and use context clues
                before looking at the answer choices.

            </p>

        </div>

        <div class="tip-box" style="margin-top:20px;">

            <h4>Avoid This Mistake</h4>

            <p>

                Do not choose an answer based only on memorization.
                The word may have a different meaning in the passage.

            </p>

        </div>

    </div>

</div>
<div id="quiz-section" class="quiz-section">

    <div class="practice-header-card">
        TOEFL Vocabulary Practice
    </div>

    <div class="quiz-body">

        <div style="
            background:#F4EFE3;
            padding:25px;
            border-radius:15px;
            margin-bottom:35px;
            line-height:1.8;
            font-size:1.1rem;
        ">

            <strong>The Evolution of Digital Classrooms</strong><br><br>

            Online learning platforms have fundamentally
            transformed modern education systems by making
            materials accessible from anywhere in the world.

            Teachers can easily distribute digital resources,
            track student milestones, and conduct synchronous
            virtual discussions.

            However, an unexpected consequence of this shift
            is the rising rate of student digital fatigue.

            <br><br>

            To alleviate this issue, educational experts
            recommend implementing brief intervals of physical
            movement during study blocks.

            Furthermore, institutions are urged to promote
            blended learning modules.

            By utilizing these integrated strategies, schools
            can enhance student wellness while sustaining
            top-tier academic progress.

        </div>

        <!-- QUESTION 1 -->

        <div class="question-wrapper" data-step="1">

            <div class="quiz-progress">1 / 5</div>

            <p class="question-text">
                The word "transformed" is closest in meaning to ______.
            </p>

            <ul class="options-grid">

                <li class="option-item" data-correct="false">
                    A. Damaged
                </li>

                <li class="option-item" data-correct="true">
                    B. Changed
                </li>

                <li class="option-item" data-correct="false">
                    C. Built
                </li>

                <li class="option-item" data-correct="false">
                    D. Abandoned
                </li>

            </ul>

            <div class="explanation-card">

                <div class="explanation-title">
                    Vocabulary Explanation
                </div>

                <p>
                    "Transformed" means changed significantly or improved.
                </p>

            </div>

        </div>

        <!-- QUESTION 2 -->

        <div class="question-wrapper"
             data-step="2"
             style="display:none;">

            <div class="quiz-progress">2 / 5</div>

            <p class="question-text">
                The word "alleviate" can best be replaced by ______.
            </p>

            <ul class="options-grid">

                <li class="option-item" data-correct="false">
                    A. Increase
                </li>

                <li class="option-item" data-correct="true">
                    B. Reduce
                </li>

                <li class="option-item" data-correct="false">
                    C. Ignore
                </li>

                <li class="option-item" data-correct="false">
                    D. Create
                </li>

            </ul>

            <div class="explanation-card">

                <div class="explanation-title">
                    Vocabulary Explanation
                </div>

                <p>
                    "Alleviate" means to make a problem less severe or reduce it.
                </p>

            </div>

        </div>

        <!-- QUESTION 3 -->

        <div class="question-wrapper"
             data-step="3"
             style="display:none;">

            <div class="quiz-progress">3 / 5</div>

            <p class="question-text">
                The word "wellness" is closest in meaning to ______.
            </p>

            <ul class="options-grid">

                <li class="option-item" data-correct="true">
                    A. Health
                </li>

                <li class="option-item" data-correct="false">
                    B. Sickness
                </li>

                <li class="option-item" data-correct="false">
                    C. Intelligence
                </li>

                <li class="option-item" data-correct="false">
                    D. Speed
                </li>

            </ul>

            <div class="explanation-card">

                <div class="explanation-title">
                    Vocabulary Explanation
                </div>

                <p>
                    "Wellness" refers to good health and overall well-being.
                </p>

            </div>

        </div>

        <!-- QUESTION 4 -->

        <div class="question-wrapper"
             data-step="4"
             style="display:none;">

            <div class="quiz-progress">4 / 5</div>

            <p class="question-text">
                The word "accessible" is closest in meaning to ______.
            </p>

            <ul class="options-grid">

                <li class="option-item" data-correct="true">
                    A. Available
                </li>

                <li class="option-item" data-correct="false">
                    B. Hidden
                </li>

                <li class="option-item" data-correct="false">
                    C. Expensive
                </li>

                <li class="option-item" data-correct="false">
                    D. Damaged
                </li>

            </ul>

            <div class="explanation-card">

                <div class="explanation-title">
                    Vocabulary Explanation
                </div>

                <p>
                    "Accessible" means easy to obtain, reach, or use.
                </p>

            </div>

        </div>

        <!-- QUESTION 5 -->

        <div class="question-wrapper"
             data-step="5"
             style="display:none;">

            <div class="quiz-progress">5 / 5</div>

            <p class="question-text">
                The word "implementing" is closest in meaning to ______.
            </p>

            <ul class="options-grid">

                <li class="option-item" data-correct="true">
                    A. Applying
                </li>

                <li class="option-item" data-correct="false">
                    B. Removing
                </li>

                <li class="option-item" data-correct="false">
                    C. Forgetting
                </li>

                <li class="option-item" data-correct="false">
                    D. Reducing
                </li>

            </ul>

            <div class="explanation-card">

                <div class="explanation-title">
                    Vocabulary Explanation
                </div>

                <p>
                    "Implementing" means putting a plan or strategy into action.
                </p>

            </div>

        </div>

        <div class="quiz-footer">

            <button
                id="btn-next-question"
                class="btn btn-exercise"
                style="display:none;">

                Next Question

            </button>

        </div>

    </div>

</div>
</div> <!-- END materi-left-scroll -->

<!-- ================= RIGHT SIDEBAR ================= -->

<div class="materi-right-sticky">

    <div class="pattern-card">

        <h3>📚 VOCABULARY</h3>

        <div class="formula-box">
            Word → Context → Meaning
        </div>

    </div>

    <div class="pattern-card">

        <h3>🔍 CONTEXT CLUES</h3>

        <div class="formula-box">
            Sentence → Clue → Synonym
        </div>

    </div>

    <div class="pattern-card">

        <h3>🎯 TOEFL GOAL</h3>

        <div class="formula-box">
            Understand Meaning Through Context
        </div>

    </div>

</div>

</div> <!-- END materi-wrapper -->
<script>

const btnExamples = document.getElementById('btn-toggle-examples');
const btnExercise = document.getElementById('btn-toggle-exercise');

const examplesSec = document.getElementById('examples-display-section');
const quizSec = document.getElementById('quiz-section');

btnExamples.addEventListener('click', function(){

    quizSec.style.display = 'none';
    btnExercise.classList.remove('btn-active-state');

    if(examplesSec.style.display === 'flex'){

        examplesSec.style.display = 'none';
        this.classList.remove('btn-active-state');

    }else{

        examplesSec.style.display = 'flex';
        this.classList.add('btn-active-state');

        examplesSec.scrollIntoView({
            behavior:'smooth'
        });

    }

});

btnExercise.addEventListener('click', function(){

    examplesSec.style.display = 'none';
    btnExamples.classList.remove('btn-active-state');

    if(quizSec.style.display === 'block'){

        quizSec.style.display = 'none';
        this.classList.remove('btn-active-state');

    }else{

        quizSec.style.display = 'block';
        this.classList.add('btn-active-state');

        quizSec.scrollIntoView({
            behavior:'smooth'
        });

    }

});

let currentStep = 1;

document.querySelectorAll('.option-item').forEach(option => {

    option.addEventListener('click', function(){

        const wrapper =
            this.closest('.question-wrapper');

        if(wrapper.dataset.answered === "true"){
            return;
        }

        const isCorrect =
            this.dataset.correct === "true";

        wrapper.dataset.answered = "true";

        wrapper.querySelectorAll('.option-item')
            .forEach(item => {

            if(item.dataset.correct === "true"){

                item.style.background =
                    "#E8F8F0";

                item.style.borderColor =
                    "#2ECC71";

            }

        });

        if(isCorrect){

            this.style.background =
                "#E8F8F0";

            this.style.borderColor =
                "#2ECC71";

        }else{

            this.style.background =
                "#FDEDEC";

            this.style.borderColor =
                "#E74C3C";

        }

        wrapper.querySelector('.explanation-card')
               .style.display = 'block';

        document.getElementById(
            'btn-next-question'
        ).style.display = 'inline-block';

    });

});

document.getElementById(
'btn-next-question'
).addEventListener('click', function(){

    document.querySelector(
        `.question-wrapper[data-step="${currentStep}"]`
    ).style.display = 'none';

    currentStep++;

    if(currentStep <= 5){

        document.querySelector(
            `.question-wrapper[data-step="${currentStep}"]`
        ).style.display = 'block';

        this.style.display = 'none';

    }else{

        alert(
            "🎉 Congratulations! You have completed the Vocabulary Questions Practice."
        );

        location.reload();

    }

});

</script>
</body>
</html>