<?php $x = $_GET['key']; ?>
<?php $y = $_GET['src']; ?>
<?php $pg = $_GET['pg']; ?>
<?php $prid = $_GET['prcode']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salwaar-Suits</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./stylesheet/index-desktop.css">
    <link rel="stylesheet" href="./stylesheet/nav.css">
    <link rel="stylesheet" href="./stylesheet/singleproduct.css">
    <link rel="stylesheet" href="./stylesheet/footer.css">
</head>

<body>
    <div class="preloader"> </div>


<!-- fetch all products sheet data  -->
    <?php
        if($y == 'salwaar' && $pg == 'single'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }
        else if($y == 'carousel' && $pg == 'LatestCollection'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/LatestCollection?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }
        else if($y == 'carousel' && $pg == 'BestSelling'){
            $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/BestSelling?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
            $response = json_decode($response);
            $response = $response->{'values'};
            $totalProd = count($response);
        }

        $gallery = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/ProductGallery?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $gallery = json_decode($gallery);
        $gallery = $gallery->{'values'};
    ?>
    



    <!-- Navigation  -->
    <?php
    include './navigation.html'
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

    // $ur = $lr;
    // for($i=$lr; $gallery[$i][0] !== $prid; $i++){
    //     if($gallery[$i][0] == "null"){break;}
    //     $ur++;
    // }

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
                include './gallery.php' 
            ?>
            <!-- <img src="<?php echo $response[$x][11] ?>" alt="img-not-found"> -->
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
            <a href="https://api.whatsapp.com/send?phone=+919830702746&text=I%20like%20your%20product%20and%20I%20want%20to%20deal%20with%20you.%20Can%20we%20talk%20in%20much%20detail?%20" id="enquire-btn">Enquire</a>
        </div>
    </div>
<hr>



<!-- Single Product Contaier Phone  -->
    <div class="sp-container-phone">
        <div class="phone-container">
            <div class="top">
                <!-- <img src="<?php echo $response[$x][11] ?>" alt="img-not-found"> -->
                <?php 
                $firstImg = $lr;
                $lastImg = $ur;
                include './gallery.php' 
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


<script src="./script/fetchdata.js"></script>
    <script>
        window.addEventListener("load", () => {
            document.querySelector(".preloader").classList.add("preloader--hidden");
        })
        
    </script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>