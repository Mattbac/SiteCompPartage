<?php
include "connection.php";
//include "header.php";
  $faker = Faker\Factory::create();

  // On peut modifier un ou plusieurs du php ini via notre script php
  @ini_set('max_execution_time', 300);

  echo "<h1>Dix articles generés<h1> ";
  for ($i=0; $i <10 ; $i++) {
        $db->query("INSERT INTO article(titre, contenu, author, date, image, email, ville) VALUES('".$faker->sentence()."','".$faker->paragraph()."','".$faker->."','".$faker->image('img/',150, 150)."','".$faker->randomFloat(2, 0, 500)."','".$faker->randomElement($array = array ('tomate','pomme','cerise'))."')");
      }
  //include "footer.php";
 ?>
