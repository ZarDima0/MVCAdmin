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
        <a href="/home">Статистика</a>
        <a href="/home/products">Товары</a>
        <a href="">Пользователи</a>
    </div>
    <div class="content">
        <header>
            <div class='title'>
                <h1>Пользователи</h1>
                <a href="/home/logout">Выйти</a>
            </div>
        </header>
        <div class = 'content_item'>
            <div class='row'>
                <div class='column'>
                    <div id = 'addUser' class='column__card'>
                        <button class='button-menu'>Добавить</button>
                    </div>
                </div>
                <div class='column'>
                    <div class='column__card'>
                       <button class='button-menu'> Изменить</button>
                    </div>
                </div>
                <div class='column'>
                    <div class='column__card'>
                        <button class='button-menu'>Изменить роль</button>
                    </div>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ФИО</th>
                        <th scope="col">login</th>
                        <th scope="col">email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($pageData['allUser'] as $item=>$i) {
                    echo '<tr>';
                    echo '<th scope="col">'. $i['id'] . '</th>';
                    echo '<td aria-label="Название">' . $i['fullName'] . '</td>';
                    echo '<td aria-label="Фио">' . $i['login'] . '</td>';
                    echo '<td aria-label="Email">' . $i['email'] . '</td>';
                    echo '</tr>';
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <script src="../public/js/user.js"></script>
</body>

</html>