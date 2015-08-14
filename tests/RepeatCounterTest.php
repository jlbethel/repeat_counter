<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        //Tests a one letter word against a one letter phrase
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

        //Tests a one letter word against a two word phrase
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

        //Tests a one letter word against a two word phrase with no matches
        function test_countRepeats_twoWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "a";
            $user_phrase = "the dog";

            //Act
            $result = $test_RepeatCounter->countRepeats($user_word, $user_phrase);

            //Assert
            $this->assertEquals("Your word does not appear in the given phrase.", $result);
        }

    }
?>
