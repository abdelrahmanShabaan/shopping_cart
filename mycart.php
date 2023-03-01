<?php include('header.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    
<div class="container">

<div class="col-lg-12 text-center border rounded bg-light my-5">
    <h1>My Cart</h1>
</div>

<div class="col-lg-12">

<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    if(isset($_SESSION['card']))
    {
        foreach($_SESSION['card'] as $key => $value)
        {
            echo
            "
                <tr>
                <td>1</td>
                <td>$value[Item_Name]</td>
                <td>$value[price]</td>
                <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                <td><button class='btn btm-sm btn-outline-danger'>Remove</button></td>
                </tr>
            ";
        }
        
    }

    ?>
  </tbody>
</table>

</div>
</div>

</body>
</html>