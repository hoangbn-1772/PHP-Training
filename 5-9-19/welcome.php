<!DOCTYPE html>
<html>
    <header></header>
    <body>
        Welcome: <?php if(!empty($_POST["username"])){echo $_POST["username"];}?><br>
        Your email address is: <?php if(!empty($_POST['password'])){ echo $_POST["password"];}?>
    </body>
</html>
