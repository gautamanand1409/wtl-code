<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>days</title>
</head>
<body>
    <h2>show the day </h2>
    <form action="" method="post">
        <input type="number" name="days" id="">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $n=$_POST['days'];
        switch ($n) {
            case '1':
                echo "Monday";
                # code...
                break;
            
            case '2':
                    echo "tuesday";
                    # code...
                    break;
            
            case '3':
                    echo "wednesday";
                        # code...
                    break;
                    
            case '4':
                    echo "thursday";
                            # code...
                     break;
            
            case '5':
                        echo "friday";
                        # code...
                        break;
                
            case '6':
                        echo "saturday";
                            # code...
                        break;
                        
            case '7':
                        echo "sunday";
                                # code...
                         break;
            default:
                echo "invalid number";
                # code...
                break;
        }
    }
    ?>
</body>
</html>