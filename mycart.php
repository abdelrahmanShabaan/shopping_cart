<?php include('header.php');?>

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

<div class="col-lg-8 text-center border rounded bg-light my-5">
    <h1>My Cart</h1>
</div>

<div class="col-lg-9">
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    if(isset($_SESSION['card']))
    {
        foreach($_SESSION['card'] as $key => $value)
        {
            $sr=$key +1;
            echo
            "
                <tr>
                <td>$sr</td>
                <td>$value[Item_Name]</td>
                <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                <td>
                <form action='mange_card.php' method='post'>
                <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                </form>
                </td>
                <td class='itotal'></td>
            <td>
            <form action='mange_card.php' method='post'>
                <button name='Remove_Item' class='btn btm-sm btn-outline-danger'>Remove</button>
                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
            </form>
          </td>
        </tr>
            ";
        }
        
    }

    ?>
  </tbody>
</table>
</div>

<div class="col-lg-3">
  <div class="border bg-light rounded pr-4">
  <h4>Grand Total:</h4>
    <h5 class="text-right" id="gtotal"> </h5>
    <br>
    <?php 
        if(isset( $_SESSION['card']) && count($_SESSION['card']) > 0 )
        {

        
    ?>
    <form action="purchase.php" method="POST">
         <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control" required> 
            </div>
            <div class="form-group">
            <label>phone number</label>
            <input type="number" name="phone_num"  class="form-control" required>
            </div>
            <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" required>
            </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
                Cash on Delivery
        </label>
    </div>
    <br>
        <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
    </form>
 <?php }   ?>

  </div>
</div>


</div>

<script>
           gt =0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal()
    {
        gt =0;
        for(i=0; i < iprice.length;i++)
        {
            itotal[i].innerText= (iprice[i].value) * (iquantity[i].value);
            gt =  gt +(iprice[i].value) * (iquantity[i].value);
        }
        gtotal.innerText =gt;
    }

    subTotal();
</script>

</body>
</html>