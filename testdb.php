<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require 'vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://sam:rfid@cluster0.dt27d.mongodb.net/?retryWrites=true&w=majority');
$collection=$client->test2022->table2022;
$docu = $collection->find();
$animalcount=$collection->count();

echo($animalcount);


?>
</body>
</html>