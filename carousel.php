<!-- Stylesheets  -->
<link rel="stylesheet" href="https://themodernattire.com/stylesheet/carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Carousel Slider -->
<div class="wrapper">
    <div class="carousel owl-carousel">
        <?php  for($i=1; $i < $totalProd; $i++)
            {    
        ?>
        <?php 
            if($response[$i][7] == "Unstitched"){
                $pg = "salwaar";
            }
                else{
                $pg = "dresses";
            }
            // $initials = str_replace(" ", "-", $response[$i][1]); 
            // $encpid = str_replace("/", "-", $response[$i][0]);
            $subcat = $response[$i][3];
            $subcat = str_replace(array(' ', '%'), '', $subcat);
            $uri = "window.location='https://themodernattire.com/$pg?filter=$subcat';";
        ?>
        <div class="card" onclick="<?php echo $uri ?>">
        <!-- <div class="card" 
            onclick="window.location='singleprod.php?key=<?php echo $i ?>&pg=<?php echo $response[0][26] ?>&prcode=<?php echo ($response[$i][0])?>';"> -->
            <img src="<?php echo ($response[$i][11]); ?>" alt="<?php echo ($response[$i][1]); ?>"><h5><?php echo ($response[$i][1]); ?></h5>
        </div>
        <?php
            }
        ?>
    </div>
</div>

<!-- Carousel Script  -->
<script>
    $(".carousel").owlCarousel({ 
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 3,
                nav: false
            },
            1000:{
                items: 5,
                nav: false
            },
            1400:{
                items: 6,
                nav: false
            }
        }
    });
</script>
