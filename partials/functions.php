<?php
    function pwdGen($length){
        $lc_alphabet = 'abcdefghijklmnopqrstuvwxyz';
        $uc_alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $symbols = '\!$%&/()=?[]{}@#§-_<>';
        $pwd_characters = [
            $lc_alphabet,
            $uc_alphabet,
            $numbers,
            $symbols,
        ];
        $length = intval($length);
        $pwd = '';

        for($i = 0; $i<$length; $i++){
            $reference = rand(0, 3);
            $options = $pwd_characters[$reference];

            $pwd = $pwd.$options[rand(0, strlen($options)-1)];
        }

        return $pwd;
    }
?>