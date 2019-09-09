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

    $conn = mysqli_connect($server_name, $user_name, $password, $db_name) or die("Connection/Select failed: " . $conn->connect_error);
    $sql = 'DELETE FROM Users WHERE id = 1';
    mysqli_query($conn, $sql) ? $result = 'Delete successfully' : $result = 'Delete fail: ' . mysqli_error($conn);

    mysqli_close($conn);
    ?>

    <h3>RESULT: <?php echo $result; ?></h3>
</body>

</html>
