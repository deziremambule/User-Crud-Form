<?php

function upload_image()
{
 if(isset($_FILES["user_image"]))
 {
  $extension = explode('.', $_FILES['user_image']['name']);
  $new_name = rand() . '.' . $extension[1];
  $destination = './upload/' . $new_name;
  move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
  return $new_name;
 }
}

function upload_image2()
{
 if(isset($_FILES["user_image2"]))
 {
  $extension1 = explode('.', $_FILES['user_image2']['name']);
  $new_name1 = rand() . '.' . $extension1[1];
  $destination1 = './upload/' . $new_name1;
  move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination1);
  return $new_name1;
 }
}

function get_image_name($user_id)
{
 include('database.php');
 $statement = $connection->prepare("SELECT image FROM usersdouble WHERE id = '$user_id'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image"];
 }
 
}

function get_image_name2($user_id)
{
 include('database.php');
 $statement = $connection->prepare("SELECT image2 FROM usersdouble WHERE id = '$user_id'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image2"];
 }
 
}

function get_total_all_records()
{
 include('database.php');
 $statement = $connection->prepare("SELECT * FROM usersdouble");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
   