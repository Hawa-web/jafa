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
				<a href="index.php" class="logo">
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
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<!-- <a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a> -->
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
                </div>
                
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="card-title">Basic Form</h4>
                            <form action="add-blog-api.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Blog Title</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="category">Blog Category:</label><br>
                                    <select id="category" name="category" class="form-control" required>
                                        <option value="Air Freight">Air Freight</option>
                                        <option value="Domestic Transport">Domestic Transport</option>
                                        <option value="Sea Freight">Sea Freight</option>
                                        <option value="Ware Housing">Ware Housing</option>
                                        <option value="NVOCC">NVOCC</option>
                                        <option value="Custom Clearence">Custom Clearence</option>
                                        <option value="Technology">Technology</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date">Blog Date</label>
                                    <input class="form-control" type="date" id="date" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Blog Details:</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Blog Image</label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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
                $('#modalMessage').text('Blog post submitted successfully.');
                $('#messageModal').modal('show');
            } else if (status === 'fail') {
                $('#modalMessage').text('Failed to submit the blog post. Please try again.');
                $('#messageModal').modal('show');
            }
});
</script>

</body>


<!-- form-vertical23:59-->
</html>