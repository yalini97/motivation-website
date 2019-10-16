var logo = document.querySelector("#heartLogo");
console.log(logo.innerHTML);


var navItems = document.querySelectorAll("#mainNav a");
for(i=0;i<navItems.length;i++){
    console.log(navItems[i].innerHTML);
    navItems[i].addEventListener("click",pageChanged);
}

function pageChanged(){
    logo.innerHTML+=this.innerHTML;
}