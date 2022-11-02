// window.addEventListener('scroll',reveal);

function reveal()
{
    var reveals = document.getElementsByClassName('reveals');
    for(var i=0; i < reveals.length; i++)
    {
        var windowht = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowht - revealpoint){
            reveals[i].classList.add('active')
        }
        else{
            reveals[i].classList.remove('active')
        }
    }
}