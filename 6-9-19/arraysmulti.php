<!DOCTYPE html>
<html>
<header></header>

<body>
    <?php
    $cars = array(
        array('Volvo', 22, 18), //row 1
        array('BMV', 15, 16), // row 2
        array('Saab', 5, 2), // row 3
        array('Land Rover', 17, 18, 19) // row 4
    );

    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
    ?>
    <h1>Use for loop</h1>

    <?php
    for ($row = 0; $row < count($cars); $row++) {
        echo "<p><b>Row number $row:</b></p>";
        echo "<ul>";
        for ($col = 0; $col < count($cars[$row]); $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>