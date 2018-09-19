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
    //Fields
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

      //Booleans to see if value OK
      $recipeTitleOK = false;
      $relatedLinkOK = false;
      $categoryOK = false;

      $description = false;

      $prepTimeValue = false;
      $prepTimeUnit = false;

      $cookTimeValue = false;
      $cookTimeUnit = false;

      $servings = false;

      $difficulty = false;

      $allComplete = false;

      if (isset($_POST["submit"])) {
        // Form has been submitted successfully
        echo "<form action=\"add-recipe.php\" method=\"post\" id = \"formAuto\">";

        if (!empty($_POST["recipeTitle"])) {
                $recipeTitle = $_POST["recipeTitle"];
                echo "<input type=\"hidden\" name=\"recipeTitle\" value=\"$recipeTitle\">";
                $recipeTitleOK = true;
            } else {
                $recipeTitle = "Recipe Name Is Required";
                $recipeTitleOK = false;
                echo '<input type="hidden" name="recipeTitleOK" value = "false">';
            }

        if (!empty($_POST["relatedLink"])) {
                $relatedLink = $_POST["relatedLink"];
                echo "<input type=\"hidden\" name=\"relatedLink\" value=\"$relatedLink\">";
                $relatedLinkOK = true;
            } else {
                $relatedLink = "Related Link Is Required";
                $relatedLinkOK = false;
                echo '<input type="hidden" name="relatedLinkOK" value = "false">';
            }

        if (!empty($_POST["category"])) {
                $category = $_POST["category"];
                echo "<input type=\"hidden\" name=\"category\" value=\"$category\">";
                $categoryOK = true;
            } else {
                $category = "Category Needs to be chosen";
                $categoryOK = false;
                echo '<input type="hidden" name="categoryOK" value = "false">';
            }
// echo '<input type="hidden" name="submit" value = "submit">';

      }

      // header('Location: add-recipe.php');
			// exit;



      // echo '<input type="Submit" name="Submit" value = "submit">';
echo "</form>";
    ?>

    <script type="text/javascript">
        document.getElementById('formAuto').submit(); // SUBMIT FORM
    </script>


  </body>
</html>
