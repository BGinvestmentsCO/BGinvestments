<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project #1</title>
    </head>
    <body>
        <h1>
            <?php
                //comentario
                $Primeravariable="soy una variable string";
                $Segundavariable=12345465;
                $Terceravariable=34;
                $Lenguaje='HTML';
                echo $Primeravariable.'<br>'.$Segundavariable;
                echo '<br>'.$Segundavariable/$Terceravariable;
                //estructuras de control
                if($Segundavariable>1200000000000||$Segundavariable>100)
                {
                    echo '<br>'.'Soy mayor';
                }
                else
                {
                    echo '<br>'.'Soy menor';
                }
                echo '<br></br>';
                switch($Lenguaje)
                {
                    case 'PHP':
                        echo 'PHP';
                        break;
                    case 'Javascript':
                        echo 'Javascript';
                        break;
                    case 'HTML':
                        echo 'HTML';
                        break;
                }
                //Arreglos
                $Array1=[2,'pollo',4];
                echo '<br></br>'.$Array1[0];
            ?>
        </h1>
        <p>
            <h2>
                <?php
                echo'esta es otra seccion';
                ?>
            </h2>
        </p>
    </body>
</html>
