

//custom filters
filter = (fval) =>{
    var productsN = document.getElementsByClassName('product-name')
    var productsC = document.getElementsByClassName('products-container')
    var outputR = document.getElementById('output-txt')

    outputR.innerHTML = "Clothing Type : "+fval;
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

apparelsfilter = (fval) =>{
    var productsN = document.getElementsByClassName('product-name')
    var productsC = document.getElementsByClassName('products-container')
    var outputR = document.getElementById('output-txt')
    outputR.innerHTML = "Apparel Type : "+fval;
    outputR.style.display = "block";

    var apparels = document.getElementsByClassName('apparels')
    var filter_text = fval;


    for(i=0; i<productsC.length; i++){
        apprsrch = apparels[i].textContent || apparels[i].innerText;
        if(apprsrch.toUpperCase() === filter_text.toUpperCase()){
            productsN[i].style.display = "";
            productsC[i].style.display = "";
        }else{
            productsC[i].style.display = "none";
            productsN[i].style.display = "none"; 
    }}
    
}

