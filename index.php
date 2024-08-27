<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<?php include('template/header.php'); ?>
</head>

<?php $Murid = [
	[
		"Nama" => "Fachri",
		"Kelas" => "XI",
		"Jurusan" => "PPLG",
		"Umur" => "17",
		"Status" => "Hadir"
	],
	[
		"Nama" => "Igor",
		"Kelas" => "XI",
		"Jurusan" => "PPLG",
		"Umur" => "17",
		"Status" => "Izin"
	],
	[
		"Nama" => "dede",
		"Kelas" => "XI",
		"Jurusan" => "PPLG",
		"Umur" => "16",
		"Status" => "Izin"
	]


]
?>

<body>

<div class="main-container">
	<div class="panel">
		<div class="panel-header">
			<h5>Data</h5>
			<hr>
		</div>
		<div class="panel-body">
			<table class="table table-dashed recent-order-table" id="myTable">
				<thead>
					<tr>
						<th>Name</th>
						<th>Kelas</th>
						<th>Jurusan</th>
						<th>Umur</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($Murid as $data) { ?>
					<tr>
						<td><?php echo($data['Nama']); ?></td>
						<td><?php echo($data['Kelas']); ?></td>
						<td><?php echo($data['Jurusan']); ?></td>
						<td><?php echo($data['Umur']); ?></td>
						<td><?php echo($data['Status']); ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<div class="table-bottom-control"></div>
		</div>
	</div>

	<div class="footer">
		<p>Copyright@ <script>document.write(new Date().getFullYear())</script>ALL Rights Reserved By <span class="text-primary">Digiboard</p>
	</div>

</div>
</body>

<?php include('template/footer.php'); ?>