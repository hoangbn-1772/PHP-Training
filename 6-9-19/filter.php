<!DOCTYPE html>
<html>

<head></head>

<body>
    <h1>PHP Filters</h1>

    <h3>PHP filter_var() Function</h3>

    <?php
    $str = "<h1>Hello World!</h1>";
    $number = 0;
    $ip = '127.0.0.1';
    $

    //remove all HTML tags
    $new_str = filter_var($str, FILTER_SANITIZE_STRING);
    echo $new_str . '<br>';

    // Validate an Integer
    if (filter_var($number, FILTER_VALIDATE_INT)) {
        echo $number . ': is Integer' . '<br>';
    } else {
        echo $number . ': isn\'t Integer' . '<br>';
    }

    // Validate Ip Address
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo 'ip valid';
    } else {
        echo 'ip invalid';
    }
    ?>

</body>

</html>