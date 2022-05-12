
/*
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} */

//this is copied from dropdowns
function myFunction(a) {
    a.parentNode.getElementsByClassName("modal-content")[0].classList.toggle("show");
  }

window.onclick = function(event) {
    if (!event.target.matches('.modal')) {
      var modals = document.getElementsByClassName("modal-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openModals = modals[i];
        if (openModals.classList.contains('show')) {
          openModals.classList.remove('show');
        }
      }
    }
  }