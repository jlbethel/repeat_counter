<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_phrase)
        {
            //Not an exhaustive list of characters in $punctuation_array feel free to add more.
            $punctuation_array = array('!', '.', ',', ';', '?', '*', '-', '#', '@', '%', '/', '_', '(', ')', ':', '"', '&');
            $no_punctuation_phrase = str_replace($punctuation_array, "", $user_phrase);
            $user_lcword = strtolower($user_word);
            $user_lcphrase = strtolower($no_punctuation_phrase);
            $phrase_array = explode(" ", $user_lcphrase);
            $result = 0;

            //Begin foreach loop to test the user's word against the user's phrase
            foreach ($phrase_array as $word) {
                if ($user_lcword === $word) {
                    $result += 1;
                }
            }
            //Returns a count if there is at least one matching word, otherwise indicates there were no matches
            if ($result <= 0) {
                return "Your word does not appear in the given phrase.";
            }else {
                return "Your word appeard  $result time(s).";
            }

        }
    }
 ?>
