<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change

        // If there is not title, use the link URL as a title
        if ($linkName == "")
        {
            echo '<h2>'.$linkURL.'</h2>';
        }
        // If there is a title output the title using h2
        else
        {
            echo '<h2>'.$linkName.'</h2>';
        }

        // If there is an image, output the image
        // If there is not image, output nothing
        if ($linkImage)
        {
            echo '<img src="'.$linkImage.'" width="200">';
        }

        // If there is a description, output the description
        if ($linkDescription)
        {
            echo '<p>'.$linkDescription.'</p>';
        }

        // If there is a link output the URL and make it clickable
        if ($linkURL)
        {

            // If there is a title use the title as the link
            if ($linkName)
            {
                echo '<p><a href="'.$linkURL.'">Visit '.$linkName.'</a></p>';
            }

            // If there is no name, use the URL
            else
            {
                echo '<p><a href="'.$linkURL.'">Visit '.$linkURL.'</a></p>';
            }

        }

        ?>

    </body>
</html>
