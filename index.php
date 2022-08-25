<!DOCTYPE html>
<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>
<html>
  <head>
    <title>My Desktop</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./index.js"></script>
    <base target="_blank">
    <link rel="icon" type="image/png" href="./desktop-icon.png" />
    <style>
      :root {
        --icon-size: 48px;
        --cell-size: 80px;
        --display-height: 80vh;
        --display-width: 100vw;
        --wallpaper: url("wallpaper/GLaDOS - For Science.jpg");
      }
    </style>
    <link rel="stylesheet" href="./index.css">
  </head>
  
  <body>
    <div class="grid-container">
<?php
  $json = json_decode(file_get_contents("links.json"), true);
  foreach($json as $item) {
    print "      <div class='grid-item' data-url='{$item["url"]}'>\n";
    print "        <img class='icon' src='{$item["icon"]}'/><br />\n";
    print "        <div class='icon-text'>{$item["name"]}</div>\n";
    print "      </div>\n";
  }
?>
    </div>

    <script>attachEvents();</script>
  </body>
</html>
