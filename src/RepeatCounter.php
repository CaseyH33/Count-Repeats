<?php

    class RepeatCounter
    {
        function countRepeats($input_word, $input_string)
        {
            $input_word = strtolower($input_word);
            $input_string = preg_replace("/[^a-zA-Z 0-9]+/", "", $input_string);
            $input_array = explode(" ", $input_string);
            $count = 0;
            foreach($input_array as $word)
            {
                $word = strtolower($word);
                if($input_word == $word) {
                    ++$count;
                }
            }
            return $count;
        }

    }
?>
