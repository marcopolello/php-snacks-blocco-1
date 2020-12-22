<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    /*
    REPO: php-snacks-blocco-1
    GOAL:
    Passare come parametri GET name, mail e age e
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.
    Se tutto è ok stampare "Accesso riuscito", altrimenti
    "Accesso negato"

    URL => http://localhost/2EXPHP/?name=marco&mail=marco@mail.it&age=26
    */

    // variabili
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    ?>

  </head>
  <body>

    <?php echo $name ?> <br>
    <?php echo $mail ?> <br>
    <?php echo $age; ?> <br>

    <?php

      if ((strlen($name) >= 3) && (strpos($mail, '@') !== false) && (strpos($mail, '.') !== false) && (is_numeric($age))) {
        echo "Accesso riuscito";
      } else {
        echo "Accesso negato";
      }

      /*
      if (strlen($name) >= 3) {
        echo "Accesso riuscito";
      } else{
        echo "Accesso negato";
      };

      if ( (strpos($mail, '@') !== false) && (strpos($mail, '.') !== false) ){
        echo "Accesso riuscito";
      } else{
        echo "Accesso negato";
      };

      if (is_numeric($age)) {
        echo "Accesso riuscito";
      } else{
        echo "Accesso negato";
      }

      */
    ?>

  </body>
</html>
