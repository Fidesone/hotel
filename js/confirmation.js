
function confirmation(e){
    if (confirm("¿Seguro que quiere eliminar el usuario?")){
        return true;
    } else { e.preventDefault()}; // e.preventDefault(). Cancela el evento sin detener el resto del funcionamiento, puede ser llamado nuevamente.
    
}
let linkDelete = document.querySelectorAll(".item_link");
for (var i = 0; i< linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmation);
}