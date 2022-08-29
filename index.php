<!DOCTYPE html>
<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  $links = json_decode(file_get_contents("links.json"), true);
?>
<html>
  <head>
    <title>My Desktop</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/desktop.js"></script>
    <base target="_blank">
    <link rel="icon" type="image/png" href="desktop-icon.png" />
    <style>
      :root {
        --icon-size: 48px;
        --cell-size: 80px;
        --display-height: 80vh;
        --display-width: 100vw;
        --wallpaper: url("../wallpaper/glados.jpg");
      }
    </style>
    <link rel="stylesheet" href="css/desktop.css">
  </head>
  
  <body>
    <div class="grid-container">
<?php foreach($links as $item): ?>
      <div class='grid-item' data-url='<?= $item["url"]; ?>'>
        <img class='icon' src='<?= $item["icon"]; ?>'/><br />
        <div class='icon-text'><?= $item["name"]; ?></div>
      </div>
<?php endforeach; ?>
    </div>

    <script>attachEvents();</script>
  </body>
</html>
