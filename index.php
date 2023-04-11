<?php
$paswword_length = 8;


//Array letters lowercase and uppercase
$letters = range('a', 'z');
array_push($letters, ...range('A', 'Z'));

//Array numbers
$numbers = range(0, 9);

//Array special characters
$special = ['/', '[', '\\', '\'', '^', '£', '$', '%', '&', '*', '(', ')', '}', '{', '@', '#', '~', '?', '>', '<', '>', ',', '|', ',', '=', '_', '+', '!', '-', ']'];

//Function to generate random password (Arguments are: password length, array letters, array number, array special characters)
function set_password($length, $letter, $number, $character) {
    for ($i=0; $i < $length; $i++) {
        
        //Random array select 
        $type = random_int(1, 3);

        if ($type === 1) {
            $select = $letter[random_int(0, count($letter) - 1)];
        }
        if ($type === 2) {
            $select = $number[random_int(0, count($number) - 1)];
        }
        if ($type === 3) {
            $select = $character[random_int(0, count($character) - 1)];
        }
        
        $password[] = $select;
        
    };
    return $password;
}

//Save password to variable
$password = set_password($paswword_length, $letters, $numbers, $special);

//print variable
foreach ($password as $el){
    echo $el;
}

?>