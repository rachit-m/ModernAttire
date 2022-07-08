  let fabric_type = "All";
  var spData = null;
  function doData(json) {
      spData = json["values"];
  }

 
//d16xrgwxsji1em.cloudfront.net?export=view&id=1NUoIosZV280TQF6QuxEr3Iq96-oxn3WV
//1Z7FAtRY15Fdp_m3UEG9kkVLHcH4xyFZP
// document.getElementById(#currency').addEventListener('change', function() {
//     // console.log('You selected: ', this.value);
  
//   function drawWidget(image_id, section_id, product_name, in_stock, modified_date) {

//     var display_msg = "";
//     var dd = new Date().getTime();

//     if(in_stock == "FALSE") 
//     display_msg = "Sold Out"; 
//     else{
//       if((dd - parseInt(modified_date)) < 7 * 24 * 60 * 60 * 1000 )
//         display_msg = "New";
//         // location.reload();
//       }
// //  var#currency=document.getElementById#currency).value;
//         var widget_html =  '<div onclick="openModal('+product_name.split(";")[0].split("-")[2]+');currentSlide(1)" style="padding: 16px;"><div class="w3-display-container"><img src="designs/' + product_name.split(";")[0].split("-")[0] + '/' +  product_name.split(";")[0].split("-")[2] +'.jpeg" style="width:100%"> <span class="w3-tag w3-display-topleft">'+display_msg+'</span><div class="w3-display-middle w3-display-hover"><button class="w3-button w3-black">Zoom In<i class="fa fa-plus-square-o"></i></button></div></div><p>'+product_name.split(";")[1]+'<br><b>'+(product_name.split(";")[2].split(".")[0])+'</b></p> </div>';
//         $('#'+'section-'+section_id).append(widget_html);
        
  
//   }
// });
  function drawWidget(image_id, section_id, product_name, in_stock, modified_date) {

    var display_msg = "";
    var money=document.getElementById("currency").value;
    var dd = new Date().getTime();

    if(in_stock == "FALSE") 
    display_msg = "Sold Out"; 
    else{
      if((dd - parseInt(modified_date)) < 7 * 24 * 60 * 60 * 1000 )
        display_msg = "New";
        // location.reload();
      }

      if(money==='BDT'){
        var widget_html =  '<div onclick="openModal('+product_name.split(";")[0].split("-")[2]+');currentSlide(1)" style="padding: 16px;"><div class="w3-display-container"><img src="designs/' + product_name.split(";")[0].split("-")[0] + '/' +  product_name.split(";")[0].split("-")[2] +'.jpeg" style="width:100%"> <span class="w3-tag w3-display-topleft">'+display_msg+'</span><div class="w3-display-middle w3-display-hover"><button class="w3-button w3-black">Zoom In<i class="fa fa-plus-square-o"></i></button></div></div><p>'+product_name.split(";")[1]+'<br><b>'+(product_name.split(";")[2].split(".")[0])*3+'</b></p> </div>';
        $('#'+'section-'+section_id).append(widget_html);
    }
    else if(money==='INR') {
        var widget_html =  '<div onclick="openModal('+product_name.split(";")[0].split("-")[2]+');currentSlide(1)" style="padding: 16px;"><div class="w3-display-container"><img src="designs/' + product_name.split(";")[0].split("-")[0] + '/' +  product_name.split(";")[0].split("-")[2] +'.jpeg" style="width:100%"> <span class="w3-tag w3-display-topleft">'+display_msg+'</span><div class="w3-display-middle w3-display-hover"><button class="w3-button w3-black">Zoom In<i class="fa fa-plus-square-o"></i></button></div></div><p>'+product_name.split(";")[1]+'<br><b>'+(product_name.split(";")[2].split(".")[0])+'</b></p> </div>';
        $('#'+'section-'+section_id).append(widget_html);
     
    }
  
  }
//   window.onload= function () {
//     return new Promise(function(resolve, reject) {
     
//       var error =true;
//       if(!error){
// console.log('problem resolved')
// var selItem = sessionStorage.getItem("mytime");
// document.getElementById("currency").value=selItem;
//         resolve();
//       }
//          else{
// console.log('problem rejected')

// reject('error shown');
//          }
//     });
// }
 
window.onload= function () {
  var selItem = sessionStorage.getItem("mytime");
document.getElementById("currency").value=selItem;
datareading();
}
  function readData(fabric_filter = '') {
    w3_close();
    document.getElementById("section-1").innerHTML = '';
    document.getElementById("section-2").innerHTML = '';
    document.getElementById("section-3").innerHTML = '';
    document.getElementById("section-4").innerHTML = '';
      var data = spData;
      var alldata = [];
      var rowData = [];
      var section = 0;
      var display = 0;
      // setTimeout(() => {
        
        for(var r=0; r<data.length; r++) {
            var row = data[r];
           
              if(row[0].split(";").length > 1 && row[0].includes(fabric_filter))
              {
                drawWidget(row[1], section, row[0],  row[3], row[4]);
  
              }
              section = section%4+1;
            
        }
      // }, 1000);
      document.getElementById("no_of_items").innerText = data.length-1 + " total item(s)";
  
  }
 function wait(){
  var selItem = sessionStorage.getItem("mytime");
  document.getElementById("currency").value=selItem;
 }
  $(document).ready(function(){
  //   var waitvar;
  //  waitvar= await wait();
  //drawWidget("1YIxyN3kk7B9_AzZ4M4zh2hqWpUEcHbmq", 1);
  readData('');
})
async function datareading(){
  await wait();
  readData('');
};
datareading().then(function(){
  console.log('problem resolved');
})
function changeSelected(){
  var n=document.getElementById("currency").value;
  sessionStorage.setItem("mytime", n);
  document. location. reload(true);
}

// load().then(readData);
// onload().then(function() {
//   // Do things after onload
  
//   console.log('resolved');
//   readData('');
// }).catch((error)=>{
//   // readData('');
//   console.log('rakesh moond')});
