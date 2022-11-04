<?php $x = $_GET['key']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salwaar-Suits</title>
    <link rel="stylesheet" href="./stylesheet/index-desktop.css">
    <link rel="stylesheet" href="./stylesheet/nav.css">
    <link rel="stylesheet" href="./stylesheet/singleproduct.css">
    <link rel="stylesheet" href="./stylesheet/footer.css">
</head>

<body>
    <div class="preloader"> </div>


    <!-- fetch sheets data -->
    <?php
        
        $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $response = json_decode($response);
        $response = $response->{'values'};
     
        $totalProd = count($response);
        // echo $totalProd;
        // $count = 5;
    ?>

    <!-- Navigation  -->
    <?php
    include './navigation.html'
    ?>
    
    
    
   

    <!-- Single Product Cotainer Desktop -->
    <div class="sp-container-desktop">
        <div class="sp-left">
            <img src="<?php echo $response[$x][11] ?>" alt="img-not-found">
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
            <button type="submit" id="enquire-btn">Enquire</button>
        </div>
    </div>
<hr>

    <!-- footer section  -->
    <?php 
        include './footer.html'
    ?>


<script src="./script/fetchdata.js"></script>
    <script>
        window.addEventListener("load", () => {
            document.querySelector(".preloader").classList.add("preloader--hidden");

        })
        
    </script>
</body>

</html>