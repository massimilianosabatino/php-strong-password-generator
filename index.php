<?php
include __DIR__ . '/session.php';

if(isset($_GET['err'])){
    switch ($_GET['err']) {
        case 'need-opt':
            echo 'Select at least one option';
            break;
        
        default:
            echo 'Undefined error';
            break;
    }
}

$password_length = intval($_GET['password-length'] ?? 0);
include __DIR__ . '/function.php';

//Save password to variable
if ($password_length !== 0) {

    // $_SESSION['option'] = $option_selected;
    $option_selected = ($_GET['letters'] ?? '')  . ($_GET['numbers'] ?? '') . ($_GET['specials'] ?? '');
    $_SESSION['password'] = set_password($password_length, $option_selected);
    $_SESSION['password_length'] = $password_length;
    header('Location: password-generated.php');
    exit;
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
    <main class="p-3">
        <div class="form mb-4">
            <form action="index.php" method="get">
                <div class="mb-3">
                    <label for="password-length" class="form-label">Select password length</label>
                    <input type="number" class="form-control" id="password-length" name="password-length">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="letter" name="letters" checked>
                    <label class="form-check-label" for="letter">
                        Letters
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" id="number" name="numbers" checked>
                    <label class="form-check-label" for="number">
                        Numbers
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" id="special" name="specials" checked>
                    <label class="form-check-label" for="special">
                        Special characters
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>

</html>