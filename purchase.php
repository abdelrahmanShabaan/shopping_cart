<?php 

session_start();

$con = mysqli_connect("localhost", "root" , "","order_manager");

if(mysqli_connect_error())
{
    echo
    "
    <script>
        alert('cannot connect to database');
        window.location.href='mycart.php';
    </script>
    ";
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST" )
{

    if(isset($_POST['purchase']))
    {
        $query1 = " INSERT INTO `order_tables`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phone_num]','$_POST[address]','$_POST[pay_mode]')";

        if(mysqli_query($con , $query1))
        {
            echo
    "
    <script>
        alert('Done');
    </script>
    ";

        }else
        {
            echo
    "
    <script>
        alert('cannot connect to database');
        window.location.href='mycart.php';
    </script>
    ";
        }
    }

}

?>