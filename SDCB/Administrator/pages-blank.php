<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Summary of CSSFs</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<!-- JQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	
	<!-- DataTables CDNs -->
	<link href="https://cdn.datatables.net/v/dt/dt-2.0.7/b-3.0.2/b-print-3.0.2/r-3.0.2/datatables.min.css" rel="stylesheet">
 
	<script src="https://cdn.datatables.net/v/dt/dt-2.0.7/b-3.0.2/b-print-3.0.2/r-3.0.2/datatables.min.js"></script>

</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="pages-blank.php">
          <span class="align-middle">SDCB Admin Portal</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="pages-blank.php">
              <i class="align-middle" data-feather="file"></i> <span class="align-middle">Summary of CSSFs</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="blank-pages.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Summary of SAs</span>
            </a>
					</li>

					<li class="sidebar-header">
						Account
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.php">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log Out</span>
            </a>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Summary of CSSFs</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<table id="myTable" class="display">
										<thead>
											<tr>
												<th>Name</th>
												<th>Contact Details</th>
												<th>Office Visited</th>
												<th>Personnel Visited</th>
												<th>Date Visited</th>
												<th>Services Received</th>
												<th>Responsiveness</th>
												<th>Reliability</th>
												<th>Access and Facilities</th>
												<th>Communication</th>
												<th>Costs</th>
												<th>Integrity</th>
												<th>Assurance</th>
												<th>Outcome</th>
												<th>Comments</th>
												<th>Total Rating</th>
											</tr>
										</thead>
										<tbody>
											<?php
												if ($result->num_rows > 0) {
													while($row = $result->fetch_assoc()) {
														echo "<tr>";
														echo "<td>".$row["name"]."</td>";
														echo "<td>".$row["contact_details"]."</td>";
														echo "<td>".$row["office_visited"]."</td>";
														echo "<td>".$row["personnel_visited"]."</td>";
														echo "<td>".$row["date_visited"]."</td>";
														echo "<td>".$row["services_received"]."</td>";
														echo "<td>".$row["responsiveness"]."</td>";
														echo "<td>".$row["reliability"]."</td>";
														echo "<td>".$row["access_and_facilities"]."</td>";
														echo "<td>".$row["communication"]."</td>";
														echo "<td>".$row["costs"]."</td>";
														echo "<td>".$row["integrity"]."</td>";
														echo "<td>".$row["assurance"]."</td>";
														echo "<td>".$row["outcome"]."</td>";
														echo "<td>".$row["comments"]."</td>";
														echo "<td>".$row["total_rating"]."</td>";
														echo "</tr>";
													}
												} else {
													echo "0 results";
											}
										?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://csdbatac.com/" target="_blank"><strong>CSD Batac</strong></a> | <a class="text-muted" href="https://portal.csdbatac.com/" target="_blank"><strong>SDCB Portal</strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://csdbinfosys.net/home" target="_blank">Infosys</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://lrms.csdbatac.com/home" target="_blank">SDCB LRMS</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://e-rsys.csdbatac.com/" target="_blank">CID e-RSys</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://umok.csdbatac.com/" target="_blank">Umok</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script>
		$(document).ready(function (){
			var table = $('#myTable').DataTable({
				layout: {
                    topStart: {
                        buttons: ['print']
                    }
                },
				'scrollX': true,
				'createdRow': function(row, data, dataIndex){
					for (let i = 0; i <= 15; i++) {
						$('td:eq(' + i + ')', row).css('min-width', '200px');
					}
				}
			});
		});
	</script>

</body>

</html>