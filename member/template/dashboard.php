<div class="row">
	<div class="col s12 section">
		<center>
			<h4 class="blue-text text-darken-4">Membership Statistics</h4>
		</center>
		<div class="divider"></div>
	</div>
	<div class="col s10 offset-s1 section">
		<canvas id="new-members-chart"></canvas>
	</div>
</div>

<script type="text/javascript">
	var ctx = document.getElementById("new-members-chart").getContext('2d');
	var lineChart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				<?php foreach($programs as $program): ?>
				<?= '\''.$program.'\',' ?>
				<?php endforeach ?>
			],
			datasets: [
				{
					data: [
						<?php foreach($programs as $program): ?>
						<?= '\''.$members[$program].'\',' ?>
						<?php endforeach ?>
					],
					label: 'Programs',
					borderColor: "#3e95cd",
					fill: false,
					borderWidth: 1,
				},
			]
		},
		options: {
			title: {
				display: true,
				text: 'Member Registrations Given Months of 2018'
			}
		}
	});
</script>