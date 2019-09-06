<!DOCTYPE html>
<html>

<header></header>

<body>

    <form method="post" action="">
        <input type="submit" name="connect_database">

        <?php
        $server_name = 'localhost';
        $user_name = 'root';
        $password = 'root';
        $db_name = 'demo';

        if (isset($_POST['connect_database'])) {
            // Connect to MySQL server and Select database
            $conn = mysqli_connect($server_name, $user_name, $password, $db_name) or die("Connection/Select failed: " . $conn->connect_error);
            // Luu tru query hien tai
            $query = '';
            // Doc toan bo file
            $sqlScript = file('Users.sql');
            // Doc tung dong
            foreach ($sqlScript as $line) {
                $startWith = substr(trim($line), 0, 2);
                // -1 la bat dau tu vi tri cuoi cung
                $endWith = substr(trim($line), -1, 1);

                // bo qua neu do la comment
                if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
                    continue;
                }

                // Them line vao query
                $query = $query . $line;
                // Neu co dau ';' o cuoi thi ket thuc cau query.
                if ($endWith == ';') {
                    // Thuc hien truy van
                    mysqli_query($conn, $query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query . '</b></div>');
                    // Reset query
                    $query = '';
                }
            }

            echo "Tables imported successfully";
        }
        /*
        function createDatabase($conn)
        {
            $fp = fopen('queryfile.txt', 'r') or die('Unable to open file!');
            $sql = fgets($fp);

            if ($conn->query($sql) === true) {
                echo 'Database create successfully';
            } else {
                echo ' Error creating database';
            }
            fclose($fp);
        }
        */

        ?>
    </form>
</body>

</html>