<?php

function get_letter(){
    //Array letters lowercase and uppercase
    $letters = range('a', 'z');
    array_push($letters, ...range('A', 'Z'));

    return $letters[random_int(0, count($letters) - 1)];
};

function get_number(){
    return random_int(0, 9);
};

function get_special(){
    //Array special characters
    $special = ['/', '[', '\\', '\'', '^', '£', '$', '%', '&', '*', '(', ')', '}', '{', '@', '#', '~', '?', '>', '<', '>', ',', '|', ',', '=', '_', '+', '!', '-', ']'];

    return $special[random_int(0, count($special) - 1)];   
};

function set_password($length, $option) {
    $setA = 1;
    $setB = 2;
    $setC = 3;
    $min = 1;
    $max = 2;

    switch ($option) {
        case 1:
            $min = 1;
            $max = 1;
            break;
        
        case 2:
            $min = 2;
            $max = 2;
            break;

        case 3:
            $min = 3;
            $max = 3;
            break;

        case 12:
            $min = 1;
            $max = 2;
            break;

        case 13:
            $min = 1;
            $max = 2;
            $setB = 0;
            $setC = 2;
            break;

        case 23:
            $min = 1;
            $max = 2;
            $setA = 0;
            $setC = 1;
            break;
        
        case '':
            header('Location: index.php?err=need-opt');
            die();           
            break;

        default:
            $min = 1;
            $max = 3;
            break;
    }
    for ($i = 0; $i < $length; $i++) {

        //Random array select 
        $type = random_int($min, $max);

        if ($type === $setA) {
            $select = get_letter();
        }
        if ($type === $setB) {
            $select = get_number();
        }
        if ($type === $setC) {
            $select = get_special();
        }

        $password[] = $select;
    };

    return $password;
}
?>