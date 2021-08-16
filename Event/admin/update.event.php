<?php

include 'partials/menu.php'; ?>

<div class= "main-content">
  <div class=" wrapper">
  <h1>Edit Event</h1>
  <br>

  <?php

    if(isset($_POST['updatebtn']))
    {

        $title= $_POST['edit_title'];
        $description = $_POST['edit_description'];
        $location = $_POST['edit_location'];
        $datetime = $_POST['edit_datetime'];
        $category = $_POST['edit_category'];
        $id = $_POST['edit_id'];

        $sql="UPDATE events SET title='$title', description='$description', location='$location', datetime='$datetime',
        category='$category' WHERE id='$id'";

        mysqli_query($conn, $sql);

    }

  ?>



  <?php
  if (isset($_POST['edit_id']))
  {
    $id = $_POST['edit_id'];


    $query = "SELECT * FROM events WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($query_run);


      ?>


  <form action="update.event.php" method="POST">
    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
    <table class="tbl-full"></table>
    <tr>
      <td>Title:</td>
      <td>
        <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" placeholder="Event Title"/>
      </td>
    </tr>
<br>
    <tr>
      <td>Description:</td>
      <td>
        <textarea name="edit_description" rows="4" cols="25" placeholder="Event Description"><?php echo $row['description'] ?></textarea>
      </td>
    </tr>
<br>
    <tr>
      <td>Location:</td>
      <td>
        <textarea name="edit_location" placeholder="Location"><?php echo $row['location'] ?></textarea>
      </td>
    </tr>
<br>
    <tr>
      <td>Date/Time:</td>
      <td>
        <textarea  name="edit_datetime" placeholder="Date/Time"><?php echo $row['datetime']; ?></textarea>
      </td>
    </tr>
<br>
    <tr>
      <td>Select Images:</td>
      <td>
        <input type="file" name="edit_image" value="<?php echo $row['images'] ?>" multiple/></textarea>
      </td>
    </tr>
<br>
    <tr>
      <td>Category:</td>
      <td>
        <select name= 'edit_category'>
        <?php

          $sql="SELECT * from categories";
          $results=mysqli_query($conn,$sql);

        ?>
          <?php
            while($row2=mysqli_fetch_object($results))
            {

          ?>

            <option value="<?php echo $row2->id; ?>" <?php  if($row2->id==$row['category']){ echo "selected"; } ?>><?php  echo $row2->name; ?></option>


        <?php
      }
        ?>

      </select>
      </td>
    </tr>

    <?php
    // code...

}
 ?>

<br><br>
    <tr>
      <td colspan= "2"></td>
      <td>
        <button type="submit" name='updatebtn' class="btn-secondary"> Update </button>
        <a href="manage.events.php" class="btn-danger">Cancel</a>
      </td>
    </tr>

  </table>
</form>

  <div class="clearfix"></div>
</div>
</div>
<?php include 'partials/footer.php' ?>
