<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql to delete a record*/
    $sql = "DELETE FROM details WHERE id='" . $_GET["id"] . "'";

    /*use exec() because no results are returned*/
    $conn->exec($sql);
    echo "Record deleted successfully";
    
    header("Location:./biodata.php");
    
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>