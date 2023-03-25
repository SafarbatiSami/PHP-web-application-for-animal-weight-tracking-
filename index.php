<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>RFID 7abacha</title>
    
    
</head>

<body>
<?php

require 'vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://sam:rfid@cluster0.dt27d.mongodb.net/?retryWrites=true&w=majority');
$collection=$client->rfid->poids;
$docu = $collection->find();
$animalcount=$collection->count();

?>





<?php include 'sidebar.php' ?>
<div class="container">
  <?php include 'searchbar.php' ?>
    <div class="contenant">
        <div class="cards">
            <div class="card">
                <div class="box">
                    <h1><?php echo $animalcount ?></h1>
                    <h3>Animaux</h3>
                </div>
                <div class="icon-case">
                    <img src="assets/sheep.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>20</h1>
                    <h3>Chats</h3>
                </div>
                <div class="icon-case">
                    <img src="assets/sheep.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>39</h1>
                    <h3>Moutons</h3>
                </div>
                <div class="icon-case">
                    <img src="assets/sheep.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>21</h1>
                    <h3>Vaches</h3>
                </div>
                <div class="icon-case">
                    <img src="assets/sheep.png" alt="">
                </div>
            </div>
        </div>
        <div class="contenant2"></div>
    </div>
</div>


</body>


</html>