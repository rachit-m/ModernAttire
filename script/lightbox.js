function openModal(image_name) {


  var data = spData;
  var images = [image_name+'A',image_name +'B', image_name + 'C', image_name + 'D'];
  var get_desc = 0;
  var desc = "";


  document.getElementById("myModal").style.display = "block";

  for(var index=0; index< images.length; index++)
  { 
    document.getElementById("lightbox"+(index+1)).src=("designs/MA/"+images[index]+".jpeg");
  }

    $('#image_loader').show();

// main image loaded ?
 $('#lightbox1').on('load', function(){
  $('#image_loader').hide();


}); 

    for(var r=0; r<data.length; r++) {
          var row = data[r];
            if(row[0].includes(image_name+';')) 
              desc = row[2];
            
     } 
document.getElementById("caption").innerHTML = desc;
document.getElementById("product_contact").href = "https://wa.me/919830702746?text=Hello%2C%20I%20am%20interested%20in%20product%20"+image_name+"%20%20%2Cplease%20give%20me%20more%20details";

     fbq('track', 'ViewContent', {'content_ids': image_name});


}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
