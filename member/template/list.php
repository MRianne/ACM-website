<div class="section">
	<div class="row">
		<div class="col s10 offset-s1">
			<div class="card material-table">
				<div class="table-header">
					<span class="table-title">Members List</span>
				</div>
				<table id="datatable">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Course</th>
							<!-- <th>Member</th> -->
							<th>Paid</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($members as $member): ?>
						<tr>
							<td><?= $member['fname'] ?></td>
							<td><?= $member['lname'] ?></td>
							<td><?= $member['program'] ?></td>
							<!-- <td><?= $member['role'] ?></td> -->
							<td><?= $member['p_id'] ? 'Yes' : 'No' ?></td>
							<td>
								<a href="update.php?id=<?= $member['idno'] ?>" class="btn-small blue waves-effect waves-light white-text">Update</a>
								<a href="delete.php?id=<?= $member['idno'] ?>" class="btn-small red waves-effect waves-light white-text">Delete</a>
								<a href="view.php?id=<?= $member['idno'] ?>" class="btn-small teal waves-effect waves-light white-text">View</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$('#datatable').DataTable({
			"oLanguage": {
				"sStripClasses": "",
				"sSearch": "",
				"sSearchPlaceholder": "Enter Keywords Here",
				"sInfo": "_START_ -_END_ of _TOTAL_",
				"sLengthMenu": '<span>Rows per page:</span><select class="browser-default">' +
					'<option value="10">10</option>' +
					'<option value="20">20</option>' +
					'<option value="30">30</option>' +
					'<option value="40">40</option>' +
					'<option value="50">50</option>' +
					'<option value="-1">All</option>' +
					'</select></div>'
			},
			bAutoWidth: true
		});
	});
</script>