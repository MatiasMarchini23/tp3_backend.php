 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>tp3-parte 2-Matias Marchini</h1>
    <?php 

    $i;

    print "<h2>Ejercicio 1</h2><br>";
    print "<h2>1. Mostrar los números del 1 al 100.</h2><br>";
    print "<h3> ciclo for</h3>";


    for ($i=1; $i <= 100; $i++) { 
        
        print "[ $i ]";
    }
    print"<br>";
    print "<br>";

    print "<h3> ciclo while</h3>";

    $i = 1;
    while ($i <= 100) {

        print "[ $i ]";
        $i++;
    }

    print "<h3> ciclo do-while</h3>";

    $i = 1;

    do{

        print "[ $i ]";
        $i++;

    } while ($i <= 100);








    print "<h2>Ejercicio 2</h2><br>";
    print "<h2>2. Mostrar los números del 100 al 1.</h2><br>";
    print "<h3> ciclo while</h3>";

    $i = 100;

    while ($i >= 1) {
        
        print "[ $i ]";
        $i--;
    }

    print "<h3> ciclo do-while</h3>";

    $i = 100;

    do {
        print "[ $i ]";
        $i--;
    } while ($i >= 1);


    print "<h3> ciclo for</h3>";

    for ($i=100; $i > 0; $i--) { 
        
        print "[ $i ]";
    }

    print "<h2>Ejercicio 3</h2><br>";

    print "<h2>3. Mostrar los números pares del 1 al 100.</h2><br>";

    print "<h3> ciclo while</h3>";

    $i = 2;

    while ($i < 102) {
        
        print "[ $i ]";
        $i += 2;
    }

    print "<h3> cicl0 do-while</h3>";

    $i = 2;

    do {
        print "[ $i ]";
        $i += 2;
    } while ($i < 102);


    print "<h3> cicl0 for</h3>";

    for ($i=2; $i < 102; $i += 2) { 
        
        print "[ $i ]";
    }

    print "<h2>Ejercicio 4</h2><br>";

    print "<h2>4. Mostrar los números impares del 1 al 100.</h2><br>";

    print "<h3> ciclo while</h3>";

    $i = 1;

    while ($i < 100) {
        
        print "[ $i ]";
        $i += 2;
    }

    print "<h3> ciclo do-while</h3>";

    $i = 1;

    do {
        print "[ $i ]";
        $i += 2;
    } while ($i < 100);

    print "<h3> ciclo for</h3>";

    for ($i=1; $i < 100; $i += 2) { 
        
        print "[ $i ]";
    }

    print "<h2>Ejercicio 5</h2><br>";

    print "<h2>5. Mostrar la suma de los números de 1 a 20.</h2><br>";
    
    print "<h3> ciclo while</h3>";

    $i = 1;
    $acumulad0r = 0;

    while ($i <= 20) {
        $acumulad0r += $i;
        print "[ $acumulad0r ]";
        $i++;
        
    }

    print "<br> suma final $acumulad0r";

    print "<h3> ciclo do-while</h3>";

    $i = 1;
    $acumulad0r = 0;

    do {
        $acumulad0r += $i;
        print "[ $acumulad0r ]";
        $i++;
        
    } while ($i <= 20);

    print "<br> suma final $acumulad0r";

    print "<h3> ciclo for</h3>";

    $acumulad0r = 0;

    for ($i=1; $i <= 20; $i++) { 
        
        $acumulad0r += $i;
        print "[ $acumulad0r ]";
    }

    print "<br> suma final $acumulad0r";


    print "<h2>Ejercicio 6</h2><br>";

    print "<h2>6. Mostrar la suma de números pares de 1 a 20.</h2><br>";

    print "<h3> ciclo while</h3>";

    $i = 1;
    $acumulad0r = 0;

    while ($i <= 20) {

        if ($i % 2 == 0) {
            $acumulad0r += $i;
            print "[ $acumulad0r ]";

        }
        $i++;
    }
    print "<br> suma final $acumulad0r";

    print "<h3> ciclo do-while</h3>";

    $i = 1;
    $acumulad0r = 0;

    do {

        if ($i % 2 == 0) {
            $acumulad0r += $i;
            print "[ $acumulad0r ]";

        }
        $i++;
    
    } while ($i <= 20);

    print "<br> suma final $acumulad0r";

    print "<h3> ciclo for</h3>";

    $acumulad0r = 0;

    for ($i=1; $i <= 20 ; $i++) {
        
        if ($i % 2 == 0) {
            $acumulad0r += $i;
            print "[ $acumulad0r ]";
        }

    }
    
    print "<br> suma final $acumulad0r";
















?>
</body>
</html>









