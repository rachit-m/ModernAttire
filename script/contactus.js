
function sendEmail() {
    Email.send({
      // SecureToken : " 6bcd7443-a745-4b0d-bf67-d3b392ec16f7",
      Host:"smtp.elasticemail.com",
      // Host: "smtp.gmail.com",
      // Host : "smtp.mailtrap.io",
      Username: "rakeshmoond150@gmail.com",
      Password:"B0FCC7434FF57C1689CDEE7EF409F04373BA",
      To: "rakeshmoond150@gmail.com",
      From: "rakeshmoond150@gmail.com",
      Subject: "Received Contact Request",
      Body:"hello",
    })
      .then(function (message) {
        if(message=='OK'){
        document.getElementById("contactpage").innerHTML = "Thanks for contacting us...we will get back within 24 hour...Elplore our website and products";
        }
        else{
          console.error(message);
          alert(message);
        alert('error occured there');
        }
        //alert("mail sent successfully")
      });
  }
  // "First Name="+ document.getElementById('fname').value+"Last Name="+ document.getElementById('lname').value+"Phone Number="+ document.getElementById('phonenumber').value+"Email="+ document.getElementById('emailid').value+"Country="+ document.getElementById('country').value+"City"+ document.getElementById('city').value+"Message="+ document.getElementById('subject').value
