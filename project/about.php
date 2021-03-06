<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <?php
  // Inhalt des Files inkludieren ('reinladen')
  include 'components.php';

  // Stylesheet ohne caching platzieren
  getStylesheet(); 
  ?>
</head>

<body>

  <?php
    // Funktionsaufruf
    getNav();
  ?>

  <main class="container">
    <section class="content-section">
      <h1>About</h1>
    </section>
  </main>

  <?php getFooter(); ?>

</body>

</html>