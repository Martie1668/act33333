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
	<?php $getuserbyID = getuserbyID($pdo, $_GET['userID']); ?>
	<form action="core/handleforms.php?userID=<?php echo $_GET['userID']?>" method="POST">
		<p>
			<label for="username">Username: </label> 
			<input type="text" name="user_name" value="<?php echo $getuserbyID['user_name']; ?>">
		</p>
		<p>
			<label for="Firstname">First name: </label> 
			<input type="text" name="First_name" value="<?php echo $getuserbyID['First_name']; ?>">
		</p>
		<p>
			<label for="Lastname">Last name: </label>
			<input type="text" name="Last_name" value="<?php echo $getuserbyID['Last_name']; ?>">
		</p>
		<p>
			<label for="profession">Profession: </label>
			<input type="text" name="profession" value="<?php echo $getuserbyID['profession']; ?>">
		</p>
		<p>
			<label for="statusinLife">Status in life: </label>
			<input type="text" name="statusinLife" value="<?php echo $getuserbyID['statusinLife']; ?>">
		</p>
		<p>
			<label for="experience">Experience: </label>
			<input type="text" name="experience" value="<?php echo $getuserbyID['experience']; ?>"></p>
		<p>
			<label for="Age">Age: </label>
			<input type="number" name="age" value="<?php echo $getuserbyID['age']; ?>">
			<input type="submit" name="editbutton">
		</p>
	</form>
</body>
</html>