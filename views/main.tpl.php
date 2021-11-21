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
<div class = form>
  <div class = 'form__title'>
    <h3>Вход</h3>
  </div>
  <?php if(!empty($pageData['error'])) :?>
<p><?php echo $pageData['error']; ?></p>
<?php endif; ?>
    <form class = 'form__container' method = 'POST'  action="">
        <input placeholder="Логин" name = 'login' class='form__login'  type="text">
        <input placeholder="Пароль" name = 'password' class= 'form__password' type="password">
        <button class = 'form__button-submit'>Войти</button>
    </form>
</div>
  <script src="../public/js/login.js"></script>
</body>
</html>


