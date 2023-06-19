<?php 
    $filter = $_GET['filter'] ?? '';
    
//Getting all products
    $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
    $response = json_decode($response);
    $response = $response->{'values'}; 
    $totalProd = count($response);

    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="The Modern Attire - Collection of Handworked Unstitched Suits and Kurtis from Kolkata - Work from Local Karigars, suits, sarees, lehangas">
    <meta name="keywords" content="collection, latest, best, salwaar, suits, dresses, designer, clothes, export"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Attire | Salwaar Suits</title>
    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/salwaar-suits.css">
    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/footer.css">
    <link rel="stylesheet" href="https://themodernattire.com/stylesheet/nav.css">
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
        <h1>Salwaar Suits</h1>
    </div>

   
    <!-- Products Container -->
    <div class="main-container"> 
    <input id="srchph" name="search-box" type="text" onkeyup="searchp()" ondblclick="reset()" placeholder="Search products" >
    <div class="filtersec">
            <h2>Filters</h2>
            <input type="text" name="search-box" id="search-box" onkeyup="search()" ondblclick="reset()" placeholder="Search products" >
            <h5>Categories</h5>
            <a href="./salwaar.php">Women's Salwaar's  [Unstitched]</a>
            <a href="./dresses.php">Women's Dresses [Stitched]</a>


            <!-- Clothing Category  -->
            <h5>Clothing Type</h5>
            <?php
                $allsubcat = array();
                $totalct = $totalProd-1;
                $mov = 0;
                for($i=1; $i<=$totalct; $i++){
                    if($response[$i][7] == 'Unstitched'){
                        $allsubcat[$mov] = $response[$i][3];
                        $mov++;
                    }
                }
                $unsubcat = array_unique($allsubcat);
                $clothingtypes = array_values(array_filter($unsubcat));
                // print_r($clothingtypes);
                for($i=0; $i<count($clothingtypes); $i++)
                {    
                ?>
                <a href="#" class='cloth-type' onclick="filter('<?php echo $clothingtypes[$i] ?>')"><?php echo $clothingtypes[$i] ?></a>
                <?php 
            }
            ?>

            <!-- Apparels  -->
            <h5>Apparels</h5>
            <?php
                $allapparels = array();
                $mov = 0;
                for($i=1; $i<=$totalct; $i++){
                    if($response[$i][7] == 'Unstitched'){
                        $allapparels[$mov] = $response[$i][5];
                        $mov++;
                    }
                }
                $unapparels = array_unique($allapparels);
                $appareltypes = array_values(array_filter($unapparels));
                // print_r($clothingtypes);
                for($i=0; $i<count($appareltypes); $i++)
                {    
                ?>
                <a href="#" class='apparel' onclick="apparelsfilter('<?php echo $appareltypes[$i] ?>')"><?php echo $appareltypes[$i] ?></a>
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

        <!-- Filter for Phone view  -->
        <div class="filterphone">
            <div class="filters">
                <!-- Clothing type  -->
                <div class="dropdown">
                <button class="dropbtn">Clothing Type</button>
                <div class="dropdown-content">
                        <?php
                        $allsubcat = array();
                        $totalct = $totalProd-1;
                        $mov = 0;
                        for($i=1; $i<=$totalct; $i++){
                            if($response[$i][7] == 'Unstitched'){
                                $allsubcat[$mov] = $response[$i][3];
                                $mov++;
                            }
                        }
                        $unsubcat = array_unique($allsubcat);
                        $clothingtypes = array_values(array_filter($unsubcat));
                        // print_r($clothingtypes);
                        for($i=0; $i<count($clothingtypes); $i++)
                        {    
                        ?>
                        <a href="#" class='cloth-type' onclick="filter('<?php echo $clothingtypes[$i] ?>')"><?php echo $clothingtypes[$i] ?></a>
                        <?php 
                    }
                    ?>
                </div>
                </div>

                <!-- Apparels type  -->
                <div class="dropdown">
                <button class="dropbtn">Apparels</button>
                <div class="dropdown-content">
                <?php
                $allapparels = array();
                $mov = 0;
                for($i=1; $i<=$totalct; $i++){
                    if($response[$i][7] == 'Unstitched'){
                        $allapparels[$mov] = $response[$i][5];
                        $mov++;
                    }
                }
                $unapparels = array_unique($allapparels);
                $appareltypes = array_values(array_filter($unapparels));
                // print_r($clothingtypes);
                for($i=0; $i<count($appareltypes); $i++)
                {    
                ?>
                <a href="#" class='apparel' onclick="apparelsfilter('<?php echo $appareltypes[$i] ?>')"><?php echo $appareltypes[$i] ?></a>
                <?php 
            }
            ?>
                </div>
                </div>

                <!-- Apparels -->
                <button class="dropbtn clrbtn" onclick="window.location='salwaar'">Clear Filters</button>
                

        </div>
        </div>



<!-- Products ModernAttire  -->
<!-- Salwaar suits with filter clothtype  -->
        <?php 
        if(!empty($filter))
            { 
            ?>
                <!-- Products listing  -->
                <div id="salwaar-suits-container">
                    <h3 id="output-txt"></h3>
                    <?php
                        for($i=1; $i < $totalProd; $i++)
                        {   
                            $curprodcat = str_replace(array(' ', '%'), '', $response[$i][3]);
                            if($curprodcat == $filter) {  
                    ?>
                       <div class="products-container">
                        <?php 
                        $initials = str_replace(" ", "-", $response[$i][1]); 
                        $encpid = str_replace("/", "-", $response[$i][0]);
                        $imgsrc = str_replace("open","thumbnail",$response[$i][11]);
                        $sz = "&sz=w275-h356";
                        $imgsrc = $imgsrc.$sz;
                        ?>
                        <!-- <div class="product" onclick="window.location='singleprod.php?key=<?php echo $i ?>&pg=Shop&prcode=<?php echo $response[$i][0] ?>';"> -->
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

            <?php
            }

//All Salwaar Suits listing
else if(empty($filter))
            { 
            ?>
                <!-- Products listing  -->
                <div id="salwaar-suits-container">
                    <h3 id="output-txt"></h3>
                    <?php
                        for($i=1; $i < $totalProd; $i++)
                        {   
                            if($response[$i][7] == 'Unstitched') {  
                    ?>
                    <div class="products-container">
                        <?php 
                        $initials = str_replace(" ", "-", $response[$i][1]); 
                        $encpid = str_replace("/", "-", $response[$i][0]);
                        $imgsrc = str_replace("open","thumbnail",$response[$i][11]);
                        $sz = "&sz=w275-h356";
                        $imgsrc = $imgsrc.$sz;
                        ?>
                        <!-- <div class="product" onclick="window.location='singleprod.php?key=<?php echo $i ?>&pg=Shop&prcode=<?php echo $response[$i][0] ?>';"> -->
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

            <?php
}?>


        

<!-- Pagination  -->
<!-- <div class="pagination">
    <a class="prev" href="#"> < </a>
    <div class="pgno"></div>
    <a class="next" href="#"> > </a>
</div>
    -->

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
