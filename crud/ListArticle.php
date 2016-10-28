<?php


  echo "<h1>Liste des articles<h1> ";
  $q = $connexion->query("SELECT * FROM article");
        $articles = $q->fetchAll();

foreach ($articles as $article) {
  echo "<h3>".$article['titre']."</h3>";

}




 ?>
