<!DOCTYPE html>
<html>
<header>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</header>

<body>
    <?php
    $fullname = $address = $email = '';
    $fullnameErr = $addressErr = $emailErr = '';
    $fullnameFormat = "/^[a-zA-Z]*$/";

    $server_name = 'localhost';
    $user_name = 'root';
    $password = 'root';
    $db_name = 'demo';
    $result_insert = '';
    $last_id = '';

    if (isset($_POST['insert']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

        if (checkName() && checkAddress() && checkEmail()) {
            $conn = mysqli_connect($server_name, $user_name, $password, $db_name) or die("Connection/Select failed: " . $conn->connect_error);

            // Mắc lỗi SQL injection khi gán chuỗi ntn.
            // $sql = "INSERT INTO Users(fullname, addr, email) VALUES('$fullname', '$address', '$email')";
            // mysqli_query($conn, $sql) ? $result_insert =  'New record created successfully' : $result_insert =  mysqli_error($conn);

            // Use Prepared Statements
            // 1. Prepare an bind
            $stmt = $conn->prepare('INSERT INTO Users(fullname, addr, email) VALUES(?,?,?)');
            $stmt->bind_param('sss', $name, $addr, $mail);
            // 2. set parameters and execute (Co the gan lai gia tri nhieu lan sau do execute)
            $name = $fullname;
            $addr = $address;
            $mail = $email;
            $stmt->execute() ? $result_insert =  'New record created successfully' : $result_insert =  mysqli_error($conn);

            $stmt->close();
            mysqli_close($conn);
        }
    }

    function checkName()
    {
        global $fullname;
        global $fullnameErr;
        global $fullnameFormat;

        $fullname = trim($_POST['name']);

        if (empty($fullname)) {
            $fullnameErr = 'Name is required';
            return false;
        }

        if (preg_match($fullnameFormat, $fullname)) {
            return true;
        } else {
            $fullnameErr = 'Only letters and white space allowed';
            return false;
        }
    }

    function checkAddress()
    {
        global $address;
        global $addressErr;

        $address = trim($_POST['address']);
        if (empty($address)) {
            $addressErr = 'Address is required';
            return false;
        }

        return true;
    }

    function checkEmail()
    {
        global $email;
        global $emailErr;

        $email = trim($_POST['email']);
        if (empty($email)) {
            $emailErr = 'Email is required';
            return false;
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            $emailErr = 'Invalid email format';
            return false;
        }
    }

    ?>

    <h1>INSERT DATA</h1>
    <form method="post" action="" name="insert-data">
        Fullname: <input type="text" name='name' value="<?php echo $fullname; ?>">
        <span class="error">*<?php echo $fullnameErr; ?></span>
        <br><br>

        Address: <input type="text" name='address' value="<?php echo $address; ?>">
        <span class="error">*<?php echo $addressErr; ?></span>
        <br><br>

        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">*<?php echo $emailErr; ?></span>
        <br><br>

        <input type="submit" name="insert" value="Insert">
    </form>

    <h3>RESULT INSERT: <?php echo $result_insert; ?></h3>
</body>

</html>