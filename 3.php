<?php
function isBalancedBracket($input) {
    $stack = [];
    $bracketPairs = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    foreach (str_split($input) as $char) {
        if (in_array($char, ['(', '{', '['])) {
            // Jika karakter adalah braket buka, masukkan ke dalam stack
            array_push($stack, $char);
        } else {
            // Jika karakter adalah braket tutup, cek dengan braket terakhir di stack
            $lastBracket = array_pop($stack);

            if ($lastBracket !== $bracketPairs[$char]) {
                return "NO";
            }
        }
    }

    // Jika stack masih terisi, berarti tanda kurung tidak seimbang
    if (!empty($stack)) {
        return "NO";
    }

    return "YES";
}

// Input dan Output sampel 1
$input1 = "{[()]}";
echo "Input: $input1\n";
echo "Output: " . isBalancedBracket($input1) . "\n";

// Input dan Output sampel 2
$input2 = "{[(])}";
echo "Input: $input2\n";
echo "Output: " . isBalancedBracket($input2) . "\n";

// Input dan Output sampel 3
$input3 = "{(([])[])[]}";
echo "Input: $input3\n";
echo "Output: " . isBalancedBracket($input3) . "\n";