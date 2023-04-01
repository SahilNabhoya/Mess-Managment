<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE from `item` where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "deleted successfully!";
        header('location:item.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>