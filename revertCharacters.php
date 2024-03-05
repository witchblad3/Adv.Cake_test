<?php
function revertCharacters($str) {
    $words = explode(' ', $str);
    $result = '';

    foreach ($words as $word) {
        $reversedWord = '';
        $punctuation = '';
        $letters = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);

        foreach ($letters as $letter) {
            if (preg_match('/[^\p{L}]/u', $letter)) {
                $punctuation .= $letter;
            } else {
                $reversedWord = $letter . $reversedWord;
            }
        }

        $result .= $reversedWord . $punctuation . ' ';
    }

    return rtrim($result);
}

$result = revertCharacters("Привет! Давно не виделись.");
echo $result;


