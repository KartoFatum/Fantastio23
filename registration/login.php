<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?require_once "../blocks/header.php"?>
<form action="../registration/usercontroller.php" method="post">
    <h1 style="text-align: center">
    <div>
        <label for="login">Введите логин пожалуйста</label>
    </div>
    <input type="text" name="login" id="login">
    <div>
        <label for="password">И пароль тоже</label>
    </div>
    <input type="password" name="password" id="password">
    <div>
        <input type="submit">
    </div>
    </h1>
<?require_once "../blocks/footer.php"?>
</form>
</body>
</html>