<?php


$html = '
    <form action="" method="get">
        <select name="" id="">
            <option value="datoUno">Uno</option>
            <option value="datoDos">Dos</option>
            <option value="datoTres">Tres</option>
        </select>
        <br>
        <br>
        <button>enviar</button>
    </form>';
        
echo $html;

if(isset(_GET('datoUno')) && empty(_GET('datoUno'))
        && isset(_GET('datoDos')) && empty(_GET('datoDos'))
        && isset(_GET('datoTres')) && empty(_GET('datoTres'))){
            
    $uno  = _GET('datoUno');
    $dos  = _GET('datoDos');
    $tres = _GET('datoTres');

    echo ($uno + $dos + $tres) / 3;            
}