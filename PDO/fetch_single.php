<?php
include('database.php');
include('function.php');
if(isset($_POST["user_id"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM usersdouble
  WHERE id = '".$_POST["user_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["first_name"] = $row["first_name"];
  $output["last_name"] = $row["last_name"];
  if($row["image"] != '')
  {
   $output['user_image'] = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
  }
  else
  {
   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
  }
  
    if($row["image2"] != '')
  {
   $output['user_image2'] = '<img src="upload/'.$row["image2"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image2" value="'.$row["image2"].'" />';
  }
  else
  {
   $output['user_image2'] = '<input type="hidden" name="hidden_user_image2" value="" />';
  }
 }
 echo json_encode($output);
}
?>