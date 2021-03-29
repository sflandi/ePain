<?php
  
  include("koneksi.php");
  $output="SELECT * FROM Tbl_login";
  $query=mysqli_query($koneksi,$output) or die (mysqli_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <h1>Web Page</h1>
</body>
</html>
