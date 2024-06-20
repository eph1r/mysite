document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
menu.onclick = function myFunction(){
    var x = document.getElementById('myTopnav')

    if(x.className==="topnav"){
        x.className+=" responsive";
    }
    else{
        x.className="topnav";
    }
}
