<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Attire | Salwaar Suits</title>
    <link rel="stylesheet" href="stylesheet/salwaar-suits.css">
    <link rel="stylesheet" href="stylesheet/index.css">
</head>
<body>

    <!-- Header Section -->
    <?php
        include "./header.html";
    ?>

    <!-- Heading  -->
    <div class="header">
        <h1>Salwaar Suits</h1>
    </div>

    <?php      
        // $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        
        $response = json_decode($response);
        $response = $response->{'values'};
     
        $prodCount = count($response)-1;
       
        echo "Total Product : ",$prodCount," ";
        for($i=1; $i<=$prodCount; $i++)
        {
            $products[$i] = $response[$i][1];
            echo $products[$i];
        }
    ?> 
        
    <script>
        
            // var element = document.getElementById("prod-container");
            // element.appendChild(document.createTextNode("hi"));
            // document.getElementById('lc').appendChild(element);
            let container = document.getElementById("prod-container");

            let div = container.appendChild('div');
            div.createTextNode("Item 2");
            div.className = "item";
            
    </script>
    <!-- Products Container -->
    
   <div id="prod-container">
        <div class="item">Item 1</div>
   </div>

    <!-- Footer Section  -->
    <div id="footer-section">
        <div class="top-footer">
            <div class="collection">
                <h2>COLLECTION</h2>
                <a href="#">Designer Dresses</a>
                <a href="#">Salwaar Suits</a>
            </div>
            <div class="breaker"><img src="images/modern attire logo-03.png"></div>
            <div class="contact">
                <h2>CONTACT</h2>
                <a href="#">Contact us</a>
                <a href="#">Mail us</a>
            </div>
            <div class="breaker2"><img src="images/modern attire logo-03.png"></div>
        </div>
        <div class="bottom-footer">
            <div class="left">
                <h6>Modern Attire 2022. All rights reserved</h6>
            </div>
            <div class="right">
                <a href="#">Terms</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Accessibility</a>
            </div>
            <div class="copyright2">
                <h6>Modern Attire 2022. All rights reserved</h6>
            </div>
        </div>
    </div>
      
    </div>

    </body>
    </html>



