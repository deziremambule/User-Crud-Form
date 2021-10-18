<?php

include('database.php');
include("function.php");

if(isset($_POST["user_id"]))
{
 $image = get_image_name($_POST["user_id"]);
 if($image != '')
 {
  unlink("upload/" . $image);
 }
 
  $image2 = get_image_name2($_POST["user_id"]);
 if($image2 != '')
 {
  unlink("upload/" . $image2);
 }
 $statement = $connection->prepare(
  "DELETE FROM usersdouble WHERE id = :id"
 );
 $result = $statement->execute(
  array(
   ':id' => $_POST["user_id"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}



?>