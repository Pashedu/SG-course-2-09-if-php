<?php
/**
 * Created by IntelliJ IDEA.
 * User: pashed
 * Date: 11.02.17
 * Time: 11:37
 */
    if(isset($_POST['Years'])) {
        setcookie("yearsHistory[".count($_COOKIE['yearsHistory'])."]",$_POST['Years']);
    }
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Chinese Year</title>
</head>

<body>
    <div style="margin-left: 10%; margin-right: 10%">
        <form action="chineseyear.php" method="post">
            <select name="Years" >
                <?php
                    for ($i = 1924; $i < 2025; $i++) {
                        if (isset($_POST['Years']) && intval($_POST['Years'])===$i) {
                                echo "<option selected='selected' value=\"$i\">$i</option>";
                        }
                        else{
                            echo "<option value=\"$i\">$i</option>";
                        }
                    }
                ?>
            </select>
            <input type="submit" value="Pick this">
        </form>
        <?php
            $yearsMass = array (
                'Мавпи','Півня','Собаки','Свині','Щура','Вола',
                'Тигра','Кролика','Дракона','Змії','Коня','Кози');
            if(isset($_POST['Years']))
            {
                echo "Ви вибрали рік ".$yearsMass[intval($_POST['Years'] % 12)];
            }
            if(isset($_COOKIE['yearsHistory'])) {
                echo '<p>Історія вибору</p>';
                foreach ($_COOKIE['yearsHistory'] as $item) {
                    echo "<span> $item --> " . $yearsMass[$item % 12] . "</span><br>";
                }
            }
        ?>
    </div>
</body>
</html>
