<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];
$capitals = [];
for ($i=0; $i <count($city) ; $i++) { 
    $capitals[] = ['country' => $country[$i], 'city' => $city[$i]]; // con el for, se apilan ambos elementos de diferentes arrays 
}
var_dump($capitals);
    ?>
</body>
</html>