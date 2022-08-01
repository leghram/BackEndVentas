
//funcion para limpiar lo valores de los imputs de entrada
const modalAgregar = document.querySelector(".modalAgregar");
const btnAgregar = document.querySelector(".btnAgregar");
btnAgregar.addEventListener("click",(ev)=>{
    ev.preventDefault();

    modalAgregar.style.visibility = "visible";
    modalAgregar.classList.toggle("modalOpen");
    console.log("SE PRESIONNO   ");
 });

const modalActualizar = document.querySelector(".modalActualizar");
const botonesActualizar = document.querySelectorAll(".btnAct");

for(let i = 0 ; i <botonesActualizar.length ; i++){
    botonesActualizar[i].addEventListener("click",(ev)=>{
        ev.preventDefault();
        modalActualizar.style.visibility = "visible";
        modalActualizar.classList.toggle("modalOpen2");
        console.log("se HIZO MUCHAS COSAS");
    });
}






