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


    <div id="main-content-desktop">
        <h3 class="heading">Contact us </h3>
        <div class="container">
        <div class="contact-form">
            <h5 class="subheading">SEND A MESSAGE</h5>
            <form action="">
                <div class="formr1">
                    <div class="fnamer1">
                        First name<br>
                        <input type="text" class='text' name="firstName" id="">
                    </div>
                    <div class="lnamer1">
                        Last name<br> 
                        <input type="text" class='text' name="lastName" id="">
                    </div>
                </div>
                <div class="formr1">
                    <div class="fnamer1">
                        Phone number<br>
                        <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" name="phone" id="phone">
                    </div>
                    <div class="lnamer1">
                        Email<br> 
                        <input type="email" class='text' name="lastName" id="">
                    </div>
                </div>
                <div class="formr1">
                    <div class="fnamer1">
                        Country<br>
                        <select name="country" id="country">
                        <option value="0" label="Select a country ... " selected="selected">..</option>
                            <option value="AF" label="Afghanistan">Afghanistan</option>
                            <option value="AM" label="Armenia">Armenia</option>
                            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
                            <option value="BH" label="Bahrain">Bahrain</option>
                            <option value="BD" label="Bangladesh">Bangladesh</option>
                            <option value="BT" label="Bhutan">Bhutan</option>
                            <option value="BN" label="Brunei">Brunei</option>
                            <option value="KH" label="Cambodia">Cambodia</option>
                            <option value="CN" label="China">China</option>
                            <option value="GE" label="Georgia">Georgia</option>
                            <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
                            <option value="IN" label="India">India</option>
                            <option value="ID" label="Indonesia">Indonesia</option>
                            <option value="IR" label="Iran">Iran</option>
                            <option value="IQ" label="Iraq">Iraq</option>
                            <option value="IL" label="Israel">Israel</option>
                            <option value="JP" label="Japan">Japan</option>
                            <option value="JO" label="Jordan">Jordan</option>
                            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
                            <option value="KW" label="Kuwait">Kuwait</option>
                            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="LA" label="Laos">Laos</option>
                            <option value="LB" label="Lebanon">Lebanon</option>
                            <option value="MO" label="Macau SAR China">Macau SAR China</option>
                            <option value="MY" label="Malaysia">Malaysia</option>
                            <option value="MV" label="Maldives">Maldives</option>
                            <option value="MN" label="Mongolia">Mongolia</option>
                            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                            <option value="NP" label="Nepal">Nepal</option>
                            <option value="NT" label="Neutral Zone">Neutral Zone</option>
                            <option value="KP" label="North Korea">North Korea</option>
                            <option value="OM" label="Oman">Oman</option>
                            <option value="PK" label="Pakistan">Pakistan</option>
                            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
                            <option value="PH" label="Philippines">Philippines</option>
                            <option value="QA" label="Qatar">Qatar</option>
                            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
                            <option value="SG" label="Singapore">Singapore</option>
                            <option value="KR" label="South Korea">South Korea</option>
                            <option value="LK" label="Sri Lanka">Sri Lanka</option>
                            <option value="SY" label="Syria">Syria</option>
                            <option value="TW" label="Taiwan">Taiwan</option>
                            <option value="TJ" label="Tajikistan">Tajikistan</option>
                            <option value="TH" label="Thailand">Thailand</option>
                            <option value="TL" label="Timor-Leste">Timor-Leste</option>
                            <option value="TR" label="Turkey">Turkey</option>
                            <option value="TM" label="Turkmenistan">Turkmenistan</option>
                            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
                            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                            <option value="VN" label="Vietnam">Vietnam</option>
                            <option value="YE" label="Yemen">Yemen</option>
                    </select>
                    </div>
                    <div class="lnamer1">
                        City<br> 
                        <input type="text" class='text' name="city" id="city">
                    </div>
                </div>
                <div class="formr1">
                    <div class="fnamer1">
                        Your Message<br>
                        <textarea class="message">Let's have a chat</textarea>
                    </div>
                </div>
                <div class="formr1">
                    <div class="fnamer1">
                        <button type="submit" id="sendbtn">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="contact-details">
            <h4 class='titlet'>CONTACT US</h4>
            <div class="container2">
                <div class="r r1">
                    <span class="cont">
                        <h5 class="r-title">Contact us</h5>
                        <h6><i class="fa-solid fa-phone"></i> 98 3070 2746</h6>   
                    </span>
                    <span class="r1mail">
                        <h5 class="r-title">Mail us at</h5>
                        <h6><i class="fa-sharp fa-solid fa-envelope"></i> themodernattire@gmail.com</h6>
                    </span>
                </div>
                <div class="r r2">
                    <span class="wp">
                        <h5 class="r-title">Whatsapp us at</h5>
                        <h6><i class="fa-brands fa-whatsapp"></i> 98 3070 2746</h6>
                    </span>
                    <span class="add">
                        <h5 class="r-title">Location</h5>
                        <p class='locationadd'><i class="fa-sharp fa-solid fa-location-dot loc"></i>Modern Attire, PS Arcade, 2nd Floor, 11 Sudder Street, Kolkata - 700016</p>
                    </span>
                </div>
                
            </div>
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