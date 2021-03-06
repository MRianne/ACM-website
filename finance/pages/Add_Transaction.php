<html>
<head>
	<title>Add Transaction</title>
	<!-- Our Custom CSS -->

	<link rel="stylesheet" href="../css/materialize.css">
	<link rel="stylesheet" href="../css/acm.php">
	<link rel="stylesheet" href="../css/finance.css">

	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>


<body>
<?php $page = ''; include('navBar.php'); ?>
	<div class="wrapper">
		<div class="container">
			<div class="card-panel pos">
				<div class="row">
					<div class="top-margin" style="margin:2vw;">
						<div class="row">
							<div class="col s7">
								<h3 class="acm-text">Add Transaction</h3>
								<h7 class="acm-sub">Association for Computing Machinery (ACM)</h7>
								<br><br>
							</div>
						</div>
					</div>
					<form action="#" method="POST">
						<div class="row">
							<div class="input-field pos col s6">
								<input class="validate" type="number" id="StuNum" name="studid" placeholder="Enter Student ID...">
								<label for="id">Student ID</label>
							</div>
							<div class="col s6">
								<label>Term</label>
								<select id="term" name="term_slct">
									<?php
									// run query
									$quser=mysqli_query($conn,"select * from `school_year`");
									// set variable
									$hold=""; $charHold = "";
									while($row=mysqli_fetch_array($quser)){
										$val = $row['sy'].$row['term'];
										?> <option value="<?php echo $row['term'],",",$row['sy'] ?>"> <?php echo $row['term']," Term, SY ",$row['sy']; ?> </option> <?php
									}
									?>
								</select>
							</div>
						</div>
						<!-- <div class="row">
						<div class="input-field col s6">
						<input placeholder="Your first name..." id="fname" type="text" class="validate">
						<label for="name">First Name</label>
					</div>
					<div class="input-field col s6">
					<input placeholder="Your last name.." id="lname" type="text" class="validate">
					<label for="name">Last Name</label>
				</div>
			</div> -->
			<div class="row">
				<div class="input-field col s12">
					<input class="form-control" type="number" id="pfd" name="feeDep" placeholder="Enter amount of payment..">
					<label for="amount">Amount</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12">

					<label>Type</label>
					<select id="type" name="type_slct">
						<?php
						include('dbcon.php');
						// run query
						$quser=mysqli_query($conn,"select * from `type`");
						// set variable
						while($row=mysqli_fetch_array($quser)){
							?> <option value=" <?php echo $row['type_id'] ?> "> <?php echo $row['type_name'] ?> </option> <?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="remarks">Remarks</label>
					<textarea id="remarksArea" class="materialize-textarea" name="remarks" rows="3"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col s7 right">

					<!-- <input class="btn waves-effect waves-light right" name="sub" type="submit" value="Submit"></input> -->
					<button class="btn waves-effect waves-light right" name="sub" type="submit">Submit
						<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>



<!--scripts--->

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../js/init.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/pie.js"></script>
<script src="../js/values.js"></script>

</body>
</html>
