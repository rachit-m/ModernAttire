<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Modern Attire - Collection of Handworked Unstitched Suits and Kurtis from Kolkata - Work from Local Karigars, suits, sarees, lehangas">
  <meta name="keywords" content="web fashion,sari , modern clothes, clothes deals online, fashion clothes, export">
  <meta name="robots" content="index,follow">

<!-- Stylesheets  -->
<link rel="stylesheet" href="stylesheet/about.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<title>contact page</title>

</head>
<body>
  <?php
  include "./header.html" 
  ?>

    <footer class="w3-padding-24 w3-light-grey w3-small w3-center" id="footer" >
        <div class="w3-center"> <h1> Contact Us</h1> </div>
        <div class="w3-row-padding w3-padding-small" >
          <div class="w3-col m6 " style="font-size: 18px;">
            <h4 style="font-size: 18px; color:red;">Send a Message</h4>
            <div id="subscribe_section"></div>
            <table  id="contactpage" class="w3-justify">
    <form method="post">
                <tr >
                  <td >
                <label for="fname">First Name</label> <br>
                <input type="text" id="fname" name="firstname" placeholder="Rakesh" required >
              </td>
                  <td>
                <label for="fname">Last Name</label> <br>
                <input type="text" id="lname" name="lastname" placeholder="Moond" required>
              </td>
                 
                </tr>
                <tr >
                  <td >
                <label for="fname">Phone Number</label> <br> 
               <input type="number" name="number" id="phonenumber" placeholder="ex:9830702746">
              </td>
                  <td>
                <label for="fname">Email</label> <br>
                <!-- <input type="text" id="fname" name="firstname" placeholder="Rakesh"> -->
                <input type="email" name="email" id="emailid" placeholder="eg:themodernattire@gmail.com">
              </td>
                 
                </tr>
                <tr >
                  <td >
                <label for="fname">Country</label> <br>
                <input type="text" id="country" name="countryname" placeholder="India" >
              </td>
                  <td>
                <label for="fname">City</label> <br>
                <input type="text" id="city" name="cityname" placeholder="Kolkata">
              </td>
                 
                </tr>
              <tr>
                <td colspan="2">
                <label for="fname">First Name</label> <br>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
               
                </td>
              </tr>
              <tr>
                <td  class="w3-button w3-red w3-margin-bottom" >
                  <input type="reset" value="Reset" >
                  <button type="button" onclick="sendEmail()">Submit</button>
                </td>
              </tr>
            </form>
              </table>
          </div>
    
          <div class="w3-col m6 w3-justify w3-padding-48" style="font-size: 18px;">
            <!-- <h4>About Us</h4> -->
            <!-- <div><div><p style="font-weight: 800;">We are manufacturers of India ethnic wear (Salwar Suits and Kurtis) with major focus on handwork. Local karigars from around Kolkata have known expertise on handwork and embroidery which we apply in our designs.</p> -->
    <!-- </div></div> -->
    <!-- <p><a href="https://docs.google.com/document/u/3/d/e/2PACX-1vTEI5I10qHbs3pGz1DsbFPrVlFn8RdlMrb-x8t9xzNkUc18P2KER5HXyxg-HrJwot0bdK7CYAQ66f5D/pub">We're hiring : We are looking for designers.</a></p>
            <p><a href="https://wa.me/919830702746">Support: Connect with us on whatsapp</a></p> -->
           
            <!-- <h4>Store</h4> -->
           <h4 style="font-size: 16px; color:red;">Contact us at</h4>
            <p><i class="fa fa-fw fa-phone"></i> 9830702746</p>
           <h4 style="font-size: 16px; color:red;">Whatsapp us at</h4>
            
            <p><i class="fa fa-whatsapp"></i>
              9830702746</p>
           <h4 style="font-size: 16px; color:red;">Mail us at</h4>
    
            <p><i class="fa fa-fw fa-envelope"></i> themodernattire@gmail.com</p>
           <h4 style="font-size: 16px; color:red;">Location</h4>
    
            <p><i class="fa fa-fw fa-map-marker"></i> The Modern Attire, PS Arcade, 2nd Floor, </br>11 Sudder Street, Kolkata - 700016</p>
          </div>
    
        </div>
      </footer>

      <!-- location added -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.557250436732!2d88.35100231491064!3d22.55825238519019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027706022f9025%3A0xea9a41556aff50bc!2sThe%20Modern%20Attire!5e0!3m2!1sen!2sin!4v1657271915258!5m2!1sen!2sin"  height="350" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <!-- location ended  -->


<!-- Scripts  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script/contactus.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>

</body>
</html>