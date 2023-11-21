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
  <title>Document</title>
    <link rel="stylesheet" href="/HealthCrafter/CSS/general.css" />
    <link rel="stylesheet" href="/HealthCrafter/CSS/style.css" />
    <link rel="stylesheet" href="/HealthCrafter/CSS/admin.css" />
</head>
<body>

<section class="section-medicine">
  <div class="container">
    
<button class="btn btn-admin"><a href="medicine.php" class="btn-link">Add Medicine</a></button>

<table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Image source</th>
          <th>Medicine name</th>
          <th>Medicine Company</th>
          <th>Price</th>
           <th>Operation1</th>
          <th>Operation2</th>
        </tr>
      </thead>
      <tbody>
  
      <?php
      
      $sql = "SELECT * FROM `medicine`";
      $result = mysqli_query($conn, $sql );

      if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc( $result)){
          $id = $row['id']; 
          $medimg = $row['medimage']; 
          $medname= $row['medname']; 
          $companyname= $row['medcompany']; 
          $price= $row['price']; 
          $table= $row['table']; 


          echo "<tr>
          <td>$id</td>
          <td>$medimg</td>
          <td>$medname</td>
          <td>$companyname</td>
          <td>$ $price</td>
  <td>
    <button class='btn btn-admin'>
        <a href='update.php?updateid=$id&table=$table' class='btn-link'>Update</a>
    </button>
</td>
       <td>
    <button class='btn btn-admin'>
        <a href='delete.php?deleteid=$id&table=$table' class='btn-link'>Delete</a>
    </button>

    </td>

        </tr>";
        }
      }

      
      ?>



      </tbody>
    </table>
</div>
</section>



<!-------------------------- baby and mom -------------------------------->

<section class="section-medicine">
  <div class="container">
    
<button class="btn btn-admin"><a href="medicine.php" class="btn-link">Add Baby & Mom</a></button>

<table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Image source</th>
          <th>Medicine name</th>
          <th>Medicine Company</th>
          <th>Price</th>
            <th>Operation1</th>
          <th>Operation2</th>
        </tr>
      </thead>
      <tbody>
  
      <?php
      
      $sql = "SELECT * FROM `babyandmom`";
      $result = mysqli_query($conn, $sql );

      if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc( $result)){
          $id = $row['id']; 
          $medimg = $row['medimage']; 
          $medname= $row['medname']; 
          $companyname= $row['medcompany']; 
          $price= $row['price'];
          $table= $row['table'];  


          echo "<tr>
          <td>$id</td>
          <td>$medimg</td>
          <td>$medname</td>
          <td>$companyname</td>
          <td>$ $price</td>
                 <td>
    <button class='btn btn-admin'>
        <a href='update.php?updateid=$id&table=$table' class='btn-link'>Update</a>
    </button>
</td>
 <td>
 <button class='btn btn-admin'>
        <a href='delete.php?deleteid=$id&table=$table' class='btn-link'>Delete</a>
    </button>

    </td>

        </tr>";
        }
      }

      
      ?>
      </tbody>
    </table>
</div>
</section>
  


<!-------------------------- Health Accessories-------------------------------->

<section class="section-medicine">
  <div class="container">
    
<button class="btn btn-admin"><a href="medicine.php" class="btn-link">Add Health Accessories</a></button>

<table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Image source</th>
          <th>Medicine name</th>
          <th>Medicine Company</th>
          <th>Price</th>
            <th>Operation1</th>
          <th>Operation2</th>

        </tr>
      </thead>
      <tbody>
  
      <?php
      
      $sql = "SELECT * FROM `healthaccessories`";
      $result = mysqli_query($conn, $sql );

      if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc( $result)){
          $id = $row['id']; 
          $medimg = $row['medimage']; 
          $medname= $row['medname']; 
          $companyname= $row['medcompany']; 
          $price= $row['price'];
          $table= $row['table'];  


          echo "<tr>
          <td>$id</td>
          <td>$medimg</td>
          <td>$medname</td>
          <td>$companyname</td>
          <td>$ $price</td>
        
     <td>
    <button class='btn btn-admin'>
        <a href='update.php?updateid=$id&table=$table' class='btn-link'>Update</a>
    </button>
</td>
 <td>
 <button class='btn btn-admin'>
        <a href='delete.php?deleteid=$id&table=$table' class='btn-link'>Delete</a>
    </button>

    </td>
 </tr>";
        }
      }

      
      ?>
      </tbody>
    </table>
</div>

    </section>

<!-------------------------- diabetes-------------------------------->

<section class="section-medicine">
  <div class="container">
    
<button class="btn btn-admin"><a href="medicine.php" class="btn-link">Add Diabetes</a></button>

<table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Image source</th>
          <th>Medicine name</th>
          <th>Medicine Company</th>
          <th>Price</th>
            <th>Operation1</th>
          <th>Operation2</th>
        </tr>
      </thead>
      <tbody>
  
      <?php
      
      $sql = "SELECT * FROM `diabetes`";
      $result = mysqli_query($conn, $sql );

      if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc( $result)){
          $id = $row['id']; 
          $medimg = $row['medimage']; 
          $medname= $row['medname']; 
          $companyname= $row['medcompany']; 
          $price= $row['price']; 
          $table= $row['table']; 


          echo "<tr>
          <td>$id</td>
          <td>$medimg</td>
          <td>$medname</td>
          <td>$companyname</td>
          <td>$ $price</td>
      <td>
    <button class='btn btn-admin'>
        <a href='update.php?updateid=$id&table=$table' class='btn-link'>Update</a>
    </button>
</td>
 <td>
 <button class='btn btn-admin'>
        <a href='delete.php?deleteid=$id&table=$table' class='btn-link'>Delete</a>
    </button>

    </td>

          
        </tr>";
        }
      }

      
      ?>

      
      </tbody>
    </table>
</div>
<!-------------------------- 	vitamins-------------------------------->

<section class="section-medicine">
  <div class="container">
    
<button class="btn btn-admin"><a href="medicine.php" class="btn-link">Add Vitamins</a></button>

<table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Image source</th>
          <th>Medicine name</th>
          <th>Medicine Company</th>
          <th>Price</th>
            <th>Operation1</th>
          <th>Operation2</th>
        </tr>
      </thead>
      <tbody>
  
      <?php
      
      $sql = "SELECT * FROM `vitamins`";
      $result = mysqli_query($conn, $sql );

      if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc( $result)){
          $id = $row['id']; 
          $medimg = $row['medimage']; 
          $medname= $row['medname']; 
          $companyname= $row['medcompany']; 
          $price= $row['price']; 
          $table= "vitamins"; 


          echo "<tr>
          <td>$id</td>
          <td>$medimg</td>
          <td>$medname</td>
          <td>$companyname</td>
          <td>$ $price</td>
       <td>
    <button class='btn btn-admin'>
        <a href='update.php?updateid=$id&table=$table' class='btn-link'>Update</a>
    </button>
</td>
 <td>
 <button class='btn btn-admin'>
        <a href='delete.php?deleteid=$id&table=$table' class='btn-link'>Delete</a>
    </button>

    </td>
        </tr>";
        }
      }

      
      ?>
      </tbody>
    </table>
</div>

</section>
</body>
</html>






