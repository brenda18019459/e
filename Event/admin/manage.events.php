<?php include 'partials/menu.php'; ?>
<div class="main-content">
  <div class="wrapper">
    <h1>Manage Events</h1>
    <br><br>
    <a href="add.event.php" class="btn-primary">Add Event</a>
    <br><br>
              <table class="tbl-full">
                <tr>
                  <th>S.N.</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Location</th>
                  <th>Date/Time</th>
                  <th>Images</th>
                  <th>Category</th>
                  <th>Actions</th>
                </tr>

                <?php
                  $sql = "SELECT * FROM events";
                  $res = mysqli_query($conn, $sql);

                  $count = mysqli_num_rows($res);

                  $sn=1;

                  if ($count>0)
                  {
                    while($row=mysqli_fetch_assoc($res))
                    {
                      $id= $row['id'];
                      $title= $row['title'];
                      $description= $row['description'];
                      $location= $row['location'];
                      $datetime= $row['datetime'];
                      $images= $row['images'];
                      $category= $row['category'];
                      ?>
                      <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $title; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $location; ?></td>
                        <td><?php echo $datetime; ?></td>
                        <td><?php echo $category; ?></td>
                        <td><?php
                        if ($images=="")
                        {
                          echo "<div class='error'>Image Not Added</div>";
                        }
                        else {
                          ?>
                          <img src="<?php echo "manage.events.php"; ?>images/events/<?php echo $images; ?> " width="100px">
                          <?php
                        }
                        ?></td>
                        <td><?php echo $category; ?></td>

                        <form action="update.event.php" method="post">
                          <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
                        <td><button type="submit" name="edit_btn" class="btn-secondary">Update Event</button>
                        </form>
                          <a href=" delete.event.php?id=<?php echo $id; ?>&images=<?php echo $images ?>" class="btn-danger">Delete Event</a>
                         </td>
                      </tr>

                      <?php
                    }

                  }
                  else {
                    echo " <tr> <td colspan='7' class='error'> Event not added yet</td> </tr>";
                  }

                 ?>


              </table>

    <div class="clearfix"></div>
        </div>
      </div>

<div class="clearfix"></div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
