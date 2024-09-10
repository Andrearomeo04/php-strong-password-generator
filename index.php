<?php 

function randomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $password ='';
    $charlen = strlen($chars);

    while (strlen($password) < $length) {
        $password .= $chars[rand(0, $charLength - 1)];
    }

    return $password;
    
}

if (isset($_GET['length']) && is_numeric($_GET['length'])) {

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./index.php" method="GET">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating my-3">
                                <input type="number" class="form-control w-25" id="length" name="length" min="8">
                                <label for="floatingInput">Lunghezza password</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Genera</button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</body>
</html>