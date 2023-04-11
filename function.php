<?php

//Function to generate random password (Arguments are: password length, array letters, array number, array special characters)
function set_password($length) {
    
    //Array letters lowercase and uppercase
    $letters = range('a', 'z');
    array_push($letters, ...range('A', 'Z'));

    //Array numbers
    $numbers = range(0, 9);

    //Array special characters
    $special = ['/', '[', '\\', '\'', '^', '£', '$', '%', '&', '*', '(', ')', '}', '{', '@', '#', '~', '?', '>', '<', '>', ',', '|', ',', '=', '_', '+', '!', '-', ']'];

    for ($i = 0; $i < $length; $i++) {

        //Random array select 
        $type = random_int(1, 3);

        if ($type === 1) {
            $select = $letters[random_int(0, count($letters) - 1)];
        }
        if ($type === 2) {
            $select = $numbers[random_int(0, count($numbers) - 1)];
        }
        if ($type === 3) {
            $select = $special[random_int(0, count($special) - 1)];
        }

        $password[] = $select;
    };
    return $password;
}

?>