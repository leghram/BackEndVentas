
//funcion para limpiar lo valores de los imputs de entrada
const modal = document.querySelector(".modal");
const btnAgregar = document.querySelector(".btnAgregar");
btnAgregar.addEventListener("click",(ev)=>{
    ev.preventDefault();

    modal.style.visibility = "visible";
    modal.classList.toggle("modalClose");
    console.log("SE PRESIONNO   ");
 });









