<!DOCTYPE html>
<html>
<header>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</header>

<body>
    <?php
    $server_name = 'localhost';
    $user_name = 'root';
    $password = 'root';
    $db_name = 'demo';

    $conn = mysqli_connect($server_name, $user_name, $password, $db_name) or die("Connection/Select failed: " . $conn->connect_error);
    $sql = 'SELECT id, fullname,  addr, email FROM Users';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>Fullname</th><th>Address</th><th>Email</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fullname'] . '</td><td>' . $row['addr'] . '</td><td>' . $row['email'] . '</td></tr>';
        }
        echo "</table>";
    } else {
        echo '0 result';
    }

    mysqli_close($conn);
    ?>
</body>

</html>
