<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_phrase)
        {
            $result = 0;
            $phrase_array = explode(" ", $user_phrase);

            //Begin foreach loop to test the user's word against the user's phrase
            foreach ($phrase_array as $word) {
                if ($user_word === $word) {
                    $result += 1;
                }
            }
            //Returns a count if there is at least one matching word, otherwise indicates there were no matches
            if ($result <= 0) {
                return "Your word does not appear in the given phrase.";
            }else {
                return $result;
            }

        }
    }
 ?>
