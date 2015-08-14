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

        function test_zeroMatch_string()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "hello";
            $input_string = "Hi, my name is Casey";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(0, $result);
        }

        function test_oneMatch_string()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "hello";
            $input_string = "hello everybody, my name is Casey";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(1, $result);
        }

        function test_multiMatch_string()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "cat";
            $input_string = "The cat saw another cat who was a cat";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(3, $result);
        }

        function test_upperCase_input()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "CAt";
            $input_string = "The cat is a cat";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(2, $result);
        }

        function test_upperCase_string()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "cat";
            $input_string = "The Cat is a cAT";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(2, $result);
        }

        function test_numbers()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "12";
            $input_string = "My shopping list has 12 eggs, 12 gallons of milk, and 12 slices of bacon on it";

            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            $this->assertEquals(3, $result);
        }

    }

?>
