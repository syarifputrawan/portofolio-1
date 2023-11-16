<?php
session_start();
if (isset($_SESSION['id_login']) && isset($_SESSION['username'])) {
    header("location:pages/dashboard/index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login form</title>
    <!-- di bawah ini source google font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&family=Roboto:wght@100&display=swap');
    </style>
    <!-- di bawah ini source bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- di bawah ini source style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="header">
        <div class="row">
            <div class="col-md-4">
                <div class="textlogo">programer</div>
            </div>
            <div class="col-md-3"></div>
            
        </div>
    </div>
    <div class="hero">
        <div class="row">
            <div class="col-md-6">
                <h3>Kesempatan tidak selalu datang dua kali... </h3>
                <div class="texthero">
                    Mari Bergabung Bersama Saya
                </div>
            </div>
            <div class="col-md-6">
                <div class="formhero">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1>Sign In</h1>
                            <form role="form" action="aksi/auth/login.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h4>username</h4></label>
                                    <input type="username"  name="username"    class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><h4>Password</h4></label>
                                    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    <label for="exampleInputPassword1"><a ><h4>lupa password</h4></a></label>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <center>
        <h3> website developer</h3>
        </center>
    </div>
</body>

</html>