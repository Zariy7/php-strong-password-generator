<?php
    include __DIR__.'/partials/functions.php';

    if(isset($_GET['length']) && $_GET['length']!='' && $_GET['length'] > 0 ){
        session_start();

        $letter_usage = false;
        if(isset($_GET['letters']) && $_GET['letters'] == 'true'){
            $letter_usage = true;
        }

        $number_usage = false;
        if(isset($_GET['numbers']) && $_GET['numbers'] == 'true'){
            $number_usage = true;
        }

        $symbols_usage = false;
        if(isset($_GET['symbols']) && $_GET['symbols'] == 'true'){
            $symbols_usage = true;
        }

        $repeat_chars = false;
        if(isset($_GET['repeat']) && $_GET['repeat'] == 'true'){
            $repeat_chars = true;
        }

        $_SESSION['pwd'] = pwdGen($_GET['length'], $letter_usage, $number_usage, $symbols_usage, $repeat_chars);
        
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

                <label for="letters">Use letters?</label>
                <input type="checkbox" id="letters" name="letters" value="true" checked>
                <label for="numbers">Use numbers?</label>
                <input type="checkbox" id="numbers" name="numbers" value="true" checked>
                <label for="symbols">Use symbols?</label>
                <input type="checkbox" id="symbols" name="symbols" value="true" checked>
                <label for="repeat">Repeat characters?</label>
                <input type="checkbox" id="repeat" name="repeat" value="true" checked>
                <button type="submit" class="btn btn-secondary">Generate</button>
            </form>
        </div>
    </body>
</html>