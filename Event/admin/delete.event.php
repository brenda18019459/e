<?php

include '../includes/dbh.inc.php';
if(isset($_GET['id']) && isset($_GET['images']))
{

  $id = $_GET['id'];

 $sql="DELETE FROM events WHERE id='$id'";


 mysqli_query($conn,$sql);

echo "Deleted";

}
else {
  echo "redirect";
}
?>
