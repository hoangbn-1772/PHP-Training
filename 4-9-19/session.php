<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h1>
        <?php
        // Hiển thị thông tin lưu trong Session
        // phải kiểm tra có tồn tại không trước khi hiển thị nó ra
        if (isset($_SESSION['name'])) {
            echo 'Tên Đăng Nhập Là: ' . $_SESSION['name'];
        }
        ?>
    </h1>
    <form method="POST" action="">
        <input type="text" name="username" value="" /> <br />
        <input type="submit" name="save-session" value="Save Session" /><br />
        <input type="submit" name="remove_session" value="Delete Session" />

        <?php
        saveSession();
        deleteSession();

        function saveSession()
        {
            // Nếu click vào nút Lưu Session
            if (isset($_POST['save-session'])) {
                // Lưu Session
                $_SESSION['name'] = $_POST['username'];
            }
        }

        function deleteSession()
        {
            if (isset($_POST['remove_session'])) {
                unset($_SESSION['name']);

                // Del all session
                //session_destroy();
            }
        }
        ?>
    </form>
</body>

</html>