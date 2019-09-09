<!DOCTYPE html>
<html>
<header></header>

<body>
    <?php
    $server_name = 'localhost';
    $user_name = 'root';
    $password = 'root';
    $db_name = 'demo';
    $result = '';

    $conn = mysqli_connect($server_name, $user_name, $password, $db_name) or die('Connect fail' . $conn->connect_error);
    $stmt = $conn->prepare('UPDATE Users SET Fullname=? WHERE id=?');
    $stmt->bind_param('ss', $newName, $id);

    $newName = 'Nam';
    $id = 2;
    $stmt->execute() ? $result = 'Delete successfully' : $result = mysqli_error($conn);

    $newName = 'Hoang';
    $id = 3;
    $stmt->execute() ? $result = 'Delete successfully' : $result = mysqli_error($conn);
    ?>

    <h3>RESULT: <?php echo $result; ?></h3>
</body>

</html>
