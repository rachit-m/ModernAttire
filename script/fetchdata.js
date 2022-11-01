
let prodkey = 0;

window.addEventListener("load",()=>{
    document.querySelector(".preloader").classList.add("preloader--hidden");
})

function redirect(){
    window.location.href='./singleprod.php'
    
}
function fetchdata(key){
    window.alert(key)
    prodkey = key;
}



