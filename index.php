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
    <base target="_blank">
    <link rel="icon" type="image/png" href="./desktop-icon.png" />
    <style>
      body {
        background-image: url("wallpaper/GLaDOS - For Science.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        background-color: black;
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: small;
        text-decoration: none;
      }
      .grid-container {
        display: inline-grid;
        grid-template-columns: 80px 80px 80px;
        column-gap: 20px;
        row-gap: 20px;
        height: 100%;
      }
      .grid-item {
        text-align: center;
      }
      .icon {
        width: 48px;
        height: 48px;
        cursor: pointer;
      }
      .icon-text {
        color: white;
        cursor: pointer;
      }
    </style>
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

    <script>
      $('.icon, .icon-text').click(event => {
        dest = $(event.target).parent()[0].dataset.url;
        window.open(dest, "_blank");        
      });
    </script>
  </body>
</html>
