<?php
    //Comprueba que exista y que no sean nulas las respuestas
    $r1= (isset ($_POST["carne"]) && $_POST["carne"] !="") ?$_POST["carne"]: "No específicó";
    $r2 = (isset ($_POST["lugar"]) && $_POST["lugar"] !="") ?$_POST["lugar"]: "No específicó";
    $r3 = (isset ($_POST["tomar"]) && $_POST["carne"] !="") ?$_POST["carne"]: "No específicó";
    $r4 = (isset ($_POST["hora"]) && $_POST["hora"] !="") ?$_POST["hora"]: "No específicó";
    $r5 = (isset ($_POST["salsa"]) && $_POST["salsa"] !="") ?$_POST["salsa"]: "No específicó";
    $r6 = (isset ($_POST["tortilla"]) && $_POST["tortilla"] !="") ?$_POST["tortilla"]: "No específicó";
    $r7 = (isset ($_POST["tipocarne"]) && $_POST["tipocarne"] !="") ?$_POST["tipocarne"]: "No específicó";
    $r8 = (isset ($_POST["emocion"]) && $_POST["emocion"] !="") ?$_POST["emocion"]: "No específicó";
    $r9 = (isset ($_POST["acompañante"]) && $_POST["acompañante"] !="") ?$_POST["acompañante"]: "No específicó";
    $r10 = (isset ($_POST["frec"]) && $_POST["frec"] !="") ?$_POST["frec"]: "No específicó";

    $A=0;
    $B=0;
    $C=0;
    $D=0;
    //Cadena que almacena las respuestas
    $respuestas = [$r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8, $r9, $r10];
    //Itera por cada respuesta dentro del arreglo
    for ($i=0; $i<10; $i++)
    {   //revisa cual respuesta fue la seleccionada y las cuenta en otra variable
        switch ($respuestas[$i])
        {
            case ($respuestas[$i]=="A"): //respuesta a
                $A+=1;
                break;
            case ($respuestas[$i]=="B")://respuesta b
                $B+=1;
                break;
            case ($respuestas[$i]=="C")://respuesta c
                $C+=1;
                break;
            case ($respuestas[$i]=="D")://respuesta d
                $D+=1;
                break;
        }
        echo $respuestas[$i];
        echo "<br>";
    }
    //Le asigna el tipo de taco de acuerdo a las respuestas
    $tipoTaco =["A" => "Taco al pastor",
                "B" => "Taco de suadero",
                "C" => "Taco de barbacoa",
                "D" => "Taco Lagunero",
                "AB" => "Taco campechano",
                "BC" => "Taco de carnitas",
                "CD" => "Taco bell",
                "AD" => "Taco light",
                "AC" => "Taco placero",
                "BD" => "Taco de mixiote",
                "Otro" => "Taco de sal"];
    //Para uso de funciones de cadena
    $msg = "¡Delicioso!, Eres, un ";
    //Une la cadena en un arreglo
    $Mensaje = explode (",", $msg);
    //Verifica que en total las respuestas den 10 (puntos totales d ela encuesta)
    switch ($A+$B+$C+$D==10)
    {
        //El algoritmo se repite en cada case, sólo verifica las respuestas.
        case ($A>5): //Mayor número de respuestas A
            //En cada caso, se une la cadena mensaje con el tipo de taco
            array_push($Mensaje, $tipoTaco["A"]);
            echo "<h1>";
            //En cada caso usapo para imprimir el valor del arreglo
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            break;
        case ($B>5)://Mayor número de respuestas B
            array_push($Mensaje, $tipoTaco["B"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            
            break;
        case ($C>5)://Mayor número de respuestas C
            array_push($Mensaje, $tipoTaco["C"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            break;
        case ($D>5)://Mayor número de respuestas D
            array_push($Mensaje, $tipoTaco["D"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            break;
        case ($A+$B==10)://Mayor número de respuestas A Y B
            array_push($Mensaje, $tipoTaco["AB"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            break;
        case ($B+$C==10): //Mayor número de respuestas B yC
            array_push($Mensaje, $tipoTaco["BC"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            break;
        case ($C+$D==10): //Mayor número de respuestas Cy D
            array_push($Mensaje, $tipoTaco["CD"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            break;
        case ($A+$D==10)://Mayor número de respuestas A y D
            array_push($Mensaje, $tipoTaco["AD"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            break;
        case ($C+$A==10)://Mayor número de respuestas C y A
            array_push($Mensaje, $tipoTaco["AC"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";;
            break;
        case ($B+$D==10)://Mayor número de respuestas B y D
            array_push($Mensaje, $tipoTaco["BD"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
            break;
        default://Respuestas múltiples
            array_push($Mensaje, $tipoTaco["Otro"]);
            echo "<h1>";
            foreach($Mensaje as $llave => $valor)
            {
                echo $valor;
            }
            echo "</h1>";
        }
?>