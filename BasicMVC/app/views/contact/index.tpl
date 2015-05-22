<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
    </head>
    <body>
     
        <?php include HOME . DS . 'includes' . DS . 'menu.inc.php'; ?>
         
        <h1><?php echo $title; ?></h1>
         
        <?php 
        if (isset($errors)) 
        {
            echo '<ul>';
            foreach ($errors as $e)
            {
                echo '<li>' . $e . '</li>';
            }
            echo '</ul>';
        } 
         
        if (isset($saveError))
        {
            echo "<h2>Error saving data. Please try again.</h2>" . $saveError;
        }
        ?>
         
        <form action="/contact/save" method="post">
             
            <p>
                <label for="first_name">Name:</label>
                <input value="<?php if(isset($formData)) echo $formData['_name']; ?>" type="text" id="name" name="name" />
            </p>
             
            <p>
                <label for="email">E-mail:</label>
                <input value="<?php if(isset($formData)) echo $formData['email']; ?>" type="text" id="email" name="email" />
            </p>
             
            <input type="submit" name="contactFormSubmit" value="Send" />
        </form>
         
    </body>
</html>