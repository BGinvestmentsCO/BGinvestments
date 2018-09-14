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
                //arreglos de otra forma
                $variable=array('hi',3,'pol');   
            ?>
        </h1>
        <p>
            <h2>     
                <pre>
                <?php
                //Mostrar informacion de un arreglo de forma ordenada
                echo'esta es otra seccion';
                print_r($variable); 
                echo '<br></br>';
                //Agregar datos a un array
                $variable[]='Phyton';
                //Mostrar usando var_dump
                var_dump($variable);
                //Funciones para trabajo con arreglos
                //quitar ultimo elemento de array
                $dato= array_pop($variable);
                echo '<br></br>';
                print_r($variable);
                //Arrays asociativos
                $usuarios= array('nombre'=>'Juan','Apellido'=>'Meneses','Cedula'=>1036953948);
                echo '<h1>'.$usuarios['nombre'];
                
                
                ?>
                <pre>
            </h2>
        </p>
    </body>
</html>
