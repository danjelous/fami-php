<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 101</title>

  <!-- Kann CSS ganz normal einbinden -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>PHP 101</h1>

  <!-- PHP-Tags mit Spitze Klammer + ?php öffnen -->
  <?php
  // echo gibt mir einen String aus - vgl. console.log in JS
  echo "Hello from PHP!";

  // Dies ist aber nur ein string, kein span / p / h1 -Tag o.ä.!
  echo "<p>I'm a PHP tag!</p>";
  ?>
  <!-- Und mit ?> wieder schließen -->

  <!-- Kann dann wieder ganz normal mein HTML weiterschreiben -->
  <section>
    <h2>Toller Teasertext</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quidem quo perspiciatis magni dolor! Exercitationem repellendus, dolore neque nobis non tempore illo quisquam et error quis asperiores libero rem molestias?</p>
  </section>

  <?php
  echo '<h2>Und hier ein weiterer PHP-Part</h2>';
  echo '<p>Kann ich soviel mal machen wie ich will!</p>';

  // Variablen in PHP beginnen mit $
  $myVariable = 'PHP Variable!';

  // Strings mit einem Punkt verbinden, nicht mit einem + (wie in JS)
  echo 'Ausgabe einer Variable: ' . $myVariable . '!';

  // for-Schleifen: HTML generieren
  echo '<h3>Loops</h3>';
  echo '<ul>';
  for ($i = 0; $i < 10; $i++) {
    echo '<li>' . $i . '</li>';
  }
  echo '</ul>';

  // Conditionals - Bedingte HTML-Ausgabe
  echo '<h3>Bedingte Ausgaben (if/else)</h3>';

  $isUserLoggedIn = true;
  if ($isUserLoggedIn) {
    echo '<a href="#">Link zu User-Dashboard</a>';
  } else {
    echo '<a href="#">Jetzt einloggen</a>';
  }

  // Funktionen
  echo '<h3>Funktionen</h3>';

  // Funktion definieren
  function renderSomething()
  {
    echo '<p>Hello from renderSomething function!</p>';
  }

  // beliebig oft ausführen
  renderSomething();
  renderSomething();
  renderSomething();

  // Mit Parameter
  function multipy($a, $b)
  {
    return $a * $b;
  }

  echo multipy(2, 10); // Output ohen HTML-Tags
  echo '<p>' . multipy(4, 4) . '</p>'; // Richtig mit Tags

  // Strings
  echo '<h3>String\'s und Funktionen</h3>';
  $myString = 'bamsdKAJSHmMo123 asdfv dsf     ';

  /**
   * Mehrzeilige Kommentare gleich wie in JS
   * 
   * In PHP gibt es keine Methoden auf den jeweiligen Datentypen
   * wie string.toLowerCase(). Stattdessen bietet PHP eigenständige
   * Funktionen an, welche das gleiche machen (Jedoch als Funktion,
   * nicht als Methode)
   */
  echo strtolower($myString) . '<br>';
  echo strtoupper($myString) . '<br>';

  // Suchen
  echo 'String enthält Leerzeichen: ' . str_contains($myString, ' ') . '<br>';
  
  // indexOf Equivalent
  echo 'String enthält "2" an Stelle: ' . strpos($myString, '2') . '<br>';
  ?>

  <!-- JS kann auch ganz normal eingebunden werden -->
  <script src="main.js"></script>
</body>

</html>