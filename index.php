<?php
    include __DIR__.'/partials/functions.php';

    if(isset($_GET['length']) && $_GET['length']!='' && $_GET['length'] > 0 ){
        session_start();
        $_SESSION['pwd'] = pwdGen($_GET['length']);
        
        header('Location: ./partials/pwdshow.php');
        exit();
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <form action="./index.php" method="GET">
                <label for="length" class="form-label">Length of Password:</label>
                <input type="number" name="length" class="form-control" min="0">
                <button type="submit" class="btn btn-secondary">Generate</button>
            </form>
        </div>
    </body>
</html>