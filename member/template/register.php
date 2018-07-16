<div class="section">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<?= $msg ?>
			</div>
			<div class="col s6">
				<form id="newForm" action="register.php" method="post">
					<div class="card">
						<div class="card-content row">
							<div class="col s12">
								<h5 class="card-title blue-text left-align">Register New Student as Member</h5>
							</div>

							<div class="input-field col s6">
								<input class="validate" type="text" name="student_number" id="studentNumberField">
								<label for="studentNumberField">Student Number</label>
							</div>
							<div class="input-field col s6">
								<select name="program" id="programField">
									<option value="BSCSBA">BSCSBA</option>
									<option value="BSCSSE">BSCSSE</option>
									<option value="BSITAGD">BSITAGD</option>
									<option value="BSITDA">BSITDA</option>
									<option value="BSITSMBA">BSITSMBA</option>
									<option value="BSITWMA">BSITWMA</option>
									<option value="BSCE">BSCE</option>
									<option value="BSCPE">BSCPE</option>
									<option value="BSECE">BSECE</option>
									<option value="BSEE">BSEE</option>
									<option value="BSME">BSME</option>
								</select>
								<label for="programField">Program</label>
							</div>

							<div class="input-field col s12">
								<input class="validate" type="text" name="first_name" id="firstNameField">
								<label for="firstNameField">First Name</label>
							</div>
							<div class="input-field col s12">
								<input class="validate" type="text" name="middle_name" id="lastNameField">
								<label for="lastNameField">Middle Name</label>
							</div>
							<div class="input-field col s12">
								<input class="validate" type="text" name="last_name" id="lastNameField">
								<label for="lastNameField">Last Name</label>
							</div>
							
							<div class="input-field col s12">
								<input class="validate" type="text" name="username" id="usernameField">
								<label for="usernameField">Username</label>
							</div>
							<div class="input-field col s12">
								<input class="validate" type="password" name="password" id="passwordField">
								<label for="passwordField">Password</label>
							</div>
							<div class="input-field col s12">
								<input class="validate" type="password" name="confirm_password" id="confirmPasswordField">
								<label for="confirmPasswordField">Confirm Password</label>
							</div>
							<div class="col s12">
								<center>
									<button type="submit" class="btn waves-effect acm-btn">
									<i class="material-icons left">send</i>
									Register</button>
								</center>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="col s6">
				<form id="existingForm" action="register.php" method="post">
					<div class="card">
						<div class="card-content row">
							<div class="col s12">
								<h5 class="card-title blue-text left-align">Register Existing Student as Member</h5>
							</div>

							<div class="input-field col s12">
								<input class="validate" type="text" name="existing_student_number" id="existingStudentNumberField">
								<label for="existingStudentNumberField">Student Number</label>
							</div>
							<div class="input-field col s12">
								<input class="validate" type="text" name="username" id="existingUsernameField">
								<label for="existingUsernameField">Username</label>
							</div>
							<div class="input-field col s12">
								<input class="validate" type="password" name="password" id="existingPasswordField">
								<label for="existingPasswordField">Password</label>
							</div>
							<div class="input-field col s12">
								<input class="validate" type="password" name="confirm_password" id="existingConfirmPasswordField">
								<label for="existingConfirmPasswordField">Confirm Password</label>
							</div>
							<div class="col s12">
								<center>
									<button type="submit" class="btn waves-effect acm-btn">
									<i class="material-icons left">send</i>
									Register</button>
								</center>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('select').formSelect();
	});
</script>