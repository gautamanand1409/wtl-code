<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="prime" placeholder="enter any number"/>
        <input type="submit" name="submit" value="check"/>
    
    </form>
    <?php 
     if(isset($_POST['submit'])){
         $num=$_POST['prime'];
         function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$flag_val = check_prime($num);
if ($flag_val == 1){
   echo "It is a prime number";}
else{
   echo "It is a non-prime number";
}
     }
    ?>
</body>
</html>