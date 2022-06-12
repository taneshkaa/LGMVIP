<!DOCTYPE html>
<html>
<body style="background: beige;">
	<h2 style="color: black;"> Enrolled Students... </h2>
	<hr>
	<b> Student: </b> <?php echo $_POST['n']; ?> <br>
	<b> Email: </b> <?php echo $_POST['e']; ?> <br>
	<b> Mobile Number: </b> <?php echo $_POST['m']; ?> <br>
	<b> Address: </b> <?php echo $_POST['add']; ?> <br>
	<b> Gender: </b> <?php echo $_POST['g']; ?> <br>
	<b> Skills: </b> <?php echo $_POST['skill']; ?> <br>
	<b> Course Enrolled: <?php echo $_POST['course']; ?> </b> <br>
	<hr>
</body>
</html>