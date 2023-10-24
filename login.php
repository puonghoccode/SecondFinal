<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid-Autumn Festival 2023 by Little Bunny</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <section class="login" id="login">

    <div class="form-container">
        <i class="uil uil-times form-close">
            <!-- login form-->
            <div class="form login-form" id="loginForm">
                <form action="sign_in.php" method="post">
                    <h3 id="title">Login</h3>

                    <div class="input-box">
                        <input type="email" name="email"placeholder="Enter your name or email">
                        <i class="fa-solid fa-envelope email" style="color: #F99006;"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" placeholder="Enter your password">
                        <i class="fa-solid fa-lock password" style="color: #f99006;"></i>
                        <i class="fa-regular fa-eye-slash pw-hide" style="color: #35558d;"></i>
                    </div>

                    <div class="option-field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">Remember me</label>
                        </span>
                        <a href="Forget" class="forget-pw">Forgot password?</a>
                    </div>
                    <input type="hidden" name="action" value="dangnhap">
                    <button class="button" id="loginBtn">Login Now</button>

                    <div class="login-signup">Don't have an account? <a href="#signup" id="signupBtn">Signup</a></div>
                </form>
            </div>
       




            <!-- signup form-->
            
            <div class="form login-form" id="signupForm" style="display: none">
                <form method="post" action="sign_up.php">
                    <h3>Signup</h3>
                    <div class="input-box" id="nameField">
                        <input type="text" name="name" placeholder="Enter your name" required/>
                        <i class="fa-solid fa-user" style="color: #F99006;"></i>
                    </div>

                    <div class="input-box">
                        <input type="email" name="email" placeholder="Enter your email">
                        <i class="fa-solid fa-envelope email" style="color: #F99006;"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" placeholder="Create password">
                        <i class="fa-solid fa-lock password" style="color: #f99006;"></i>
                        <i class="fa-regular fa-eye-slash pw-hide" style="color: #35558d;"></i>
                    </div>

                    <div class="input-box">
                        <input type="date" name="birthday">
                        <i class="fa-solid fa-calendar-days" style="color: #F99006;"></i>
                    </div>


                    <input type="hidden" name="action" value="dangky">
                    <button class="button" id="signupBtn">Signup Now</button>

                    <div class="login-signup" id="signupBackBtn">Back to <a href="#" id="loginBtn">Login</a></div>
                </form>
            </div>
           

            
        </i>
    </div>
</section>

<script>
    const loginForm = document.getElementById("loginForm");
    const signupForm = document.getElementById("signupForm");
    const signupBtn = document.getElementById("signupBtn");
    const signupBackBtn = document.getElementById("signupBackBtn");
    const loginBtn = document.getElementById("loginBtn");

    signupBtn.addEventListener("click", () => {
        loginForm.style.display = "none";
        signupForm.style.display = "block";
    });

    signupBackBtn.addEventListener("click", () => {
        loginForm.style.display = "block";
        signupForm.style.display = "none";
    });

    loginBtn.addEventListener("click", () => {
        loginForm.style.display = "block";
        signupForm.style.display = "none";
    });
</script>
</body>
</html>
