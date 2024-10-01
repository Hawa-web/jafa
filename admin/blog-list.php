<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">


<!-- form-vertical23:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Admin Blog</title>
    <link rel="stylesheet" type="text/css" href="assets-2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Optional: Include jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
    <div class="header">
			<div class="header-left">
				<a href="#" class="logo">
					<span>Jaffery Admin</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                
                <!-- <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li> -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<span class="status online"></span>
                        </span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
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
						
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Blog Form</h4>
                    </div>
                    <div class="text-right">
                        <a href="../blog-fullwidth.php" target="_blank"><button type="submit" class="btn btn-primary">View Blogs</button></a>
                    </div>
                </div>
                
                    
                    <!-- Modal -->
                     <!-- Bootstrap Modal -->
                        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="messageModalLabel">Submission Status</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="modalMessage">
                                        <!-- Message content will be injected here via PHP -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
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
                                                    include 'conn.php';
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
                                                            echo "<td class='action-buttons'><a href='edit-blog.php?id=" . $row["id"] . "'>Edit</a></td>";
                                                            echo "<td class='action-buttons'><a href='delete_blog.php?id=" . $row["id"] . "'>Delete</a></td>";
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
    <script src="assets-2/js/select2.min.js"></script>
    <script src="assets-2/js/app.js"></script>


    <script>
        $(document).ready(function() {
            // Check if the URL contains a status parameter
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');

            if (status === 'success') {
                $('#modalMessage').text('Blog post Deleted successfully.');
                $('#messageModal').modal('show');
            } else if (status === 'fail') {
                $('#modalMessage').text('Failed to delete the blog post. Please try again.');
                $('#messageModal').modal('show');
            }
});
</script>

</body>


<!-- form-vertical23:59-->
</html>