<?php 


$server = "localhost";
$user= "root";
$password = "";
$db_name = "HealthCrafter";
$conn = "";


try{
  $conn = mysqli_connect($server,$user,$password,$db_name);

  $message = "Database is connected!";
}catch(mysqli_sql_exception){

  $message = "Database is not connect";

}
?>

</script>

<script>
<?php 
if(isset($message)){

 $displayMessage = $message;
 if($displayMessage == "Database is connected!"){
  echo "console.log('$displayMessage');";
 }else{
echo "alert('$displayMessage');";
 }

}

?>
</script>

