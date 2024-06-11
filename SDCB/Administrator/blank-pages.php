<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "visitor_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM visitors";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];

    $update_sql = "UPDATE visitors SET status='$status', remarks='$remarks' WHERE id='$id'";
    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    exit;
}

$conn->close();
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

	<title>Summary of Scheduled Appointments</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<!-- JQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	
	<!-- DataTables CDNs -->
	<link href="https://cdn.datatables.net/v/dt/dt-2.0.7/b-3.0.2/b-print-3.0.2/r-3.0.2/datatables.min.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
 
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

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.php">
              <i class="align-middle" data-feather="file"></i> <span class="align-middle">Summary of CSSFs</span>
            </a>
					</li>

					<li class="sidebar-item active">
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
					</li>
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

					<h1 class="h3 mb-3">Summary of Scheduled Appointments</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<table id="myTable" class="display">
										<thead>
											<tr>
												<th>Name</th>
												<th>Contact Number</th>
												<th>Email</th>
												<th>Agency</th>
												<th>Office to Visit</th>
												<th>Date</th>
												<th>Time</th>
												<th>Purpose</th>
												<th>Ticket Number</th>
												<th>Status</th>
												<th>Remarks</th>
											</tr>
										</thead>
										<tbody>
										<?php
											if ($result->num_rows > 0) {
												while($row = $result->fetch_assoc()) {
													echo "<tr>";
													echo "<td>".$row["name"]."</td>";
													echo "<td>".$row["contact"]."</td>";
													echo "<td>".$row["email"]."</td>";
													echo "<td>".$row["agency"]."</td>";
													echo "<td>".$row["agency_visit"]."</td>";
													echo "<td>".$row["date"]."</td>";
													echo "<td>".$row["time"]."</td>";
													echo "<td>".$row["purpose"]."</td>";
													echo "<td>".$row["ticket_number"]."</td>";
													echo "<td>
														<select class='s' id='status-".$row["id"]."' onchange='updateRecord(".$row["id"].")'>
															<option value='' ".($row["status"] == '' ? 'disabled selected' : '').">Select Status</option>
															<option value='Pending' ".($row["status"] == 'Pending' ? 'selected' : '').">Pending</option>
															<option value='Completed' ".($row["status"] == 'Completed' ? 'selected' : '').">Completed</option>
															<option value='Cancelled' ".($row["status"] == 'Cancelled' ? 'selected' : '').">Cancelled</option>
														</select>
														<span style='display:none' id='status-print-".$row["id"]."'>".$row["status"]."</span>
													</td>";
													echo "<td>
														<input type='text' id='remarks-".$row["id"]."' onchange='updateRecord(".$row["id"].")' value='".$row["remarks"]."'>
														<span style='display:none' id='remarks-print-".$row["id"]."'>".$row["remarks"]."</span>
													</td>";
													echo "</tr>";
												}
											} else {
												echo "<tr><td colspan='12'>0 results</td></tr>";
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
                        buttons: [
							{
								extend: 'print',
								exportOptions: {
									format: {
									body: function ( inner, rowidx, colidx, node ) {
										if (node.classList.contains('summary')) {
										return '<select class="s" style="display:none;">' + inner + '</select>';
										} else {
										return inner;
										}
									}
									}
								},
								customize: function ( win, butt, tbl ) {
									$(win.document.body).find('select').css('display', 'none');
									$(win.document.body).find('input').css('display', 'none');
									$(win.document.body).find('span').css('display', 'block');
								}
							}
						]
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

		function updateRecord(id) {
            var status = document.getElementById('status-' + id).value;
            var remarks = document.getElementById('remarks-' + id).value;

            $.ajax({
                url: '',
                type: 'POST',
                data: { id: id, status: status, remarks: remarks },
                success: function(response) {
                    console.log(response);
                    $('#remarks-print-' + id).text(remarks);
                }
            });
        }
	</script>

</body>

</html>