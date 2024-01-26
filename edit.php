
<?php
include "config.php";
$id =$_GET['id'];
$sql="SELECT* from registations WHERE id=$id";
$result =mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];

    $sql ="UPDATE registations SET name='$name',phone='$phone',email='$email' WHERE id=$id";
    $result =mysqli_query($connect,$sql);
    if($result){
        echo "<script>alert('user has been update')</script>";
        echo "<script>window.location.href='list.php'</script>";
    }else{
        echo "<script>alert('something is rong please try again')</script>";
    }
}
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crub</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
        <header>user registation update from from</header>
        <fieldset>
        
        <form method="post">
            <input type="text" name="name" value="<?php echo $row['name'];?>" class="username" placeholder="Enter full name"/>
            <input type="tel" name="phone" value="<?php echo $row['phone'];?>" class="username" placeholder="Enter phone"/>
            <input type="email" name="email" value="<?php echo $row['email'];?>" class="username" placeholder="Enter email"/>
            <input type="submit" name="submit" id="submit" value="submit"/>
        </form>
    </fieldset>
    </div>
</body>
</html>