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

        function checkInputWord($input_word)
        {
            $input_check = explode(" ", $input_word);
            if(sizeof($input_check) > 1) {
                return true;
            }
        }

        function checkNullInputs($input_word, $input_string)
        {
            if((empty($input_word)) || (empty($input_string))) {
                return true;
            }
        }

    }
?>
