<?php

$connect =new mysqli('localhost','root','','user');


if(!$connect){
    die(mysqli_error(connect));
}else{
    echo "connection establish";
}






?>