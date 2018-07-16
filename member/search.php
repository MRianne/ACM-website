<?php
	$res = null;
	if(isset($_POST['search_submit'])){
		$res = searchStudent();
	}
	function searchStudent(){
		$idno = strip_tags($_POST['idno']);

		include "includes/conn.php";

		$sql = "SELECT * FROM academia WHERE idno =".$idno;
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 0){
			echo "does not exist";
		}
		else{
			$row = mysqli_fetch_array($result);

			$sql = "SELECT * FROM members WHERE idno = ".$idno;
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) == 0)
				$row['status'] = "New Member";
			
			else
				$row['status'] = "Old Member";

			return $row;
		}
	}
			
?>