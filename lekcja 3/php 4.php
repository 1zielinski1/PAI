<!DOCTYPE html>
    <head>
        <title>PAI 4</title>
        <meta charset="utf-8">
    </head>
    <body>
       <?php
            //echo "0%-39% - 1 <br> 40%-54% - 2 <br> 55%-69% - 3 <br> 70%-84% - 4 <br> 85%-94% - 5 <br> 95%-100% - 6";
            $punkty=22;
            if($punkty>=0 && $punkty<=39)
            {
                echo "1";
            }
            else if($punkty>=40 && $punkty<=54){
                echo "2";
            }
            else if($punkty>=55 && $punkty<=69){
                echo "3";
            }
            else if($punkty>=70 && $punkty<=84){
                echo "4";
            }
            else if($punkty>=85 && $punkty<=94){
                echo "5";
            }
            else if($punkty>=95 && $punkty<=100){
                echo "6";
            }
        ?>
    </body>
</html>