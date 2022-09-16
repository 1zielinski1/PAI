<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
       <?php
             for($i = 1; $i <= 10; ++$i)
            {
	           for($x=1;$x<=10;$x++)
                {
                     echo "$i * $x = ". $x * $i;
                     echo "<br>";
                }
                echo "<br>";
                
             }      
        ?>
    </body>
</html>