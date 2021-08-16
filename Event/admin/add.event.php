<?php
error_reporting(E_ERROR | E_PARSE);

include 'partials/menu.php'; ?>

<div class= "main-content">
  <div class=" wrapper">
  <h1>Add Event</h1>
  <br>

  <?php
  if (isset($_SESSION['upload']))
  {
    echo $_SESSION['upload'];
    unset($_SESSION['upload']);
  }
  ?>

  <form action="" method="POST" enctype="multipart/form-data">
    <table class="tbl-full"></table>
    <tr>
      <td>Title:</td>
      <td>
        <input type="text" name="title" placeholder="Event Title"/>
      </td>
    </tr>
<br>
    <tr>
      <td>Description:</td>
      <td>
        <textarea name="description" rows="4" cols="25" placeholder="Event Description"></textarea>
      </td>
    </tr>
<br>
    <tr>
      <td>Location:</td>
      <td>
        <textarea name="location" placeholder="Location"></textarea>
      </td>
    </tr>
<br>
    <tr>
      <td>Date/Time:</td>
      <td>
        <textarea  name="datetime" placeholder="Date/Time"></textarea>
      </td>
    </tr>
<br>
    <tr>
      <td>Select Images:</td>
      <td>
        <input type="file" name="images[]" multiple/>
      </td>
    </tr>
<br>
    <tr>
      <td>Category:</td>
      <td>
        <select name= 'category'>
        <?php

          $sql="SELECT * from categories";
          $results=mysqli_query($conn,$sql);

        ?>
          <?php
            while($row=mysqli_fetch_object($results))
            {

          ?>

            <option value="<?php echo $row->id; ?>"> <?php echo $row->name; ?> </option>


        <?php
      }
        ?>

      </select>
      </td>
    </tr>
<br><br>
    <tr>
      <td colspan= "2"></td>
      <td>
        <input type="submit" name="submit" value="Add Event" class="btn-secndary">
      </td>
    </tr>

  </table>
</form>

<?php
if (isset($_POST['submit'])) {

  // First we get the form data from the URL
  $title = $_POST["title"];
  $description = $_POST["description"];
  $location = $_POST["location"];
  $datetime = $_POST["datetime"];
  $category = $_POST["category"];


  if (empty($title) ||empty($description) || empty($location) || empty($datetime) || empty($category)) {
  header("Location: add.event.php?error=emptyfields&title=".$title);
    exit();
}




if (isset($_FILES['images']['name']))
 {


  $images = $_FILES['images']['tmp_name'];
  $a=0;
  $all_files="";

  for($a=0;$a<sizeof($images);$a++)
  {


      $ext = end(explode('.', $_FILES['images']['name'][$a]));

      $image_name = "event_".time()."_".rand(10000,99999).".".$ext;
      $all_files.=$image_name.",";

      $file_path=$_SERVER['DOCUMENT_ROOT']."/Event/images/events/".$image_name;

      $upload = move_uploaded_file($_FILES['images']['tmp_name'][$a],$file_path);

      if($upload)
      {




      }




  }

  $all_files=rtrim($all_files, ',');

  $sql2="INSERT INTO events(title,description,location,datetime,category,images) VALUES('$title','$description','$location','$datetime','$category','$all_files')";

  mysqli_query($conn,$sql2);

}







//echo "INSERTED";


}


?>

  <div class="clearfix"></div>
</div>
</div>
<?php include 'partials/footer.php' ?>
