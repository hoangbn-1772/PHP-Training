<!DOCTYPE html>

<?php
setcookie('username', 'thehalfheart', time() + 3600);
?>

<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h1>
        <?php
        if (isset($_COOKIE['username'])) {
            echo 'COOKIE: ' . $_COOKIE['username'];
        }
        ?>
    </h1>

    <form method="POST" action="">
        <input type="submit" name="cre_cookie" value="Create Cookie" /><br />
        <input type="submit" name="del_cookie" value="Del Cookie" /><br />

        <?php
        delCookie();
        createCookie();

        function createCookie()
        {
            if (isset($_POST['cre_cookie'])) {
                setcookie('username', "HoangBN-Login", time() + 3600);
            }
        }

        function delCookie()
        {
            if (isset($_POST['del_cookie'])) {
                setcookie('username', "", time() - 3600);
            }
        }
        ?>
    </form>
</body>

</html>
