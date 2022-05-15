//MODAL SCRIPT
function open_modal(modal_name){
    let modal = document.getElementById(modal_name);
    console.log(modal)
    if (typeof modal == 'undefined' || modal === null)
        return;

        modal.style.display = 'flex';
}
function close_modal(modal_name){
    let modal = document.getElementById(modal_name);

    if (typeof modal == 'undefined' || modal === null)
        return;

        modal.style.display = 'none';
}

//SLIDE SCRIPT
var count = 1;
document.getElementById("radio1").checked = true;

setInterval( function(){
    next_slide();
}, 10000);

function next_slide(){
    count++;
    if(count > 2){
        count = 1;
    }
document.getElementById("radio" + count).checked = true;
}