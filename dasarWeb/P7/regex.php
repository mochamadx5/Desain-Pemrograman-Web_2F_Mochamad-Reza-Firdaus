<?php
$pattern = '/[a-z]/'; // cocokkan huruf kecil
$text = 'This is a sample text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "tidak ada huruf kecil";
}
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "<br> <br> Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}