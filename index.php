<!DOCTYPE html> 
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Modern Attire offers a collection of handcrafted unstitched suits and kurtis sourced from local artisans in Kolkata. Our selection includes suits, sarees, and lehengas.">
  <meta name="keywords" content="collection, latest, best, salwaar, suits, dresses, designer, clothes, export"> 

  <!-- Instagram meta -->
  <meta property="og:title" content="Instagram Page">
  <meta property="og:description" content="Follow us on Instagram for daily photos and updates.">
  <meta property="og:url" content="https://www.instagram.com/attire_modern/?igshid=YmMyMTA2M2Y%3D">
  <meta property="og:type" content="profile">
  <meta property="profile:username" content="attire_modern">
  <!-- Facebook meta -->
  <meta property="og:title" content="Facebook Page">
  <meta property="og:description" content="Follow us on Facebook for daily photos and updates.">
  <meta property="og:url" content="https://www.facebook.com/themodernattire?mibextid=ZbWKwL">
  <meta property="og:type" content="profile">
  <meta property="profile:username" content="themodernattire">

    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/index-desktop.css">
    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/index-phone.css">
    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/style.css">
    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/footer.css">
    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/nav.css">
    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/carousel.css">
    <link rel="canonical" href="https://themodernattire.com">
    <link rel="shortcut icon" href="https://ik.imagekit.io/modernattire//tr:w-1000,h-700/modern_attire_logo-03.png?updatedAt=1678042505261" type="image/x-icon">
    <title>The Modern Attire - Handworked Unstitched Suits and Kurtis</title>
</head>

<body>
    <div class="preloader"> </div>

    <!-- Navigation  -->
    <div class="navig">
    <?php
        include './navigation.html'
    ?>
    </div>

    <!-- Hero Section  -->
    <div id="hero-image">
    </div>

    <!-- Shop By Category -->
    <div id="shop-category-desktop">
        <h1 class="title-text">Shop by Category</h1>
        <div class="categories-container">
            <div class="cat1">
                <img src="https://ik.imagekit.io/modernattire/tr:w-1000,h-700/salwar-suits.jpg?updatedAt=1667538931432" alt="Salwaars thumbnail" srcset="">
                <a id="cat1_text" href="https://themodernattire.com/salwaar"><h1>Salwaar Suits</h1></a>
            </div>
            <div class="cat2">
                <img src="https://ik.imagekit.io/modernattire/tr:w-1000,h-700/designer-dresses.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1667538938392" alt="Dresses thumbnail" srcset="">
                <a id="cat2_text" href="https://themodernattire.com/dresses"><h1>Designer Dresses</h1></a>
            </div>
           
        </div>
    </div>
    <div id="shop-category-phone">
        <h1 class="title-text">Shop by Category</h1>
        <div class="categories-container">
            <div class="cat cat1">
                <img src="https://ik.imagekit.io/modernattire/tr:w-1000,h-700/salwar-suits.jpg?updatedAt=1667538931432" alt="Salwaars thumbnail" srcset="">
                <a href="https://themodernattire.com/salwaar">Salwaar Suits</a>
            </div>
            <div class="cat cat2">
                <img src="https://ik.imagekit.io/modernattire/tr:w-1000,h-700/designer-dresses.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1667538938392" alt="Dresses thumbnail" srcset="">
                <a href="https://themodernattire.com/dresses">Designer Dresses</a>
            </div>
        </div>
    </div>


    <!-- Latest Collection  -->
    <div id="latest-collection">
    <h1 class="title-text">Latest Collections</h1>
    <!--  Carousel -->
    <?php
        $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/LatestCollection?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $response = json_decode($response);
        $response = $response->{'values'};
        $totalProd = count($response);

        /*$allproducts = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $allproducts = json_decode($allproducts);
        $allproducts = $allproducts->{'values'};
        $totalProds = count($allproducts);
	 */
        include "carousel.php";
    ?>
    </div>

    
    <!-- Dresses Section  -->
    <div id="dress-section">
        <div class="sect1">
          <h2>DRESSES</h2>
          <button type="submit" onclick="window.location='dresses'">Discover</button>
        </div>
        <div class="sect2">
        </div>
      </div>
  
    <!-- Best Selling -->
    <div id="best-selling">
    <h1 class="title-text">Best Selling</h1>
    <!--  Carousel -->
    <?php
        $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/BestSelling?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $response = json_decode($response);
        $response = $response->{'values'};
        $totalProd = count($response);
/*
        $allproducts = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $allproducts = json_decode($allproducts);
        $allproducts = $allproducts->{'values'};
        $totalProds = count($allproducts);
 */
        include "carousel.php";
    ?>
    </div>

      <!-- Salwaar Suits Section  -->
      <div id="salwaar-section"> 
          <div class="sect2">
              </div> 
          <div class="sect1">
                <h2>SALWAAR SUITS</h2>
                <button type="submit" onclick="window.location='salwaar'">Discover</button>
          </div>
      </div>

   
    <!-- Modern Attire Section  -->
    <div id="ma-branding">
        <div class="branding-text">
            <h1>MODERN ATTIRE</h1>
        </div> 
    </div>


    <!-- Discover Banner  -->
    <div id="discover-banner">
        <div class="discover-inner">
            <h1>Get your self the best Indian wear collection</h1>
            <button class="discover-button" type="submit" onclick="scrollToElement('#shop-category-desktop')">Discover</button>
        </div>
    </div>

    <!-- Footer Section  -->
    <?php include("footer.html") ?>
    
   <script>
    window.addEventListener("load",()=>{
        document.querySelector(".preloader").classList.add("preloader--hidden");
    })
    </script>
    <script src="./script/reveal.js"></script>
    
</body>

</html>
