<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Do you really want to get away of this employee?</h1>
	<?php $getuserbyID = getuserbyID($pdo, $_GET['userID']); ?>
	<form action="core/handleForms.php?userID=<?php echo $_GET['userID']; ?>" method="POST">

		<div class="employeecontainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>user name: <?php echo $getStudentById['user_name']; ?></p>
			<p>First name: <?php echo $getStudentById['First_name']; ?></p>
			<p>Last name: <?php echo $getStudentById['Last_name']; ?></p>
			<p>profession: <?php echo $getStudentById['profession']; ?></p>
			<p>status in life: <?php echo $getStudentById['statusinlife']; ?></p>
			<p>Experience: <?php echo $getStudentById['experience']; ?></p>
			<p>Age: <?php echo $getStudentById['Age']; ?></p>
			<input type="submit" name="deleteStudentBtn" value="Delete">
		</div>
	</form>
</body>
</html>