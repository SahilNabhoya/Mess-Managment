<?php
    // header("Location","varification.php")
    $showalert = false;
    $showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connect.php';
    $en_no = $_POST["en_no"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["cpassword"];
    $exists = false;
    if(($password == $confirmpassword)&&$exists==false){
        $sql = "INSERT INTO `userlogin` (`en_no` ,`Name`,`email`, `password`) VALUES ('$en_no','$name','$email', '$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $showalert = true;
        }
    }else{
        $showerror = "Password do not match";
    }
}
?>
0
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SKYAV</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Template Main CSS File -->

    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Alkatra', cursive;
        }

        .content {
            width: 1200px;
            height: auto;
            margin: auto;
            color: #305475;
            margin-top: 200px;
            /* #6a9dcd */
            position: relative;
        }

        .content .par {
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial;
            letter-spacing: 1.2px;
            line-height: 30px;
        }

        .content h1 {
            font-family: 'Times New Roman';
            font-size: 50px;
            padding-left: 20px;
            margin-top: 9%;

            letter-spacing: 2px;
        }

        /* .content span{
    color: #062c50;
} */
        .content .cn {
            width: 160px;
            height: 40px;
            background: #2a557d;
            border: none;
            margin-bottom: 10px;
            margin-left: 20px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: .4s ease;

        }

        .content .cn a {
            text-decoration: none;
            color: #f8f9f9;
            transition: .3s ease;
        }

        .cn:hover {
            background-color: #4ca3c9;
        }

        .content span {
            color: #123a5f;
            font-size: 65px
        }

        .form {
            background-color: #2a557d;
            width: 290px;
            height: 435px;
            position: absolute;
            top: 4px;
            left: 867px;
            transform: translate(0%, -5%);
            border-radius: 20px;
            padding: 30px;
        }

        .form h2 {
            width: 220px;
            font-family: sans-serif;
            text-align: center;
            color: #000608;
            font-size: 22px;
            background-color: #d6eaef;
            border-radius: 10px;
            margin: 2px;
            padding: 8px;
        }

        .form input {
            width: 240px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #3ba3bb;
            border-top: none;
            border-right: none;
            border-left: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 30px;
            font-family: sans-serif;
        }

        .form input:focus {
            outline: none;
        }

        ::placeholder {
            color: #fff;
            font-family: Arial;
        }

        .btnn {
            width: 240px;
            height: 40px;
            background: #d6eaef;
            border: none;
            margin-top: 30px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            color: #fff;
            transition: 0.4s ease;
        }

        .btnn:hover {
            background: #fff;
            color: #154652;
        }

        .btnn a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .form .link {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
            padding-top: 20px;
            text-align: center;
            color: #85b5ec;
        }

        .form .link a {
            text-decoration: none;
            color: #e9e5f3;
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>SKYAV<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>

                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </nav><!-- .navbar -->


            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <div class="content">
        <h1> VGEC Food Court <br></h1><br><br>
        <p class="par">“Life is uncertain. Eat dessert first.”</p>
        <p class="par">“Food is symbolic of love when words are inadequate.”</p>

        <button class="cn"><a href="#">JOIN US</a></button>

        <form class="form" action="sign_up.php" method="post">
            <h2>Sign_up Here</h2>
            <input type="text" id="name" name="name" placeholder="Enter Name Here" required>

            <input type="email" id="email" name="email" placeholder="Enter Email Here" required>
            <input type="password" id="password" name="password" placeholder="Enter Password Here">
            <input type="password" id="cpassword" name="cpassword" placeholder="Enter confirm-Password Here">

            <button class="btnn" ><a href="varification.php">Sign up</a></button>
            <a href="login.php">Back to Login</a>

        </form>
    </div>
    </div>
    </div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>