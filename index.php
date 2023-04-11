<?php
$paswword_length = intval($_GET['password-length'] ?? 0);

include __DIR__. '/function.php';

//Save password to variable
if($paswword_length !== 0){
    $password = set_password($paswword_length);
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <?php if($paswword_length !== 0) { ?>
            <div class="result">
                <h2>The generated password is: <strong><?php echo implode($password) ?></strong></h2>
                <p>La password è lungha <strong><?php echo $paswword_length ?> caratteri</strong></p>
            </div>
        <?php } ?>
    </main>
</body>

</html>