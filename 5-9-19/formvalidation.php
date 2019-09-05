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
    $name = $email = $gender = $comment = $website = "";
    $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
    $urlFormat = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
    $nameFormat = "/^[a-zA-Z]*$/";

    // Check submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (check_input($_POST['name'])) {
            if (isNameValidate($_POST['name'], $nameFormat)) {
                $name = format_input($_POST['name']);
            } else {
                $nameErr = 'Only letters and white space allowed';
            }
        } else {
            $nameErr = 'Name is required';
        }

        if (check_input($_POST['email'])) {
            if (isEmailValidate($_POST['email'])) {
                $email = format_input($_POST['email']);
            } else {
                $emailErr = 'Invalid email format';
            }
        } else {
            $emailErr = 'Email is required';
        }

        if (check_input($_POST['gender'])) {
            $gender = format_input($_POST['gender']);
        } else {
            $genderErr = 'Gender is required';
        }

        if (check_input($_POST[website])) {
            if (isUrlValidate($_POST['website'], $urlFormat)) {
                $website = format_input($_POST['website']);
            } else {
                $websiteErr = 'Invalid URL';
            }
        }

        $comment = format_input($_POST['comment']);
    }

    function check_input($data)
    {
        if (!empty($data)) return true;
        return false;
    }

    function isNameValidate($data, $nameFormat)
    {
        if (preg_match($nameFormat, $data)) return true;
        return false;
    }

    function isEmailValidate($data)
    {
        if (filter_var($data, FILTER_VALIDATE_EMAIL)) return true;
        return false;
    }

    function isUrlValidate($data, $urlFormat)
    {
        if (preg_match($urlFormat, $data)) return true;
        return false;
    }

    function format_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h1>PHP Form Validation Example</h1><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">*<?php echo $nameErr ?></span><br><br>

        E-mail: <input type="text" name="email" value="<?php echo $email; ?>" />
        <span class="error">*<?php echo $emailErr ?></span><br><br>

        Website: <input type="text" name="website" value="<?php echo $website; ?>" />
        <span class="error">*<?php echo $websiteErr ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea><br><br>

        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo 'checked'; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'male') echo 'checked'; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'other') echo 'checked'; ?> value="other">other
        <span class="error">*<?php echo $genderErr ?></span>
        <br><br>
        <input type="submit" name="send" value="Submit">
    </form> <br>
    <h1>Input</h1><br>
    <?php
    echo $name . '<br/>';
    echo $email . '<br/>';
    echo $website . '<br/>';
    echo $comment . '<br/>';
    echo $gender . '<br/>';
    ?>

</body>

</html>
