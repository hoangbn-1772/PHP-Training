<!DOCTYPE html>
<html>

<head>
  <title>GET and POST</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
  // Method GET: select()
  <?php
    echo 'Dữ liệu gửi lên server: ';
    foreach($_GET as $key => $value){
      if(isset($value)){
        echo '<br/>'.$key.'-'.$value;
      }
    }

  ?>
  <form method="POST"><br />
    Username: <input type="text" name="username" value="" /><br />
    Password: <input type="password" name="password" value="" /><br />
    <input type="submit" name="form_click" value="Send" /><br />

    // Method POST: insert(), update(), delete()
    <?php
    if (isset($_POST['form_click'])) {
      echo 'Tên đăng nhập là: ' . $_POST['username'];
      echo '<br/>';
      echo 'Mật khẩu là: ' . $_POST['password'];
    } ?>
  </form>

  
</body>

</html>
