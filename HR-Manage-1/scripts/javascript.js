const nav = document.querySelector('.wrapper collapse')
fetch('/sidebar.html')
.then(res=>res.text())
.then(data=>{
 nav.innerHTML = data
})

function myFunction() {
  var element = document.getElementById("wrapp");
  element.classList.toggle("collapse");
}

function resize() {
  var x = document.getElementById("nav_bar_resize");


  if (window.screen.width <= 900) {
    x.style.display = "block";
  }else if (window.screen.width >= 900){
  x.style.display = "none";
   }
}
