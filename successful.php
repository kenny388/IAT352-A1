<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Processing Entries</title>
    <link rel="stylesheet" href="css/processingEntry.css">
    <link rel="stylesheet" href="css/headerFooter.css">
  </head>
  <body>
    <!-- page content -->
    <?php
    include 'header.php';
    ?>
    <div class="holder">
      <h2 class="validatingText">Recipe Entry Successful!</h2>
      <hr>
      <p>Here is the link to your recipe page : </p>
      <a href="<?php
        $file_lines = file('recipes/kenny_cheung_recipes.txt');
        $arraySize = sizeof($file_lines) - 1;

        echo 'recipe-details.php?keyNum=';
        echo $arraySize;
        echo '';

      ?>">Link</a>
      <?php
        $file_lines = file('recipes/kenny_cheung_recipes.txt');
        $arraySize = sizeof($file_lines);

        echo 'recipe-details.php?keyNum="' . $arraySize . '"';

      ?>
    </div>

    <?php
    include 'footer.php';
    ?>

    <script type="text/javascript">
        document.getElementById('formAuto').submit(); // SUBMIT FORM
    </script>


  </body>
</html>
