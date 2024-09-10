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
                                <input type="email" class="form-control w-25" id="floatingInput" placeholder="name@example.com">
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