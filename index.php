<?php 

function randomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $password ='';
    $charlen = strlen($chars);

    while (strlen($password) < $_GET['length']) {
        $password .= $chars[rand(0, $charlen - 1)];

    }

    return $password;

}

$length = $_GET['length'];
$password = '';
$message = '';

if (isset($_GET['length']) && $_GET['length'] != '' && is_numeric($_GET['length'])) {
    if ($length >= 8) {
        $password = randomPassword($length);
    } else {
        $message = 'La password da generare deve essere di almeno 8 caratteri';
    }
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
                <form action="./index.php" method="get">
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
                <?php if (isset($password)) { ?>
                    <h1><?php echo $password ?></h1>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>