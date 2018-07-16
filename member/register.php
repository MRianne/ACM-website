<?php
	include "includes/util.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$msg = '';
		$year = get_year();

		if(isset($_POST['existing_student_number'])) {
			$id = strip_tags($_POST['existing_student_number']);
			$username = strip_tags($_POST['username']);
			$password = strip_tags($_POST['password']);
			$confirm_password = strip_tags($_POST['confirm_password']);
			
			if(validate_academia($id)) {
				$msg .= '<div class="card-panel red white-text"><p>Student not found in Academia</p></div>';
			} else if(!validate_member($id, $year)) {
					$msg .= '<div class="card-panel red white-text"><p>Student is already registered</p></div>';
			} else if(!validate_username($username)) {
				$msg .= '<div class="card-panel red white-text"><p>Username already taken</p></div>';
			} else if(!validate_password($password, $confirm_password)) {
				$msg .= '<div class="card-panel red white-text"><p>Password does not match</p></div>';
			} else {
				insert_member($id, $year);
				$password = md5($password);
				insert_account($id, $username, $password);
				$msg .= '<div class="card-panel green white-text"><p>Student successfully registered</p></div>';
			}
		}

		if(isset($_POST['student_number'])) {
			$id = strip_tags($_POST['student_number']);
			$fname = strip_tags($_POST['first_name']);
			$lname = strip_tags($_POST['last_name']);
			$mname = strip_tags($_POST['middle_name']);
			$program = strip_tags($_POST['program']);

			$username = strip_tags($_POST['username']);
			$password = strip_tags($_POST['password']);
			$confirm_password = strip_tags($_POST['confirm_password']);

			if(!validate_academia($id)) {
				$msg .= '<div class="card-panel red white-text"><p>Student is already in Academia</p></div>';
			} else if(!validate_username($username)) {
				$msg .= '<div class="card-panel red white-text"><p>Username already taken</p></div>';
			} else if(!validate_password($password, $confirm_password)) {
				$msg .= '<div class="card-panel red white-text"><p>Password does not match</p></div>';
			} else {
				insert_academia($id, $fname, $lname, $mname, $program);
				insert_member($id, $year);
				$password = md5($password);
				insert_account($id, $username, $password);
				$msg .= '<div class="card-panel green white-text"><p>Student successfully registered</p></div>';
			}
		}
	}

	include('header.php');
	include('template/register.php');
	include('footer.php');