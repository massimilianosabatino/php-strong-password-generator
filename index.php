<?php
$paswword_length = intval($_GET['password-length']);

var_dump($paswword_length);
//Array letters lowercase and uppercase
$letters = range('a', 'z');
array_push($letters, ...range('A', 'Z'));

//Array numbers
$numbers = range(0, 9);

//Array special characters
$special = ['/', '[', '\\', '\'', '^', '£', '$', '%', '&', '*', '(', ')', '}', '{', '@', '#', '~', '?', '>', '<', '>', ',', '|', ',', '=', '_', '+', '!', '-', ']'];

//Function to generate random password (Arguments are: password length, array letters, array number, array special characters)
function set_password($length, $letter, $number, $character)
{
    for ($i = 0; $i < $length; $i++) {

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
foreach ($password as $el) {
    echo $el;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- /Bootstrap CDN -->
</head>

<body>
    <header>
        <h1>Password generator</h1>
    </header>
    <main>
        <form action="index.php" method="get">
            <div class="mb-3">
                <label for="password-length" class="form-label">Select paswword length</label>
                <input type="number" class="form-control" id="password-length" name="password-length">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</body>

</html>