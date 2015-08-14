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
        function test_countRepeats_twoWordNoMatch()
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

        //Tests a word against a phrase that has 2 matches
        function test_countRepeats_twoWordTwoMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "epicodus";
            $user_phrase = "epicodus is epicodus";

            //Act
            $result = $test_RepeatCounter->countRepeats($user_word, $user_phrase);

            //Assert
            $this->assertEquals("2", $result);
        }

        //Tests a word against a phrase with iRreGular capitalization
        function test_countRepeats_threeWordCapitalsPhrase()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "epicodus";
            $user_phrase = "EpiCodus iS epicodus and Epicodus is fun";

            //Act
            $result = $test_RepeatCounter->countRepeats($user_word, $user_phrase);

            //Assert
            $this->assertEquals("3", $result);
        }

        //Tests a word with IrReGular capitalization against a phrase with iRreGular capitalization
        function test_countRepeats_threeWordCapitalsWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "ePicoDus";
            $user_phrase = "EpiCodus iS epicodus and Epicodus is fun";

            //Act
            $result = $test_RepeatCounter->countRepeats($user_word, $user_phrase);

            //Assert
            $this->assertEquals("3", $result);
        }

        //Tests a word against a phrase with words and numbers
        function test_countRepeats_threeWordCapitalsWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "ePicoDus";
            $user_phrase = "EpiCodus iS epicodus and Epicodus is fun for at least 1 epicodus student";

            //Act
            $result = $test_RepeatCounter->countRepeats($user_word, $user_phrase);

            //Assert
            $this->assertEquals("3", $result);
        }
    }
?>
