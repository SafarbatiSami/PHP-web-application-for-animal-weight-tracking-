<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewstats.css">
    <title>Stats</title>
</head>
<body>

<?php include 'sidebar.php' ?>

<div class="container">
 <?php include 'searchbar.php' ?>
 
  <div class="contenant">

      <div class="cards">
          
            <div class="graphe">
            <iframe style="background: #21313C;border: none;border-radius: 2px;box-shadow: 0 2px 10px 0 rgba(70, 76, 79, .2);" width="640" height="480" src="https://charts.mongodb.com/charts-project-0-bxobl/embed/charts?id=6287c317-4ce2-422d-87de-574065d86a08&maxDataAge=-1&theme=dark&autoRefresh=false"></iframe>
            </div>
        </div>
        <div class="contenant2"></div>
    </div>
        
 </div>
</body>
</html>