<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>root</title>
</head>
<body>
    <h2>square root of the number is</h2>
    <form  method="post">
        <input type="number" name="number" id="">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $n=$_POST['number'];
        $ans=$n**(1/2);
        echo "the square root of the number is" .$ans;
    }
    ?>
</body>
</html>