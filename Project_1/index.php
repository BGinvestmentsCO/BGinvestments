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
                    //revisar si un valor existe en el arreglo
                    $Existe= in_array('carlos', $usuarios);
                    echo $Existe;

                    ?>
                   
                    <ul>
                        <?PHP
                            foreach ($usuarios as $key => $user){
                                echo "<li>" . $key . " " .$user . "</li>";
                            }
                            for($i = 0; $i<4; $i++){
                                echo $i;
                            }
                            echo '<br>';
                            $cont = 0;
                            while($cont<5)
                            {
                                echo $cont;
                                if($cont==3)
                                {
                                    break;
                                }
                                $cont++;
                            }
                        ?>
                    </ul>
                </pre>
            </h2>
        <h1>
            <?php
            //Funciones en php
            function saludar()
            {
                echo '<h2>'.'hi there'.'</h2>';
            }
            saludar();
            //Funcion con parametros
            function user ($name,$tel)
            {
                echo 'Nombre:'.$name;
                echo 'Telefono:'.$tel;
            }
            user('Juan','3124800053');
            //funciones que retornan
            function sumar ($num1,$num2)
            {
                $sum=$num1+$num2;
                return $sum;
            }
            sumar(2,3);
            echo $sum;
            //acceder a variables globales desde funcion
            $agenda =array();
            function agendar ($nombre)
            {
                global $agenda;
               $agenda[]=$nombre;
            }
            agendar('felipe');
            print_r($agenda)
            ?>
        </h1>
    </body>
</html>
