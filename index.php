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
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">  -->
    <!-- <link rel="stylesheet" href="stylesheet/lightbox.css"> -->
    <!-- <link rel="stylesheet" href="stylesheet/searchboxcurr.css"> -->
    <link rel="stylesheet" href="stylesheet/index-desktop.css">
    <link rel="stylesheet" href="stylesheet/index-phone.css">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/footer.css">
    <link rel="stylesheet" href="stylesheet/nav.css">
    <link rel="stylesheet" href="stylesheet/carousel.css">

    <title>The Modern Attire - Collection of Handworked Unstitched Suits and Kurtis from Kolkata - Work from Local Karigars</title>
    <link rel="shortcut icon" href="images/modern attire logo-03.png" type="image/x-icon">
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
    <!-- <div id="shop-category-desktop">
        <h1 class="title-text">Shop by Category</h1>
        <div class="categories">
            <div class="category1">
                <a href="salwaar-suits.php"><h1>Salwaar Suits</h1></a>
            </div>
            <div class="category2">
                <h1>Designer Dresses</h1>
            </div>
        </div>
    </div> -->

    <div id="shop-category-phone">
        <h1 class="title-text">Shop by Category</h1>
        <div class="categories-container">
            <div class="cat">
                <img src="images/png/salwaar.png" alt="">
                <h3>Designer Dresses</h3>
            </div>
            <div class="cat">
            <img src="images/png/dress.png" alt="">
                <h3>Salwaar-Suits</h3>
            </div>
        </div>
    </div>

 

    <!-- Latest Collection  -->
    <div id="latest-collection">
    <h1 class="title-text">Latest Collection</h1>

    <!--  Corousel -->
    <?php
        include "./carousel.html";
    ?>
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
            <button class="discover-button" type="submit">Discover</button>
        </div>
    </div>

    <!-- Footer Section  -->
    <?php include("footer.html") ?>
    

    <!-- Whatsapp icon added  -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+919830702746&text=I%20like%20your%20product%20and%20I%20want%20to%20deal%20with%20you.%20Can%20we%20talk%20in%20much%20detail?%20"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a> -->
   <script>
    window.addEventListener("load",()=>{
        document.querySelector(".preloader").classList.add("preloader--hidden");
    })
    </script>
</body>

</html>
