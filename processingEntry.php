<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<!-- My git repository: https://github.com/kenny388/IAT352-A1 -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Processing Entries</title>
    <link rel="stylesheet" href="css/processingEntry.css">
    <link rel="stylesheet" href="css/headerFooter.css">
  </head>
  <body>
    <!-- page content -->
    <!-- Included header with php -->
    <?php
    include 'header.php';
    ?>
    <!-- Basic graphical layout contains only a title and a small text -->
    <div class="holder">
      <h2 class="validatingText">Validating Entries...</h2>
      <hr>
      <p>Please do not close this page, the validation process might take a while</p>
    </div>

    <!-- php to check the entries -->
    <?php
    //include footer
    include 'footer.php';

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

      $preparation = "";

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

      $preparationOK = false;

      $tagsOK = "";

      //First check if the form is submitted properly
      if (isset($_POST["submit"])) {
        // Form has been submitted successfully

        //Provide another form fill inside for going back to add-recipe page if the datas are not completed
        echo "<form action=\"add-recipe.php\" method=\"post\" id = \"formAuto\">";

        //Each field below contains:
        // a !empty() check if the field exists
        // a temporary variable to retireve the field value with $_POST
        // a hidden input form repeating the values with the same name back to the add-recipe page
        // a check with the "OK" boolean used for checking if the values are ok at the end
        // Exception handled when there is no data filled or data filled is in wrong range or type
        // In the case of data having problem
        // Set "OK" boolean equals to false, the temporary field changes to "data is required / data is in wrong format"
        // Repeating back the false "OK" boolean back the the add-recipe page
        // In some case, also repeating the temporary values hint to tell the user what kind of error happened
        //   eg. whether the value is not filled or just not in the correct type

        //Here is an example
        //Check if field exists
        if (!empty($_POST["recipeTitle"])) {
                //declaring and assigning the temporary field the value of the received data field
                $recipeTitle = $_POST["recipeTitle"];
                //repeating the value back with hidden input
                echo "<input type=\"hidden\" name=\"recipeTitle\" value=\"$recipeTitle\">";
                //Setting "OK" boolean to true
                $recipeTitleOK = true;
            //In case of data not exists
            } else {
                //This field is not sent back to add-recipe because the field is highlighted yellow, no need for the error message anymore
                $recipeTitle = "Recipe Name Is Required";
                // Setting the boolean "OK" to false
                $recipeTitleOK = false;
                //Sending the boolean to add-recipe page to communicate that the values received are not sufficient
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


        //Used for loop to loop through the ingredient list 10 times, with incrementing names containing $i
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
        // End of for-loop

        if (!empty($_POST["preparation"])) {
                $preparation = $_POST["preparation"];
                echo "<input type=\"hidden\" name=\"preparation\" value=\"$preparation\">";
                $preparationOK = true;
            }

        if (!empty($_POST["tags"])) {
                $tags = $_POST["tags"];
                echo "<input type=\"hidden\" name=\"tags\" value=\"$tags\">";
                $tagsOK = true;
            }
      }

echo "</form>";

//All complete if all the fields are ok
if ($recipeTitleOK && $relatedLinkOK && $categoryOK && $descriptionOK && $prepTimeValueOK && $prepTimeUnitOK && $cookTimeValueOK && $cookTimeUnitOK && $servingsOK && $difficultyOK) {
  $allCompleteOK = true;
}

//If all complete, input into txt File and redirects to all-recipe page
if ($allCompleteOK) {
  //Provide an incremental number identifier for each data
    $file_lines = file('recipes/kenny_cheung_recipes.txt');
    //size of array equals to the newest number available available in the recipe list
    $arraySize = sizeof($file_lines);
  //If first time filing in incremental number identifier, give 0
    if ($file_lines == "") {
      $arraySize = 0;
    }

  //Put all the information within a temporary string
  @$temp = $recipeTitle . ",_" . $relatedLink . ",_" . $category . ",_" . $description . ",_" . $prepTimeValue . ",_" . $prepTimeUnit . ",_" . $cookTimeValue . ",_" . $cookTimeUnit
   . ",_" . $servings . ",_" . $difficulty . ",_" .
   $ingredientQuantity0 . ",_" .  $ingredientUnit0 . ",_" . $ingredientName0 . ",_" .
   $ingredientQuantity1 . ",_" .  $ingredientUnit1 . ",_" . $ingredientName1 . ",_" .
   $ingredientQuantity2 . ",_" .  $ingredientUnit2 . ",_" . $ingredientName2 . ",_" .
   $ingredientQuantity3 . ",_" .  $ingredientUnit3 . ",_" . $ingredientName3 . ",_" .
   $ingredientQuantity4 . ",_" .  $ingredientUnit4 . ",_" . $ingredientName4 . ",_" .
   $ingredientQuantity5 . ",_" .  $ingredientUnit5 . ",_" . $ingredientName5 . ",_" .
   $ingredientQuantity6 . ",_" .  $ingredientUnit6 . ",_" . $ingredientName6 . ",_" .
   $ingredientQuantity7 . ",_" .  $ingredientUnit7 . ",_" . $ingredientName7 . ",_" .
   $ingredientQuantity8 . ",_" .  $ingredientUnit8 . ",_" . $ingredientName8 . ",_" .
   $ingredientQuantity9 . ",_" .  $ingredientUnit9 . ",_" . $ingredientName9 . ",_" .
   $preparation . ",_" .
   $tags. ",_" .
   $arraySize;

    //Force multiple lines into 1 line, and then giving a final ending \n tag for next recipe
    //If this is not used, user entered change line would mess up the 1-line structure of the txtfile
    $temp = str_replace(array("\n", "\r"), '', $temp);
    $temp = $temp . "\n";

    //Declaring the $file
    $file = 'recipes/kenny_cheung_recipes.txt';
    //Open, append and close at the same time, putting $temp in it as a new line
    file_put_contents($file, $temp, FILE_APPEND);

    //redirect to the page you want to display
    header('Location: all-recipes.php');
    //Exit, so that anything after will not run
    exit;
  }
    ?>

    <!-- Auto Form Submission if some data do not satisfy the requirements -->
    <!-- This place will be reached only if there is problem to the datas -->
    <script type="text/javascript">
        document.getElementById('formAuto').submit(); // SUBMIT FORM
    </script>


  </body>
</html>
