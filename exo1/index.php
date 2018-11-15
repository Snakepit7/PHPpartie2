<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo1</title>
  </head>
  <body>
    <?php
        $age = rand(1,90);
        
        if ($age >= 18) {
            echo 'Vous êtes majeur. Vous avez '.$age;
        } else {
           echo 'Vous êtes mineur. Vous avez '.$age;
        }
        
    ?>
  </body>
</html>