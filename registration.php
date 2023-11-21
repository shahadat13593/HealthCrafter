<?php

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
<style>

 
</style>
<body>
  
  
  <section class="section-cta">
        <div class="container">
          <div class="cta">
            <div class="cta-text-box">
              <h2 class="heading-secondary">Get your first oder for free!</h2>
              <p class="cta-text">Revitalize Your Health with Convenient Medication Delivery!</p>

              <form action="<?php $_SERVER["PHP_SELF"] ?>" class="cta-form" method="post">
                <div>
                  <label for="name">Full Name</label>
                  <input type="text" class="name" required placeholder="Shahadat Hossain" autocomplete="username" name="name">
                </div>
                <div>
                  <label for="email">Email</label>
                  <input type="email" class="email"  required placeholder="exmail@gmail.com" autocomplete="email" name="email">
                </div>
               <div>
                  <label for="password">Password</label>
                  <input type="password" class="password"  placeholder="Enter Your Password" autocomplete="current-password" name="password"/>
                
               </div>

               <input type="submit" value="Sign up now" name="submit" class="btn btn--form">
                 
              </form>
          <div class="account-exist-box">
                <a href="login.php" class="account_exist">Already have account?</a>
          </div>
            </div>
             <div
              class="cta-img-box"
              role="img"
              aria-label="Medicine"
            ></div>
          </div>
        </div>
      </section>
</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $name= filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
  $email= filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $password= filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  echo"<script>console.log('$name');</script>";

  if(empty($name) || empty($email) || empty( $password)){
      echo "<script>alert('All Fills are required!')</script>";
  }else{

try{
     $sql = "INSERT INTO registration (name, email, password) VALUES ('$name', '$email',' $password')";

     mysqli_query($conn, $sql );
     header("Location: login.php");

}catch(mysqli_sql_exception){

  echo "<script>console.log('You already have an account!')</script>";

}

  }
}

mysqli_close($conn);

include("footer.html");


?>




