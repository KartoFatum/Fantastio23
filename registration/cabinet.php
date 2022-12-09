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
<h1 style="text-align: center">Привет дорогой друг <?=$user['name'];?></h1>
<h2 style="text-align: center"><a href="/"><h2>На главную</h2></a></h2>
<?require_once "../blocks/footer.php"?>
</body>
</html>