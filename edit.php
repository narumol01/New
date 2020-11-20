<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'home-work.mysql.database.azure.com', 'qwertyuiop@home-work', 'Asdfghjkl11', 'itf13', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "UPDATE homework SET name='$name' , comment='$comment' WHERE ID='.$_GET['ID'].''";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>