
<?php




include "config.php";

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
 
  <div class="container">
  <table class="table">
  <a href="index.php" class="btn btn-sm btn-info">Add user</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

       <?php



       $sql ="select* from registations";

       $result =mysqli_query($connect,$sql);

       if($result){
        while($rows =mysqli_fetch_assoc($result)){
            $id = $rows['id'];
            $name = $rows['name'];
            $email = $rows['email'];
            $phone = $rows['phone'];



            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $phone . '</td>
            <td>
              <a href="edit.php?id='.$id.'" class="btn btn-sm btn-info">Edit</a>
              <a href="delete.php?id='.$id.'" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>';
    
            
            }
       }
?>









    
  </tbody>
</table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>