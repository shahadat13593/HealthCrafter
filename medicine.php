<?php
include("header.html");
include("database.php");
?>

<script>
<?php if(isset($message2)):?>
alert("<?php echo $message2; ?>");
<?php endif;?>
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/HealthCrafter/CSS/general.css" />
  <link rel="stylesheet" href="/HealthCrafter/CSS/style.css" />
  
  <style>
    .heading-secondary {
      text-align: center;
    }
    .login-btn-box {
      grid-column: 1/3;
    }
    .login {
      box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.15);
      background: linear-gradient(to right bottom, #bae3fc, #cfebfd);
      border-radius: 11px;
    }
    .btn--form {
      background-color: #252d32 !important;
      color: #fff !important;
    }
    .btn--form:hover {
      background-color: #fff !important;
      color: #252d32 !important;
    }
  </style>
</head>
<body>

<section class="section-cta">
  <div class="container login">
    <div class="cta-text-box">
      <h2 class="heading-secondary">Add Medicine</h2>
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="cta-form" method="post">

        <div>
          <label for="table">Select Table</label>
          <select name="table" required>
              <option value="medicine">Medicine</option>
              <option value="babyandmom">Baby & Mom</option>
              <option value="healthaccessories">Health Accessories</option>
              <option value="diabetes">Diabetes</option>
              <option value="vitamins">Vitamins</option>
          </select>
        </div>

        <div>
          <label for="medimg">Medicine Image Source</label>
          <input type="text" required placeholder="Image Source" name="medimg">
        </div>
        <div>
          <label for="medname">Medicine Name</label>
          <input type="text" required placeholder="Tab. Fexo 120mg" name="medname">
        </div>

        <div>
          <label for="companyname">Company Name</label>
          <input type="text" required placeholder="Square Pharmaceuticals Ltd." name="companyname">
        </div>
        <div>
          <label for="price">Price</label>
          <input type="number" required placeholder="90" name="price">
        </div>

        <div class="login-btn-box">
          <input type="submit" value="Submit" name="submit" class="btn btn--form">
        </div>
      </form>
    </div>
  </div>
</section>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $table = filter_input(INPUT_POST, "table", FILTER_SANITIZE_SPECIAL_CHARS);
    $medimg = filter_input(INPUT_POST, "medimg", FILTER_SANITIZE_SPECIAL_CHARS);
    $medname = filter_input(INPUT_POST, "medname", FILTER_SANITIZE_SPECIAL_CHARS);
    $companyname = filter_input(INPUT_POST, "companyname", FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_input(INPUT_POST, "price", FILTER_SANITIZE_NUMBER_INT);

    if (isset($_POST["submit"]) && !empty($table) && !empty($medimg) && !empty($medname) && !empty($companyname) && !empty($price)) {
        try {
            $sql = "INSERT INTO $table (`medimage`, `medname`, `medcompany`, `price`,`table`) VALUES ('$medimg','$medname','$companyname',$price, '$table')";
            mysqli_query($conn, $sql);
            header("Location: admin.php");
            exit();

        } catch (mysqli_sql_exception $e) {
            $message2 = "Error inserting data: " ;
        }
    } else {
        $message2 = "Enter all information!";
    }
}

mysqli_close($conn);
include("footer.html");
?>