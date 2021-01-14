<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
  

  <?php

$link = mysqli_connect("localhost", "root", "root", "pokedex");

  if (!$link) {

    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;

    echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;

    echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  $resultat = $link->query("SELECT id,identifier,height,weight,base_experience FROM pokemon");
  if ($resultat) {
    # code...
    while ($row = mysqli_fetch_array($resultat, MYSQLI_ASSOC)) 
    {
      # code...
      echo "<h1>My Pokedex</h1>";
      echo "there are pokemons from the database";
echo "<table>";
  echo "<thead>";
      echo "<tr>";
        echo "<th>Sprite<th>";
        echo "<th>ID<th>";
        echo "<th>Name<th>";
        echo "<th>Height<th>";
        echo "<th>Weight<th>";
        echo "<th>Base exp<th>";
      echo "</tr>"
  echo "</thead>";
  echo "<tbody>";
      echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['identifier'] . "</td>";
        echo "<td>" . $row['height'] . "</td>";
        echo "<td>" . $row['weight'] . "</td>";
        echo "<td>" . $row['base_experience'] . "</td>";
      echo "</tr>";
  echo "</tbody>";
echo "</table>";
    }
  }

  ?>
  
