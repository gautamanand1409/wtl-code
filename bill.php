<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bill</title>
</head>
<body>
    <h3>electricity bill calculator</h3>
    <form action="" method="post">
    enter the unit : <input type="number" name="number" id="">
    <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $n=$_POST['number'];
        if ($n<=50) {
            $bill=$n*3.50;
            # code...
        } elseif (($n<=100)) {
            $bill=50*3.50+($n-50)*4;
            # code...
        }
        else {
            echo " the bill is invalid";
        }
        echo " the bill is $bill";
        
    }
    ?>
</body>
</html>