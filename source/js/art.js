function loadDoc(file) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        console.log(file);
        document.getElementById("story1").innerHTML = this.responseText;
    }
    xhttp.open("GET", file, true);
    xhttp.send();
  }
function loadDoc1(file) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        console.log(file);
        document.getElementById("award1").innerHTML = this.responseText;
    }
    xhttp.open("GET", file, true);
    xhttp.send();
    }



// let icon = document.getElementById("dark-mode");
// window.onload = setDark();
// function setDark()
// {
//     var element = document.body;
//     if(sessionStorage.getItem("darkmode") == 1)
//     {
//         icon.setAttribute("name","sunny");
//         element.className= "dark-mode";
//     }
//     else{
//         icon.setAttribute("name","moon");
//         element.className= "";
//     }
// }
// icon.addEventListener('click', function() {
//     var element = document.body;
//     if(element.className== ""){
//         icon.setAttribute("name","sunny");
//         element.className= "dark-mode";
//         sessionStorage.setItem("darkmode", 1);
//     }
//       else{
//         icon.setAttribute("name","moon");
//         element.className= "";
//         sessionStorage.setItem("darkmode", 0);
//     }
// }, false);

// function loadDoc(file) {
//     const xhttp = new XMLHttpRequest();
//     xhttp.onload = function() {
//         console.log(file);
//         document.getElementById("story1").innerHTML = this.responseText;
//     }
//     xhttp.open("GET", file, true);
//     xhttp.send();
//   }
// function loadDoc1(file) {
//     const xhttp = new XMLHttpRequest();
//     xhttp.onload = function() {
//         console.log(file);
//         document.getElementById("award1").innerHTML = this.responseText;
//     }
//     xhttp.open("GET", file, true);
//     xhttp.send();
//     }


// //     
  