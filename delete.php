<?php

include "config.php";

if(isset($_GET['id'])){
 $id =$_GET['id'];
 $sql ="DELETE FROM registations WHERE id=$id";
 $result =mysqli_query($connect,$sql);
 if($result){
    echo "<script>alert('user has been deleted')</script>";
    echo "<script>window.location.href='list.php'</script>";
}else{
    echo "<script>alert('something is rong please try again')</script>";
}
}



?>