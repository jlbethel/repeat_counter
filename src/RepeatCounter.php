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
            return $result;
        }
    }
 ?>
