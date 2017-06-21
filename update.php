</<?php 
 $db = mysqli_connect('localhost','root','','url')
 or die('Error connecting to MySQL server.');

//Step2
$query = "UPDATE user SET played = <?php $_POST['played']; ?> WHERE name = 'ALPHA QUEUE' ";

mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>

<form method="post" action="update.php">
	point <input type="text" name="point">
	<br>
	submit <input type="submit" name="submit">
</form>


</body>
</html>



<?php
//Step 4
mysqli_close($db);
?>