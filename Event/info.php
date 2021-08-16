<?php

include 'includes/header.php';


$event_id = $_POST['event_id'];

$sql="SELECT * from events WHERE id='$event_id'";

$query = mysqli_query($conn,$sql);

$result = mysqli_fetch_assoc($query);

?>

<div class= "main-content">
  <div class=" wrapper">
  <br>

  <p> Title: <?php echo $result['title']; ?> </p>
  <p> Description: <?php echo $result['description']; ?> </p>
  <p> Location:<?php echo $result['location']; ?> </p>
  <p> DateTime: <?php echo $result['datetime']; ?> </p>
 <p> Image :

<?php

  $images = explode(",",$result['images']);

?>

<?php

  foreach($images as $image)
  {
?>

<img src="https://localhost/event//images/events/<?php echo $image; ?>" width="200" />

<?php

}
?>

 </p>

 <form action="like.php" method="post">
   <input type="hidden" name="event_id" value="<?php echo $row['id']; ?>">
 <button type="submit" name="like_btn" class="btn btn-primary">Like</button>
 </form>


  <?php include 'includes/footer.php';
