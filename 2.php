<?php
function getDenseRanking($leaderboard, $gitsScores) {
    // Menghilangkan skor ganda pada leaderboard
    $uniqueLeaderboard = array_unique($leaderboard);

    // Menggabungkan skor GITS dengan leaderboard dan mengurutkannya
    $allScores = array_merge($gitsScores, $uniqueLeaderboard);
    rsort($allScores);

    // Membuat associative array untuk menyimpan peringkat pemain berdasarkan skornya
    $rankings = [];
    $rank = 1;
    foreach ($allScores as $score) {
        if (!isset($rankings[$score])) {
            $rankings[$score] = $rank;
            $rank++;
        }
    }

    // Mendapatkan peringkat GITS setiap kali permainan selesai
    $gitsRankings = [];
    foreach ($gitsScores as $gitsScore) {
        $gitsRankings[] = $rankings[$gitsScore];
    }

    return $gitsRankings;
}

// Input
$leaderboard = [100, 100, 50, 40, 40, 20, 10];
$gitsScores = [5, 25, 50, 120];

// Output
$output = getDenseRanking($leaderboard, $gitsScores);
echo implode(" ", $output);
