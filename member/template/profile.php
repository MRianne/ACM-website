<div class="row">
	<div class="col s3">
		<div class="card z-depth-2" style="max-height:700px; max-width: 400px; margin: 10px auto; padding:10px;">
			<div class="card-image ">
				<img src="../../img/sample-image-1.png">
				<span class="card-title">
					<!-- Text Here -->
				</span>
				<a class="btn-floating halfway-fab waves-effect waves-light red hoverable">
					<i class="material-icons">add</i>
				</a>
			</div>
			<div class="card-content">
				<p>
					<!-- text Here -->
				</p>
			</div>
		</div>
	</div>
	<div class="col s9">
		<div class="row" style="margin: 10px auto; padding:20px;">
			<div id="admin">
				<div class="card material-table">
					<div class="table-header">
						<span class="table-title"> Member Details </span>
						<div class="actions">
							<a href="#" class="search-toggle waves-effect btn-flat nopadding">
								<i class="material-icons">search</i>
							</a>
						</div>
					</div>
					<table id="datatable" class="responsive-table centered">
						<thead>
							<th colspan="2" class="acm-body white-text">
								<h6> General </h6>
							</th>
						</thead>
						<tbody>
							<tr>
								<td>Student Number</td>
								<td><?= $academia['idno'] ?></td>
							</tr>
							<tr>
								<td>Student Name</td>
								<td><?= $academia['lname'] ?>, <?= $academia['fname'] ?></td>
							</tr>
							<tr>
								<td>Course</td>
								<td><?= $academia['program'] ?></td>
							</tr>
						</tbody>
						<!-- <thead>
							<th colspan="2" class="acm-body white-text">
								<h6> Contact Details </h6>
							</th>
						</thead>
						<tbody>
							<tr>
								<td>Contact Number</td>
								<td>09123456789</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>jdcruz@fit.edu.ph</td>
							</tr>
						</tbody> -->
						<thead>
							<th colspan="2" class="acm-body white-text">
								<h6> Account Info </h6>
							</th>
						</thead>
						<tbody>
							<tr>
								<td>Username</td>
								<td><?= $account['username'] ?></td>
							</tr>
							<!-- <tr>
								<td>Password</td>
								<td>C@rd0_D@l1s@y</td>
							</tr> -->
						</tbody>
						<thead>
							<th colspan="2" class="acm-body white-text">
								<h6> Membership Details </h6>
							</th>
						</thead>
						<tbody>
							<tr>
								<td>Designation</td>
								<td><?= $account_type ?></td>
							</tr>
							<!-- <tr>
								<td>Membership Type</td>
								<td> New / Renewal</td>
							</tr> -->
							<tr>
								<td> Registeration Date</td>
								<td><?= $member['date_added'] ?></td>
							</tr>
							<tr>
								<td> Payment Status</td>
								<td><?= $member['p_id'] ? 'Paid' : 'Not Paid' ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>