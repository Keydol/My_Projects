<?php
	$mysqli = false;

	function connectDB() {
		global $mysqli;
		$mysqli = mysqli_connect("localhost", "root", "", "anketa");
		$mysqli->query("SET NAMES utf8");
	}

	function closeDB() {
		global $mysqli;
		$mysqli->close();
	}

	function getPersonalInform1($id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE id = ".$id;
		else $where = "";
		$result = $mysqli->query("SELECT * FROM personal_information1 $where");
		closeDB();
		if(!$id)
			return resultToArray($result);
		else
			return $result->fetch_assoc();
	}

	function getPersonalInform2($id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE id_p = ".$id;
		else $where = "";
		$result = $mysqli->query("SELECT * FROM personal_information2 $where");
		closeDB();
		if(!$id)
			return resultToArray($result);
		else
			return $result->fetch_assoc();
	}

	function getAddressAndPhone($id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE id_p = ".$id;
		else $where = "";
		$result = $mysqli->query("SELECT * FROM address_and_phone_information $where");
		closeDB();
		if(!$id)
			return resultToArray($result);
		else
			return $result->fetch_assoc();
	}

	function getTravelInformation($id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE id_p = ".$id;
		else $where = "";
		$result = $mysqli->query("SELECT * FROM travel_information $where");
		closeDB();
		if(!$id)
			return resultToArray($result);
		else
			return $result->fetch_assoc();
	}

	function getAnketaDate($id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE id_p = ".$id;
		else $where = "";
		$result = $mysqli->query("SELECT * FROM anketa_date $where");
		closeDB();
		if(!$id)
			return resultToArray($result);
		else
			return $result->fetch_assoc();
	}

	function searchBySurnames($surname) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `personal_information1` WHERE Surnames = \"$surname\"");
		closeDB();
		return resultToArray($result);
	}

	function searchByIdcode($idcode) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `personal_information2` WHERE Identification_number = \"$idcode\"");
		closeDB();
		return resultToArray($result);
	}

	function searchByDate($adate) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `anketa_date` WHERE Anketadate = \"$adate\"");
		closeDB();
		return resultToArray($result);
	}

	function countDate($adate) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT COUNT(*) FROM `anketa_date` WHERE Anketadate = \"$adate\" ");
		closeDB();
		return $result->fetch_assoc();
	}

	function resultToArray($result) {
		$array = array ();
		//поки є дані
		while(($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>