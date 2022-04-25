<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  // Inhalt des Files inkludieren ('reinladen')
  include 'components.php';

  // Funktionsaufruf
  getNav();
  ?>

  <main class="container">
    <section class="content-section">
      <h1>Startseite</h1>
    </section>

    <section class="content-section">
      <h2>Important stuff</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facilis quibusdam, hic deserunt vero corporis, tempora alias suscipit tempore mollitia at placeat illum. Quos sapiente corrupti est, reiciendis quae dolores.</p>
    </section>
  </main>

  <?php getFooter(); ?>

</body>

</html>