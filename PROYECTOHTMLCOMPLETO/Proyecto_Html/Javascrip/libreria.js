let contador = localStorage.getItem("carrito cantidad=");
if(isNaN(localStorage.getItem("carrito cantidad="))){
    localStorage.clear();
    localStorage.setItem("carrito cantidad=", 0);
    let contador = localStorage.getItem("carrito cantidad=");
} else{
    let contador = localStorage.getItem("carrito cantidad=");
}
function aumentar(){
    const valor = document.getElementById('valor');
    const boton = document.getElementById('boton_comprar')
    localStorage.clear();
    contador++;
    localStorage.setItem("carrito cantidad=", contador);
    valor.textContent = contador;
}
    
