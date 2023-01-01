<?php
    const BR = '<br>';
    function to_sentence($array, $oxford_comma) {

        $last_word = array_pop($array);
        // return $last_word;
        // var_dump($array);
        if($array == 0) {
            return $last_word;
        }

        $sentence = implode(', ', $array);

        if($oxford_comma && count($array) > 1) {
            $sentence .= ',';
        }

        $sentence .= " and " . $last_word;

        return $sentence;
    }

    $letters = ['a', 'b', 'c', 'd'];
    $lettersLast = ['a'];

    // echo to_sentence($letters, true) . BR;
    echo to_sentence($lettersLast, true) . BR;
    // a, b, c, and d

    echo to_sentence($letters, false);
?>