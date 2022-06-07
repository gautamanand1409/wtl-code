<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POWER OF FOUR </title>
</head>
<body>
<h1> power of four calculater</h1>
<form action="" method="POST">
    ENTER THE POSITIVE INTEGER<input type="number" name=" number">
    <button name="submit"> SUBMIT </button>
</form>
<br>
</br>
<?php
$number=$_POST['number'];
$x=$number;
while($number%4==0)
{
    $number=$number/4;
}
if($number==1)
{
    echo " $x is a power of 4";
}
else
{
    echo "$x is not a power of 4";
}
    ?>
</body>
</html>