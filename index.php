<?php
echo"<title>ITF</title>";
$conn = mysqli_init();
mysqli_real_connect($conn, 'home-work.mysql.database.azure.com', 'qwertyuiop@home-work', 'Asdfghjkl11', 'itf13', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Black/Dark Table</h2>
  <p>The .table-dark class adds a black background to the table:</p>            
  <table class="table table-dark">
      <thead>
          <tr>
              <th width="100"> <div align="center">Name</div></th>
              <th width="350"> <div align="center">Comment </div></th>
              <th width="150"> <div align="center">Action</div></th>
          </tr>
      </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
      <tbody>
          <tr>
              <td><?php echo $Result['Name'];?></div></td>
              <td><?php echo $Result['Comment'];?></td>
              <td><a href='dele.php'>delete</a><a href='formedit.html'>edit</a></td>
          </tr>
          <a href='form.html'>insert</a>
      </tbody>
<?php
}
?>
</table>
</div>
<?php
mysqli_close($conn);
?>
