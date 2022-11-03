function redirect(){
    window.location.href='./singleprod.php'
    
}

sendkey = (key) =>{
    window.alert((key))
}

//custom filters
filter = (material) =>{
    var productsN = document.getElementsByClassName('product-name')
    var productsC = document.getElementsByClassName('products-container')
    // window.alert(material)
    var items = document.getElementsByClassName('material')
    var filter_text = material;

    for(i=0; i<productsC.length; i++){
        elemtxt = items[i].textContent || items[i].innerText;
        if(elemtxt.toUpperCase() === filter_text){
            productsN[i].style.display = "";
            productsC[i].style.display = "";
        }else{
            productsC[i].style.display = "none";
            productsN[i].style.display = "none"; 
    }
}}


