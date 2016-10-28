<?php
include "../inc/connection.php";

require_once '../vendor/autoload.php';
  $faker = Faker\Factory::create();

  // On peut modifier un ou plusieurs du php ini via notre script php
  @ini_set('max_execution_time', 300);

  echo "<h1>Cinq articles generés<h1> ";
  for ($i=0; $i <5 ; $i++) {
        $connexion->query("INSERT INTO article(titre, contenu, author, image, email, ville) VALUES('".$faker->sentence()."','".$faker->paragraph()."','".$faker->name."','".$faker->imageUrl(150, 150, 'cats')."','".$faker->freeEmail."','".$faker->city."')");
      }

 ?>
 <form>
   <input type="button" value="Retour" onclick="history.go(-1)">
 </form>
