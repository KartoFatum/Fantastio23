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
<main>
    <?require_once "../blocks/header.php"?>

        <h1 style="text-align: center">
            <a href="registration.php" ><img src="../img/1.png" alt=""> </a>
        <a href="login.php" ><img src="../img/1.png" alt="" ></a>
        </h1>
    <br>

<? session_start();?>
<?if(isset($_SESSION['user'])):?>
    <h1 style=" color: red;text-align: center" ><?=$_SESSION['user']['name']?></h1>
    <h2 style="text-align: center"><form action="/registration/usercontroller.php" method="post">
        <input type="submit" name="logout" value="Выйти" > </h2>

    </form>
</main>
<?endif;?>
<?require_once "../blocks/footer.php"?>
</body>
</html>