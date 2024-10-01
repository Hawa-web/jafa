
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title> JAFFERY ISLAND COAST LINKS LTD </title>
    <link rel="stylesheet" type="text/css" href="assets-2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets-2/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <script src="assets-2/js/notiflix-3.2.6.min.js"></script>
    <link rel="stylesheet" href="assets-2/css/notiflix-3.2.6.min.css">
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <!-- <form action="http://dreamguys.co.in/preclinic/template/index.html" class="form-signin"> -->
						<div class="account-logo">
                           <!--  <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a> -->
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" autofocus="" class="form-control" id="loginName">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                           <!--  <button type="submit" class="btn btn-primary account-btn">Login</button> -->
                           <div class="button float-center" style ="background-color: orange; color:white; padding:20px;">
                            <a href=javascript:; onclick="LoginCheck()" class="main-btn">Login</a>
                        </div>
                        </div>
                        <div class="text-center register-link">
                            Go to <a href="../index.html"> Home Page</a>
                        </div>
                    <!-- </form> -->
                </div>
			</div>
        </div>
    </div>
    <script src="assets-2/js/jquery-3.2.1.min.js"></script>
	<script src="assets-2/js/popper.min.js"></script>
    <script src="assets-2/js/bootstrap.min.js"></script>
    <script src="assets-2/js/app.js"></script>

    <script>
    function LoginCheck(){
        Notiflix.Loading.pulse('Authentificating...');
        var loginName = document.getElementById("loginName").value;
        var password = document.getElementById("password").value;

        $.ajax({
            method: "GET",
            url: "login_api.php",
            data: {loginName: loginName, password:password}
        })

        .done(function(response){
            Notiflix.Loading.remove(500);
            if(response=='Granted')
            {
                window.location.href = 'index.php';
            }
            else {
                Notiflix.Report.failure("Login Failure", "Access Denied. Check and Try Again");
            }
        });
    }
</script>
</body>


<!-- login23:12-->
</html>