<?php
    $showalert = false;
    $showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $exists = false;

        // $sql = "INSERT INTO `userlogin` ( `Name`,`email`, `password`, `date`) VALUES ('$name','$email', '$password', current_timestamp())";
        $sql = "INSERT INTO `userlogin` ( `Name`,`email`, `password`) VALUES ('$name','$email', '$password')";

        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:student.php');
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
  <form action="adduser.php" method="post">
    <h2>Add user</h2><br>
  <div class="form-group">
    <label>Name Of user</label>
    <input type="text" name="name" class="form-control">
  </div><br>
  <div class="form-group">
    <label>email</label>
    <input type="email" name="email" class="form-control">
  </div><br>
  <div class="form-group">
    <label>password</label>
    <input type="password" name="password" class="form-control">
  </div><br>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>