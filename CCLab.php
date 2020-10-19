<!DOCTYPE html>
<html>
    <head>
    <style>
            *{
                margin: 0;
                box-sizing: border-box;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            
            li {
                float: left;
            }
            
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            
            li a:hover {
                background-color: #111;
            }

            #triangle{
                margin-top: 3%;
                
            }
            
        </style>

    </head>
    <body>
        <ul>
            <li><a href="CCLab.php">Triangle</a></li>
            <li><a href="Rect.php">Rectangle</a></li>
            <li><a href="square.php">Square</a></li>
        </ul>
        <center>
        <div id="triangle">
        <h1>Area of Triangle</h1>
        <img src="https://www.mathsisfun.com/geometry/images/triangle-b-h.svg" style="margin-top: 3%;">
         </div>
         <div>
             <br> <br>
             <form action="CCLab.php" method="get">
             <h4>Height</h4>
             <input type="text" name="height" placeholder="Enter Height"><br><br>
             <h4>Base</h4>
             <input type="text" name="base" placeholder="Enter Base"><br><br>
             <input type = "Submit" name="submit"><br>
             <?php

            if(isset($_GET["submit"])){
            $h = $_GET["height"]; 
            $b = $_GET["base"]; 
            $R = $h * $b;
            echo("<br><h4>Result</h4>");
            echo($R/2);}
            ?>
         </div>
        </center>

    </body>
</html>