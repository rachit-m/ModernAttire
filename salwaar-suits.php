<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Attire | Salwaar Suits</title>
    <link rel="stylesheet" href="stylesheet/salwaar-suits.css">

</head>
<body>


    <!-- Header Section -->
    <?php
        include "./header.html";
        
        $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $response = json_decode($response);
        $response = $response->{'values'};
        
        $count = 4;
        function generate($count){
            for($i=1; $i <= $count; $i++)
            { 
                echo "<div class=\"container\">
                </div>";
            }
        }
        generate($count);
    ?> 

        <div class="container">
            
        </div>
    <!-- Products Container -->
    <!-- <div id="salwaar-suits-container">
        <div class="products-container1">
            <div class="product product1"><img src="images/collection1.jpg"><h4><?php echo ($response[1][1]);  ?></h4></div>
            <div class="product product2"><img src="images/collection2.jpg"><h4><?php echo ($response[1][1]);  ?></h4></div>
        </div>
        <div class="products-container1">
            <div class="product product1"><img src="images/collection1.jpg"><h4><?php echo ($response[1][1]);  ?></h4></div>
            <div class="product product2"><img src="images/collection2.jpg"><h4>Marron Rayon Solid Straight Fit Kurta</h4></div>
        </div>
    </div>    -->
    <div class="page-nav">
        

    
        
        </div>
        
        
    </body>
    </html>



