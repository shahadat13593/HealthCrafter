<?php
session_start();

if(empty($_SESSION['email']) && empty($_SESSION['password'])){
include("header.html");

}else{
  include("header2.html");
}

?>
<?php
include("main.php");

?>

<?php

include("footer.html");

?>