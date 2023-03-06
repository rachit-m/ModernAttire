
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The Modern Attire - Collection of Handworked Unstitched Suits and Kurtis from Kolkata - Work from Local Karigars, suits, sarees, lehangas">
    <meta name="keywords" content="web fashion,sari , modern clothes, clothes deals online, fashion clothes, export"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Attire | Designer Dresses</title>
    <link rel="stylesheet" href="stylesheet/salwaar-suits.css">
    <link rel="stylesheet" href="stylesheet/footer.css">
    <link rel="stylesheet" href="stylesheet/nav.css">
</head>
 
<body>
<div class="preloader"> </div>

    <!-- Navigation  -->
    <div class="navs">
    <?php
        include 'navigation.html'
    ?>
    </div>
   
 

    <!-- Heading  -->
    <div class="header">
        <h1>Designer Dresses</h1>
    </div>

   
    <?php
        
        $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $response = json_decode($response);
        $response = $response->{'values'};
        $totalProd = count($response);
    ?>

    <!-- Products Container -->
    <div class="main-container"> 
    <input id="srchph" name="search-box" type="text" onkeyup="searchp()" ondblclick="reset()" placeholder="Search products" >
    <div class="filtersec">
            <h2>Filters</h2>
            <input type="text" name="search-box" id="search-box" onkeyup="search()" ondblclick="reset()" placeholder="Search products" >
            <h5>Categories</h5>
            <a href="./salwaar-suits.php">Women's Salwaar Suits</a>
            <a href="#">Women's Dresses Unstitched</a>
            <a href="#">Women's Kurtas and Kurtis</a>
            <a href="#">MA Fashion</a>

            <!-- Clothing Materials  -->
            <h5>Clothing Materials</h5>
            <?php
            $count = $response[0][17];
            for($i=1; $i <= $count; $i++)
            {         
            ?>
            <a href="#" class='cloth-type' onclick="filter('<?php echo $response[$i][16] ?>')"><?php echo $response[$i][16] ?></a>
            <?php 
            }
            ?>

            <!-- Apparels  -->
            <h5>Apparels</h5>
            <?php
            $count = $response[0][15];
            for($i=1; $i <= $count; $i++)
            {         
            ?>
            <a href="#" class='apparel' onclick="apparelsfilter('<?php echo $response[$i][14] ?>')"><?php echo $response[$i][14] ?></a>
            <?php 
            }
            ?>

            <h5>New Arrivals</h5>
            <?php
            for($i=1; $i < $totalProd; $i++)
            {         
                if($response[$i][10] == 'New'){
            ?>

            <a href="singleprod.php?key=<?php echo $i ?>&src=salwaar&pg=single&prcode=<?php echo $response[$i][0] ?>" class='new-arrivals'><?php echo $response[$i][1] ?></a>
            <?php }
            }
            ?>
        </div>

    <!-- Products listing  -->
    <div id="salwaar-suits-container">
        <h3 id="output-txt"></h3>
        <?php
            for($i=1; $i < $totalProd; $i++)
            {   
                if($response[$i][7] == 'Stitched') {               
        ?>
        <div class="products-container">
            
            <div class="product" onclick="window.location='singleprod.php?key=<?php echo $i ?>&src=salwaar&pg=single&prcode=<?php echo $response[$i][0] ?>';">
                <img src="<?php echo $response[$i][11] ?>">
                <a href="singleprod.php?key=<?php echo $i ?>" class="product-name"><?php echo ($response[$i][1]);  ?></a>
                <p class='material' style="display: none" ><?php echo ($response[$i][5]) ?></p>
                <p class='apparels' style="display: none" ><?php echo ($response[$i][3]) ?></p>
            </div>
          
        </div>
               
        <?php
                } 
            }
        ?> 
    </div>
</div>

<!-- Pagination  -->
<div class="pagination">
    <a class="prev" href="#"> < </a>
    <div class="pgno"></div>
    <a class="next" href="#"> > </a>
</div>
   

    <!-- Footer Section  -->
    <?php
        include 'footer.html'
    ?>

<script src="./script/custom_filters.js"></script>
<script src="./script/pagination.js"></script>
<script src="./script/filter.js"></script>
<script>
    window.addEventListener("load",()=>{
    document.querySelector(".preloader").classList.add("preloader--hidden");
})

</script>
</body>

</html>