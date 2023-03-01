<?php 

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" )
{
    if(isset($_POST['Add_to_Cart']))
    {
        if(isset($_SESSION['card'])){
            $myitems = array_column($_SESSION['card'], 'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                 echo
                "
                    <script>
                    alert('Item Already Added');
                    window.location.href='index.php';
                    </script>
                ";
            }
            $count = count($_SESSION['card']);
            $_SESSION['card'][$count]=array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
            // print_r($_SESSION['card']);
            echo
            "
                <script>
                alert('Item Added');
                window.location.href='index.php';
                </script>
            ";

        }else {
                $_SESSION['card'][0]=array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
                // print_r($_SESSION['card']);
                echo
                "
                    <script>
                    alert('Item Added');
                    window.location.href='index.php';
                    </script>
                ";
        }
    }
    if(isset($_POST['Remove_Item'])){
        foreach($_SESSION['card'] as $key => $value)
        {
            if($value['Item_Name']== $_POST['Item_Name'])
            {
                unset($_SESSION['card'][$key]);
                $_SESSION['card']=array_values($_SESSION['card']);  
                echo 
                "
                <script>
                alert('Item Removed');
                window.location.href='mycart.php';
                </script>
                ";
            }
        
        }
    }
}

?>