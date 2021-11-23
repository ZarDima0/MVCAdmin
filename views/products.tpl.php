<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/css/home.css">

</head>

<body>
    <div class='side-bar'>
        <a href="/home">Статистика</a>
        <a href="/home/products">Товары</a>
        <a href="/home/user">Пользователи</a>
    </div>
    <div class="content">
        <header>
            <div class='title'>
                <h1>Заказы</h1>
                <a href="/home/logout">Выйти</a>
            </div>
        </header>
        <div class='content__item'>
            <div class='row'>
                <div class='column'>
                    <div class='column__card'>
                        <button id='buttonAdd' class='button-menu'>Добавить товар
                            <?php echo $pageData['userCount']; ?>
                        </button>
                    </div>
                </div>
                <div class='column'>
                    <div class='column__card'>
                        <button class='button-menu'> Изменить
                            <?php echo $pageData['products']; ?>
                        </button>
                    </div>
                </div>
                <div class='column'>
                    <div class='column__card'>
                        <button class='button-menu'>добавить CVG
                            <?php echo $pageData['orders']; ?>
                        </button>
                    </div>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Фото</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach($pageData['allProducts'] as $item=>$value) {
                echo '<tr>';
                echo '<th scope="col">' . $value['id'] . '</th>';
                echo '<td aria-label="Название">' . $value['name'] . '</td>';
                echo '<td aria-label="Фио">' . $value['category'] . '</td>';
                echo '<td aria-label="Email">' . $value['price'] . '</td>';
                echo '<td aria-label="image"><img lenght = "50" width = "50"  src=http://mvcadmin/' . $value['url'] . '></td>';
                echo '</tr>';
                }
                ?>
                <img lenght src="" alt="" srcset="">
                </tbody>
            </table>
        </div>
    </div>
    <div class="form">
        <form id="formData" class='form__add' action="" method='POST' enctype=”multipart/form-data”>
        <h2 class = 'form__result' ></h2>
            <input required="required" name='name' type="text" placeholder='Название'>
            <input required="required" name='description' type="text" placeholder='Описание'>
            <select name='category'>
                <option>Adidas</option>
                <option>Nike</option>
                <option>Rebook</option>
            </select>
            <input required="required" name='price' type="text" placeholder='Цена'>
            <input required="required" name='file' type="file">
            <button class='button-submit' type='submit'>Сохранить</button>
        </form>
        <div class='form__close'>
            <img id='formClose' src="../public/image/close.png"  width="30" height="30" alt="" srcset="">
        </div>

        <script src="../public/js/product.js"></script>
</body>

</html>