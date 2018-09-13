<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="css/processingEntry.css">
  </head>
  <body>
    <!-- page content -->
    <div class="holder">
      <h2 class="validatingText">Validating Entries...</h2>
      <hr>
      <p>Please do not close this page, the validation process might take a while</p>
    </div>


    <?php
      $recipeTitle = "";
      $relatedLink = "";
      $category = "";

      $description = "";

      $prepTimeValue = "";
      $prepTimeUnit = "";

      $cookTimeValue = "";
      $cookTimeUnit = "";

      $servings = "";

      $difficulty = "";

      if (isset($_POST["submit"])) {
        // Form has been submitted successfully
        if (!empty($_POST["recipeTitle"])) {
                $recipeTitle = $_POST["recipeTitle"];
                echo '<input type="hidden" name="recipeTitle" value="$recipeTitle">';
            } else {
                $recipeTitle = "Recipe Name Is Required";
            }


      }


    ?>


  </body>
</html>
