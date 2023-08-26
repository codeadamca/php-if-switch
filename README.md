# A Basic Introduction to PHP and If Statements

A basic example of using PHP if statements and switches.

This tutorial will review how to use if statements and switches to make decisions in PHP. Here is a basic sample of using an if statements to amke a decision.

```php
<?php 

$hour = date('24');

if ($hour < 12)
{
  echo 'Good morning!';
 }
 else
 {
   echo 'Good afternoon!';
 }

?>
```

This is an example of using a switch.

```php
<?php

$day = date('D');

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
```

## The End Goal

The `if.php` file includes three copies of four different varables (Codecademy, W3Schools, and MDN). The code will chose a random number (1, 2, or 3) and then chose a set of variables: Codecademy, W3Schools, or MDN. 

Similar to the variables and arrays examples, your code needs to output the four values. However, each time you refresh the page the data will change. Depending on the chosen random number some of the variables may be missing data. When you output the link data your PHP will need to confirm that the data exists before it outputs it. 

For example the following code checks to see if `$linkName` variable has a value before it outputs it.

```php
<?php

if ($linkName != "") 
{
  echo '<h2>'.$linkName.'</h2>';
}

?>
```

If a piece of data is missing, try to think of an alternative. For example if a title is missing, we could use the URL as the title. It's not as good as a title, but it's better than nothing. 

## Steps

1. Open up a new file and name it `if.php`.
2. Add the following code to the new PHP file:
    
    ```php
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
    
        $randomNumber = ceil(rand(1,3));
    
        echo '<p>The random number is '.$randomNumber.'.</p>';
    
        if ($randomNumber == 1)
        {
          $linkName = 'Codecademy';
          $linkURL = 'https://www.codecademy.com/';
          $linkImage = '';
          $linkDescription = 'Learn to code interactively, for free.';
        }
        elseif ($randomNumber == 2)
        {
          $linkName = '';
          $linkURL = 'https://www.w3schools.com/';
          $linkImage = 'w3schools.png';
          $linkDescription = 'W3Schools is optimized for learning, testing, and training.';
        }
        else
        {
          $linkName = 'Mozilla Developer Network';
          $linkURL = 'https://developer.mozilla.org';
          $linkImage = 'mozilla.png';
          $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';
        }
    
        // **************************************************
    
        echo '<h2>'.$linkName.'</h2>';
    
        ?>
    
      </body>
    </html>
    ```

    > Note: Do not edit the code between the stars. 

3. After the stars, add code that will display the four chosen variables using if statements to confirm that the data exists. Notice that some of the variables are purposely empty. 

    > Hint: Add each value from the variables one at a time. Test your PHP after each new line of PHP. 

> [More information on PHP if statements](https://www.php.net/manual/en/control-structures.if.php)

> Full tutorial URL:  
> https://codeadam.ca/learning/php-if-switch.html

***

## Repo Resources

* [Visual Studio Code](https://code.visualstudio.com/)
* [Filezilla](https://filezilla-project.org/) (or any FTP program)

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>
