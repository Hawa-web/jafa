<?php 
include 'myFunctions.php';
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets-2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <script src="assets/js/notiflix-3.2.6.min.js - Shortcut.lnk"></script>
    <link rel="stylesheet" href="assets/css/notiflix-3.2.6.min.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="./assets/images/logo/big logo.png" width="35" height="35" alt=""> <span>Jaffery Admin</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="index-2.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Blogs</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
                                <li><a href="admin-blog-form.php">Add Blog</a></li>
								<li><a href="blog-list.php">Blog List</a></li>
								
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-book"></i> <span> Certificates</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
                                <li><a href="add-certificate.php">Add Certificate</a></li>
								<li><a href="certificate-list.php">Certificate List</a></li>		
							</ul>
						</li>
                    </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
                                
								<h3><?php GetTotalEmployees();?></h3>
								<span class="widget-title1">Total Blogs <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php GetTotalDepartments(); ?></h3>
                                <span class="widget-title2">Certificates<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php GetTotalLeaves();?></h3>
                                <span class="widget-title3">Leaves<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
				
					
					<div class="col-12 col-md-6 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Employee Per Role</h4>
									<div class="float-right">
										<!-- <ul class="chat-user-total">
											<li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
											<li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
										</ul> -->
									</div>
								</div>	
								<canvas id="bargraph"></canvas>
							</div>
						</div>
					</div>
				
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">Current blogs</h4>
								<div class="table-responsive">
									<table class="table table-hover mb-0">
										<thead>
											<tr>
												<th>ID</th>
												<th>Category</th>
												<th>Title</th>
                                                <th>Description</th>
                                                
											</tr>
										</thead>
                                        <!-- Displaying different courses -->
                                                <?php
                                                    include 'conn-2.php';
                                                    $sql = "SELECT id, category, title, description, image, reg_date FROM blogs";
                                                    $result = $conn->query($sql);   
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                            echo "<tbody>";
                                                            echo "<tr>";
                                                            echo "<td>" . $row["id"] . "</td>";
                                                            echo "<td>" . $row["category"] . "</td>";
                                                            echo "<td>" . $row["title"] . "</td>";
                                                            echo "<td>" . $row["description"] . "</td>";
                                                            echo "<td><img src='uploads/" . $row["image"] . "' alt='" . $row["title"] . "' width='100'></td>";
                                                            
                                                            echo "</tr>";
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='7'>No blog posts found.</td></tr>";
                                                    }
                                                    $conn->close();
                                                ?>
									</table>
								</div>
                            </div>
                        </div>
                    </div>
					
                    
				
            </div>
           
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets-2/js/jquery-3.2.1.min.js"></script>
	<script src="assets-2/js/popper.min.js"></script>
    <script src="assets-2/js/bootstrap.min.js"></script>
    <script src="assets-2/js/jquery.slimscroll.js"></script>
    <script src="assets-2/js/Chart.bundle.js"></script>
    <script src="assets-2/js/chart.js"></script>
    <script src="assets-2/js/app.js"></script>

        <script>
           
            var barChartData = {
		labels: [<?php LoadLabelList(); ?>],
		datasets: [{
			label: 'Dataset 1',
			backgroundColor: 'rgba(0, 158, 251, 0.5)',
			borderColor: 'rgba(0, 158, 251, 1)',
			borderWidth: 1,
			data: [<?php LoadDataList(); ?>]
		}]
	};

	var ctx = document.getElementById('bargraph').getContext('2d');
	window.myBar = new Chart(ctx, {
		type: 'bar',
		data: barChartData,
		options: {
			responsive: true,
			legend: {
				display: false,
			}
		}
	});

        </script>

<script>
            var lineChartData = {
		labels: [ <?php LoadLabelList();?>],
		datasets: [{
			label: "My First dataset",
			backgroundColor: "rgba(0, 158, 251, 0.5)",
			data: [<?php LoadLabelList();?>]
		}, {
		label: "My Second dataset",
		backgroundColor: "rgba(255, 188, 53, 0.5)",
		fill: true,
		data: [<?php LoadDataList();?>]
		}]
	};
	
	var linectx = document.getElementById('linegraph').getContext('2d');
	window.myLine = new Chart(linectx, {
		type: 'doughnut',
		data: lineChartData,
		options: {
			responsive: true,
			legend: {
				display: false,
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			}
		}
	});
	
        </script>
</body>



</html>