<?php

require_once("dbConfig.php");
require_once ('models.php');

if (isset($_POST["register"])) {
    echo"<pre>";
    print_r ($_POST);
    echo"<pre>";

}

if (isset($_POST['register'])) {
    $user_name = $_POST['user_name'];
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $profession = $_POST['profession'];
    $statusinLife = $_POST['statusinLife'];
    $experience = $_POST['experience'];
    $age = $_POST['age'];

    $query = insertIntoform($pdo,$user_name,$First_name,$Last_name,$profession,$statusinLife,$experience,$age);
                            
    if($query) {
        header('location: ../index.php');
    }
    else{
        echo"query failed";
    }

}
if (isset($_POST['editbutton'])) {
	$userID = $_GET['userID'];
	$user_name = trim($_POST['user_name']);
	$First_name = trim($_POST['First_name']);
	$Last_name = trim($_POST['Last_name']);
	$profession = trim($_POST['profession']);
	$statusinLife = trim($_POST['statusinLife']);
	$experience = trim($_POST['experience']);
	$Age = trim($_POST['age']);

	if (!empty($user_name) && !empty($First_name) && !empty($Last_name) && !empty( $profession) && !empty($statusinLife)  && !empty($experience)  && !empty($Age)) {
		
		$query = update_employee($pdo, $userID, $user_name, $First_name, $Last_name, $profession, $statusinLife, $experience, $Age);

	if ($query) {
		header("Location:../index.php");
	}

	else {
		echo "Update failed";
	}
}

else {
	echo "Make sure that no fields are empty";
}

}
if (isset($_POST['deleteStudentBtn'])) {

	$query = deleteAStudent($pdo, $_GET['student_id']);
	
	if ($query) {
		header("Location: ../index.php");
	}
	else {
			echo "Deletion failed";
	}
}

?>