<?php
// task 4
$email = null;
$pswd = null;
if (isset($_COOKIE['email']))
    $email = $_COOKIE['email'];
if (isset($_COOKIE['pswd']))
    $pswd = $_COOKIE['pswd'];   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- code for login -->
    <div id="content">
        <section class="vh-100" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <form action='./handler/loginValidator.php' method="get">
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                                <span class="h1 fw-bold mb-0">Logo</span>
                                            </div>
                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                                            <!-- email field -->
                                            <div class="form-outline mb-4">
                                                <input type="email" class="form-control form-control-lg" id="login_email" name='email' value='<?php echo $email ?>' />
                                                <label class="form-label" for="form2Example17">Your email </label>
                                                <label for="" id="login_email_msg"></label>
                                            </div>
                                            <!-- password field -->
                                            <div class="form-outline mb-4">
                                                <input type="password" class="form-control form-control-lg" id="login_pswd" name='pswd' value='<?php echo $pswd ?>' />
                                                <label class="form-label" for="form2Example27">Password</label>
                                                <label for="" id="login_pswd_msg"></label>
                                            </div>
                                            <!-- login button -->
                                            <div class="pt-1 mb-4">
                                                <input type="submit" value="login" class="btn btn-dark btn-lg btn-block" class="btn btn-dark btn-lg btn-block">
                                            </div>
                                            <!-- sign in link -->
                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="index.php" style="color: #393f81;">Register here</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./JS/script.js"></script>

</html>