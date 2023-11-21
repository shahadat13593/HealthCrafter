

<?php
session_start();

include("header.html");

?>

<?php

include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="/HealthCrafter/CSS/general.css" />
    <link rel="stylesheet" href="/HealthCrafter/CSS/style.css" />
 
</head>
<body>


<style>

      .heading-secondary{
        text-align: center;
      }
      .login-btn-box{
        grid-column: 1/3;
      }

      .login{
           box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.15);
          background: linear-gradient(to right bottom, #bae3fc, #cfebfd);
          border-radius: 11px;
      }
      .btn--form{
          background-color: #252d32 !important;
          color: #fff !important;
      }
      .btn--form:hover {
         background-color: #fff !important;
        color: #252d32 !important;


}


    
    </style>
  </head>

<section class="section-cta" >
        <div class="container login">
    <div class="cta-text-box">
              <h2 class="heading-secondary">Login</h2>
              <form action="<?php $_SERVER["PHP_SELF"] ?>" class="cta-form" method="post">
        
                <div>
                  <label for="email">Email</label>
                  <input type="email" class="email" required placeholder="exmail@gmail.com" autocomplete="email" name="email">
                </div>
               <div>
                  <label for="password">Password</label>
                  <input type="password" class="password"  placeholder="Enter Your Password" autocomplete="current-password" name="password"/>
                
               </div>
              <div class="login-btn-box">
                 <input type="submit" value="Sign up now" name="submit" class="btn btn--form">
                </div>
               
                 
              </form>

                  </form>
               <div class="account-exist-box">
                <a href="registration.php" class="account_exist">create an account?</a>
          </div>
            </div>
        </div>
      </section>

  
</body>
</html>




<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){


  $email= filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $password= filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

   echo"<script>console.log('$email');</script>";


   if(empty($email)|| empty($password) ){
echo "<script>alert('All Fills are required!')</script>";
}else{

  $sql = "SELECT * FROM registration WHERE email = '$email'";

 $result =  mysqli_query($conn, $sql );

 if(mysqli_num_rows($result)> 0){
  $rows = mysqli_fetch_assoc($result);


 if ($rows["email"] == $email && $rows["password"] == $password) {
        header("Location: index.php");

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

       

      } else {
        echo "<script>alert('Try again! Wrong email and password.')</script>";
      }

 }


}

}


mysqli_close($conn);

include("footer.html");


?>


