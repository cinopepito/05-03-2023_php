<?php
$fruits = $_POST['fruits'];
echo $fruits[1];
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
    <form action="array.php" method="post">
        Apple<input type="checkbox" name="fruits[]" value="apple"><br>
        Ananas<input type="checkbox" name="fruits[]" value="ananas"><br>
        Pear<input type="checkbox" name="fruits[]" value="pears"><br>
        Banana<input type="checkbox" name="fruits[]" value="banana"><br>
        <input type="submit" name="submit">
    </form>

</body>
</html>

