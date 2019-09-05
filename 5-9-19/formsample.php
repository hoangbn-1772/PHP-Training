<!DOCTYPE html>
<html>
<header>
    <script language='javascript'>
        // Validate form by javascript
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (!!username && !!password) {
                return true;
            }
            return false;
        }
    </script>
</header>

<body>
    <form method="POST" action="welcome.php" autocomplete="off" onsubmit="return validateForm()">
        Username: 
        <input type="text" id="username" name="username" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="">
        <br><br>
        Password: 
        <input type="password" id="password" name="password" autocomplete="false" value=""><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>