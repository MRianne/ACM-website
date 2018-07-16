<div class="container">
	<h4 class="acm-color">Edit Record</h4>
	<form action="" method="POST">
	<input type="hidden" name="id" value="<?= $id ?>">
	<div class="card">
		<div class="card-content">
			<div class="section">
				<span class="card-title acm-color">Personal Information</span>
				<div class="row">
					<div class="col s6">
						<div class="input-field">
							<input name="first_name" id="firstNameField" type="text" class="validate" value="<?= $academia['fname'] ?>">
							<label for="firstNameField">First Name</label>
						</div>
						<div class="input-field">
							<input name="middle_name" id="middleNameField" type="text" class="validate" value="<?= $academia['mname'] ?>">
							<label for="middleNameField">Middle Name</label>
						</div>
						<div class="input-field">
							<input name="last_name" id="lastNameField" type="text" class="validate" value="<?= $academia['lname'] ?>">
							<label for="lastNameField">Last Name</label>
						</div>
					</div>
					<div class="col s6">
						<div class="input-field">
							<input name="username" id="usernameField" type="text" class="validate" value="<?= $account['username'] ?>">
							<label for="usernameField">User Name</label>
						</div>
						<!-- <div class="input-field">
							<input id="password" type="password" class="validate">
							<label for="password">Password</label>
						</div> -->
					</div>
				</div>
			</div>
			<div class="divider"></div>
			<div class="section">
				<span class="card-title acm-color">Student Information</span>
				<div class="row">
					<div class="input-field col s6">
						<input id="student_num" type="text" class="validate" value="<?= $academia['idno'] ?>" disabled>
						<label for="student_num">Student Number</label>
					</div>
					<div class="input-field col s6">
						<select name="program" id="programField">
							<option value="BSCSBA" <?= $academia['program'] == 'BSCSBA' ? 'selected' : '' ?>>BSCSBA</option>
							<option value="BSCSSE" <?= $academia['program'] == 'BSCSSE' ? 'selected' : '' ?>>BSCSSE</option>
							<option value="BSITAGD" <?= $academia['program'] == 'BSITAGD' ? 'selected' : '' ?>>BSITAGD</option>
							<option value="BSITDA" <?= $academia['program'] == 'BSITDA' ? 'selected' : '' ?>>BSITDA</option>
							<option value="BSITSMBA" <?= $academia['program'] == 'BSITSMBA' ? 'selected' : '' ?>>BSITSMBA</option>
							<option value="BSITWMA" <?= $academia['program'] == 'BSITWMA' ? 'selected' : '' ?>>BSITWMA</option>
							<option value="BSCE" <?= $academia['program'] == 'BSCE' ? 'selected' : '' ?>>BSCE</option>
							<option value="BSCPE" <?= $academia['program'] == 'BSCPE' ? 'selected' : '' ?>>BSCPE</option>
							<option value="BSECE" <?= $academia['program'] == 'BSECE' ? 'selected' : '' ?>>BSECE</option>
							<option value="BSEE" <?= $academia['program'] == 'BSEE' ? 'selected' : '' ?>>BSEE</option>
							<option value="BSME" <?= $academia['program'] == 'BSME' ? 'selected' : '' ?>>BSME</option>
						</select>
						<label for="programField">Program</label>
					</div>
				</div>
			</div>
			<div class="divider"></div>
			<div class="section">
				<span class="card-title acm-color">Membership Information</span>
				<div class="row">
					<div class="input-field col s6">
						<select name="account_type">
							<option value="10" <?= $member['p_id'] == '10' ? 'selected' : '' ?>>Member</option>
							<option value="1" <?= $member['p_id'] == '1' ? 'selected' : '' ?>>Admin</option>
							<option value="2" <?= $member['p_id'] == '2' ? 'selected' : '' ?>>President</option>
							<option value="3" <?= $member['p_id'] == '3' ? 'selected' : '' ?>>Vice President - Internal</option>
							<option value="4" <?= $member['p_id'] == '4' ? 'selected' : '' ?>>Vice President - External</option>
							<option value="5" <?= $member['p_id'] == '5' ? 'selected' : '' ?>>Secretary</option>
							<option value="6" <?= $member['p_id'] == '6' ? 'selected' : '' ?>>Auditor</option>
							<option value="7" <?= $member['p_id'] == '7' ? 'selected' : '' ?>>Tresurer</option>
							<option value="8" <?= $member['p_id'] == '8' ? 'selected' : '' ?>>Public Relations Officer</option>
							<option value="9" <?= $member['p_id'] == '9' ? 'selected' : '' ?>>Junior Officer</option>
						</select>
						<label>Account Type</label>
					</div>
					<div class="input-field col s6">
						<select name="p_id">
							<option value="10" <?= $account['type'] == '10' ? 'selected' : '' ?>>Member</option>
							<option value="1" <?= $account['type'] == '1' ? 'selected' : '' ?>>Adviser</option>
							<option value="2" <?= $account['type'] == '2' ? 'selected' : '' ?>>President</option>
							<option value="3" <?= $account['type'] == '3' ? 'selected' : '' ?>>Vice President - Internal</option>
							<option value="4" <?= $account['type'] == '4' ? 'selected' : '' ?>>Vice President - External</option>
							<option value="5" <?= $account['type'] == '5' ? 'selected' : '' ?>>Secretary</option>
							<option value="6" <?= $account['type'] == '6' ? 'selected' : '' ?>>Auditor</option>
							<option value="7" <?= $account['type'] == '7' ? 'selected' : '' ?>>Tresurer</option>
							<option value="8" <?= $account['type'] == '8' ? 'selected' : '' ?>>Public Relations Officer</option>
							<option value="9" <?= $account['type'] == '9' ? 'selected' : '' ?>>Junior Officer</option>
						</select>
						<label>Designation</label>
					</div>
					<div class="col s6">
						<p>
							<label>
								<input id="paid-radio" type="radio" name="paid" value="1" <?= $member['paid'] ? 'checked' : '' ?> />
								<span>Paid</span>
							</label>
						</p>
						<p>
							<label>
								<input id="unpaid-radio" type="radio" name="paid" value="0" <?= $member['paid'] ? '' : 'checked' ?>/>
								<span>Not Paid</span>
							</label>
							<br>
						</p>
					</div>
				</div>
				<div class="divider"></div>
				<div class="section">
					<center>
						<button type="submit" class="waves-effect acm-btn btn-large"><i class="material-icons left">subdirectory_arrow_right</i>Submit</button>
					</center>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>

<script>
	$(document).ready(function(){
		$('select').formSelect();
	});
</script>