<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Modern Attire</title>
    <link rel="stylesheet" href="stylesheet/contact.css">
    <link rel="stylesheet" href="stylesheet/footer.css">
    <link rel="stylesheet" href="stylesheet/nav.css">
</head>

<body>
    <div class="preloader"> </div>

    <!-- Navigation  -->
    <div class="navig">
        <?php
        include './navigation.html'
        ?>
    </div>

    <div id="main-content-phone">
        <div class="contact-form">
            <h3 class="heading">Contact us </h3>
            <h5 class="subheading">SEND A MESSAGE</h5>
            <form action="">
                First name
                <input type="text" class='text' name="firstName" id="">
                Last name 
                <input type="text" class='text' name="lastName" id="">
                Phone Number
                <input type="number" name="contact" placeholder="123 45 7890" id="">
                Email
                <input type="email" name="mail" id="">
                Country
                <input type="text" class='text' name="country" id="">
                City
                <input type="text" class='text' name="city" id="">
                Message
                <input type="text" name="" class='message'>
                <input type="button" class='contact_btn' value="Send a Message">
            </form>
        </div> 
        <div class="contact-details">
            <h4 class='titlet'>CONTACT US</h4>
            <div class="contact-row1">
                <span class="row1el">
                    <h5>Contact us at</h5>
                    <h6><i class="fa-solid fa-phone"></i> 98 3070 2746</h6>
                </span>
                <span class="row1el el2">
                    <h5>Whatsapp us at</h5>
                    <h6><i class="fa-brands fa-whatsapp"></i> 98 3070 2746</h6>
                </span>
            </div>
            <div class="location">
                <h5>Location</h5>
                <h6>Modern Attire, PS Arcade, 2nd Floor, 11 Sudder Street, Kolkata - 700016</h6>
            </div>
            <div class="mail">
                <h5>Mail us at</h5>
                <h6><i class="fa-sharp fa-solid fa-envelope"></i> themodernattire@gmail.com</h6>
            </div>
        </div>
    </div>
    <!-- location added -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.557250436732!2d88.35100231491064!3d22.55825238519019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027706022f9025%3A0xea9a41556aff50bc!2sThe%20Modern%20Attire!5e0!3m2!1sen!2sin!4v1657271915258!5m2!1sen!2sin" height="350" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- location ended  -->


    <!-- Footer Section  -->
    <?php include("footer.html") ?>

    <script>
        window.addEventListener("load", () => {
            document.querySelector(".preloader").classList.add("preloader--hidden");
        })
    </script>
    <script src="https://kit.fontawesome.com/a658c81ed2.js" crossorigin="anonymous"></script>
</body>

</html>