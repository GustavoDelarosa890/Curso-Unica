<?php

function saludar(){
    return'hola mundo';
};
function saludame($nombre=' Gustavo'){
    return 'Hola'.$nombre;
};
//LLamada de funcion
echo saludar(); //Echo renderiza
echo '<br/n>';//Etiqueta que genera un salto de linea
echo saludame();

?>
