<?php

    class RepeatCounter
    {
        function countRepeats($input_word, $input_string)
        {
            if($input_word == $input_string) {
                return 1;
            } else {
                return 0;
            }
        }

    }
?>
