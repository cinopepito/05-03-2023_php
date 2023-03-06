<?php
echo 'your name is ' . $_GET['username'].'<br>';
echo 'your age is '. $_GET['age'].'<br>';
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
    <form action="form.php" method="get">
        <label for="name">Name:</label>
        <input type="text" placeholder="name" name="username"><br>
        <input type="text" placeholder="name" name="age"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>