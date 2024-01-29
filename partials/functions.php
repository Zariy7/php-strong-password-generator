<?php
    function pwdGen($length, $letters, $numbers, $symbols){
        $lc_alphabet = 'abcdefghijklmnopqrstuvwxyz';
        $uc_alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $integers = '0123456789';
        $symbols = '\!$%&/()=?[]{}@#§-_<>';

        $pwd_characters = [];

        if($letters){
            $pwd_characters [] = $lc_alphabet;
            $pwd_characters [] = $uc_alphabet;
        }

        if($numbers){
            $pwd_characters [] = $integers;
        }

        if($symbols){
            $pwd_characters [] = $symbols;
        }

        if(count($pwd_characters) == 0){
            $pwd = "Can't generate a password using no symbols.";
            return $pwd;
        }

        $length = intval($length);
        $pwd = '';

        for($i = 0; $i<$length; $i++){
            $reference = rand(0, count($pwd_characters)-1);
            $options = $pwd_characters[$reference];

            $pwd = $pwd.$options[rand(0, strlen($options)-1)];
        }

        return $pwd;
    }
?>