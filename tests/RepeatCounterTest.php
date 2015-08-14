<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_oneLetter_true()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "a";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_oneLetter_false()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "b";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(0, $result);
        }

        function test_oneWord_true()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "hello";
            $input_string = "hello";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(1, $result);
        }

        function test_oneWord_false()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "taco";
            $input_string = "bacon";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(0, $result);
        }

    }

?>
