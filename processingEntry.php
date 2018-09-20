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


        //Try Failed, Return to copying this block of code 10 times
        //Fail by not being able to handle variable name   [   "$ingredientUnit" + $i + "OK"  ]

        //Ten Times:

        //0
        if (!empty($_POST["ingredientQuantity0"])) {
                $ingredientQuantity0 = $_POST["ingredientQuantity0"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity0\" value=\"$ingredientQuantity0\">";
                $ingredientQuantity0OK = true;
            }

        if (!empty($_POST["ingredientUnit0"])) {
                $ingredientUnit0 = $_POST["ingredientUnit0"];
                echo "<input type=\"hidden\" name=\"ingredientUnit0\" value=\"$ingredientUnit0\">";
                $ingredientUnit0OK = true;
            }

        if (!empty($_POST["ingredientName0"])) {
                $ingredientName0 = $_POST["ingredientName0"];
                echo "<input type=\"hidden\" name=\"ingredientName0\" value=\"$ingredientName0\">";
                $ingredientName0OK = true;
            }

        //1
        if (!empty($_POST["ingredientQuantity1"])) {
                $ingredientQuantity1 = $_POST["ingredientQuantity1"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity1\" value=\"$ingredientQuantity1\">";
                $ingredientQuantity1OK = true;
            }

        if (!empty($_POST["ingredientUnit1"])) {
                $ingredientUnit1 = $_POST["ingredientUnit1"];
                echo "<input type=\"hidden\" name=\"ingredientUnit1\" value=\"$ingredientUnit1\">";
                $ingredientUnit1OK = true;
            }

        if (!empty($_POST["ingredientName1"])) {
                $ingredientName1 = $_POST["ingredientName1"];
                echo "<input type=\"hidden\" name=\"ingredientName1\" value=\"$ingredientName1\">";
                $ingredientName1OK = true;
            }

        //2
        if (!empty($_POST["ingredientQuantity2"])) {
                $ingredientQuantity2 = $_POST["ingredientQuantity2"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity2\" value=\"$ingredientQuantity2\">";
                $ingredientQuantity2OK = true;
            }

        if (!empty($_POST["ingredientUnit2"])) {
                $ingredientUnit2 = $_POST["ingredientUnit2"];
                echo "<input type=\"hidden\" name=\"ingredientUnit2\" value=\"$ingredientUnit2\">";
                $ingredientUnit2OK = true;
            }

        if (!empty($_POST["ingredientName2"])) {
                $ingredientName2 = $_POST["ingredientName2"];
                echo "<input type=\"hidden\" name=\"ingredientName2\" value=\"$ingredientName2\">";
                $ingredientName2OK = true;
            }

        //3
        if (!empty($_POST["ingredientQuantity3"])) {
                $ingredientQuantity3 = $_POST["ingredientQuantity3"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity3\" value=\"$ingredientQuantity3\">";
                $ingredientQuantity3OK = true;
            }

        if (!empty($_POST["ingredientUnit3"])) {
                $ingredientUnit3 = $_POST["ingredientUnit3"];
                echo "<input type=\"hidden\" name=\"ingredientUnit3\" value=\"$ingredientUnit3\">";
                $ingredientUnit3OK = true;
            }

        if (!empty($_POST["ingredientName3"])) {
                $ingredientName3 = $_POST["ingredientName3"];
                echo "<input type=\"hidden\" name=\"ingredientName3\" value=\"$ingredientName3\">";
                $ingredientName3OK = true;
            }

        //4
        if (!empty($_POST["ingredientQuantity4"])) {
                $ingredientQuantity4 = $_POST["ingredientQuantity4"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity4\" value=\"$ingredientQuantity4\">";
                $ingredientQuantity4OK = true;
            }

        if (!empty($_POST["ingredientUnit4"])) {
                $ingredientUnit4 = $_POST["ingredientUnit4"];
                echo "<input type=\"hidden\" name=\"ingredientUnit4\" value=\"$ingredientUnit4\">";
                $ingredientUnit4OK = true;
            }

        if (!empty($_POST["ingredientName4"])) {
                $ingredientName4 = $_POST["ingredientName4"];
                echo "<input type=\"hidden\" name=\"ingredientName4\" value=\"$ingredientName4\">";
                $ingredientName4OK = true;
            }

        //5
        if (!empty($_POST["ingredientQuantity5"])) {
                $ingredientQuantity5 = $_POST["ingredientQuantity5"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity5\" value=\"$ingredientQuantity5\">";
                $ingredientQuantity5OK = true;
            }

        if (!empty($_POST["ingredientUnit5"])) {
                $ingredientUnit5 = $_POST["ingredientUnit5"];
                echo "<input type=\"hidden\" name=\"ingredientUnit5\" value=\"$ingredientUnit5\">";
                $ingredientUnit5OK = true;
            }

        if (!empty($_POST["ingredientName5"])) {
                $ingredientName5 = $_POST["ingredientName5"];
                echo "<input type=\"hidden\" name=\"ingredientName5\" value=\"$ingredientName5\">";
                $ingredientName5OK = true;
            }

        //6
        if (!empty($_POST["ingredientQuantity6"])) {
                $ingredientQuantity6 = $_POST["ingredientQuantity6"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity6\" value=\"$ingredientQuantity6\">";
                $ingredientQuantity6OK = true;
            }

        if (!empty($_POST["ingredientUnit6"])) {
                $ingredientUnit6 = $_POST["ingredientUnit6"];
                echo "<input type=\"hidden\" name=\"ingredientUnit6\" value=\"$ingredientUnit6\">";
                $ingredientUnit6OK = true;
            }

        if (!empty($_POST["ingredientName6"])) {
                $ingredientName6 = $_POST["ingredientName6"];
                echo "<input type=\"hidden\" name=\"ingredientName6\" value=\"$ingredientName6\">";
                $ingredientName6OK = true;
            }

        //7
        if (!empty($_POST["ingredientQuantity7"])) {
                $ingredientQuantity7 = $_POST["ingredientQuantity7"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity7\" value=\"$ingredientQuantity7\">";
                $ingredientQuantity7OK = true;
            }

        if (!empty($_POST["ingredientUnit7"])) {
                $ingredientUnit7 = $_POST["ingredientUnit7"];
                echo "<input type=\"hidden\" name=\"ingredientUnit7\" value=\"$ingredientUnit7\">";
                $ingredientUnit7OK = true;
            }

        if (!empty($_POST["ingredientName7"])) {
                $ingredientName7 = $_POST["ingredientName7"];
                echo "<input type=\"hidden\" name=\"ingredientName7\" value=\"$ingredientName7\">";
                $ingredientName7OK = true;
            }

        //8
        if (!empty($_POST["ingredientQuantity8"])) {
                $ingredientQuantity8 = $_POST["ingredientQuantity8"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity8\" value=\"$ingredientQuantity8\">";
                $ingredientQuantity8OK = true;
            }

        if (!empty($_POST["ingredientUnit8"])) {
                $ingredientUnit8 = $_POST["ingredientUnit8"];
                echo "<input type=\"hidden\" name=\"ingredientUnit8\" value=\"$ingredientUnit8\">";
                $ingredientUnit8OK = true;
            }

        if (!empty($_POST["ingredientName8"])) {
                $ingredientName8 = $_POST["ingredientName8"];
                echo "<input type=\"hidden\" name=\"ingredientName8\" value=\"$ingredientName8\">";
                $ingredientName8OK = true;
            }

        //9
        if (!empty($_POST["ingredientQuantity9"])) {
                $ingredientQuantity9 = $_POST["ingredientQuantity9"];
                echo "<input type=\"hidden\" name=\"ingredientQuantity9\" value=\"$ingredientQuantity9\">";
                $ingredientQuantity9OK = true;
            }

        if (!empty($_POST["ingredientUnit9"])) {
                $ingredientUnit9 = $_POST["ingredientUnit9"];
                echo "<input type=\"hidden\" name=\"ingredientUnit9\" value=\"$ingredientUnit9\">";
                $ingredientUnit9OK = true;
            }

        if (!empty($_POST["ingredientName9"])) {
                $ingredientName9 = $_POST["ingredientName9"];
                echo "<input type=\"hidden\" name=\"ingredientName9\" value=\"$ingredientName9\">";
                $ingredientName9OK = true;
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
    ?>

    <script type="text/javascript">
        document.getElementById('formAuto').submit(); // SUBMIT FORM
    </script>


  </body>
</html>
