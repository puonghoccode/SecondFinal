<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid-Autumn Festival 2023 E-commerce platform by The Little Bunny</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <!-- boostrap CSS link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <!-- fonawesome link -->
    <link rel="stylesheet" href="D://Libraries/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/fontawesome.css">
</head>
<body>
    <div class="container-fluid my-3"> 
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">
                    <!--  username field -->
                    <div class="form-outline mb-4">
                        <label for="user_username"class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user-username">
                    </div>
                    <!--  password field -->
                    <div class="form-outline mb-4">
                        <label for="user_password"class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user-password">
                    </div>

                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                            <a href="user_registration.php" class="text-danger"> Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

    <!-- js link -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>

<?php

if(isset($_POST['user_login'])){
    $user_username=$_POST['$user_username'];
    $user_password=$_POST['$user_password'];
    echo $user_password;
}
?>





