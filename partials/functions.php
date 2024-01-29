<?php
    function pwdGen($length, $letters, $numbers, $symbols, $repeat){
        $lc_alphabet = 'abcdefghijklmnopqrstuvwxyz';
        $uc_alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $integers = '0123456789';
        $special_characters = '\!$%&/()=?[]{}@#§-_<>';

        //What characters can be chosen for the pwd?
        $pwd_characters = [];

        //Do we want letters in the pwd?
        if($letters){
            $pwd_characters [] = $lc_alphabet;
            $pwd_characters [] = $uc_alphabet;
        }

        //Do we want numbers in the pwd?
        if($numbers){
            $pwd_characters [] = $integers;
        }

        //Do we want symbols in the pwd?
        if($symbols){
            $pwd_characters [] = $special_characters;
        }

        //Can't have a password without anything in it!
        if(count($pwd_characters) == 0){
            return "can't generate a password using no symbols.";
        }

        $length = intval($length);
        $pwd = '';
        $i = 0;

        //No repeats means maximum length possible!
        if($length > array_sum(array_map('strlen', $pwd_characters)) && !$repeat){
            return "there aren't enough symbols to match that length without repeats!";
        }

        do{
            //Chose from which string to pick a character.
            $reference = rand(0, count($pwd_characters)-1);
            $options = $pwd_characters[$reference];
            $char = $options[rand(0, strlen($options)-1)];

            //Chain the character to the password.
            if($repeat || !str_contains($pwd, $char)){
                $pwd .= $char;
                $i++;
            }
        }while($i < $length);

        return $pwd;
    }
?>