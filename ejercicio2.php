<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$country = explode("," , $country);
$capitals = [];
foreach ($country as $elementos) {
    $capitals[] = ['country' => $elementos];
}
var_dump($capitals)
    ?>
</body>
</html>