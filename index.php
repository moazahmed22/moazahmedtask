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
<form>

<div class="calc">
<input type="text" name="fnum" placeholder="First number">
<input type="text" name="snum" placeholder="Second number">
<br>
<select name="op">
    <option value="none">none</option>
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
</select>
<button type="submit" name="submit" value="submit">Calculate</button>
<br>
</form></div>
<?php
echo "The Answer is: ";

function calculator()
    {
        if(isset($_GET['submit']))
        {
            $b = $_GET['fnum'];
            $c =$_GET['snum'];
            $op = $_GET["op"];
            switch($op)
            {
                case "none":
                    echo "please use an operation";
                    break;                        
                case "add":
                    echo $b+$c;
                    break ;
                
                case "subtract":
                    echo $b-$c;
                    break ;
                
                case "multiply":
                    echo $b*$c;
                    break ;     
                case "divide":
                    echo $b/$c;
                    break ;         
            }
        }

    }

 calculator();  

?>




    
<script src="assets/index.js"></script>
</body>
</html>