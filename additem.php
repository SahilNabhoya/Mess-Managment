<?php
    $showalert = false;
    $showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connect.php';
    $name = $_POST["name"];
    $rs = $_POST["rs"];
    $exists = false;

        $sql = "INSERT INTO `item` (`name`, `rs`) VALUES ('$name', '$rs')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:item.php');
        }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        form{
            margin:100px;
            padding:20px
        }
    </style>
  </head>
  <body>
  <form action="additem.php" method="post">
    <h2>Add Item</h2><br>
  <div class="form-group">
    <label>Name Of Item</label>
    <input type="text" name="name" class="form-control">
  </div><br>
  <div class="form-group">
    <label>Rs.</label>
    <input type="number" name="rs" class="form-control">
  </div><br>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>