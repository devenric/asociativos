<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$arrCity = explode("," , $city);
$capitales = [];
foreach ($arrCity as $city) {
    $capitales[] = ['city' => $city];
}
var_dump($capitales);

    ?>
</body>
</html>