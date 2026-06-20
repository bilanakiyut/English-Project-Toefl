<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>History - Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root{
        --maroon-dark:#4A121A;
        --maroon-darker:#3A0E14;
        --gold:#9E8559;
        --gold-light:#E6DBC4;
        --cream:#FAF1DC;
        --card-white:#FFFDF9;
        --row-bg:#D9C3B8;
        --green:#3FA34D;
        --red:#A32D2D;
        --text-dark:#2a0d15;
    }

    *{ margin:0; padding:0; box-sizing:border-box; }

    body{
        font-family:'Poppins', sans-serif;
        background:#F5F2EC;
        color:var(--text-dark);
        min-height:100vh;
    }

    /* ================= TOP WHITE AREA ================= */
    .top-area{
        background:#FAFAF8;
        padding:35px 60px 50px;
    }

    .back-link{
        display:inline-flex;
        align-items:center;
        gap:10px;
        text-decoration:none;
        color:var(--maroon-dark);
        font-weight:700;
        font-size:1.2rem;
        margin-bottom:30px;
    }

    .back-link svg{
        width:28px;
        height:28px;
    }

    .section-title{
        font-family:'Playfair Display', serif;
        font-size:2.2rem;
        font-weight:700;
        color:var(--maroon-dark);
        margin-bottom:20px;
        letter-spacing:1px;
    }

    /* ================= GRAFIK CARD ================= */
    .grafik-card{
        background:var(--cream);
        border-radius:18px;
        padding:30px 40px;
        box-shadow:0 12px 25px rgba(0,0,0,0.08);
        max-width:1180px;
        margin:0 auto;
    }

    .grafik-chart-wrapper{
        position:relative;
        width:100%;
        height:340px;
    }

    /* ================= BOTTOM MAROON AREA ================= */
    .bottom-area{
        background:var(--maroon-dark);
        padding:50px 60px 60px;
    }

    .history-title{
        font-family:'Playfair Display', serif;
        font-size:2.2rem;
        font-weight:700;
        color:var(--cream);
        margin-bottom:25px;
        letter-spacing:1px;
    }

    .history-panel{
        background:var(--cream);
        border-radius:18px;
        padding:25px 15px 25px 25px;
        max-width:1180px;
        margin:0 auto;
        box-shadow:0 12px 25px rgba(0,0,0,0.15);
    }

    .history-list{
        display:flex;
        flex-direction:column;
        gap:18px;
        max-height:480px;
        overflow-y:auto;
        padding-right:12px;
    }

    .history-list::-webkit-scrollbar{ width:8px; }
    .history-list::-webkit-scrollbar-track{ background:rgba(0,0,0,0.05); border-radius:10px; }
    .history-list::-webkit-scrollbar-thumb{ background:var(--gold); border-radius:10px; }

    /* ---- single history row ---- */
    .history-row{
        background:var(--row-bg);
        border-radius:14px;
        padding:18px 25px;
        display:grid;
        grid-template-columns:auto 1.5fr 1.8fr auto auto auto;
        align-items:center;
        gap:25px;
    }

    .history-icon{
        width:55px;
        height:55px;
        border-radius:10px;
        background:var(--maroon-dark);
        display:flex;
        align-items:center;
        justify-content:center;
        flex-shrink:0;
    }

    .history-icon svg{
        width:28px;
        height:28px;
        stroke:var(--cream);
    }

    .history-test{
        display:flex;
        flex-direction:column;
        gap:4px;
    }

    .history-test .test-name{
        font-family:'Playfair Display', serif;
        font-weight:700;
        font-size:1.5rem;
        color:var(--maroon-dark);
    }

    .history-test .test-date{
        display:flex;
        align-items:center;
        gap:6px;
        font-size:0.9rem;
        color:#6a5750;
    }

    .history-test .test-date svg{
        width:14px;
        height:14px;
    }

    .history-understanding{
        font-size:0.9rem;
        line-height:1.6;
        color:var(--text-dark);
    }

    .history-understanding strong{
        display:block;
        text-align:center;
        font-family:'Playfair Display', serif;
        font-size:1rem;
        margin-bottom:4px;
        color:var(--maroon-dark);
    }

    .understanding-grid{
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:0 14px;
    }

    .history-correct, .history-incorrect{
        display:flex;
        flex-direction:column;
        align-items:center;
        gap:6px;
        font-size:0.95rem;
        color:#5c4a44;
    }

    .stat-value{
        display:flex;
        align-items:center;
        gap:6px;
        font-size:1.1rem;
        font-weight:600;
    }

    .stat-icon{
        width:20px;
        height:20px;
        border-radius:50%;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-shrink:0;
    }

    .stat-icon.correct{ background:var(--green); }
    .stat-icon.incorrect{ background:var(--red); }

    .stat-icon svg{
        width:12px;
        height:12px;
        stroke:#fff;
    }

    .history-score{
        text-align:center;
    }

    .history-score .score-label{
        font-size:0.85rem;
        letter-spacing:1px;
        color:#6a5750;
        margin-bottom:2px;
    }

    .history-score .score-value{
        font-family:'Playfair Display', serif;
        font-weight:700;
        font-size:1.7rem;
        color:var(--maroon-dark);
    }

    /* divider between sections */
    .history-row::after{
        content:"";
    }

    /* ================= EMPTY STATE ================= */
    .empty-state{
        text-align:center;
        padding:50px 20px;
        color:#6a5750;
    }

    .empty-state p{
        font-size:1rem;
        margin-top:10px;
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width:900px){
        .top-area, .bottom-area{
            padding-left:25px;
            padding-right:25px;
        }

        .grafik-card, .history-panel{
            padding:20px;
        }

        .history-row{
            grid-template-columns:1fr;
            text-align:center;
            gap:14px;
        }

        .history-icon{
            margin:0 auto;
        }

        .history-test .test-date{
            justify-content:center;
        }

        .understanding-grid{
            grid-template-columns:1fr;
            text-align:center;
        }

        .history-correct, .history-incorrect{
            flex-direction:row;
            justify-content:center;
        }
    }

    @media (max-width:480px){
        .section-title, .history-title{
            font-size:1.6rem;
        }

        .grafik-chart-wrapper{
            height:260px;
        }
    }
</style>
</head>
<body>

    <!-- ================= TOP AREA: BACK + GRAFIK ================= -->
    <div class="top-area">

        <a href="<?= base_url('dashboard_history') ?>" class="back-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5"></path>
                <path d="M12 19l-7-7 7-7"></path>
            </svg>
            BACK
        </a>

        <h2 class="section-title">Grafik</h2>

        <div class="grafik-card">
            <div class="grafik-chart-wrapper">
                <canvas id="scoreChart" role="img" aria-label="Line chart showing score progression across tests"></canvas>
            </div>
        </div>

    </div>

    <!-- ================= BOTTOM AREA: HISTORY LIST ================= -->
    <div class="bottom-area">

        <h2 class="history-title">History</h2>

        <div class="history-panel">

            <div class="history-list" id="history-list">
                <!-- Rows are rendered by JS from historyData below.
                     In CodeIgniter, replace this block with a PHP foreach
                     looping through $history (data from the database). -->
            </div>

        </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
<script>

/*
    Dummy data representing every quiz attempt by the user.
    Each time a user finishes quiz_soal, a new entry should be
    pushed here (in real implementation: a new row in DB table `quiz_results`).
*/
const historyData = [
    {
        testNumber: 1,
        date: "19 Okt 2017",
        structure: 100,
        reading: 60,
        writing: 80,
        listening: 40,
        correct: 30,
        incorrect: 80,
        score: 380
    },
    {
        testNumber: 2,
        date: "30 Okt 2018",
        structure: 100,
        reading: 60,
        writing: 80,
        listening: 40,
        correct: 30,
        incorrect: 80,
        score: 470
    },
    {
        testNumber: 3,
        date: "1 Okt 2019",
        structure: 100,
        reading: 60,
        writing: 80,
        listening: 40,
        correct: 30,
        incorrect: 80,
        score: 380
    },
    {
        testNumber: 4,
        date: "9 Okt 2020",
        structure: 100,
        reading: 60,
        writing: 80,
        listening: 40,
        correct: 30,
        incorrect: 80,
        score: 500
    },
    {
        testNumber: 5,
        date: "14 Sep 2021",
        structure: 100,
        reading: 60,
        writing: 80,
        listening: 40,
        correct: 30,
        incorrect: 80,
        score: 560
    },
    {
        testNumber: 6,
        date: "2 Mar 2022",
        structure: 100,
        reading: 60,
        writing: 80,
        listening: 40,
        correct: 30,
        incorrect: 80,
        score: 677
    }
];

/* ---- render history rows ---- */
const listContainer = document.getElementById('history-list');

if(historyData.length === 0){
    listContainer.innerHTML = '<div class="empty-state"><p>Belum ada riwayat tes. Mulai kerjakan Quiz TOEFL untuk melihat hasilmu di sini.</p></div>';
}else{
    historyData.forEach(item => {
        const row = document.createElement('div');
        row.className = 'history-row';
        row.innerHTML = `
            <div class="history-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 17l5-5 4 4 8-8"></path>
                    <path d="M14 8h7v7"></path>
                </svg>
            </div>

            <div class="history-test">
                <span class="test-name">Test ${item.testNumber}</span>
                <span class="test-date">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                        <path d="M16 2v4M8 2v4M3 10h18"></path>
                    </svg>
                    ${item.date}
                </span>
            </div>

            <div class="history-understanding">
                <strong>Tingkat Pemahaman</strong>
                <div class="understanding-grid">
                    <span>Structure : ${item.structure}%</span>
                    <span>Reading&nbsp; : ${item.reading}%</span>
                    <span>Writting&nbsp; : ${item.writing}%</span>
                    <span>Listening : ${item.listening}%</span>
                </div>
            </div>

            <div class="history-correct">
                Correct
                <span class="stat-value">
                    <span class="stat-icon correct">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                    </span>
                    ${item.correct}
                </span>
            </div>

            <div class="history-incorrect">
                Incorrect
                <span class="stat-value">
                    <span class="stat-icon incorrect">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6L6 18M6 6l12 12"></path>
                        </svg>
                    </span>
                    ${item.incorrect}
                </span>
            </div>

            <div class="history-score">
                <div class="score-label">SCORE</div>
                <div class="score-value">${item.score}</div>
            </div>
        `;
        listContainer.appendChild(row);
    });
}

/* ---- render Grafik (line chart of score per attempt) ---- */
const ctx = document.getElementById('scoreChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: historyData.map(item => 'Test ' + item.testNumber),
        datasets: [{
            label: 'Score',
            data: historyData.map(item => item.score),
            borderColor: '#6B5B2A',
            backgroundColor: '#6B5B2A',
            pointBackgroundColor: '#3A2E12',
            pointBorderColor: '#3A2E12',
            pointRadius: 6,
            pointHoverRadius: 7,
            borderWidth: 2.5,
            tension: 0.25,
            fill: false
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: '#4A121A',
                titleColor: '#FAF1DC',
                bodyColor: '#FAF1DC',
                padding: 10,
                cornerRadius: 8
            }
        },
        scales: {
            x: {
                grid: { display: false },
                ticks: {
                    color: '#5c4a44',
                    font: { family: 'Poppins', size: 12 }
                }
            },
            y: {
                grid: { color: 'rgba(0,0,0,0.06)' },
                ticks: {
                    color: '#5c4a44',
                    font: { family: 'Poppins', size: 12 },
                    callback: (value) => value
                }
            }
        }
    }
});

</script>

</body>
</html>