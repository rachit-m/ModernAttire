
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The Modern Attire - Collection of Handworked Unstitched Suits and Kurtis from Kolkata - Work from Local Karigars, suits, sarees, lehangas">
    <meta name="keywords" content="collection, latest, best, salwaar, suits, dresses, designer, clothes, export"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Attire | Designer Dresses</title>
    <link rel="stylesheet" href="stylesheet/salwaar-suits.css">
    <link rel="stylesheet" href="stylesheet/footer.css">
    <link rel="stylesheet" href="stylesheet/nav.css">
    
    <link rel="shortcut icon" href="https://ik.imagekit.io/modernattire//tr:w-1000,h-700/modern_attire_logo-03.png?updatedAt=1678042505261" type="image/x-icon">
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
            <a href="./salwaar.php">Women's Salwaar's  [Unstitched]</a>
            <a href="./dresses.php">Women's Dresses [Stitched]</a>

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
            for($i=($totalProd-3); $i < $totalProd; $i++)
            {    
                $initialsn = str_replace(" ","-", $response[$i][1]);  
                $encpidn = str_replace("/", "-", $response[$i][0]);
            ?>

            <a href="Shop/Collections/<?php echo $encpidn ?>/<?php echo $initialsn ?>" class='new-arrivals'><?php echo $response[$i][1] ?></a>
            <!-- <a href="singleprod.php?key=<?php echo $i ?>&pg=Shop&prcode=<?php echo $response[$i][0] ?>" class='new-arrivals'><?php echo $response[$i][1] ?></a> -->
            <?php 
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
            <?php 
            $initials = str_replace(" ", "-", $response[$i][1]); 
            $encpid = str_replace("/", "-", $response[$i][0]);
            $imgsrc = str_replace("open","thumbnail",$response[$i][11]);
            $sz = "&sz=w275-h356";
            $imgsrc = $imgsrc.$sz;
            ?>
            <div class="product" onclick="window.location='Shop/Collections/<?php echo $encpid ?>/<?php echo $initials ?>';">
                <img src="<?php echo $imgsrc ?>" alt="<?php echo $response[$i][1] ?>">
                <a href="Shop/Collections/<?php echo $encpid ?>/<?php echo $initials ?>" class="product-name"><?php echo ($response[$i][1]);  ?></a>
                <p class='material' style="display: none" ><?php echo ($response[$i][3]) ?></p>
                <p class='apparels' style="display: none" ><?php echo ($response[$i][5]) ?></p>
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