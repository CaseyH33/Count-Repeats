<?php

    class RepeatCounter
    {
        function countRepeats($input_word, $input_string)
        {
            $input_word = strtolower($input_word);
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
