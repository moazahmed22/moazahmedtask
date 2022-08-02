<?php
function calculator()
    {
        $a=readline("enter the op: ");
        $b=(int)readline("enter the Fnum: ");
        $c=(int)readline("enter the Snum: ");

        switch($a)
                {
                    case "+":
                        echo $b+$c;
                        break ;
                    
                    case "-":
                        echo $b-$c;
                        break ;
                    
                    case "*":
                        echo $b*$c;
                        break ;     
                    case "/":
                        echo $b/$c;
                        break ;         
                }
    }

 calculator();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/index.css"/>
    <title>Web Skills</title>
</head>
<body>


    
<script src="assets/index.js"></script>
</body>
</html>