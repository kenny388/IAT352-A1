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

      $ingredientQuantity0 = "";
      $ingredientQuantity1 = "";
      $ingredientQuantity2 = "";
      $ingredientQuantity3 = "";
      $ingredientQuantity4 = "";
      $ingredientQuantity5 = "";
      $ingredientQuantity6 = "";
      $ingredientQuantity7 = "";
      $ingredientQuantity8 = "";
      $ingredientQuantity9 = "";

      $tags = "";

      //Booleans to see if value OK
      $recipeTitleOK = false;
      $relatedLinkOK = false;
      $categoryOK = false;

      $descriptionOK = false;

      $prepTimeValueOK = false;
      $prepTimeUnitOK = false;

      $cookTimeValueOK = false;
      $cookTimeUnitOK = false;

      $servingsOK = false;

      $difficultyOK = false;

      $allCompleteOK = false;

      $ingredientQuantity0OK = false;
      $ingredientQuantity1OK = false;
      $ingredientQuantity2OK = false;
      $ingredientQuantity3OK = false;
      $ingredientQuantity4OK = false;
      $ingredientQuantity5OK = false;
      $ingredientQuantity6OK = false;
      $ingredientQuantity7OK = false;
      $ingredientQuantity8OK = false;
      $ingredientQuantity9OK = false;

      $tagsOK = "";

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
            }

        if (!empty($_POST["description"])) {
                $description = $_POST["description"];
                echo "<input type=\"hidden\" name=\"description\" value=\"$description\">";
                $descriptionOK = true;
            } else {
                $description = "Please Fill In The Descriptions";
                $descriptionOK = false;
                echo '<input type="hidden" name="descriptionOK" value = "false">';
            }

        if (!empty($_POST["prepTimeValue"])) {
          $prepTimeValue = $_POST["prepTimeValue"];
          if (is_numeric($prepTimeValue)) {
            echo "<input type=\"hidden\" name=\"prepTimeValue\" value=\"$prepTimeValue\">";
            $prepTimeValueOK = true;
          } else {
            $prepTimeValue = "Please Fill In The Preparation Time";
            $prepTimeValueOK = false;
            echo "<input type=\"hidden\" name=\"prepTimeValue\" value=\"Numeric Value Required\">";
            echo '<input type="hidden" name="prepTimeValueOK" value = "false">';
          }
        } else {
          $prepTimeValue = "Please Fill In The Preparation Time";
          $prepTimeValueOK = false;
          echo "<input type=\"hidden\" name=\"prepTimeValue\" value=\"Please Fill In Missing Value\">";
          echo '<input type="hidden" name="prepTimeValueOK" value = "false">';
        }

        if (!empty($_POST["prepTimeUnit"])) {
                $prepTimeUnit = $_POST["prepTimeUnit"];
                echo "<input type=\"hidden\" name=\"prepTimeUnit\" value=\"$prepTimeUnit\">";
                $prepTimeUnitOK = true;
            }

        if (!empty($_POST["cookTimeValue"])) {
          $cookTimeValue = $_POST["cookTimeValue"];
          if (is_numeric($cookTimeValue)) {
            echo "<input type=\"hidden\" name=\"cookTimeValue\" value=\"$cookTimeValue\">";
            $cookTimeValueOK = true;
          } else {
            $cookTimeValue = "Please Fill In The Cook Time";
            $cookTimeValueOK = false;
            echo "<input type=\"hidden\" name=\"cookTimeValue\" value=\"Numeric Value Required\">";
            echo '<input type="hidden" name="cookTimeValueOK" value = "false">';
          }
        } else {
          $cookTimeValue = "Please Fill In The Cook Time";
          $cookTimeValueOK = false;
          echo "<input type=\"hidden\" name=\"cookTimeValue\" value=\"Please Fill In Missing Value\">";
          echo '<input type="hidden" name="cookTimeValueOK" value = "false">';
        }

        if (!empty($_POST["cookTimeUnit"])) {
                $cookTimeUnit = $_POST["cookTimeUnit"];
                echo "<input type=\"hidden\" name=\"cookTimeUnit\" value=\"$cookTimeUnit\">";
                $cookTimeUnitOK = true;
            }

        if (!empty($_POST["servings"])) {
                $servings = $_POST["servings"];
                echo "<input type=\"hidden\" name=\"servings\" value=\"$servings\">";
                $servingsOK = true;
            }

        if (!empty($_POST["difficulty"])) {
                $difficulty = $_POST["difficulty"];
                echo "<input type=\"hidden\" name=\"difficulty\" value=\"$difficulty\">";
                $difficultyOK = true;
            }

        //Original Ingredient0 attributes:
        //Will try to use for loop :
        // if (!empty($_POST["ingredientQuantity0"])) {
        //         $ingredientQuantity0 = $_POST["ingredientQuantity0"];
        //         echo "<input type=\"hidden\" name=\"ingredientQuantity0\" value=\"$ingredientQuantity0\">";
        //         $ingredientQuantity0OK = true;
        //     }
        //
        // if (!empty($_POST["ingredientUnit0"])) {
        //         $ingredientUnit0 = $_POST["ingredientUnit0"];
        //         echo "<input type=\"hidden\" name=\"ingredientUnit0\" value=\"$ingredientUnit0\">";
        //         $ingredientUnit0OK = true;
        //     }
        //
        // if (!empty($_POST["ingredientName0"])) {
        //         $ingredientName0 = $_POST["ingredientName0"];
        //         echo "<input type=\"hidden\" name=\"ingredientName0\" value=\"$ingredientName0\">";
        //         $ingredientName0OK = true;
        //     }

        //It was a success, I gave up and wrote 200 lines of code repeating this block,
        //But later I researched a little bit more and it was a successfully
        //Its mainly the problem of  ${"string" . $i} < If i knew I can use this, then it would be ok
        $ingredientsAmount = 10;
        for ($i = 0; $i < $ingredientsAmount; $i++) {
        if (!empty($_POST["ingredientQuantity" . $i . ""])) {
                ${"ingredientQuantity" . $i} = $_POST["ingredientQuantity" . $i . ""];
                echo '<input type="hidden" name="ingredientQuantity' . $i . '" value="' . ${"ingredientQuantity" . $i} . '">';
                ${'ingredientQuantity' . $i . 'OK'} = true;
            }

        if (!empty($_POST["ingredientUnit" . $i . ""])) {
                ${"ingredientUnit" . $i} = $_POST["ingredientUnit" . $i . ""];
                echo '<input type="hidden" name="ingredientUnit' . $i . '" value="' . ${"ingredientUnit" . $i} . '">';
                ${'ingredientUnit' . $i . 'OK'} = true;
            }

        if (!empty($_POST["ingredientName" . $i . ""])) {
                ${"ingredientName" . $i} = $_POST["ingredientName" . $i . ""];
                echo '<input type="hidden" name="ingredientName' . $i . '" value="' . ${"ingredientName" . $i} . '">';
                ${'ingredientName' . $i . 'OK'} = true;
            }
        }

        //tags
        if (!empty($_POST["tags"])) {
                $tags = $_POST["tags"];
                echo "<input type=\"hidden\" name=\"tags\" value=\"$tags\">";
                $tagsOK = true;
            }




// echo '<input type="hidden" name="submit" value = "submit">';

      }

      // header('Location: add-recipe.php');
			// exit;



      // echo '<input type="Submit" name="Submit" value = "submit">';
echo "</form>";

//All complete if all the fields are ok
if ($recipeTitleOK && $relatedLinkOK && $categoryOK && $descriptionOK && $prepTimeValueOK && $prepTimeUnitOK && $cookTimeValueOK && $cookTimeUnitOK && $servingsOK && $difficultyOK) {
  $allCompleteOK = true;
}

//If all complete, input into txt File and redirects to all-recipe page
if ($allCompleteOK) {
  //first save the information to the file and then
  //redirect to the page you want to display
  header('Location: all-recipes.php');
  exit;
}

    ?>

    <script type="text/javascript">
        document.getElementById('formAuto').submit(); // SUBMIT FORM
    </script>


  </body>
</html>
