<?php
$conn=new mysqli("localhost","root","","aura_smc", 3307);
if($conn->connect_error)
{
    die("Connection Failed".$conn->connect_error);
}
// else{
//     echo "Connection Successful";
// }

?>