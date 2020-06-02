<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste PHP</title>
</head>
<body>
    <?php 
        $n1 = 2;
        echo($n1 + 2);
        echo "<br>";

        $n1 = 2;
        echo(5 + $n1);
        echo "<br>";
        
        $n1 = 4;
        echo($n1 * 5);
        echo "<br>";

        $n1 = 15;
        echo($n1 / 5);
        echo "<br>";

        $n1 = 10;
        echo($n1 % 8);
        echo "<br>";

        $n1 = 5;
        $n1++;
        echo($n1);
        echo "<br>";

        $n1 = 5;
        $n1--;
        echo($n1);
        echo "<br>";
        
        $n1 = 8;
        echo($n1);
        echo "<br>";

        $n1 = 8;
        $n1 = $n1 + 10;
        echo($n1);
        echo "<br>";
             
        $n1 = 8;
        $n1 += 10;
        echo($n1);
        echo "<br>";      
    
    ?> 
</body>
</html>