<?php
require_once 'dbConfig.php';

function insertIntoform ($pdo, $user_name,$First_name,$Last_name, $profession,
$statusinLife,$experience,$age) {

    $sql = "INSERT INTO nominee (user_name,First_name,Last_name, profession,
statusinLife,experience,Age) VALUES (?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$user_name,$First_name,$Last_name, $profession,
    $statusinLife,$experience,$age]);

    if ($executeQuery) {
        return true;
    }
}


function getuserbyID($pdo, $userID) {
    $sql = "SELECT * FROM nominee WHERE userID = ?";
    $stmt->$pdo->prepare($sql);
	if($stmt->execute([$userID])) {
		return $stmt -> fetch();
	
	}
}
function seeAlluserRecords ($pdo){
    $sql = "SELECT * FROM nominee";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt ->fetchAll();
    }

function update_employee($pdo, $userID, $user_name, $First_name, $Last_name, 
	$profession, $statusinLife, $experience, $Age) {

	$sql = "UPDATE nominee 
				SET user_name = ?, 
					First_name = ?, 
					Last_name = ?, 
					profession = ?, 
					statusinLife = ?, 
					experience = ?, 
					Age = ? 
			WHERE userID = ?";
	$stmt = $pdo->prepare($sql);
	
		$executeQuery = $stmt->execute([$user_name, $First_name, $Last_name, 
			$profession, $statusinLife, $experience, $Age, $userID]);

	if ($executeQuery) {
		return true;
	}
}


function Delete_employee($pdo, $userID) {

	$sql = "DELETE FROM nominee WHERE userID = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$userID]);

	if ($executeQuery) {
		return true;
	}

}
}
?>
