var productsN = document.getElementsByClassName('product-name')
var productsC = document.getElementsByClassName('products-container')

function search(){
    var input = document.getElementById('search-box')
    var outputR = document.getElementById('output-txt')

    outputR.innerHTML = "Search : "+input.value;
    outputR.style.display = "block";
    var filter = input.value.toUpperCase()

    for(i=0; i<productsN.length; i++){
        txtval = productsN[i].textContent || productsN[i].innerText;
        if(txtval.toUpperCase().indexOf(filter) > -1){
            productsN[i].style.display = "";
            productsC[i].style.display = "";
        }else{
            productsC[i].style.display = "none";
            productsN[i].style.display = "none";
        }
    }
}

reset = () => {
    var outputR = document.getElementById('output-txt')
    outputR.style.display = "none";
}






