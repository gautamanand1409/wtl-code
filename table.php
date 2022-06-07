<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
    <h2>print the table</h2>
    <form  method="post">
        <input type="number" name="number" id="">
        <input type="submit" value="print table" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $S=$_POST['number'];
        $n=0;
        for ($i=1; $i <=10; $i++) { 
            $n=$S*$i;
            echo $n;
            echo "<br>";
            # code...
        }
    }
    ?>
</body>
</html>