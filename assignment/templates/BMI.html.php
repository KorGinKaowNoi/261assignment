<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <style>
td{
    border:1px solid black;
}
</style>
</head>
<body>
    there are <?php echo $people ?> <strong>BMI</strong> records 
    <p>
    <table>
        <?php
            for($i=0;$i<$people;$i++){
                $users = explode(",",$read[$i]);
                $num = $i+1;
                $f=0;
                $o=1;
                echo "<tr><td>";
                echo "<strong>$num</strong></td>
                <td><strong>Name: </strong>$users[$f]
                <p>
                    <strong>BMI: </strong> $users[$o]
                </p>";
                echo "</td></tr>";
            }
        ?>
        </table>
    </p>
    ---------------------
    <a href="index.php">add more</a>
</body>

</html>