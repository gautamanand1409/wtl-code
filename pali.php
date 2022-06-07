<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
</head>
<body>
    <h2>palindrome checker</h2>
   <form action="" method="post">
   enter the number: <input type="number" name="number" id="">
    <input type="submit" value="submit" name="submit">
   </form>

   <?php
   if(isset($_POST['submit'])){
       $n=$_POST['number'];
       echo "input string: " .$n;
       echo "<br>";

       $reverse= strrev($n);
       echo "reverse string" .$reverse;

       if($n==$reverse){
           echo "it is palindrome";
       }
       else{
           echo "it is not a palindrome";
       }
   }
   ?>
</body>
</html>