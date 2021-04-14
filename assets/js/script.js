var m = window.matchMedia("(max-width: 800px)")
var mini = true;

function toggleSidebar(m) {
  if (window.innerWidth > 800) {
    if (mini) {
      // console.log("opening sidebar");
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      this.mini = false;
    } else {
      // console.log("closing sidebar");
      document.getElementById("mySidebar").style.width = "85px";
      document.getElementById("main").style.marginLeft = "85px";
      this.mini = true;
    }
  }
}

window.onscroll = function () { myFunction() };  // When the user scrolls the page, execute myFunction
var header = document.getElementById("myHeader");// Get the header
var sticky = header.offsetTop;// Get the offset position of the navbar
function myFunction() {               // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function openNav(m) {
  if (window.innerWidth < 800) {
    document.getElementById("mySidebar").style.width = "80%";
  }
}

function closeNav(m) {
  if (window.innerWidth < 800) {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
}