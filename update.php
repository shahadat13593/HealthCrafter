<?php
include("header.html");
include("database.php");

$id = isset($_GET['updateid']) ? $_GET['updateid'] : null;
$table = isset($_GET['table']) ? $_GET['table'] : null;

$sql = "SELECT * FROM $table WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_assoc($result);

    $medimg = $rows["medimage"];
    $medname = $rows["medname"];
    $companyname = $rows["medcompany"];
    $price = $rows["price"];
} 


?>

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
      <h2 class="heading-secondary">Update Medicine</h2>
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="cta-form" method="post">


        <div>
          <label for="medimg">Medicine Image Source</label>
          <input type="text" required placeholder="Image Source" name="medimg"  value="<?php echo $medimg;?>">
        </div>
        <div>
          <label for="medname">Medicine Name</label>
          <input type="text" required placeholder="Tab. Fexo 120mg" name="medname" value="<?php echo $medname;?>">
        </div>

        <div>
          <label for="companyname">Company Name</label>
          <input type="text" required placeholder="Square Pharmaceuticals Ltd." name="companyname" value="<?php echo $companyname;?>">
        </div>
        <div>
          <label for="price">Price</label>
          <input type="number" required placeholder="90" name="price" value="<?php echo $price;?>">
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
    $medimg = filter_input(INPUT_POST, "medimg", FILTER_SANITIZE_SPECIAL_CHARS);
    $medname = filter_input(INPUT_POST, "medname", FILTER_SANITIZE_SPECIAL_CHARS);
    $companyname = filter_input(INPUT_POST, "companyname", FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_input(INPUT_POST, "price", FILTER_SANITIZE_NUMBER_INT);
    try {
        $sql = "UPDATE `$table` SET `medimage`='$medimg', `medname`='$medname', `medcompany`='$companyname', `price`='$price' WHERE id = $id";
        mysqli_query($conn, $sql);
        header("Location: admin.php");
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

mysqli_close($conn);
include("footer.html");
?>
</body>
</html>