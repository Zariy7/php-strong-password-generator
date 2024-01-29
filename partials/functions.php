<?php
    function pwdGen($length, $letters, $numbers, $symbols){
        $lc_alphabet = 'abcdefghijklmnopqrstuvwxyz';
        $uc_alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $integers = '0123456789';
        $symbols = '\!$%&/()=?[]{}@#§-_<>';
        
        $pwd_characters = [
            $lc_alphabet,
            $uc_alphabet,
            $integers,
            $symbols,
        ];
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