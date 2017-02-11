<?php
/**
 * Created by PhpStorm.
 * User: php-02-03
 * Date: 11.02.2017
 * Time: 20:06
 */
    for ($i=0, $maxelem=rand(1,100);$i<$maxelem;$i++)
    {
        $randArray[$i]= rand(-100,100);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task2</title>
</head>
<body>
<?php
    echo '<table border="solid"><tr>';
    foreach($randArray as $elem)
    {
         echo "<td>$elem</td>";
    }
    echo '</tr></table>';
    $z=0;
    $countElem=0;
    for($i=1,$length=count($randArray);$i<$length;$i+=2)
    {
        $z+=$randArray[$i];
        $countElem++;
    }
    echo "average - ".($z/$countElem);
?>
</body>
</html>