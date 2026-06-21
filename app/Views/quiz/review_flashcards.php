<?php
/**
 * View: review_flashcards.php
 * -----------------------------------------------------------------
 * Versi dinamis dari halaman "Review Flashcards".
 * Semua data (profil, statistik, akurasi, daftar flashcard) diambil
 * dari $data yang dikirim controller — TIDAK ADA data hardcode lagi.
 *
 * Variabel yang HARUS dikirim dari Controller ke view ini:
 *
 * $user = [
 *     'name'        => 'Alya Zilyanti',
 *     'avatar_url'  => null,              // null -> pakai ikon default
 *     'program'     => 'TOEFL Practice',
 * ];
 *
 * $topics = ['Structure', 'Writing', 'Reading', 'Listening'];
 *
 * $stats = [
 *     'rank'               => 19,
 *     'total_participants' => 30,
 *     'score'              => 493,
 *     'time_hours'         => 12,
 *     'time_minutes'       => 45,
 * ];
 *
 * $accuracy = [
 *     'percent'   => 60,
 *     'correct'   => 84,
 *     'incorrect' => 56,
 *     'total'     => 140,
 * ];
 *
 * $flashcards = [
 *     [
 *         'is_correct'   => true,
 *         'question_text'=> 'Medical researchers discovered that the psychologi...',
 *         'options' => [
 *             ['letter' => 'A', 'text' => 'crisis',   'is_correct' => false, 'is_selected' => false],
 *             ['letter' => 'B', 'text' => 'crisises', 'is_correct' => false, 'is_selected' => false],
 *             ['letter' => 'C', 'text' => 'crises',   'is_correct' => true,  'is_selected' => true],
 *             ['letter' => 'D', 'text' => 'crisply',  'is_correct' => false, 'is_selected' => false],
 *         ],
 *     ],
 *     // ... dan seterusnya untuk setiap soal
 * ];
 *
 * Catatan: bagian "Grammar Note" SUDAH DIHAPUS dari tampilan ini karena
 * tabel `questions` di database belum punya kolom penjelasan grammar.
 * CSS untuk .grammar-note dibiarkan tetap ada di <style> (tidak dipakai),
 * jadi kalau suatu saat Anda menambah kolom penjelasan, tinggal munculkan
 * lagi bloknya tanpa perlu menulis ulang CSS.
 *
 * Lihat QuizReviewController.php untuk contoh bagaimana data ini
 * diambil dari database (tabel users, test_sessions, test_answers, questions).
 * -----------------------------------------------------------------
 */

// Fallback aman supaya view tidak fatal error kalau controller lupa kirim variabel
$user       = $user       ?? ['name' => '-', 'avatar_url' => null, 'program' => 'TOEFL Practice'];
$topics     = $topics     ?? [];
$stats      = $stats      ?? ['rank' => 0, 'total_participants' => 0, 'score' => 0, 'time_hours' => 0, 'time_minutes' => 0];
$accuracy   = $accuracy   ?? ['percent' => 0, 'correct' => 0, 'incorrect' => 0, 'total' => 0];
$flashcards = $flashcards ?? [];

// Helper escape kecil kalau fungsi esc() (CodeIgniter) tidak tersedia di framework Anda
if (!function_exists('esc')) {
    function esc($value) {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}
?>
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
        <a href="<?= base_url('quiz_toefl') ?>" class="back-btn">
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
                    <?php if (!empty($user['avatar_url'])): ?>
                        <img src="<?= esc($user['avatar_url']) ?>" alt="<?= esc($user['name']) ?>"
                             style="width:100%;height:100%;border-radius:50%;object-fit:cover;">
                    <?php else: ?>
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
                        </svg>
                    <?php endif; ?>
                </div>
                <div class="profile-info">
                    <h2><?= esc($user['name']) ?></h2>
                    <div class="subtitle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                        <?= esc($user['program']) ?>
                    </div>
                    <div class="topic-tags">
                        <?php foreach ($topics as $topic): ?>
                            <span class="topic-tag"><?= esc($topic) ?></span>
                        <?php endforeach; ?>
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
                        <div class="value"><?= (int) $stats['rank'] ?><span>/<?= (int) $stats['total_participants'] ?></span></div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="stat-icon score">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <div class="stat-info">
                        <div class="label">Score</div>
                        <div class="value"><?= (int) $stats['score'] ?></div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="stat-icon time">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="stat-info">
                        <div class="label">Time Spent</div>
                        <div class="value"><?= (int) $stats['time_hours'] ?>h <span><?= (int) $stats['time_minutes'] ?>m</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accuracy Card -->
        <div class="accuracy-card">
            <div class="accuracy-label">Accuracy</div>
            <div class="accuracy-value"><?= (int) $accuracy['percent'] ?>%</div>
            <div class="accuracy-bar-wrap">
                <div class="accuracy-bar-fill" style="width: <?= (int) $accuracy['percent'] ?>%;"></div>
            </div>
            <div class="accuracy-detail">
                <span class="correct">&#10003; <?= (int) $accuracy['correct'] ?> Correct</span>
                <span class="incorrect">&#10007; <?= (int) $accuracy['incorrect'] ?> Incorrect</span>
            </div>
            <div style="font-size:0.85rem; opacity:0.6; margin-top:4px; font-family:sans-serif; letter-spacing:1px;">
                out of <?= (int) $accuracy['total'] ?> questions
            </div>
        </div>

    </div>

    <!-- REVIEW HEADER -->
    <div class="review-header">
        <h1>Review Flashcards</h1>
    </div>

    <!-- FLASHCARD GRID -->
    <div class="flashcards-grid">

        <?php if (empty($flashcards)): ?>
            <p style="grid-column: 1 / -1; text-align:center; color:#999; font-style:italic;">
                Belum ada data flashcard untuk percobaan kuis ini.
            </p>
        <?php endif; ?>

        <?php foreach ($flashcards as $i => $card):
            $statusClass = $card['is_correct'] ? 'correct' : 'incorrect';
            $statusLabel = $card['is_correct'] ? '&#10003; Correct' : '&#10007; Incorrect';
        ?>
        <div class="flashcard <?= $statusClass ?>">
            <div class="card-header">
                <span class="card-number">Question <?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                <span class="card-status-tag"><?= $statusLabel ?></span>
            </div>
            <div class="card-body">
                <p class="question-sentence">"<?= esc($card['question_text']) ?>"</p>
                <ul class="options-list">
                    <?php foreach ($card['options'] as $opt):
                        $optClass = 'neutral';
                        $optIcon  = '';
                        if (!empty($opt['is_correct'])) {
                            $optClass = 'is-correct';
                            $optIcon  = '&#10003;';
                        } elseif (!empty($opt['is_selected'])) {
                            $optClass = 'is-wrong-pick';
                            $optIcon  = '&#10007;';
                        }
                    ?>
                    <li class="opt <?= $optClass ?>">
                        <span class="opt-letter"><?= esc($opt['letter']) ?></span>
                        <span><?= esc($opt['text']) ?></span>
                        <?php if ($optIcon): ?>
                            <span class="opt-icon"><?= $optIcon ?></span>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <!-- Bagian Grammar Note sengaja dihapus: tabel questions belum
                     punya kolom penjelasan. CSS .grammar-note tetap dibiarkan
                     ada di <style> kalau-kalau nanti mau dipakai lagi. -->
            </div>
        </div>
        <?php endforeach; ?>

    </div>

    <!-- FINISH BUTTON -->
    <div class="finish-section">
        <a href="<?= base_url('quiz_toefl') ?>" class="finish-btn" style="text-decoration:none; display:inline-block;">
            Back to Home
        </a>
    </div>

</body>
</html>