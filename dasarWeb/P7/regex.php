<?php
$pattern = '/[a-z]/'; // cocokkan huruf kecil
$text = 'This is a sample text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "tidak ada huruf kecil";
}