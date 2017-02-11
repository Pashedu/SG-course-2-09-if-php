<?php
/**
 * Created by PhpStorm.
 * User: php-02-03
 * Date: 11.02.2017
 * Time: 19:23
 */
//echo 'заглушка';

function ifPrime($num)
    {
        if((($num % 2)&&($num % 5))) {

            for ($i = 3, $maxDiv= floor($num/2);$i <= $maxDiv; $i++)
            {
           
                if (!($num % $i))
                {
                    return false;
                }
            }
        }
        else { return false;}
        return true;
    }
?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>Заглушка</title>
</head>
<body>
<form method="POST" action="index_2.php">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="submit" value="Ok">
</form>
<?php

    if((isset($_POST['num1'])&&isset($_POST['num2'])))
    {
        $x=intval($_POST['num1']);
        $y=intval($_POST['num2']);
        if(($x&&$y)) {
            echo '<table border="solid">';
            for ($i=1;$i<=$x;$i++) {
                echo '<tr>';

                for($j=1;$j<=$y;$j++) {
                    $randNum=rand(1,300);
                    if(ifPrime($randNum)) {
                        echo "<td style='background-color: lightcoral'>$randNum</td>";
                    }
                    else{
                        echo "<td style='color: white;'>$randNum</td>";
                    }
                }
                echo '</tr>';
            }
            echo '</table>';
        }
    }
?>

</body>
</html>