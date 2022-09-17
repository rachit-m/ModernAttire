<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Modern Attire - Collection of Handworked Unstitched Suits and Kurtis from Kolkata - Work from Local Karigars, suits, sarees, lehangas">
  <meta name="keywords" content="web fashion,sari , modern clothes, clothes deals online, fashion clothes, export">
  <meta name="robots" content="index,follow">
  <meta name="facebook-domain-verification" content="wewbr8oru0wwn1d0a00jdm1gwmxf9b" />
<!-- Stylesheets -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet/lightbox.css">
    <link rel="stylesheet" href="stylesheet/searchboxcurr.css">
    <link rel="stylesheet" href="stylesheet/index.css">
    <link rel="stylesheet" href="stylesheet/style.css">

    <title>The Modern Attire - Collection of Handworked Unstitched Suits and Kurtis from Kolkata - Work from Local Karigars</title>
    <link rel="shortcut icon" href="images/modern attire logo-03.png" type="image/x-icon">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- Header Section -->
    <?php
        include "./header.html";
    ?>

    <!-- Hero Section  -->
    <div id="hero-image">
    </div>

    <!-- Shop By Category -->
    <div id="shop-category">
        <h1 class="title-text">Shop by Category</h1>
        <div class="categories">
            <div class="category1">
                <a href="salwaar-suits.php"><h1>Salwaar Suits</h1></a>
            </div>
            <div class="category2">
                <h1>Designer Dresses</h1>
            </div>
        </div>
    </div>

    <!-- Dresses Section  -->
    <div id="dress-section">
      <div class="sect1">
        <h2>DRESSES</h2>
        <button type="submit">Discover</button>
      </div>
      <div class="sect2">
      </div>
    </div>

    <!-- Salwaar Suits Section  -->
    <div id="salwaar-section">
        <div class="sect2">
            </div> 
        <div class="sect1">
              <h2>SALWAAR DRESSES</h2>
              <button type="submit">Discover</button>
        </div>
    </div>

    <!-- Latest Collection  -->
    <div id="latest-collection">
    <h1 class="title-text">Latest Collection</h1>
    <?php
        include "./carousel.html";
    ?>
    

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
            <button class="discover-button" type="submit">Discover</button>
        </div>
    </div>

    <!-- Footer Section  -->
    <div id="footer-section">
        <div class="top-footer">
            <div class="collection">
                <h2>COLLECTION</h2>
                <a href="#">Designer Dresses</a>
                <a href="#">Salwaar Suits</a>
            </div>
            <div class="breaker"><img src="images/modern attire logo-03.png"></div>
            <div class="contact">
                <h2>CONTACT</h2>
                <a href="#">Contact us</a>
                <a href="#">Mail us</a>
            </div>
            <div class="breaker2"><img src="images/modern attire logo-03.png"></div>
        </div>
        <div class="bottom-footer">
            <div class="left">
                <h6>Modern Attire 2022. All rights reserved</h6>
            </div>
            <div class="right">
                <a href="#">Terms</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Accessibility</a>
            </div>
            <div class="copyright2">
                <h6>Modern Attire 2022. All rights reserved</h6>
            </div>
        </div>
    </div>

    <!-- Whatsapp icon added  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+919830702746&text=I%20like%20your%20product%20and%20I%20want%20to%20deal%20with%20you.%20Can%20we%20talk%20in%20much%20detail?%20"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>


    <!-- SCRIPTS  -->
    <script src="script/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script/lightbox.js"></script>
    <script src="script/app.js"></script>
    <script src="script/search.js"></script>
    <script src="script/backendsheet.js"></script>
    <script src="https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/Sheet1?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI&callback=doData"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/BestSelling?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI&callback=populateBestSelling"></script>

</body>

</html>