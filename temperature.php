<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>temperature converter</h2>
    <form action="" method="post">
        <h3>celsius to farenheit</h3>
        <input type="number" name="celsius" id="">
        <input type="submit" value="submit" name="celsius2">

        <h3>farenheit to celsius</h3>
        <input type="number" name="farenheit" id="">
        <input type="submit" value="submit" name="farenheit2">
    </form>

    <?php
    if(isset($_POST['celsius2'])){
        $c=$_POST['celsius'];
        $f=(($c*(9/5))+32);
        echo "the temperature in farenheit is " .$f;
    }
    if(isset($_POST['farenheit2'])){
        $f=$_POST['farenheit'];
        $c=(($f-32)*(5/9));
        echo "the temperature in celsius is " .$c;
    }

    ?>
</body>
</html>