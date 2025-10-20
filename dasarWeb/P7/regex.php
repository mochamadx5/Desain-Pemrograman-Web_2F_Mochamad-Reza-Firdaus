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
$pattern = '/apple/';
$replacement = 'banana';
$text = '<br> <br> I like apple pie.';

$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text; // Output: "I like banana pie."

$pattern = '/go{2,3}d/'; // Cocokkan "good" (2 o) atau "goood" (3 o)
$text = 'god is good and goood.';

if (preg_match($pattern, $text, $matches)) {
    echo "<br><br>Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>