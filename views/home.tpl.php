<?php

// var_dump($pageData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабинет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/home.css">
</head>

<body>
    <div class='side-bar'>
        <a href="">Статистика</a>
        <a href="">Заказы</a>
        <a href="">Товары</a>
        <a href="">Пользователи</a>
    </div>
    <div class="content">
        <header>
        <div class='title'>
            <h1>Статистика</h1>
            <a href="/home/logout">Выйти</a>
        </div>
        </header>
        
        <div class='row'>
            <div class='column'>
                <div class='column__card'>
                    <h3>Пользователей <?php echo $pageData['userCount']; ?></h3>
                </div>
            </div>
            <div class='column'>
                <div class='column__card'>
                    <h3>Товаров <?php echo $pageData['products']; ?></h3>
                </div>
            </div>
            <div class='column'>
                <div class='column__card'>
                    <h3>Заказов <?php echo $pageData['orders']; ?></h3>
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID Заказа</th>
                    <th scope="col">Сумма заказа</th>
                    <th scope="col">Фио</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach($pageData['getOrders'] as $item=>$value) {
                echo '<tr>';
                echo '<th scope="col">' . $value['id'] . '</th>';
                echo '<td aria-label="Сумма заказа">' . $value['total'] . '</td>';
                echo '<td aria-label="Фио">' . $value['fullName'] . '</td>';
                echo '<td aria-label="Email">' . $value['email'] . '</td>';
                echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>