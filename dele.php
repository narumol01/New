<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'home-work.mysql.database.azure.com', 'qwertyuiop@home-work', 'Asdfghjkl11', 'itf13', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$sql = "DELETE FROM homework WHERE ID = '.$_GET['ID'].''";

if (mysqli_query($conn, $sql)) {
    echo "delete successfully";
  } else {
    echo "FAILED";
  }
  
mysqli_close($conn);
?>