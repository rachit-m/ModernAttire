<!-- Stylesheets  -->
<link rel="stylesheet" href="https://themodernattire.com/stylesheet/gallery.css">
<link rel="stylesheet" href="https://themodernattire.com/stylesheet/singleproduct.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="wrapper">
    <div class="carousel owl-carousel">
        <?php  for($i=0; $i <= $totalproductimages; $i++)
        {    
                $imgsrc = $imagesrc[$i];
                $imgsrc = str_replace("open", "thumbnail",$imgsrc);
                $sz = "&sz=w380-h550";
                $imgsrc = $imgsrc.$sz;

        ?>
        <div class="card" >
          <img src="<?php echo $imgsrc ?>" alt="<?php echo $gallery[$i][2] ?>">
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
        autoplay: false,
        responsive: {
            0:{
                items: 1,
                nav: true
            }
        }
    });
</script>
