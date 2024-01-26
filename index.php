
<?php
include "config.php";
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];

    $sql ="INSERT INTO  registations(name,email,phone)VALUES('$name','$email','$phone')";
    $result =mysqli_query($connect,$sql);
    if($result){
        echo "<script>alert('user has been created')</script>";
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
        <header>user registation from</header>
        <fieldset>
        
        <form method="post">
            <input type="text" name="name" class="username" placeholder="Enter full name"/>
            <input type="tel" name="phone" class="username" placeholder="Enter phone"/>
            <input type="email" name="email" class="username" placeholder="Enter email"/>
            <input type="submit" name="submit" id="submit" value="submit"/>
        </form>
    </fieldset>
    </div>
</body>
</html>