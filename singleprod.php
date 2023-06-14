<?php 
    $x = $_GET['key']; //need to be removed
    $pg = $_GET['pg'];
    $prid = $_GET['prcode'];
    $initials = $_GET['keywords'];
    $eninitials = str_replace("-"," ", $initials);
    $prid = str_replace("-", "/", $prid);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fetch all products sheet data  -->
    <?php
        if($pg == 'Collections'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }
        else if($pg == 'LatestCollection'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/LatestCollection?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }
        else if($pg == 'BestSelling'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/BestSelling?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }

        $gallery = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/ProductGallery?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $gallery = json_decode($gallery);
        $gallery = $gallery->{'values'};
    ?>

    <title>Buy <?php echo $eninitials ?> | <?php echo $prid ?> </title>
    <link rel="stylesheet" href="/ModernAttire/stylesheet/index-desktop.css">
    <link rel="stylesheet" href="/ModernAttire/stylesheet/nav.css">
    <link rel="stylesheet" href="/ModernAttire/stylesheet/singleproduct.css">
    <link rel="stylesheet" href="/ModernAttire/stylesheet/footer.css">
    <link rel="canonical" href="https://themodernattire.com/<?php echo $response[0][26] ?>/<?php echo $i ?>/<?php echo $encpid ?>/<?php echo $initials ?>">
    <link rel="shortcut icon" href="https://ik.imagekit.io/modernattire//tr:w-1000,h-700/modern_attire_logo-03.png?updatedAt=1678042505261" type="image/x-icon">
</head>

<body>
    <div class="preloader"> </div>
    
    <!-- Navigation  -->
    <?php
    include 'navigation.html'
    ?>
    
    <?php
    $gallery = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/ProductGallery?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
    $gallery = json_decode($gallery);
    $gallery = $gallery->{'values'};
    $totalImg = count($gallery);

    //lower range
    $lr = 0;
    for($i=0; $gallery[$i][0] != $prid; $i++)
    {
        if($gallery[$i][0] == "null"){break;}
        $lr++;
    }
    //upper range
    $ur = $lr;
    while($gallery[$i][0] == $prid){
        if($gallery[$i][0] == "null"){break;}
        $ur++;
        $i++;
    }

    $ur--;
    ?>
    
    
    <!-- Single Product Cotainer Desktop -->
    <div class="sp-container-desktop"> 
        <div class="sp-left">
            <!-- <?php
            for($i=$lr; $i<$ur; $i++){ 
            ?>
                <div class='slider_images'>
                <img src="<?php echo $gallery[$i][1] ?>" alt="img-not-found">
                </div>
            <?php
            }
            ?> -->

            <?php 
                $firstImg = $lr;
                $lastImg = $ur;
                include 'gallery.php' 
            ?>
        </div>
        <div class="sp-right">
            <h1 id="product-name"><?php echo $response[$x][1] ?></h1>
            <h4>Description</h4>
            <p id="product-desc"><?php echo $response[$x][4] ?>
            </p>
            <h4>Details</h4>
            <ul class="sp-details">
                <li>Fabric : <?php echo $response[$x][5] ?></li>
                <li>Color : <?php echo $response[$x][6] ?></li>
                <li>Print : <?php echo $response[$x][8] ?></li>
                <li>Lining : <?php echo $response[$x][9] ?></li>
            </ul>
            <h4>Manufactured and Packed by</h4>
            <p>The Modern Attire, PS Arcade, 2nd Floor, 11 Sudder Street, Kolkata - 700016,
                West Bengal, India 
            </p>

            <div class="price">
                    <p class="product-price"><sup>₹</sup><?php echo $response[$x][2]?></p>
                    <p class="no-mar">Inclusive of all Taxes</p>
            </div>
            <hr class = "divider">
            <a href="https://api.whatsapp.com/send?phone=+919830702746&text=I%20like%20your%20product%20and%20I%20want%20to%20deal%20with%20you.%20Can%20we%20talk%20in%20much%20detail?%20" id="enquire-btn">Enquire</a>
        </div>
    </div>



<!-- Single Product Contaier Phone  -->
    <div class="sp-container-phone">
        <div class="phone-container">
            <div class="top">
                <!-- <img src="<?php echo $response[$x][11] ?>" alt="img-not-found"> -->
                <?php 
                $firstImg = $lr;
                $lastImg = $ur;
                include '/ModernAttire/gallery.php' 
            ?>
            </div>
            <div class="bottom">
                <h1 id="product-name"><?php echo $response[$x][1] ?></h1>
                <details>
                <summary>Description</summary>    
                <p><?php echo $response[$x][4] ?></p>
                </details>
                <details>
                <summary>Details</summary>    
                <ul class="sp-details">
                <li><b>Fabric : </b><?php echo $response[$x][5] ?></li>
                <li><b>Color : </b><?php echo $response[$x][6] ?></li>
                <li><b>Print : </b><?php echo $response[$x][8] ?></li>
                <li><b>Lining : </b><?php echo $response[$x][9] ?></li>
            </ul>
                </details>
                <details>
                <summary>Manufactured and Packed by</summary>    
                <p>The Modern Attire, PS Arcade, 2nd Floor, 11 Sudder Street, Kolkata - 700016,
                West Bengal, India </p>
                </details>
                
                <button type="submit" id="enquire-btn">Enquire</button>
            </div>
        </div>
    </div>

    <!-- footer section  -->
    <?php 
        include './footer.html'
    ?>
    <script>
        window.addEventListener("load", () => {
            document.querySelector(".preloader").classList.add("preloader--hidden");
        })
        
    </script>

</body>

</html>