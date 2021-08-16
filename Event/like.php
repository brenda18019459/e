<?php
require 'includes/dbh.inc.php';
if($_POST['like']) {
$sql = "UPDATE likes set `likes` = `likes`+1 where `product_id` = '1'";
$result=mysql_query($sql);
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input type = "submit" value = "like" name='like'/>
</form>
