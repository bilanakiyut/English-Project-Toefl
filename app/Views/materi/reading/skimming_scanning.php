<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering Skimming & Scanning</title>

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
    <h1>Mastering Skimming & Scanning</h1>
    <p>
        Learn how to locate main ideas and specific information efficiently in TOEFL Reading passages.
    </p>
</div>

<div class="materi-wrapper">

<div class="materi-left-scroll">
    <div class="main-card">

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

            <p class="desc">
                Understanding the general idea and overall structure of a text.
            </p>

            <div class="badge-container">
                <div class="badge-item">Main Idea</div>
                <div class="badge-item">Topic</div>
                <div class="badge-item">Overview</div>
                <div class="badge-item">Structure</div>
            </div>
        </div>

        <div class="group-box">
            <h3>Scanning Focus</h3>

            <p class="desc">
                Finding specific details without reading the whole passage.
            </p>

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

        <p>
            First skim the passage to understand the overall topic,
            then scan the passage when answering detail questions.
            Combining these strategies can significantly improve both
            speed and accuracy.
        </p>
    </div>

</div>

<div class="main-card">

    <h2>2. What is Skimming?</h2>

    <p class="intro">
        Skimming is a fast reading technique used to obtain the general
        idea of a passage without focusing on every detail.
    </p>

    <h3 style="margin-bottom:15px;">Main Purposes of Skimming</h3>

    <ul style="line-height:1.8;font-size:1.1rem;padding-left:25px;margin-bottom:25px;">
        <li>Understand the overall topic of the text.</li>
        <li>Identify the main idea of each paragraph.</li>
        <li>Recognize how information is organized.</li>
        <li>Build a quick understanding before reading questions.</li>
    </ul>

    <h3 style="margin-bottom:15px;">Skimming Techniques</h3>

    <ul style="line-height:1.8;font-size:1.1rem;padding-left:25px;">

        <li>
            Read the title first to predict the topic.
        </li>

        <li>
            Read the first and last sentence of each paragraph.
        </li>

        <li>
            Pay attention to repeated keywords.
        </li>

        <li>
            Ignore unnecessary details and examples.
        </li>

        <li>
            Make a quick conclusion about the passage.
        </li>

    </ul>

</div>

<div class="main-card">

    <h2>3. What is Scanning?</h2>

    <p class="intro">
        Scanning is a reading technique used to locate specific
        information such as names, dates, numbers, facts, and keywords.
    </p>

    <h3 style="margin-bottom:15px;">Main Purposes of Scanning</h3>

    <ul style="line-height:1.8;font-size:1.1rem;padding-left:25px;margin-bottom:25px;">
        <li>Find specific information quickly.</li>
        <li>Locate names, dates, and numbers.</li>
        <li>Answer detail questions efficiently.</li>
        <li>Save time during reading tests.</li>
        <li>Focus only on required information.</li>
    </ul>

    <h3 style="margin-bottom:15px;">
        How to Use Scanning (5-Step Formula)
    </h3>

    <ul style="line-height:1.8;font-size:1.1rem;padding-left:25px;">

        <li>
            Read the question first.
        </li>

        <li>
            Identify the keyword.
        </li>

        <li>
            Do not read the whole text.
        </li>

        <li>
            Find the keyword and read nearby sentences carefully.
        </li>

        <li>
            Take the exact answer from the text.
        </li>

    </ul>

</div>

<div class="action-buttons">

    <button id="btn-toggle-examples"
            class="btn btn-example">
        👁️ View Examples
    </button>

    <button id="btn-toggle-exercise"
            class="btn btn-exercise">
        📝 Practice Exercise
    </button>

</div>
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
                <div class="box-label">MAIN IDEA</div>
                <div class="box-value">
                    Internet for Learning
                </div>
                <div class="box-desc">
                    Students use the internet as a learning tool.
                </div>
            </div>

            <div class="analysis-box location-box">
                <div class="box-label">TOPIC</div>
                <div class="box-value">
                    Internet Usage
                </div>
                <div class="box-desc">
                    The passage discusses educational use of the internet.
                </div>
            </div>

            <div class="analysis-box answer-box">
                <div class="box-label">CONCLUSION</div>
                <div class="box-value">
                    Use It Wisely
                </div>
                <div class="box-desc">
                    Students should avoid spending too much time on games and social media.
                </div>
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
            As a result, they cannot complete their tasks effectively.

            To overcome this problem, students can study in a quiet
            environment. They can also set a specific time for studying
            and avoid using their phones.

        </div>

        <div class="analysis-grid">

            <div class="analysis-box keyword-box">
                <div class="box-label">KEYWORD</div>
                <div class="box-value">
                    Avoid
                </div>
                <div class="box-desc">
                    Search for the word connected to the question.
                </div>
            </div>

            <div class="analysis-box location-box">
                <div class="box-label">LOCATION</div>
                <div class="box-value">
                    Last Paragraph
                </div>
                <div class="box-desc">
                    The answer appears near the keyword.
                </div>
            </div>

            <div class="analysis-box answer-box">
                <div class="box-label">ANSWER</div>
                <div class="box-value">
                    Using Phones
                </div>
                <div class="box-desc">
                    Students should avoid using their phones while studying.
                </div>
            </div>

        </div>

    </div>

    <!-- ================= TOEFL READING TIP ================= -->

    <div class="main-card">

        <h2>📖 TOEFL Reading Strategy Tip</h2>

        <p class="intro">
            One of the most common mistakes in TOEFL Reading is reading
            every word from beginning to end before answering questions.
            This wastes valuable time.
        </p>

        <div class="tip-box">

            <h4>Correct Strategy</h4>

            <p>
                Use <strong>Skimming</strong> first to understand the
                passage quickly. Then use <strong>Scanning</strong> to
                locate specific details required by the questions.
            </p>

        </div>

        <div class="tip-box" style="margin-top:20px;">

            <h4>Wrong Strategy</h4>

            <p>
                Reading every sentence carefully before looking at the
                questions often causes time management problems during
                the TOEFL test.
            </p>

        </div>

    </div>

</div>
<div id="quiz-section" class="quiz-section">

    <div class="practice-header-card">
        TOEFL Reading Practice
    </div>

    <div class="quiz-body">

        <!-- PASSAGE -->

        <div style="
            background:#F4EFE3;
            padding:25px;
            border-radius:15px;
            margin-bottom:35px;
            line-height:1.8;
            font-size:1.1rem;
        ">

            <strong>The Evolution of Digital Classrooms</strong><br><br>

            Online learning platforms have fundamentally transformed
            modern education systems by making materials accessible
            from anywhere in the world.

            Teachers can easily distribute digital resources,
            track student milestones, and conduct synchronous
            virtual discussions.

            However, an unexpected consequence of this shift is
            the rising rate of student digital fatigue, caused by
            extended hours staring at screens.

            <br><br>

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

        <!-- QUESTION 1 -->

        <div class="question-wrapper" data-step="1">

            <div class="quiz-progress">1 / 4</div>

            <p class="question-text">
                According to the passage, what causes digital fatigue among students?
            </p>

            <ul class="options-grid">
                <li class="option-item" data-correct="false">
                    A. Difficult assignments
                </li>

                <li class="option-item" data-correct="true">
                    B. Extended hours staring at screens
                </li>

                <li class="option-item" data-correct="false">
                    C. Internet connection problems
                </li>

                <li class="option-item" data-correct="false">
                    D. Expensive devices
                </li>
            </ul>

            <div class="explanation-card">
                <div class="explanation-title">
                    Scanning Question
                </div>

                <p>
                    The passage explicitly states that digital fatigue
                    is caused by extended hours staring at screens.
                </p>
            </div>

        </div>

        <!-- QUESTION 2 -->

        <div class="question-wrapper"
             data-step="2"
             style="display:none;">

            <div class="quiz-progress">2 / 4</div>

            <p class="question-text">
                Which component is mentioned in blended learning modules?
            </p>

            <ul class="options-grid">

                <li class="option-item" data-correct="false">
                    A. Virtual Reality
                </li>

                <li class="option-item" data-correct="true">
                    B. Traditional textbooks
                </li>

                <li class="option-item" data-correct="false">
                    C. Night classes
                </li>

                <li class="option-item" data-correct="false">
                    D. Mobile games
                </li>

            </ul>

            <div class="explanation-card">
                <div class="explanation-title">
                    Scanning Question
                </div>

                <p>
                    The passage directly mentions traditional offline textbooks.
                </p>
            </div>

        </div>

        <!-- QUESTION 3 -->

        <div class="question-wrapper"
             data-step="3"
             style="display:none;">

            <div class="quiz-progress">3 / 4</div>

            <p class="question-text">
                What is the main idea of the passage?
            </p>

            <ul class="options-grid">

                <li class="option-item" data-correct="false">
                    A. Technical specifications of online learning
                </li>

                <li class="option-item" data-correct="false">
                    B. Textbooks are better than technology
                </li>

                <li class="option-item" data-correct="true">
                    C. Benefits, drawbacks, and solutions of digital classrooms
                </li>

                <li class="option-item" data-correct="false">
                    D. Computer maintenance costs
                </li>

            </ul>

            <div class="explanation-card">
                <div class="explanation-title">
                    Skimming Question
                </div>

                <p>
                    This question asks for the overall idea of the passage,
                    not a specific detail.
                </p>
            </div>

        </div>

        <!-- QUESTION 4 -->

        <div class="question-wrapper"
             data-step="4"
             style="display:none;">

            <div class="quiz-progress">4 / 4</div>

            <p class="question-text">
                What solution do experts recommend to reduce digital fatigue?
            </p>

            <ul class="options-grid">

                <li class="option-item" data-correct="false">
                    A. Remove online learning
                </li>

                <li class="option-item" data-correct="true">
                    B. Physical movement during study blocks
                </li>

                <li class="option-item" data-correct="false">
                    C. Replace teachers with AI
                </li>

                <li class="option-item" data-correct="false">
                    D. More examinations
                </li>

            </ul>

            <div class="explanation-card">
                <div class="explanation-title">
                    Scanning Question
                </div>

                <p>
                    The passage clearly states that physical movement
                    intervals can help alleviate digital fatigue.
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

    if(currentStep <= 4){

        document.querySelector(
            `.question-wrapper[data-step="${currentStep}"]`
        ).style.display = 'block';

        this.style.display = 'none';

    }else{

        alert(
            "🎉 Congratulations! You have completed the Reading Strategies Practice."
        );

        location.reload();

    }

});

</script>
</body>
</html>