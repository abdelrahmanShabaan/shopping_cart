<?php 
include('header.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping card</title>
</head>
<body>

<div class="container text-center" style="align-content:center;">
    <div class="row">

            <!-- Card Number One -->

    <div class="col-lg-3">
<form action="mange_card.php" method="POST">
    <div class="card">
    <img src="images/1.jpg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Camera-450</h5>
    <p class="card-text">$salary : 25-Cent</p>
    <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to card</button>
    <input type="hidden" name="Item_Name" value="camera1">
    <input type="hidden" name="price" value="25$">
 </div>
    </div>
</form>
    </div>

        <!-- Card Number Two -->

    <div class="col-lg-3">
    <form action="mange_card.php" method="POST">
        <!-- div have class -->
    <div class="card">
    <img src="images/2.jpg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">watch</h5>
    <p class="card-text">$salary : 50-Cent</p>
    <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to card</button>
    <input type="hidden" name="Item_Name" value="watch1">
    <input type="hidden" name="price" value="25$">
 </div>
    </div>
 ``</form>
    </div>

    <!-- Card Number There -->

    <div class="col-lg-3">
<form action="mange_card.php" method="POST">
    <div class="card">
    <img src="images/3.jpg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Laptob</h5>
    <p class="card-text">$salary : 100-Cent</p>
    <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to card</button>
    <input type="hidden" name="Item_Name" value="laptob 1">
    <input type="hidden" name="price" value="25$">
 </div>
    </div>
</form>
    </div>

    </div>
</div>
    
</body>
</html>