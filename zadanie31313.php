<?php



define("LOGIN", "admin");
define("PSW", "Fs~j4Ms|Go");

define("SUBMIT", "submit");



$form = [ "formName" => ["Login", "Password" , "submit"]];



$login = isset($_POST[$form["formName"][0]]) ? $_POST[$form["formName"][0]] : "";
$password = isset($_POST[$form["formName"][1]]) ? $_POST[$form["formName"][1]] : "";

$submit = isset($_POST[$form["formName"][2]]) ? $_POST[$form["formName"][2]] : "";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <style>
        body {
            width: 40%;
            margin: 0 auto;
        }
        form {
            margin: 40px 0;
        }
        a {
            display: block;
        }
        .messageIncorrect {
            color: red;
            font-weight: bold;
        }
        
</style>
</head>
<body>
    <?php   
            if ($login!=LOGIN && $password!=PSW):?>
    <form action="#" method="POST">
        <input type="hidden" name="<?=$form["formName"][2]?>" value="<?=$form["formName"][2]?>">
        <div class="form-group">
            <label for="formGroupExampleInput"><?=$form["formName"][0]?></label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="<?=$form["formName"][0]?>" placeholder=<?=$form["formName"][0]?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><?=$form["formName"][1]?></label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="<?=$form["formName"][1]?>" placeholder="<?=$form["formName"][1]?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php endif;?>

    <?php
    
        if ($login==LOGIN && $password==PSW)
            echo"<div class=\"hiddenPart\">
                <a href=\"#\">Ссылка1</a><a href=\"#\">Ссылка2</a><a href=\"#\">Ссылка3</a><a href=\"#\">Ссылка4</a>
				
		
	


            </div>";
       
       if(($login!=LOGIN || $password !=PSW) && $submit==SUBMIT)
            echo"<div class=\"messageIncorrect\">
                 Введенные значения некоректны!
            </div>"   ?>
</body>
</html>