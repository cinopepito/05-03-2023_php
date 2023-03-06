<?php
echo 'Answer ' .$_GET['num1']+$_GET['num2'].'<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    Number1<input type="number" name="num1"><br>
    Number2<input type="number" name="num2"><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>