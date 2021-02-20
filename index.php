<?php
    //CICLO SWITCH
        //EJEMPLO 1
    $usuario = (string) 'Oscar';
    switch ($usuario) {
        case 'Oscar':
            print_r(AccesoCorrecto($usuario));
            break;
        case 'Emanuel Julian':
            print_r(AccesoCorrecto($usuario));
            break;
        case 'Juliana':
            print_r(AccesoCorrecto($usuario));
            break;
        default:
            print_r(AccesoDenegado($usuario));
            break;
            }
    function AccesoCorrecto($usu){
        return (string) <<<FIN
            El usuario $usu tiene permiso de entrar al Discord
FIN;
            }
    function AccesoDenegado($usu){
        return (string) <<<FIN
            El usuario $usu no tiene permiso de ingresar al Discord
FIN;
            }

        //EJEMPLO 2 - Con array
    $ListaNombres = (array) ["Oscar","Emanuel Julian"];
    switch ($ListaNombres) {
        case "Oscar":
                print_r("Hola Oscar");
            break;
        case "Emanuel Julian":
                print_r("Hola Emanuel Julian");
            break;
        case ["Oscar","Emanuel Julian"]:
                print_r("Hola a todos ");
            break;
        default:
        print_r("Identifiquese Correctamente Por Favor");
            break;
}

    //CICLO FOR
        //EJEMPLO 1
    for ($i=0; $i < 10; $i++) { 
        $cadena = <<<FIN
        $i <br>
FIN;
            print_r($cadena);
            goto CICLOFOR;
        }
    CICLOFOR: //Label para definir y llamar al Ciclo 

        //EJEMPLO 2
    for ($n=0; $n < 10; $n++) { 
        $numero = <<<FIN
        $n <br>
FIN;
        if($n==3){
            print_r($numero);
            goto ciclos;
        }         
    }
    ciclos:
    for ($x=0; true;) { 
        print_r("Esto es el segundo ciclo $x <br>");
        break;
    }

        //EJEMPLO 3
    $i=0;
    ciclos2:
    for ($u; $u <= 10;) { 
        $cadena2 = <<<FIN
        $u <br>
FIN;
        print_r($cadena2);
        ++$u;
        goto ciclos2;
    }

    //CICLO FOR EACH
    $lista = (array) ["Oscar", "Emanuel Julian", "Juliana"];

    foreach ($lista as $key => $value) {
        $cadena = (string) <<<FIN
        $value <br>
FIN;
        print_r($cadena);
    }
?>