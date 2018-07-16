<?php
    function validate_member($idno, $year) {
		include "includes/conn.php";
		$query = "select * from members where idno = $idno and sy = $year";
		$result = mysqli_query($conn, $query);
		return (mysqli_num_rows($result) == 0);
	}

	function validate_academia($idno) {
		include "includes/conn.php";
		$query = "select * from academia where idno = $idno";
		$result = mysqli_query($conn, $query);
		return (mysqli_num_rows($result) == 0);
	}

	function validate_username($username) {
		include "includes/conn.php";
		$query = "select * from accounts where username = '$username'";
		$result = mysqli_query($conn, $query);
		return (mysqli_num_rows($result) == 0);
	}

	function validate_password($password, $confirm_password) {
		return $password == $confirm_password;
	}

	function insert_member($idno, $year) {
		include "includes/conn.php";
		$query = "insert into members(idno, sy, p_id) values ($idno, $year, 10)";
		$result = mysqli_query($conn, $query);
	}

	function insert_account($idno, $username, $password) {
		include "includes/conn.php";
		$query = "insert into accounts(idno, username, password, type, status) values($idno, '$username', '$password', 10, 1)";
		$result = mysqli_query($conn, $query);	
	}

	function insert_academia($idno, $fname, $lname, $mname, $program) {
		include "includes/conn.php";
		$query = "insert into academia(idno, fname, lname, mname, program, role) values($idno, '$fname', '$lname', '$mname', '$program', 'student')";
		$result = mysqli_query($conn, $query);
	}

	function update_member($idno, $year, $p_id, $paid) {
		include "includes/conn.php";
		$query = "update members set p_id = $p_id, paid = $paid where idno = $idno and sy = $year";
		$result = mysqli_query($conn, $query);
	}

	function update_account($idno, $username, $type) {
		include "includes/conn.php";
		$query = "update accounts set username = '$username', type = $type where idno = $idno";
		$result = mysqli_query($conn, $query);	
	}

	function update_academia($idno, $fname, $lname, $mname, $program) {
		include "includes/conn.php";
		$query = "update academia set fname = '$fname', lname = '$lname', mname = '$mname', program = '$program' where idno = $idno";
		$result = mysqli_query($conn, $query);
	}
	
	function delete_member($idno) {
		include "includes/conn.php";
		$query = "delete from members where idno = $idno";
		$result = mysqli_query($conn, $query);
	}

	function delete_account($idno) {
		include "includes/conn.php";
		$query = "delete from accounts where idno = $idno";
		$result = mysqli_query($conn, $query);
	}
    
    function get($idno) {
        include "includes/conn.php";
        $query = "select t1.*, t2.*, t3.* from members as t1, academia as t2, accounts as t3 where t1.idno = $idno and t2.idno = $idno and t3.idno = $idno";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

	function get_member($idno) {
        include "includes/conn.php";
		$query = "select * from members where idno = $idno";
		$result = mysqli_query($conn, $query);
		return mysqli_fetch_assoc($result);
    }
    
    function get_account($idno) {
        include "includes/conn.php";
        $query = "select * from accounts where idno = $idno";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($result);
    }
    
    function get_academia($idno) {
        include "includes/conn.php";
        $query = "select * from academia where idno = $idno";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($result);
    }

	function get_year() {
		include "includes/conn.php";
		$query = "select * from school_year where status = 1";
		$result = mysqli_query($conn, $query);
		return mysqli_fetch_assoc($result)['sy'];
    }
    
    function get_all() {
        include "includes/conn.php";
        $query = "select t1.*, t2.*, t3.* from members as t1, academia as t2, accounts as t3 where t1.idno = t2.idno and t1.idno = t3.idno";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}
	
	function get_account_type($idno) {
		include "includes/conn.php";
        $query = "select * from account_type where type = $idno";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($result);
	}