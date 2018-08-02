<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jepangin</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/kanji-level-popup.css">
    <link rel="stylesheet" href="css/flashcard-popup.css">
    <link rel="stylesheet" href="css/costum-color.css">
  </head>
  <body>
    <header>
      <div class="brand clearfix">
        <div class="container">
          <a href="#">
            <!-- JEPANGIN -->
            <img src="assets/jepangin-logo.png" alt="JEPANGIN">
          </a>
        </div>
      </div>
      <nav>
        <div class="container clearfix">
          <ul>
            <li><a href="katakana.php" class="<?php if(stripos($_SERVER['REQUEST_URI'], 'katakana.php')){ echo 'katakana-color-active'; } ?>">カ</a></li>
            <li><a href="hiragana.php" class="<?php if(stripos($_SERVER['REQUEST_URI'], 'hiragana.php')){ echo 'hiragana-color-active'; } ?>">ひ</a></li>
            <li><a href="kanji.php" class="<?php if(stripos($_SERVER['REQUEST_URI'], 'kanji.php') || stripos($_SERVER['REQUEST_URI'], 'kanji-level.php')){ echo 'kanji-color-active'; } ?>">漢</a></li>
            <li><a href="flashcard.php" class="<?php if(stripos($_SERVER['REQUEST_URI'], 'flashcard.php')){ echo 'flashcard-color-active'; } ?>">Flash Card</a></li>
          </ul>
        </div>
      </nav>
    </header>
