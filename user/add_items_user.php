<?php
include '../connect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
      a{
        text-decoration:none;
        color:white;
      }
    </style>
    </head>
  <body>
  <header>
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
            <title>Bootstrap</title>
          </svg>
          <span class="fs-4"></span>
        </a>    
        </nav>
      </div>

      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h3 class="display-6 fw-normal">Items</h3>

      </div>
    </header>
    <div class="container">
    
    <table class="table">
  <thead class="table-secondary">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">rs</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
      function additem(){
          $sql="Select rs from `item`";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($result)
          $total = 0;
          $amount = $row['rs'];
          $total += $amount;
          echo 'Total is : '.$total.'rs';
      }
      $sql="Select * from `item`";
      $result = mysqli_query($conn,$sql);
      if($result){
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $name = $row['name'];
          $rs = $row['rs'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$rs.'</td>
          <td>
      <button class="btn btn-danger" onclick="additem()">Add</a></button>
    </td>
        </tr>';
        }
      }
    ?>
    
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>