<?php 
    if(isset($_GET['length']) && $_GET['length']!='' && $_GET['length'] > 0 ){
        $lc_alphabet = 'abcdefghijklmnopqrstuvwxyz';
        $uc_alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $symbols = '\!$%&/()=?[]{}@#§-_<>';
        $pwd_characters = [
            $lc_alphabet,
            $uc_alphabet,
            $numbers,
            $symbols,
        ];
        $length = intval($_GET['length']);
        $pwd = '';
        //var_dump($pwd_characters, $length);

        for($i = 0; $i<$length; $i++){
            $reference = rand(0, 3);
            $options = $pwd_characters[$reference];

            $pwd = $pwd.$options[rand(0, strlen($options)-1)];
        }

        //var_dump($pwd);
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
        <div class="container">
            <?php 
                if($pwd!=''){
                    echo 'Your password is: '.$pwd;
                }
            ?>
        </div>
    </body>
</html>