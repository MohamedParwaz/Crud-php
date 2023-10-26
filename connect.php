<?php
 
 $connect = new mysqli('localhost','root',"",'crudoperation');

 if(!$connect){
    die(mysqli_error($connect));
 }

?>