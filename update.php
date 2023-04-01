<?php
    include 'connect.php';
    if(isset($_POST['updateid'])){
        $id = $_GET['updateid'];
    $Day = $_POST['Day'];
    $Breakfast = $_POST["Breakfast"];
    $Lunch = $_POST["Lunch"];
    $Dinner = $_POST["Dinner"];
    $sql = "UPDATE `menu` SET id=$id,`Day` = '$Day', `Breakfast` = '$Breakfast', `Lunch` = '$Lunch', `Dinner` = '$Dinner' WHERE `menu`.`id` = $id";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:menuadmin.php');
            // echo "updated!";
        }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        form{
            margin:100px;
            padding:20px
        }
    </style>
  </head>
  <body>
  <form action="update.php" method="post">
    <h2>Update Menu</h2><br>
  <div class="form-group">
    <label>Day</label>
    <input type="text" name="Day" class="form-control">
  </div><br>
  <div class="form-group">
    <label>Breakfast</label>
    <input type="text" name="Breakfast" class="form-control">
  </div><br>
  <div class="form-group">
    <label>Lunch</label>
    <input type="text" name="Lunch" class="form-control">
  </div><br>
  <div class="form-group">
    <label>Dinner</label>
    <input type="text" name="Dinner" class="form-control">
  </div><br>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>