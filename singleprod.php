<?php $x = $_GET['key']; ?>
<?php $y = $_GET['src']; ?>
<?php $z = $_GET['data']; ?>
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


<!-- fetch all products sheet data  -->
    <?php
        if($y == 'salwaar' && $z == 'def'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }
        else if($y == 'carousel' && $z == 'LatestCollection'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/LatestCollection?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }
        else if($y == 'carousel' && $z == 'BestSelling'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/BestSelling?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }
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

<!-- Single Product Contaier Phone  -->
    <div class="sp-container-phone">
        <div class="phone-container">
            <div class="top">
                <img src="<?php echo $response[$x][11] ?>" alt="img-not-found">
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


<script src="./script/fetchdata.js"></script>
    <script>
        window.addEventListener("load", () => {
            document.querySelector(".preloader").classList.add("preloader--hidden");
        })
        
    </script>
</body>

</html>