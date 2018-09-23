<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<!-- My git repository: https://github.com/kenny388/IAT352-A1 -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Entry Successful</title>
    <link rel="stylesheet" href="css/processingEntry.css">
    <link rel="stylesheet" href="css/headerFooter.css">
  </head>
  <body>
    <!-- page content -->
    <!-- Included header with php -->
    <?php
    include 'header.php';
    ?>
    <!-- Simple layout telling the users their entries are successful and provide the link to it -->
    <div class="holder">
      <h2 class="validatingText">Recipe Entry Successful!</h2>
      <hr>
      <p>Here is the link to your recipe page : </p>
      <!-- Making the link with the size of recipes array - 1, this gives the newest recipe identifier-->
      <a href="<?php
        $file_lines = file('recipes/kenny_cheung_recipes.txt');
        $arraySize = sizeof($file_lines) - 1;
        echo 'recipe-details.php?keyNum=';
        echo $arraySize;
        echo '';
      ?>">Link</a>
    </div>

    <!-- Included footer with php -->
    <?php
    include 'footer.php';
    ?>

  </body>
</html>
