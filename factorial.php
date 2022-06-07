<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        enter the number : <input type="number" name="number" id="">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $n=$_POST["number"];
        $fact=1;
        for ($i=$n; $i>=1; $i--) { 
            $fact= $fact* $i;
            
            # code...
        }
        echo  $fact;
    }
    ?>
</body>
</html>