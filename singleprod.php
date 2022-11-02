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
            <img src="./images/collection4.jpg" alt="">
        </div>
        <div class="sp-right">
            <h1 id="product-name"><?php echo $response[0][1] ?></h1>
            <h4>Description</h4>
            <p id="product-desc">Wearing this heaenly green fancy Kurta on Georgette 
                fabric, adorned with digital print and synchronized 
                with the design of the dress, you'll be at the peak 
                of style and elegance 
            </p>
            <h4>Details</h4>
            <ul class="sp-details">
                <li>Fabric : </li>
                <li>Color : </li>
                <li>Print : </li>
                <li>Lining : </li>
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
            document.write(vals)
        })
    </script>
</body>

</html>