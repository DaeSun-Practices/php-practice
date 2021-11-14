<!doctype html>

<head>
    <meta charset="utf-8">
</head>

<!--url의 주소에 따라 다르게 띄울 수 있다.-->
<!--http://115.68.231.165/~2018320161/php-practice-2/parameter.php?name=deasun&address=seoul-->
<body>
    안녕하세요. <?echo $_GET['address'];?>에 사시는  <?echo $_GET['name'];?>님. 
</body>