
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Attire | Salwaar Suits</title>
    <link rel="stylesheet" href="stylesheet/salwaar-suits.css">
    <link rel="stylesheet" href="stylesheet/index.css">
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
        <h1>Salwaar Suits</h1>
    </div>

    <!-- Header Section -->
    <?php
        
        $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $response = json_decode($response);
        $response = $response->{'values'};
     
        $totalProd = count($response);
        
        // echo $totalProd;
        // $count = 5;
    ?>

    <!-- Products Container -->
    <div class="main-container"> 
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
            <a href="#" class='apparel'><?php echo $response[$i][14] ?></a>
            <?php 
            }
            ?>

            <h5>New Arrivals</h5>
            <?php
            for($i=1; $i < $totalProd; $i++)
            {         
                if($response[$i][10] == 'New'){
            ?>

            <a href="#" class='new-arrivals'><?php echo $response[$i][1] ?></a>
            <?php }
            }
            ?>
        </div>


    <div id="salwaar-suits-container">
        <h3 id="output-txt"></h3>
        <?php
            for($i=1; $i < $totalProd; $i++)
            {         
        ?>
        <div class="products-container">
            <div class="product" onclick="redirect();sendkey('<?php echo $i ?>');">
                <img src="<?php echo $response[$i][11] ?>">
                <h4 class="product-name"><?php echo ($response[$i][1]);  ?></h4>
                <p class='material' style="display: none" ><?php echo ($response[$i][5]) ?></p>
            </div>
            
        </div>
               
        <?php
            }
        ?>
        
    </div>
    </div>
   

    <!-- Footer Section  -->
    <?php
        
        include 'footer.html'
    ?>

<script src="./script/custom_filters.js"></script>
<script src="./script/filter.js"></script>
<script>
    window.addEventListener("load",()=>{
    document.querySelector(".preloader").classList.add("preloader--hidden");
})

</script>
</body>

</html>