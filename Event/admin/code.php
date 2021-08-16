<?php
require '../includes/dbh.inc.php';
if (isset($_POST['updatebtn']))
{
  $id = $_POST['edit_id'];
  $title = $_POST['edit_title'];
  $description = $_POST['edit_description'];
  $location = $_POST['edit_location'];
  $datetime = $_POST['edit_datetime'];
  $category = $_POST['edit_category'];

  $query = "UPDATE events SET edit_title= '$title', edit_description= '$description', edit_location= '$location', edit_datetime= '$datetime', edit_category= '$category', WHERE id= '$id',";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $SESSION['upload'] = "Your data is updated";
    header("Location:manage.events.php");
    //exit();
  }
  else {
    $SESSION['success'] = "Your data is NOT updated";
    header("Location:manage.events.php");
  }
}
 ?>
