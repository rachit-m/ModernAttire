const galleryItems = document.querySelector("#salwaar-suits-container").children;
// const clothfilter = document.querySelector(".cloth-type");
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const page = document.querySelector(".pgno");

const maxItem = 50;
let cf = false;
let index = 1;

// clothfilter.addEventListener("")

const pagination=Math.ceil(galleryItems.length/maxItem);
console.log(pagination)

prev.addEventListener("click",function(){
  index--;
  check();
  showItems();
})
next.addEventListener("click",function(){
    index++;
    check();
  showItems();  
})

function check(){
     if(index==pagination){
         next.classList.add("disabled");
     }
     else{
       next.classList.remove("disabled");	
     }

     if(index==1){
         prev.classList.add("disabled");
     }
     else{
       prev.classList.remove("disabled");	
     }
}

function showItems() {
     for(let i=0;i<galleryItems.length; i++){
      //  if(cf = true){
      //   for(let i=0;i<galleryItems.length; i++){}
      //     galleryItems[i].classList.remove("hide");
      //     galleryItems[i].classList.add("show");
      //     break;
      //  }
         galleryItems[i].classList.remove("show");
         galleryItems[i].classList.add("hide");


        if(i>=(index*maxItem)-maxItem && i<index*maxItem){
           // if i greater than and equal to (index*maxItem)-maxItem;
          // means  (1*8)-8=0 if index=2 then (2*8)-8=8
        galleryItems[i].classList.remove("hide");
        galleryItems[i].classList.add("show");
        }
        page.innerHTML=index;
     }

         
}

window.onload=function(){
    showItems();
    check();

}
