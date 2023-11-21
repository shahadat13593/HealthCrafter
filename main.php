<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/style.css" />
    <link rel="stylesheet" href="/CSS/general.css" />
  </head>
  <body>
     <!--------------------------- Main ------------------->
    <main class="main">
      <!---------------------- Section-Hero ------------>
      <section class="hero-section">
        <div class="carousel">
          <div class="carousel-img-box">
            <img src="img/carousel/2.jpg" alt="" class="carousel-img" />
          </div>
          <div class="carousel-description-box">
            <h3 class="heading-three">Heading Three</h3>
            <p class="carousel-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
              impedit atque quaerat corrupti libero hic, consequatur
              reprehenderit harum doloremque asperiores.
            </p>
          </div>

          <button class="carousel-btn btn-right">
            <ion-icon
              name="chevron-back-outline"
              class="carouse-icon"
            ></ion-icon>
          </button>
          <button class="carousel-btn btn-left">
            <ion-icon
              name="chevron-forward-outline"
              class="carouse-icon"
            ></ion-icon>
          </button>

          <div class="dots">
            <div class="dot fill"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
          </div>
        </div>
      </section>

      <!---------------------- Section-Category------------>
      <section class="section-category">
        <div class="container">
          <div>
            <p class="sub-heading">Product Categories</p>
            <h2 class="heading-secondary">We offer a wide range of Products</h2>
          </div>
          <div class="categories-box">
            <!---------------------- Category 1------------>
            <div class="category">
              <ion-icon name="bandage-outline" class="category-icon"></ion-icon>
              <p><a href="#med" class="category-name">Medicine</a></p>
            </div>

            <!---------------------- Category 2------------>
            <div class="category">
              <ion-icon name="woman-outline" class="category-icon"></ion-icon>
              <p><a href="#bm" class="category-name">Baby & Mom</a></p>
            </div>

            <!---------------------- Category 3------------>
            <div class="category">
              <ion-icon name="heart-outline" class="category-icon"></ion-icon>
              <p><a href="#hc" class="category-name">Health Accessories</a></p>
            </div>

            <!---------------------- Category 4------------>
            <div class="category">
              <ion-icon
                name="thermometer-outline"
                class="category-icon"
              ></ion-icon>

              <p><a href="#di" class="category-name">Diabetes </a></p>
            </div>

            <!---------------------- Category 5------------>
            <div class="category">
              <ion-icon name="flame-outline" class="category-icon"></ion-icon>
              <p>
                <a href="#vi" class="category-name">Vitamins</a>
              </p>
            </div>

            <!---------------------- Category 6------------>
            <div class="category">
              <ion-icon name="ban-outline" class="category-icon"></ion-icon>
              <p><a href="#pm" class="category-name">Prescription Medicine</a></p>
            </div>
          </div>
        </div>
      </section>

      <!----------------------Products ------------>

      <!---------------------- Section-products ------------>

   <section class="section-products" id="med">
    <div class="container-two">
        <div class="head-sub-box">
            <h3 class="heading-three">Medicine</h3>
        </div>

        <div class='products'> <!-- Move the opening tag outside the loop -->
        <?php
            $sql = "SELECT * FROM `medicine`";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id']; 
                    $medimg = $row['medimage']; 
                    $medname= $row['medname']; 
                    $companyname= $row['medcompany']; 
                    $price= $row['price']; 

                    echo "
                        <!-- product container -->
                        <div class='product'>
                            <a href='product.php' class='product-link'>
                                <div class='product-img-box'>
                                    <img src='$medimg' alt='$medname' class='product-img' />
                                </div>
                                <div class='product-text-box'>
                                    <p class='product-name'>$medname</p>
                                    <p class='product-company'>$companyname</p>
                                    <p class='price'><span>৳</span>$price</p>
                                </div>
                            </a>
                            <button class='btn'>Add to Cart</button>
                        </div>
                        <!-- end of product container -->
                    ";
                }
            }
        ?>  
    </div>
          </div>
          <div class="all-box">
            <a href="#" class="all-link">See all &rarr;</a>
          </div>
        </div>
      </section>

      <!---------------------- Section-products - 2 ------------>

      <section class="section-products" id ="bm">
        <div class="container-two">
          <div class="head-sub-box">
            <h3 class="heading-three">Baby & Mom</h3>
          </div>

          <div class="products">
       <?php
            $sql = "SELECT * FROM `babyandmom`";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id']; 
                    $medimg = $row['medimage']; 
                    $medname= $row['medname']; 
                    $companyname= $row['medcompany']; 
                    $price= $row['price']; 

                    echo "
                        <!-- product container -->
                        <div class='product'>
                            <a href='product.php' class='product-link'>
                                <div class='product-img-box'>
                                    <img src='$medimg' alt='$medname' class='product-img' />
                                </div>
                                <div class='product-text-box'>
                                    <p class='product-name'>$medname</p>
                                    <p class='product-company'>$companyname</p>
                                    <p class='price'><span>৳</span>$price</p>
                                </div>
                            </a>
                            <button class='btn'>Add to Cart</button>
                        </div>
                        <!-- end of product container -->
                    ";
                }
            }
        ?>  
    </div>
          </div>
          <div class="all-box">
            <a href="#" class="all-link">See all &rarr;</a>
          </div>
        </div>
      </section>
        </div>
      </section>

      <!---------------------- Section-products - 3 ------------>

      <section class="section-products" id ="hc">
        <div class="container-two">
          <div class="head-sub-box">
            <h3 class="heading-three">Health Accessories</h3>
          </div>

          <div class="products">
     <?php
            $sql = "SELECT * FROM `healthaccessories`";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id']; 
                    $medimg = $row['medimage']; 
                    $medname= $row['medname']; 
                    $companyname= $row['medcompany']; 
                    $price= $row['price']; 

                    echo "
                        <!-- product container -->
                        <div class='product'>
                            <a href='product.php' class='product-link'>
                                <div class='product-img-box'>
                                    <img src='$medimg' alt='$medname' class='product-img' />
                                </div>
                                <div class='product-text-box'>
                                    <p class='product-name'>$medname</p>
                                    <p class='product-company'>$companyname</p>
                                    <p class='price'><span>৳</span>$price</p>
                                </div>
                            </a>
                            <button class='btn'>Add to Cart</button>
                        </div>
                        <!-- end of product container -->
                    ";
                }
            }
        ?>  
          </div>
          <div class="all-box">
            <a href="#" class="all-link">See all &rarr;</a>
          </div>
        </div>
      </section>

      <!---------------------- Section-products - 4 ------------>

      <section class="section-products" id ="di">
        <div class="container-two">
          <div class="head-sub-box">
            <h3 class="heading-three">Diabetes</h3>
          </div>

          <div class="products">
          <?php
            $sql = "SELECT * FROM `diabetes`";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id']; 
                    $medimg = $row['medimage']; 
                    $medname= $row['medname']; 
                    $companyname= $row['medcompany']; 
                    $price= $row['price']; 

                    echo "
                        <!-- product container -->
                        <div class='product'>
                            <a href='product.php' class='product-link'>
                                <div class='product-img-box'>
                                    <img src='$medimg' alt='$medname' class='product-img' />
                                </div>
                                <div class='product-text-box'>
                                    <p class='product-name'>$medname</p>
                                    <p class='product-company'>$companyname</p>
                                    <p class='price'><span>৳</span>$price</p>
                                </div>
                            </a>
                            <button class='btn'>Add to Cart</button>
                        </div>
                        <!-- end of product container -->
                    ";
                }
            }
        ?>  
          </div>
          <div class="all-box">
            <a href="#" class="all-link">See all &rarr;</a>
          </div>
        </div>
      </section>

      <!---------------------- Section-products - 5 ------------>

      <section class="section-products" id ="vi">
        <div class="container-two">
          <div class="head-sub-box">
            <h3 class="heading-three">Vitamins</h3>
          </div>

          <div class="products">
            <?php
            $sql = "SELECT * FROM `vitamins`";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id']; 
                    $medimg = $row['medimage']; 
                    $medname= $row['medname']; 
                    $companyname= $row['medcompany']; 
                    $price= $row['price']; 

                    echo "
                        <!-- product container -->
                        <div class='product'>
                            <a href='product.php' class='product-link'>
                                <div class='product-img-box'>
                                    <img src='$medimg' alt='$medname' class='product-img' />
                                </div>
                                <div class='product-text-box'>
                                    <p class='product-name'>$medname</p>
                                    <p class='product-company'>$companyname</p>
                                    <p class='price'><span>৳</span>$price</p>
                                </div>
                            </a>
                            <button class='btn'>Add to Cart</button>
                        </div>
                        <!-- end of product container -->
                    ";
                }
            }
        ?> 
          </div>
          <div class="all-box">
            <a href="#" class="all-link">See all &rarr;</a>
          </div>
        </div>
      </section>

      <!---------------------- Section Testimonial ------------>

      <div class="section-testimonial">
        <div class="testimonial-content">
          <div>
            <p class="sub-heading">Testimonials</p>
            <h2 class="heading-secondary">
              Once you buy, you won't buy from anywhere else!
            </h2>
          </div>
          <div class="testimonials">
            <!------------------- Item -1 ------------------------>
            <div class="testimonial-item">
              <img
                src="img/customer/customer-1.jpg"
                alt=""
                class="testimonial-img"
              />
              <p class="testimonial-text">
                HealthCrafter is a lifesaver, offering easy shopping for health
                products and competitive prices. Highly recommended!
              </p>
              <p class="testimonial-author">— David Johnson</p>
            </div>

            <!------------------- Item -2------------------------>
            <div class="testimonial-item">
              <img
                src="img/customer/customer-2.jpg"
                alt=""
                class="testimonial-img"
              />
              <p class="testimonial-text">
                I was initially skeptical about buying medication online, but
                HealthCrafter has turned me into a loyal customer.The range of
                products available is impressive.
              </p>
              <p class="testimonial-author">— Daniel Brown</p>
            </div>

            <!------------------- Item -3------------------------>
            <div class="testimonial-item">
              <img
                src="img/customer/customer-3.jpg"
                alt=""
                class="testimonial-img"
              />
              <p class="testimonial-text">
                I can't express how pleased I am with HealthCrafter. As a busy
                mom, convenience and affordability are crucial when it comes to
                healthcare needs. This store provides both.
              </p>
              <p class="testimonial-author">— Jessica Martinez</p>
            </div>

            <!------------------- Item -4------------------------>
            <div class="testimonial-item">
              <img
                src="img/customer/customer-4.jpg"
                alt=""
                class="testimonial-img"
              />
              <p class="testimonial-text">
                I've been using HealthCrafter for a few months now, and it's
                been a fantastic experience. The quality and authenticity of the
                medications are top-notch.
              </p>
              <p class="testimonial-author">— Olivia Davis</p>
            </div>
            <!-- ---------------------------------------- -->
          </div>
        </div>
        <div class="gallery">
          <!-- ----------item -1 -->
          <figure class="gallery-item">
            <img src="img/gallary/1.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -2 -->
          <figure class="gallery-item">
            <img src="img/gallary/2.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -3 -->
          <figure class="gallery-item">
            <img src="img/gallary/14.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -4 -->
          <figure class="gallery-item">
            <img src="img/gallary/4.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -5 -->
          <figure class="gallery-item">
            <img src="img/gallary/5.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -6 -->
          <figure class="gallery-item">
            <img src="img/gallary/15.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -7 -->
          <figure class="gallery-item">
            <img src="img/gallary/7.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -8 -->
          <figure class="gallery-item">
            <img src="img/gallary/8.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -9 -->
          <figure class="gallery-item">
            <img src="img/gallary/9.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -10 -->
          <figure class="gallery-item">
            <img src="img/gallary/10.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -11 -->
          <figure class="gallery-item">
            <img src="img/gallary/11.jpg" alt="" class="gallary-img" />
          </figure>
          <!-- ----------item -12 -->
          <figure class="gallery-item">
            <img src="img/gallary/17.jpg" alt="" class="gallary-img" />
          </figure>
        </div>
      </div>

      <!----------------- Section features ---------------------------- -->
      <section class="section-features">
        <div class="features container">
          <!------- item-1 ------>
            <div class="feature-item">
              
              <ion-icon name="shield-checkmark-outline"class="feature-icon"></ion-icon>
             
              <p class="feature-heading">Quick & Safe</p>
              <p class="feature-description">Our pharmacy ensures secure and rapid delivery of your essential medications.</p>
            </div>

                  <!------- item-2 ------>
            <div class="feature-item">
        
              <ion-icon name="server-outline" class="feature-icon"></ion-icon>
              <p class="feature-heading">Affordable</p>
              <p class="feature-description"> We offer affordable prices on a wide range of authentic medicines.</p>
            </div>


                  <!------- item-3 ------>
            <div class="feature-item">
              <ion-icon name="storefront-outline" class="feature-icon"></ion-icon>
              <p class="feature-heading">Home Shopping</p>
              <p class="feature-description">Shop for your prescription and medications from the comfort of your home.</p>
            </div>


                  <!------- item-4 ------>
            <div class="feature-item">
              <ion-icon name="speedometer-outline" class="feature-icon"></ion-icon>
              <p class="feature-heading">24/7 Availability</p>
              <p class="feature-description"> Our online pharmacy is open 24/7, ensuring that you can place orders.</p>
            </div>
          </div>
        </div>
      </section>

    
  </body>
</html>
<?php
mysqli_close($conn);
?>