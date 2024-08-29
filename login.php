<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="./assets/css/login-css.css">
    <script src="./assets/js/notiflix-3.2.6.min.js"></script>
    <link rel="stylesheet" href="./assets/css/notiflix-3.2.6.min.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="loginName" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" required>
        </div>
        <div class="input-group">
            <div class="submit-btn"><a href=javascript:; onclick="LoginCheck()">Login</a></div>
        </div>
        <p class="register-link">Don't have an account? <a href="#">Register here</a></p>
    </div>

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
</html>
