//Tạo Switcher mode – thay đổi giao diện
let icon = document.getElementById("dark-mode");
window.onload = setDark();
function setDark()
{
    var element = document.body;
    if(sessionStorage.getItem("darkmode") == 1)
    {
        icon.setAttribute("name","sunny");
        element.className= "dark-mode";
    }
    else{
        icon.setAttribute("name","moon");
        element.className= "";
    }
}
icon.addEventListener('click', function() {
    var element = document.body;
    if(element.className== ""){
        icon.setAttribute("name","sunny");
        element.className= "dark-mode";
        sessionStorage.setItem("darkmode", 1);
    }
      else{
        icon.setAttribute("name","moon");
        element.className= "";
        sessionStorage.setItem("darkmode", 0);
    }
}, false);