<?php


    // Operadores de comparacion
    echo '<hr><h1>Operadores De Comparación</h1>';
    echo "Hola a Todos, 
    Soy  ", isset($name) ? $name : 
    "José Alfredo Jiménez García, ", 'en esta página web se visualizarán 
    los diferentes operadores de comparación; por favor encuentra el 
    error';
    
    // Mayor o igual que
    echo '<hr><t1><b>Mayor o igual que >= </b>';  echo '<br>';
    echo  "El valor de a es  ", $a = (int) 3
    ; echo '<br>';
    echo "El valor de b es  ", $b = (string) '5'; echo '<br>';
    echo 'La Comparación entre a y b es:  ';  var_dump($a >= $b);
    echo '<br>';
    echo '<br>';

    // Mayor que
    echo '<hr><t1><b>Mayor que > </b>';  echo '<br>';
    $a = (int) 5; echo '<br>';
    ++$a; 
    --$a;
    --$a;
    --$a;
    $b = (float) 3.5; 
    --$b;
    --$b;
    echo  "El valor de a es  ", $a;echo '<br>';
    echo "El valor de b es  ", $b ;echo '<br>';
    echo 'La Comparación entre a y b es:  ';  var_dump($a > $b);
    echo '<br>';
    echo '<br>';

    // Menor o igual que
    echo '<hr><t1><b>Menor o igual que <= </b>';  echo '<br>';
    $a = (int) 5; 
    --$a; 
    $b = (string) '5';
    
    echo  "El valor de a es  ", $a;echo '<br>';
    echo "El valor de b es  ", $b ;echo '<br>';
    echo 'La Comparación entre a y b es:  ';  var_dump($a <= strlen($b));

    // Menor que
    $a = (int) 10; echo '<br>';
    ++$a; echo '<br>';
    $b = (double) 11.1;
    echo '<hr><t1><b>Menor que  < </b>';  echo '<br>';
    echo  "El valor de a es  ", $a;echo '<br>';
    echo "El valor de b es  ", $b ;echo '<br>';
    echo 'La Comparación entre a y b es:  '; var_dump($a < $b);
    echo '<br>';
    echo '<br>';

    // No identico
    echo '<hr><t1><b>No identico !== </b>';  echo '<br>';
    $a = (int) 5;
    $b = (int) 5; 
    echo "Verdad=1, Falso= ' ', el resultado es: ", $a!=$b; echo '<br>';
    echo  "El valor de a es  ", $a;echo '<br>';
    echo "El valor de b es  ", $b ;echo '<br>';
    echo 'La Comparación entre a y b es:  ';  var_dump($a !== $b);
    echo '<br>';
    echo '<br>';

    // Diferente
    echo '<hr><t1><b>Diferente != </b>';  echo '<br>';
    $a = (int) 5;
    ++$a;
    $b = false;
    echo  "El valor de a es  ", $a;echo '<br>';
    echo "El valor de b es  ", $b ;echo '<br>';
    echo 'La Comparación entre a y b es:  ';  var_dump($a != $b);
    echo '<br>';
    echo '<br>';
    
    // Identico 
    echo '<hr><t1><b>Identico === </b>';  echo '<br>';
    $a = (int) 4; 
    ++$a; 
    $b = (int) '5'; 
    echo  "El valor de a es  ", $a;echo '<br>';
    echo "El valor de b es  ", $b ;echo '<br>';
    echo 'La Comparación entre a y b es:  '; var_dump($a === $b);
    echo '<br>'; 
    echo '<br>';

    // Igual
    echo '<hr><t1><b>Igual   == </b>';  echo '<br>';
    $a = (int) 5; 
    ++$a;
    $b = (float) '5'; 
    echo  "El valor de a es  ", $a;echo '<br>';
    echo "El valor de b es  ", $b ;echo '<br>';
    echo 'La Comparación entre a y b es:  ';  var_dump($a == $b);
    echo '<br>'; 
    
    

?>