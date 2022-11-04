function redirect(){
    window.location.href='./singleprod.php'
    
}


//custom filters
filter = (fval) =>{
    var productsN = document.getElementsByClassName('product-name')
    var productsC = document.getElementsByClassName('products-container')
    var outputR = document.getElementById('output-txt')

    outputR.innerHTML = "Clothing Material : "+fval;
    outputR.style.display = "block";
    var items = document.getElementsByClassName('material')
    var filter_text = fval;

    for(i=0; i<productsC.length; i++){
        elemtxt = items[i].textContent || items[i].innerText;
        if(elemtxt.toUpperCase() === filter_text.toUpperCase()){
            productsN[i].style.display = "";
            productsC[i].style.display = "";
        }else{
            productsC[i].style.display = "none";
            productsN[i].style.display = "none"; 
    }
}}


