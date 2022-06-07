<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grades</title>
</head>
<body>
    <h2>calculate the grade</h2>
    <form  method="post">
        <input type="number" name="number" id="">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $n=$_POST['number'];
        if ($n>=60) {
            echo "first division";
            # code...
        } elseif (($n>=45)&&($n<=59)) {
            echo "second divison";
            # code...
        } elseif (($n>=33)&&($n<=44)){
            echo "third divison";

        } else {
            echo "fail";
        }
        
    }
    ?>
</body>
</html>