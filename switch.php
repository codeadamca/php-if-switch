<!doctype html>
<html>
    <head>
        <title>PHP Switches</title> 
    </head>
    <body>

        <h1>PHP Switches</h1> 

        <p>A switch is a very specific type of if statement. It can be used wen your decision is based on one variable and a list of options:</p>

        <?php

        $day = date('l');

        echo '<p>Today is '.$day.'!</p>';

        switch ($day) 
        {
          case "Monday":
            echo "Sounds like someone has a case of the Mondays!";
            break;
          case "Friday":
            echo "TFIG!";
            break;
          default:
            echo "Have a great day!";
            break;
        }

        ?>

    </body>
</html>
