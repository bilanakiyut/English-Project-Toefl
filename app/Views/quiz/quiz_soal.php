<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz TOEFL</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root{
        --maroon-dark:#4A121A;
        --maroon-light:#9F4E5C;
        --gold:#9E8559;
        --gold-light:#E6DBC4;
        --cream:#FAF4E7;
        --card-white:#FFFDF9;
        --green:#A9D6A9;
        --gray:#D6D6D6;
        --yellow:#E7D6A0;
        --text-dark:#2a0d15;
    }

    *{ margin:0; padding:0; box-sizing:border-box; }

    body{
        font-family:'Poppins', sans-serif;
        background:var(--cream);
        color:var(--text-dark);
        min-height:100vh;
        padding:30px 0 60px;
    }

    .quiz-container{
        max-width:980px;
        margin:0 auto;
        padding:0 20px;
    }

    .quiz-header{
        background:linear-gradient(90deg, var(--cream) 0%, var(--maroon-dark) 25%, var(--maroon-dark) 75%, var(--cream) 100%);
        border-radius:14px;
        padding:18px 30px;
        text-align:center;
        margin-bottom:25px;
    }

    .quiz-header h1{
        font-family:'Playfair Display', serif;
        font-size:1.4rem;
        font-weight:700;
        color:#FFFDF9;
        letter-spacing:4px;
    }

    .quiz-topbar{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:20px;
    }

    .quiz-score{
        font-family:'Playfair Display', serif;
        font-size:1.6rem;
        font-weight:700;
        color:var(--maroon-dark);
    }

    .timer-group{
        display:flex;
        align-items:center;
        gap:12px;
    }

    .timer-badge{
        background:var(--gold);
        color:#FFFDF9;
        font-weight:700;
        font-size:1rem;
        padding:8px 22px;
        border-radius:20px;
        font-family:'Playfair Display', serif;
    }

    .timer-icon{
        width:38px;
        height:38px;
        border-radius:50%;
        background:var(--gold);
        display:flex;
        align-items:center;
        justify-content:center;
        color:#FFFDF9;
        font-size:1.1rem;
    }

    .quiz-main{
        display:grid;
        grid-template-columns:1.6fr 1fr;
        gap:25px;
        align-items:start;
    }

    .question-card{
        background:var(--card-white);
        border:1px solid var(--gold-light);
        border-radius:18px;
        padding:30px 35px;
        position:relative;
        box-shadow:0 10px 25px rgba(0,0,0,0.04);
        min-height:340px;
        display:flex;
        flex-direction:column;
    }

    .question-number{
        position:absolute;
        top:0;
        left:0;
        background:var(--gold);
        color:#FFFDF9;
        font-family:'Playfair Display', serif;
        font-weight:700;
        font-size:1.1rem;
        width:42px;
        height:42px;
        display:flex;
        align-items:center;
        justify-content:center;
        border-radius:18px 0 18px 0;
    }

    .question-text{
        margin-top:30px;
        margin-bottom:30px;
        font-size:1.15rem;
        line-height:1.7;
        color:var(--text-dark);
        text-align:center;
    }

    .question-text em{ font-style:italic; }

    .options-list{
        display:flex;
        flex-direction:column;
        gap:14px;
        flex:1;
    }

    .option-item{
        border:1px solid var(--gold-light);
        border-radius:10px;
        padding:14px 20px;
        font-size:1rem;
        text-align:center;
        cursor:pointer;
        background:#fff;
        transition:.2s;
        color:var(--text-dark);
    }

    .option-item:hover{ border-color:var(--gold); background:#FFFCF6; }

    .option-item.selected{
        border-color:var(--maroon-light);
        background:#FBEFEF;
        font-weight:600;
        color:var(--maroon-dark);
    }

    .option-item.option-input{ text-align:left; }

    .option-item input{
        width:100%;
        border:none;
        outline:none;
        font-family:'Poppins', sans-serif;
        font-size:1rem;
        background:transparent;
        color:var(--text-dark);
    }

    .question-nav{
        display:flex;
        justify-content:flex-end;
        gap:12px;
        margin-top:25px;
    }

    .nav-btn{
        width:42px;
        height:42px;
        border-radius:50%;
        border:1px solid var(--gold-light);
        background:#fff;
        color:var(--gold);
        font-size:1.1rem;
        cursor:pointer;
        display:flex;
        align-items:center;
        justify-content:center;
        transition:.2s;
    }

    .nav-btn:hover{ background:var(--gold); color:#fff; }
    .nav-btn:disabled{ opacity:0.4; cursor:not-allowed; }

    .question-map-card{
        background:var(--cream);
        border:1px solid var(--gold-light);
        border-radius:18px;
        padding:25px;
        box-shadow:0 10px 25px rgba(0,0,0,0.04);
    }

    .question-map-card h3{
        font-family:'Playfair Display', serif;
        font-size:1.3rem;
        color:var(--gold);
        margin-bottom:18px;
    }

    .map-grid-wrapper{
        max-height:280px;
        overflow-y:auto;
        padding-right:8px;
    }

    .map-grid-wrapper::-webkit-scrollbar{ width:6px; }
    .map-grid-wrapper::-webkit-scrollbar-track{ background:rgba(0,0,0,0.05); border-radius:10px; }
    .map-grid-wrapper::-webkit-scrollbar-thumb{ background:var(--gold); border-radius:10px; }

    .map-grid{
        display:grid;
        grid-template-columns:repeat(5, 1fr);
        gap:8px;
    }

    .map-item{
        border:1px solid var(--gold-light);
        border-radius:8px;
        background:#fff;
        text-align:center;
        padding:8px 0;
        font-size:0.9rem;
        font-weight:600;
        color:var(--text-dark);
        cursor:pointer;
        transition:.2s;
    }

    .map-item:hover{ border-color:var(--gold); }
    .map-item.current{ border-color:var(--maroon-light); box-shadow:0 0 0 2px rgba(159,78,92,0.3); }
    .map-item.answered{ background:var(--green); border-color:var(--green); }
    .map-item.doubt{ background:var(--yellow); border-color:var(--yellow); }
    .map-item.unanswered{ background:var(--gray); border-color:var(--gray); }

    /* ===== SUBMIT BUTTON (in sidebar) ===== */
    .submit-btn {
        margin-top: 20px;
        width: 100%;
        padding: 16px;
        background: var(--maroon-dark);
        color: #FFFDF9;
        border: none;
        border-radius: 12px;
        font-family: 'Playfair Display', serif;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 2px;
        cursor: pointer;
        transition: .2s;
    }

    .submit-btn:hover { background: #6b1a25; transform: translateY(-1px); }

    .submit-hint {
        margin-top: 10px;
        font-size: 0.8rem;
        color: #999;
        text-align: center;
        line-height: 1.4;
    }

    .bottom-bar{
        margin-top:25px;
        background:var(--card-white);
        border:1px solid var(--gold-light);
        border-radius:18px;
        overflow:hidden;
        box-shadow:0 10px 25px rgba(0,0,0,0.04);
    }

    .bottom-bar-top{
        height:14px;
        background:linear-gradient(90deg, var(--maroon-dark) 0%, var(--maroon-light) 100%);
    }

    .bottom-bar-buttons{
        display:grid;
        grid-template-columns:repeat(3, 1fr);
        gap:0;
    }

    .status-btn{
        border:none;
        padding:18px 0;
        font-family:'Playfair Display', serif;
        font-weight:700;
        font-size:1rem;
        letter-spacing:1px;
        cursor:pointer;
        color:var(--text-dark);
        transition:.2s;
    }

    .status-btn.answered{ background:var(--green); }
    .status-btn.unanswered{ background:var(--gray); }
    .status-btn.doubt{ background:var(--yellow); }
    .status-btn:hover{ opacity:0.85; }

    .legend{
        display:flex;
        justify-content:center;
        gap:30px;
        margin-top:18px;
        flex-wrap:wrap;
    }

    .legend-item{
        display:flex;
        align-items:center;
        gap:8px;
        font-size:0.9rem;
        color:var(--text-dark);
    }

    .legend-dot{
        width:16px;
        height:16px;
        border-radius:4px;
        border:1px solid rgba(0,0,0,0.1);
    }

    .legend-dot.answered{ background:var(--green); }
    .legend-dot.unanswered{ background:var(--gray); }
    .legend-dot.doubt{ background:var(--yellow); }

    /* ===== CONFIRMATION MODAL ===== */
    .modal-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(42, 13, 21, 0.6);
        backdrop-filter: blur(4px);
        z-index: 999;
        align-items: center;
        justify-content: center;
    }

    .modal-overlay.active { display: flex; }

    .modal-box {
        background: #FFFDF9;
        border-radius: 20px;
        padding: 40px 35px;
        max-width: 440px;
        width: 90%;
        text-align: center;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        animation: popIn 0.25s ease;
    }

    @keyframes popIn {
        from { transform: scale(0.9); opacity: 0; }
        to   { transform: scale(1);   opacity: 1; }
    }

    .modal-icon {
        font-size: 2.8rem;
        margin-bottom: 15px;
    }

    .modal-box h2 {
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        color: var(--maroon-dark);
        margin-bottom: 10px;
    }

    .modal-box p {
        font-size: 0.95rem;
        color: #777;
        margin-bottom: 8px;
        line-height: 1.5;
    }

    .modal-stats {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 10px;
        margin: 20px 0 25px;
    }

    .modal-stat {
        background: var(--cream);
        border: 1px solid var(--gold-light);
        border-radius: 12px;
        padding: 12px 8px;
    }

    .modal-stat .ms-val {
        font-family: 'Playfair Display', serif;
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--maroon-dark);
        display: block;
    }

    .modal-stat .ms-lbl {
        font-size: 0.75rem;
        color: #999;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .modal-stat.warn .ms-val { color: #c0392b; }
    .modal-stat.ok   .ms-val { color: #1e8449; }

    .modal-actions {
        display: flex;
        gap: 12px;
    }

    .modal-btn {
        flex: 1;
        padding: 14px;
        border-radius: 12px;
        border: none;
        font-family: 'Playfair Display', serif;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: .2s;
        letter-spacing: 1px;
    }

    .modal-btn.cancel {
        background: #f0f0f0;
        color: #666;
    }

    .modal-btn.cancel:hover { background: #e0e0e0; }

    .modal-btn.confirm {
        background: var(--maroon-dark);
        color: #FFFDF9;
    }

    .modal-btn.confirm:hover { background: #6b1a25; }

    @media (max-width:850px){
        .quiz-main{ grid-template-columns:1fr; }
        .question-card{ min-height:auto; }
        .map-grid-wrapper{ max-height:220px; }
    }

    @media (max-width:480px){
        .quiz-header h1{ font-size:1.1rem; letter-spacing:2px; }
        .quiz-score{ font-size:1.3rem; }
        .question-card{ padding:25px 20px; }
        .bottom-bar-buttons{ grid-template-columns:1fr; }
    }
</style>
</head>
<body>

<!--
    ====================================================================
    CATATAN INTEGRASI DATABASE (boleh dihapus setelah dibaca)
    ====================================================================
    1. Controller harus mengirim variabel $questions ke view ini, berupa
       array asosiatif per soal, minimal field:
           id         -> id unik soal (dipakai sebagai key jawaban)
           question   -> teks soal (boleh HTML, mis. <em>...</em>)
           option_b   -> teks pilihan B
           option_c   -> teks pilihan C
           option_d   -> teks pilihan D
       (Pilihan "A" sengaja TIDAK datang dari DB karena di desain ini
       slot A adalah kolom isian bebas / fill-in-the-blank.)

    2. Saat disubmit, server akan menerima POST:
           answers[<id_soal>] = <jawaban>
       Isi <jawaban>:
           - "B" / "C" / "D"  -> jika user klik salah satu pilihan tetap
           - teks bebas       -> jika user mengisi sendiri di kolom A
       Jadi di backend, cek dulu apakah value yang masuk persis "B"/"C"/"D";
       kalau bukan salah satu dari itu, berarti itu jawaban isian bebas.

    3. Sesuaikan action form di bawah (<?= base_url('toefl/submit') ?>)
       dan csrf_field() dengan helper framework yang dipakai.
    ====================================================================
-->

<form action="<?= base_url('quiz/submit') ?>" method="POST" id="quiz-form">
    <?= csrf_field() ?>

    <div class="quiz-container">

        <div class="quiz-header">
            <h1>QUIZ TOEFL</h1>
        </div>

        <div class="quiz-topbar">
            <div class="quiz-score" id="score-display">0/0</div>
            <div class="timer-group">
                <div class="timer-badge" id="timer-display">15s</div>
                <div class="timer-icon">⏱</div>
            </div>
        </div>

        <div class="quiz-main">

            <!-- QUESTION CARD -->
            <div class="question-card">
                <div class="question-number" id="question-number">1</div>

                <p class="question-text" id="question-text"></p>

                <div class="options-list" id="options-list"></div>

                <div class="question-nav">
                    <button type="button" class="nav-btn" id="prev-btn">◀</button>
                    <button type="button" class="nav-btn" id="next-btn">▶</button>
                </div>
            </div>

            <!-- QUESTION MAP + SUBMIT -->
            <div class="question-map-card">
                <h3>Question Map</h3>

                <div class="map-grid-wrapper">
                    <div class="map-grid" id="map-grid"></div>
                </div>

                <!-- SUBMIT BUTTON -->
                <button type="button" class="submit-btn" id="submit-btn">
                    ✔ Submit Quiz
                </button>
                <p class="submit-hint" id="submit-hint">
                    You have answered <strong id="answered-count">0</strong>/<span id="total-count">0</span> questions.
                </p>
            </div>

        </div>

        <!-- BOTTOM ACTION BAR -->
        <div class="bottom-bar">
            <div class="bottom-bar-top"></div>
            <div class="bottom-bar-buttons">
                <button type="button" class="status-btn answered" data-status="answered">Answered</button>
                <button type="button" class="status-btn unanswered" data-status="unanswered">Unanswered</button>
                <button type="button" class="status-btn doubt" data-status="doubt">Doubtful</button>
            </div>
        </div>

        <div class="legend">
            <div class="legend-item"><span class="legend-dot answered"></span> Answered</div>
            <div class="legend-item"><span class="legend-dot unanswered"></span> Unanswered</div>
            <div class="legend-item"><span class="legend-dot doubt"></span> Doubtful</div>
        </div>

    </div>

    <!-- Hidden inputs untuk SEMUA jawaban dibuat di sini tepat sebelum submit,
         karena hanya soal yang sedang tampil yang ada elemen-nya di DOM. -->
    <div id="hidden-answers-container" style="display:none;"></div>

    <!-- ===== CONFIRMATION MODAL ===== -->
    <div class="modal-overlay" id="modal-overlay">
        <div class="modal-box">
            <div class="modal-icon">📋</div>
            <h2>Submit Quiz?</h2>
            <p>Make sure you have reviewed all your answers before submitting.</p>

            <div class="modal-stats">
                <div class="modal-stat ok">
                    <span class="ms-val" id="modal-answered">0</span>
                    <span class="ms-lbl">Answered</span>
                </div>
                <div class="modal-stat warn">
                    <span class="ms-val" id="modal-unanswered">0</span>
                    <span class="ms-lbl">Unanswered</span>
                </div>
                <div class="modal-stat">
                    <span class="ms-val" id="modal-doubt">0</span>
                    <span class="ms-lbl">Doubtful</span>
                </div>
            </div>

            <div class="modal-actions">
                <button type="button" class="modal-btn cancel" id="modal-cancel">Back to Quiz</button>
                <button type="button" class="modal-btn confirm" id="modal-confirm">Yes, Submit</button>
            </div>
        </div>
    </div>

</form>

<script>
    console.log('SCRIPT JALAN');
    // Data soal datang dari database lewat controller.
    // $questions: array of { id, question, option_b, option_c, option_d }
    const QUESTIONS = <?= json_encode($questions) ?>;

const SECTIONS = [
    {
        category: 'structure',
        duration: 35 * 60
    },
    {
        category: 'listening',
        duration: 25 * 60
    },
    {
        category: 'reading',
        duration: 55 * 60
    }
];

let currentSection = 0;
let currentQuestion = 1;

let activeQuestions = QUESTIONS.filter(
    q => q.category.toLowerCase() === SECTIONS[currentSection].category
);

function getTotalQuestions() {
    return activeQuestions.length;
}

    const answers = {}; // { [questionId]: "B" | "C" | "D" | "<teks bebas>" }
    const status = Array(QUESTIONS.length + 1).fill('unanswered');

    const mapGrid                = document.getElementById('map-grid');
    const questionNumber         = document.getElementById('question-number');
    const scoreDisplay           = document.getElementById('score-display');
    const optionsList            = document.getElementById('options-list');
    const prevBtn                = document.getElementById('prev-btn');
    const nextBtn                = document.getElementById('next-btn');
    const submitBtn              = document.getElementById('submit-btn');
    const answeredCount          = document.getElementById('answered-count');
    const totalCount             = document.getElementById('total-count');
    const modalOverlay           = document.getElementById('modal-overlay');
    const modalCancel            = document.getElementById('modal-cancel');
    const modalConfirm           = document.getElementById('modal-confirm');
    const hiddenAnswersContainer = document.getElementById('hidden-answers-container');
    const quizForm                = document.getElementById('quiz-form');

    totalCount.textContent = getTotalQuestions();

    function countByStatus(s){ return status.filter(x => x === s).length; }

    function renderMap() {
    mapGrid.innerHTML = '';

    for(let i = 1; i <= getTotalQuestions(); i++) {

        const item = document.createElement('div');

        item.className = 'map-item ' + status[i];

        if(i === currentQuestion) {
            item.classList.add('current');
        }

        item.textContent = i;

        item.addEventListener('click', () => {
            currentQuestion = i;
            refresh();
        });

        mapGrid.appendChild(item);
    }
}

    // Render satu soal: kolom isian bebas (A) + 3 pilihan tetap (B/C/D),
    // markup-nya sama persis dengan versi hardcode aslinya.
    function loadQuestion(index){
        const q = activeQuestions[index - 1];

        let content = '';

        if(q.category === 'listening' && q.audio_file){
            content += `
                <div style="text-align:center;margin-bottom:20px;">
                    <audio controls id="question-audio">
                        <source src="/assets/sounds/${q.audio_file}" type="audio/mpeg">
                        Browser tidak mendukung audio.
                    </audio>
                </div>
            `;  
        }

        content += `<div>${q.question ?? ''}</div>`;

        document.getElementById('question-text').innerHTML = content;

        optionsList.innerHTML = `
            <div class="option-item" data-value="A">A. ${q.option_a}</div>
            <div class="option-item" data-value="B">B. ${q.option_b}</div>
            <div class="option-item" data-value="C">C. ${q.option_c}</div>
            <div class="option-item" data-value="D">D. ${q.option_d}</div>
        `;

        // Pulihkan jawaban yang sudah pernah diisi user untuk soal ini
        const saved = answers[q.id];
        if(saved === 'B' || saved === 'C' || saved === 'D'){
            const opt = optionsList.querySelector(`.option-item[data-value="${saved}"]`);
            if(opt) opt.classList.add('selected');
        } else if(saved){
            optionsList.querySelector('#free-text-input').value = saved;
        }
    }

    function updateScore(){

    const answered = countByStatus('answered');

    scoreDisplay.textContent =
        answered + '/' + getTotalQuestions();

    answeredCount.textContent = answered;
}

    function refresh(){

    loadQuestion(currentQuestion);

    questionNumber.textContent = currentQuestion;

    prevBtn.disabled = currentQuestion === 1;

    nextBtn.disabled =
        currentQuestion === getTotalQuestions();

    renderMap();

    updateScore();
}
    // klik pilihan B/C/D
    optionsList.addEventListener('click', (e) => {
        const opt = e.target.closest('.option-item');
        if(!opt || opt.classList.contains('option-input')) return;

        document.querySelectorAll('.option-item').forEach(o => o.classList.remove('selected'));
        opt.classList.add('selected');

        const q = activeQuestions[currentQuestion - 1];
        answers[q.id] = opt.dataset.value;
        status[currentQuestion] = 'answered';

        renderMap();
        updateScore();
    });

    // isian bebas (kolom A) — listener dipasang ulang tiap render lewat delegasi 'input'
    optionsList.addEventListener('input', (e) => {
        if(e.target.id !== 'free-text-input') return;

        const q = activeQuestions[currentQuestion - 1];
        const value = e.target.value.trim();

        if(value){
            answers[q.id] = value;
            status[currentQuestion] = 'answered';
        } else {
            delete answers[q.id];
            status[currentQuestion] = 'unanswered';
        }

        renderMap();
        updateScore();
    });

    // tombol status (bottom bar)
    document.querySelectorAll('.status-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            status[currentQuestion] = btn.dataset.status;
            refresh();
        });
    });

    // navigasi
    prevBtn.addEventListener('click', () => { if(currentQuestion > 1){ currentQuestion--; refresh(); } });
    nextBtn.addEventListener('click', () => {

    if(currentQuestion < getTotalQuestions()){

        currentQuestion++;

        refresh();
    }
});

    // Bangun hidden input answers[id] dari semua jawaban tersimpan,
    // supaya SEMUA soal ikut terkirim saat form di-submit (bukan cuma yang tampil).
    function buildHiddenAnswerInputs(){
        hiddenAnswersContainer.innerHTML = '';
        Object.keys(answers).forEach((qid) => {
            const input = document.createElement('input');
            input.type  = 'hidden';
            input.name  = `answers[${qid}]`;
            input.value = answers[qid];
            hiddenAnswersContainer.appendChild(input);
        });
    }

    // ===== SUBMIT FLOW =====
    submitBtn.addEventListener('click', () => {
        document.getElementById('modal-answered').textContent   = countByStatus('answered');
        document.getElementById('modal-unanswered').textContent = countByStatus('unanswered');
        document.getElementById('modal-doubt').textContent      = countByStatus('doubt');
        modalOverlay.classList.add('active');
    });

    modalCancel.addEventListener('click', () => {
        modalOverlay.classList.remove('active');
    });

    modalConfirm.addEventListener('click', () => {
        console.log('TOMBOL YES SUBMIT DIKLIK');
        // simpan ringkasan untuk dipakai halaman berikutnya (opsional, sifatnya tampilan saja)
        const quizData = {
            answered  : countByStatus('answered'),
            unanswered: countByStatus('unanswered'),
            doubt     : countByStatus('doubt'),
            total     : getTotalQuestions()
        };
        sessionStorage.setItem('quizResult', JSON.stringify(quizData));

        // pastikan jawaban soal yang sedang tampil ikut tersimpan sebelum dikumpulkan
        buildHiddenAnswerInputs();

        // submit form yang sesungguhnya ke server (sumber data utama untuk database)
        quizForm.submit();
        
    });

    // tutup modal kalau klik area luar
    modalOverlay.addEventListener('click', (e) => {
        if(e.target === modalOverlay) modalOverlay.classList.remove('active');
    });

    function nextSection()
{
    currentSection++;

    if(currentSection >= SECTIONS.length)
    {
        buildHiddenAnswerInputs();
        quizForm.submit();
        return;
    }

    activeQuestions = QUESTIONS.filter(
        q =>
            q.category.toLowerCase() ===
            SECTIONS[currentSection].category
    );

    currentQuestion = 1;
    status.fill('');

    totalCount.textContent = getTotalQuestions();


    timeLeft = SECTIONS[currentSection].duration;

    refresh();

    alert(
        'Section ' +
        SECTIONS[currentSection].category.toUpperCase() +
        ' dimulai'
    );
}

    // timer
    const timerDisplay = document.getElementById('timer-display');
    let timeLeft = SECTIONS[currentSection].duration;

function updateTimer()
{
    const minutes = Math.floor(timeLeft / 60);

    const seconds = timeLeft % 60;

    timerDisplay.textContent =
        `${minutes}:${seconds.toString().padStart(2,'0')}`;
}

updateTimer();

setInterval(() => {

    timeLeft--;

    if(timeLeft <= 0)
    {
        nextSection();
        return;
    }

    updateTimer();

}, 1000);

    refresh();
</script>
</body>
</html>