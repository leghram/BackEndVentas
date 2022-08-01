
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
        const masValores = botonesActualizar[i].getAttribute("data-valores");
        const listaValores = masValores.trim().split(" ");

        
        const posicion = document.querySelectorAll(".datoCampo");

        let valorInicial = 0;
        posicion.forEach(element => {
            if(valorInicial>=posicion.length/2){
                element.value = listaValores[valorInicial-posicion.length/2];
            }else{
                element.value = valorInicial;
            }
            valorInicial++;
        });

        

        modalActualizar.style.visibility = "visible";
        modalActualizar.classList.toggle("modalOpen2");


        console.log("se HIZO MUCHAS qwer COSAS");
        console.log(listaValores);

        
    });
}







