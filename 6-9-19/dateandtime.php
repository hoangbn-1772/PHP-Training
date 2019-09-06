<!DOCTYPE html>
<html>
<header></header>

<body>
    <h1>Date Time in PHP</h1>
    <h3>Get a simple Date</h3>

    <?php
    echo 'Today: ' . date('Y/m/d') . '<br>';
    echo 'Today: ' . date('Y.m.d') . '<br>';
    echo 'Today: ' . date('Y-m-d') . '<br>';
    echo 'Today: ' . date('l') . '<br>';
    ?>

    <h3>Automatic Copyright Year</h3>
    &copy;<?php echo date('Y'); ?>

    <h3>Get a Simple Time</h3>
    <?php
    echo 'Time is: ' . date('H:i:sa') . '<br>';
    echo 'Time is: ' . date('H-i-sa');
    ?>

    <h3>Get Your Time Zone (America/New_York)</h3>
    <?php
    date_default_timezone_set('America/New_York');
    echo 'Timezone is: ' . date('h:i:sa');
    ?>

    <h3>Create a Date With PHP mktime()</h3>
    <?php
    $d = mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>

    <h3>More Date Examples</h3>
    <?php
    $start_date = strtotime("Saturday");
    $end_date = strtotime('+6 days', $start_date);
    
    while($start_date < $end_date){
        echo date('l', $start_date) . '<br>';
        $start_date = strtotime('+1 days', $start_date);
    }
    ?>
</body>

</html>