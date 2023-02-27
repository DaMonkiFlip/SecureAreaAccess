<?php
include_once "./config.php";

$firstname=$_POST["firstname"];
$numemp=$_POST["numemp"];
$puesto=$_POST["puesto"];
$access=$_POST["access"];
$accessInString=serialize($access);

$sql="Insert into details(firstname,numemp,puesto,access) 
values('$firstname','$numemp','$puesto','".$accessInString."')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./biodata.php");
}
else{
    echo "<br>
    -------------------------------
    <b>Operation Unsuccessful!!<b>
    -------------------------------";
}


?>

