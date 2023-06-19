// window.addEventListener('scroll',reveal);

// function reveal()
// {
//     var reveals = document.getElementsByClassName('reveals');
//     for(var i=0; i < reveals.length; i++)
//     {
//         var windowht = window.innerHeight;
//         var revealtop = reveals[i].getBoundingClientRect().top;
//         var revealpoint = 150;

//         if(revealtop < windowht - revealpoint){
//             reveals[i].classList.add('active')
//         }
//         else{
//             reveals[i].classList.remove('active')
//         }
//     }
// }

const cat1 = document.querySelector('.cat1');
const cat2 = document.querySelector('.cat2');
const text1 = document.getElementById('cat1_text');
const text2 = document.getElementById('cat2_text');

cat1.addEventListener('mouseover',()=>{
    text1.style.display = "block";
})
cat1.addEventListener('mouseout',()=>{
    text1.style.display = "none";
})
cat2.addEventListener('mouseover',()=>{
    text2.style.display = "block";
})
cat2.addEventListener('mouseout',()=>{
    text2.style.display = "none";
})

function scrollToElement(selector) {
    const element = document.querySelector(selector);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}



