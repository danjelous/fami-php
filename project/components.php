<?php

// Funktionsdefinition
function getNav() {
  ?>

  <!-- Ab hier wieder HTML-Ausgabe -->
  <nav class="main-navbar">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
  </nav>
  <?php
}

function getFooter() {
  ?>

  <footer>
    <nav>
      <a href="siteNotice.php">Site Notice</a>
      <a href="privacy.php">Privacy</a>
    </nav>
  </footer>

  <?php
}