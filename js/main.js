var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}

let verif;




function checkError(element, id)
{
    if (element.value == '') {
        document.getElementById(id).classList.remove("hide");
        verif.preventDefault();
    }
    
    
    else{
        document.getElementById(id).classList.add("hide");
    }
}


document.querySelector("form").addEventListener("submit", (everif) =>
{
    verif = everif;
    checkError(prenom, "name");
    checkError(nom, "lname")
    checkError(mail,"imail")
    checkError(com,"conmess")
    
});