<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageData['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/home.css">
</head>

<body>
    <div class='side-bar'>
        <a href="/home">Статистика</a>
        <a href="/home/products">Заказы</a>
        <a href="/home/products">Товары</a>
        <a href="">Пользователи</a>
    </div>
    <div class="content">
        <header>
        <div class='title'>
            <h1><?php echo $pageData['title'] ?></h1>
            <a href="/home/logout">Выйти</a>
        </div>
        </header>
        <div class="form">
            <form class = 'form__add' action="" method = 'POST' enctype=”multipart/form-data” >
                <input required="required" name = 'name' type="text" placeholder = 'Название'>
                <input required="required" name = 'description' type="text" placeholder = 'Описание'>
                <select name = 'category'>
                    <option>Adidas</option>
                    <option>Nike</option>
                    <option>Rebook</option>
                </select>
                <input required="required" name = 'price' type="text" placeholder = 'Цена'>
                <input required="required" name = 'file' type="file" >
                <button type = 'submit'>Сохранить</button>
            </form>
        </div>
    </div>
    <script src="../public/js/addProduct.js"></script>
</body>

</html>