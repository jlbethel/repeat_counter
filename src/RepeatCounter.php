<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_phrase)
        {
            $result = 0;

            if ($user_word === $user_phrase) {
                $result += 1;
            }

            return $result;
        }
    }
 ?>
