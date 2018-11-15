<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo3</title>
  </head>
  <body>
    <?php
        $age = rand ('0','99');
        $gender = ['homme','femme'];
        $gender = $gender[rand(0, count($gender) - 1)];
        if ($age >=18 and $gender ==='homme') {
           echo 'Vous êtes un homme et vous êtes majeur';
        } elseif ($age >=18 and $gender === 'femme') {
            echo 'Vous êtes une femme et vous êtes majeur';
        } elseif ($age <18 and $gender ==='homme') {
            echo 'Vous êtes un homme et vous êtes mineur';
        } elseif ($age <18 and $gender ==='femme') {
            echo 'Vous êtes une femme et vous êtes mineur';
        }
    ?>
  </body>
</html>