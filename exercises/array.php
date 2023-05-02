<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



<?php
//!Skriv ett program i PHP som skriver ut alla element från en array av strängar. Arrayen ska kunna vara hur lång eller kort som helst och programmet ska fungera ändå. Utskriften ska vara snygg HTML som formatterar alla strängar som en numrerad punktlista.
//! Deklarera en array av strängar.

$strings = ['Sahra', 'Jasika', 'Tove L', 'Tove B'];

//! Skriv ut arrayen som en numrerad punktlista

echo '<ol>';
foreach ($strings as $string) {
    echo '<li>' . $string . '</li>';
}
echo '</ol>';
?>
</body>
</html>
