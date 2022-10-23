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

    <div class="nav">
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
    <div class="supreme">
    <div id="salwaar-suits-container">
        <?php
            for($i=1; $i < $totalProd; $i++)
            {         
        ?>
        <div class="products-container">
            <div class="product">
                <img src="images/collection2.jpg">
                <h4><?php echo ($response[$i][1]);  ?></h4>
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

</body>

</html>