// Get the modal
var modal = document.getElementById("myModal");
var modal_contato = document.getElementById("myModal_contato");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn_contato = document.getElementById("btn_contato");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span_contato = document.getElementsByClassName("close_contato")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}
btn_contato.onclick = function() {
    modal_contato.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

span_contato.onclick = function() {
    modal_contato.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal_contato){
        modal_contato.style.display = "none";
    }
}