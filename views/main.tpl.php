<?php
// var_dump($pageData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>
    <?php echo $pageData['title']; ?>
  </title>
  <meta name="vieport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../public/css/reset.css">
  <link rel="stylesheet" href="../public/css/login.css">
</head>

<body>
  <div class= 'login-container'>
    <form class= 'form'  action="" method = 'POST'>
    <h3>Войти в систему</h3>
    <?php if(!empty($pageData['error'])) :?>
        <p><?php echo $pageData['error']; ?></p>
      <?php endif; ?>
      <input placeholder="Логин" name = 'login' class='form__login'  type="text">
      <input placeholder="Пароль" name = 'password' class= 'form__password' type="password">
      <button class = 'form__button-submit'>Войти</button>
    </form>
  </div>
  <script src="../public/js/login.js"></script>
</body>
</html>