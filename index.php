<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="POST" target="_blank" name="f1">
    <label>Имя:<input type="text" placeholder="Ваше имя..." name="name" required></label><br>
    <label>Фамилия:<input type="text" placeholder="Ваша фамилия..." name="surname" required></label><br>
    <label>Возраст:<input type="text" placeholder="Ваш возраст..." name="years" required></label><br>
    <label>Пол:<input type="text" placeholder="Ваш пол..." name="genus" required></label><br>
    <label>Имя пользователя:<input type="text" placeholder="Ваш никнейм..." name="username" required></label><br>
    <label>Электронная почта:<input type="text" placeholder="Ваш email..." name="email" required></label><br>
    <label>Пароль:<input type="text" placeholder="Ваш пароль..." name="password" required></label><br>
    <label>Повторный пароль:<input type="text" placeholder="Повторите пароль..." name="repassword" required></label>
    <input type="submit" value="Отправить">

</form>
<style>
    body {
        text-align: center;
        margin-top: 50px;
        font-size: 20px;
    }

    input {
        display: flex;
        align-items: center;
    }
</style>
</body>
</html>

