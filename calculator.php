<?php
$num1 = $_POST['num1'];
$num2=$_POST['num2'];
$op=$_POST['op'];
if($op=='+'){
    echo $num1+$num2;
}elseif($op=='-'){
    echo $num1 - $num2;
}elseif($op=='/'){
    echo $num1 / $num2;
}elseif($op=='*'){
    echo $num1 * $num2;
}else{
    echo 'enter value please !';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator app</title>
</head>
<body>
    <form action="" method="post">
        Num1:<input type="text" step=0.002 name="num1"><br>
        OP: <input type="text" name='op'><br>
        Num2:<input type="text" name="num2"><br> 
        <input type="submit" name='submit'>
    </form>
</body>
</html>