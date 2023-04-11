<?php

// include __DIR__. '/session.php';





//Function to generate random password (Arguments are: password length, array letters, array number, array special characters)
// function set_password($length) {
    
//     //Array letters lowercase and uppercase
//     $letters = range('a', 'z');
//     array_push($letters, ...range('A', 'Z'));

//     //Array numbers
//     $numbers = range(0, 9);

//     //Array special characters
//     $special = ['/', '[', '\\', '\'', '^', '£', '$', '%', '&', '*', '(', ')', '}', '{', '@', '#', '~', '?', '>', '<', '>', ',', '|', ',', '=', '_', '+', '!', '-', ']'];

//     for ($i = 0; $i < $length; $i++) {

//         //Random array select 
//         $type = random_int(1, 3);

//         if ($type === 1) {
//             $select = $letters[random_int(0, count($letters) - 1)];
//         }
//         if ($type === 2) {
//             $select = $numbers[random_int(0, count($numbers) - 1)];
//         }
//         if ($type === 3) {
//             $select = $special[random_int(0, count($special) - 1)];
//         }

//         $password[] = $select;
//     };
//     return $password;
// };

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
    var_dump($option);
    if($option == 123 ){

        for ($i = 0; $i < $length; $i++) {

            //Random array select 
            $type = random_int(1, 3);

            if ($type === 1) {
                $select = get_letter();
            }
            if ($type === 2) {
                $select = get_number();
            }
            if ($type === 3) {
                $select = get_special();
            }

            $password[] = $select;
        };

        return $password;

    } elseif($option == 1){

        for ($i = 0; $i < $length; $i++) {

            $select = get_letter();

            $password[] = $select;
        };

        return $password;

    } elseif($option == 2){

        for ($i = 0; $i < $length; $i++) {

            $select = get_number();

            $password[] = $select;
        };
        
        return $password;

    } elseif($option == 3){

        for ($i = 0; $i < $length; $i++) {

            $select = get_special();

            $password[] = $select;
        };
        return $password;

    } elseif($option == 12){

        for ($i = 0; $i < $length; $i++) {

            //Random array select 
            $type = random_int(1, 2);

            if ($type === 1) {
                $select = get_letter();
            }
            if ($type === 2) {
                $select = get_number();
            }

            $password[] = $select;
        };
        return $password;
    } elseif($option == 13){

        for ($i = 0; $i < $length; $i++) {

            //Random array select 
            $type = random_int(1, 2);

            if ($type === 1) {
                $select = get_letter();
            }
            if ($type === 2) {
                $select = get_special();
            }

            $password[] = $select;
        };
        return $password;
    } elseif($option == 23){

        for ($i = 0; $i < $length; $i++) {

            //Random array select 
            $type = random_int(1, 2);

            if ($type === 1) {
                $select = get_number();
            }
            if ($type === 2) {
                $select = get_special();
            }

            $password[] = $select;
        };
        return $password;
    }
}
?>