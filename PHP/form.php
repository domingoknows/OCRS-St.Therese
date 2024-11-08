<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b2e6292835.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <h1>OCRS: Development of Online Church Reservation System</h1>
    <section class="forms">
        <div class="form-login">
            <div class="container">
                <h2>Login</h2>
                <div class="login-signin">
                    <span> Doesn't have an account yet?</span>
                    <a href="../HTML/register.html" class="link">Sign up</a>
                </div>
                <form action="form.php" id="form" method="post">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" id="email" placeholder="Enter your email"/>
                            <span id="email_error"></span>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" class="password" placeholder="Enter your password"/>
                        <i class="fa-solid fa-eye-slash bx-hide eye-icon"></i>
                        <span id="password_error"></span>
                    </div>
                    <div class="btn-field">
                        <button type="submit" name="signIn">Log in</button></br>                    
                    </div>

                    <div class="line"></div>
                    <div class="facebook">
                        <i class="fa-brands fa-facebook-f facebook-icon"></i>
                        <span>Login with Facebook</span>
                    </div>
                    <div class="google">
                        <img src="../IMAGE/google.webp" class="google-img">
                        <span>Login with Google</span>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../JS/login.js"></script>
    <?php
include 'connect.php';

if(isset($_POST['signUp'])){
    $Name=$_POST['namee'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
     }
     else{
        $insertQuery="INSERT INTO users(Name,email,password)
                       VALUES ('$Name','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: ../HTML/login.html");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password) ;
    
    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("Location: home.php");
     exit();
    }
    else{
        $alert = '<script>alert("Not Found, Incorrect Email or Password")</script>';
        echo $alert;    
    }
}
?>  
</body>
</html>

