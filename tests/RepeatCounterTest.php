<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_oneLetter()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "a";
            $user_phrase = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats($user_word, $user_phrase);

            //Assert
            $this->assertEquals("1", $result);
        }

        function test_countRepeats_twoWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "a";
            $user_phrase = "a dog";

            //Act
            $result = $test_RepeatCounter->countRepeats($user_word, $user_phrase);

            //Assert
            $this->assertEquals("1", $result);
        }
        }
    }
?>
