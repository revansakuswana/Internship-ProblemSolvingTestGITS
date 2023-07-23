<?php
function oeis($n) {
    $output = '';
    $num = 1;

    for ($i = 1; $i <= $n; $i++) {
        $output .= $num;
        if ($i < $n) {
            $output .= '-';
        }
        $num += $i;
    }

    return $output;
}

// Input
$input = 7;

// Output
$output = oeis($input);
echo "Input $input\n";
echo "Output: $output\n";
