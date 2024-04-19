<?php
  include("database.php");

  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($username)){
      echo '<script>alert("Please type a username!");</script>';
    }
    elseif(empty($pass)){
      echo '<script>alert("Please type a password!");</script>';
    }
    else{
      $sql = "SELECT customer_username, customer_pass FROM customer_account WHERE customer_username = '$username' AND customer_pass = '$pass'";
      $result_query = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result_query) > 0){
        header("Location: ../index.php");
        die();
      }
      else{
        echo '<script>alert("Wrong username/password!");</script>';
      }
    }
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gorilla Login Page</title>

  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-brands/css/uicons-brands.css'>

  <link rel="icon" href="../img/MONKEY.png">
  
  <link rel="stylesheet" href="../loginpagecss/loginpage.css">
  <link rel="stylesheet" href="../loginpagecss/general.css">
  <link rel="stylesheet" href="../loginpagecss/header.css">
  <link rel="stylesheet" href="../loginpagecss/footer.css">

</head>
<body>
<!-- HEADER HEADER  HEADER HEADER  HEADER HEADER  HEADER HEADER  HEADER HEADER  HEADER HEADER  HEADER HEADER -->
  <header class="header">
    <nav>
      <div class="logo-container">

        <div class="logo-div">
          <a href="../index.php">
            <p class="LOGO">
              GO<span class="rilla">RILLA</span>
            </p>
          </a>
        </div>
  
      </div>
    </nav>
  </header>
<!--  FORM FORM    FORM FORM    FORM FORM    FORM FORM    FORM FORM    FORM FORM    FORM FORM    FORM FORM    FORM FORM  -->
      <section class="login-container">
        
          <div class="login-div">
            <p class="login-title">
              Login to
            </p>
            <p class="pagename">
              GO<span class="rilla">RILLA</span>
            </p>
          </div>
        
        <form class="login-form" action="loginpage.php" method="post">

          <label class="email_address_label" for="username">
            Username
          </label>
          <div class="email-fill-up-container">
            <input class="email-fill-up" type="text" placeholder="Username" name="username" required>
          </div>

          <label class="password_label" for="confirm_password">
            Password
          </label>
          <div class="password-fill-up-container">
            <input class="password-fill-up" type="password" placeholder="Password" name="password" required>
          </div>
        
        
          <div class="submit-button-container">
            <!-- <button class="submit-button">Next</button> -->
            <input class="submit-button" type="submit" name="log_in" value="Log in">
          </div>

        </form>

        <div class="separate-container">
          <div class="separator-div">
            <hr class="separator">
            <p class="or">or</p>
            <hr class="separator">
          </div>
              
          <div class="buttons-container">
            <div class="social-media-buttons-container">
              <button class="social-media-buttons">
                <img class="social-media-logo" src="../signupimg/google-icon.png" alt="google_icon">
                <div class="button-contents">
                  Log in with
                  <span class="social-media-name">
                    Google
                  </span>
                </div>
              </button>
            </div>
                
            <div class="social-media-buttons-container">
              <button class="social-media-buttons">
                <img class="social-media-logo" src="../signupimg/facebook.webp" alt="google_icon">
                <div class="button-contents">
                  Log in with 
                  <span class="social-media-name">
                    Facebook
                  </span>
                </div>
              </button>
            </div>
                
            <div class="social-media-buttons-container">
                <button class="social-media-buttons">
                  <img class="social-media-logo" src="../signupimg/mac-icon.png" alt="google_icon">
                  <div class="button-contents">
                    Log in with  
                    <span class="social-media-name">
                    Apple
                  </span>
                </div>
              </button>
            </div>
          </div>
              
          <div class="separator-div">
            <hr class="separator">
          </div>

          <div class="question-div">
            <p class="question">
              Don't have an account yet?
              <a href="SignUpPage.php">
                <span class="sign-up-link">Sign up here</span>.
              </a>
            </p>
          </div>
              
          <div class="disclaimer-div">
              <p class="disclaimer">
              This site is protected by reCAPTCHA and the Google
              <span class="underline">Privacy Policy</span>
              and <span class="underline">Terms of Service</span> apply.
            </p>
          </div>     
        </div>
      </section>
    <!-- FOOOOOOOOOOOOOTTTTTTTTTEEEEEEEEEEEEEEEEEEEEEERRRRRRRRRRRRRRRRRRRRRRRRRRR -->
      <footer class="footer-container">
        <div class="link-container-parent">
          <div class="link-container">
            <a href="../index.php">Home</a>
            <a href="AboutUs.php">About Us</a>
            <a href="../OtherPages/loginpage.php">My Account</a>
          </div>
          <div class="link-container">
            <a href="#">Products</a>
            <a href="ContactUs.php">Contact</a>
            <a href="SignUpPage.php">Sign Up</a>
          </div>
          
        </div>
        <div class="soc-med-links-container">
          <a href="https://www.facebook.com" class="soc-med-links">
            <i class="fi fi-brands-facebook"></i>
          </a>
          <a href="https://www.instagram.com" class="soc-med-links">
            <i class="fi fi-brands-instagram"></i>
          </a>
          <a href="https://www.twitter.com" class="soc-med-links">
            <i class="fi fi-brands-twitter"></i>
          </a>
          <a href="https://www.pinterest.com" class="soc-med-links">
            <i class="fi fi-brands-pinterest"></i>
          </a>
          <a href=https://www.youtube.com" class="soc-med-links">
            <i class="fi fi-brands-youtube"></i>
          </a>
        </div>
      </footer>
</body>
</html>

<?php 
  mysqli_close($conn);
?>