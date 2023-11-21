<?php
session_start();

if(empty($_SESSION['email']) && empty($_SESSION['password'])){
include("header.html");

}else{
  include("header2.html");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HealthCrafter</title>
    <link rel="stylesheet" href="/CSS/general.css" />
    <link rel="stylesheet" href="/CSS/style.css" />
     <link rel="stylesheet" type="text/css" href="CSS/product.css">
  </head>
  <style>
    
  </style>
  <body>
  

    <!--------------------------- Main ------------------->
    <main class="main">
      <section class="section-product-page">
        <div class="container grid grid--cols-2 grid-gap-2 ">
          
            <div class="product-page-img-box">
              <img
                src="img/Medicine/medicine-1.jpg"
                alt="medicine"
                class="product-page-img"
              />
            </div>
            <div class="product-page-text-box">
               <p class="product-name">Tab. Fexo 120mg</p>
                    <p class="product-company">Square Pharmaceuticals Ltd.</p>
                    <p class="price"><span>৳</span>90</p>
                    <div class="button-box">
                      <button class="btn btn--buy">Buy Now</button>
                      <button class="btn btn--cart">Add to Cart</button>
                    </div>
                  </div>
       
            <div class="product-description-box">
              <h3 class="heading-three">Description:</h3>
              <p class="introduction">Introduction:</p>
              <p class="intro-description">
                Fexo 120 belongs to a group of medicines called antihistamines. It is used to treat various allergic conditions such as hay fever, conjunctivitis and some skin reactions such as eczema, hives and reactions to bites and stings. 
              </p>
              <p class="uses">Uses:</p>
              <p class="uses-description">
               Allergic conditions
              </p>
              <p class="side-effect">Side effects:</p>
              <p class="side-effect-description">
               Headache, Drowsiness, Nausea, Dizziness
              </p>
              <p class="how">How to use:</p>
              <p class="how-description">
               Take this medicine in the dose and duration as advised by your doctor. Swallow it as a whole. Do not chew, crush or break it.
              </p>
            </div>
          </div>
          </div>
        </div>
      </section>
    </main>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>


<?php

  include("footer.html");


?>