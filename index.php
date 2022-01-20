<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Variables y constantes</h2>";
        
        define("DATO", "un dato de ejemplo"); //Declaración de una constante. Uso antiguo, actualmente se utiliza const
        echo "la constante DATO es ".DATO; //Para usar una constante no se usa el signo $
        $numero= 5;
        $numero++;
        
        echo "<p>El número es ".$numero."</p>"; //El valor será 6
        echo "<p>El número es ".$numero++."</p>"; //El valor seguirá siendo 6 porque se realiza la suma después de haber pintado
        echo "<p>El número es ".$numero."</p>"; //El valor será 7
        echo "<p>El número es ".++$numero."</p>"; //El valor será 8 porque la operación se realiza antes de pintar


        echo "<hr>";


        echo "<h3>Operadores</h3>";

        $numero1=10;
        $numero2=15;
        if($numero1 >= $numero2){ //Operador de comparación
            echo "<p>El primer número es mayor</p>";
        }else{
            echo "<p>El primer número es menor</p>";
        }

        $aprobado=true;
        if($aprobado){
            echo "<p>Has aprobado</p>";
        }else{
            echo "<p>NA : no apto</p>";
        }

        $nota="8"; 
        if($nota===8){ //comparación del mismo tipo de valor
            echo "<p>Tu nota es un 8 NOTABLE</p>";
        }else{
            echo "<p>Tu nota NO es un 8</p>";
        }


        echo "<hr>";


        echo "<h3>Estructuras de control</h3>";

        for($i=0; $i<=10;$i++){
            echo $i."-";
        }
        
        echo "<br>";
        $a=0;
        while($a<=10){
            echo $a++."--";
        }
    ?>
</body>
</html>