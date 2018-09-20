<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="css/css.css">
    <!-- <script src="script.js"></script> -->


  </head>
  <body>
    <!-- page content -->
    <div class="holder">
      <div class="title">
        <div class="titleBox">
          <h2>The Basics</h2>
        </div>
        <div class="titleBox">
        </div>
      </div>

      <hr>

      <div class="form">

        <form action="processingEntry.php" method="post">

          <div class="container">
            <div class="firstBox" id="selectEnhancer">
            <label>Recipe Title: </label> <input type="text" name="recipeTitle" value = "<?php if(isset($_POST['recipeTitle'])) { $temp = $_POST["recipeTitle"]; echo $temp;}?>" <?php if(isset($_POST['recipeTitleOK'])) { print("style=\"background-color:Yellow;\"");}?>/> <br><br>
            <label>Related Link: </label> <input type="text" name="relatedLink" value = "<?php if(isset($_POST['relatedLink'])) { $temp = $_POST["relatedLink"]; echo $temp;}?>" <?php if(isset($_POST['relatedLinkOK'])) { print("style=\"background-color:Yellow;\"");}?>/> <br><br>
            <label>Category*:</label>
              <select name="category">
                <option value="appetizer" <?php if(!isset($_POST['category'])) { echo "selected"; } else if ($_POST['category'] == "appetizer") { echo "selected";}?>>Appetizer</option>
                <option value="entree" <?php if ($_POST['category'] == "entree") { echo "selected";}?>>Entree</option>
                <option value="dessert" <?php if ($_POST['category'] == "dessert") { echo "selected";}?>>Dessert</option>
                <option value="salad" <?php if ($_POST['category'] == "salad") { echo "selected";}?>>Salad</option>
                <option value="others" <?php if ($_POST['category'] == "others") { echo "selected";}?>>Others</option>
              </select>
            </div>

            <div class="secondBox">
              <label>Short Description: </label><br>
              <textarea name="description" rows="10" cols="45" <?php if(isset($_POST['descriptionOK'])) { print("style=\"background-color:Yellow;\"");}  ?>><?php if(isset($_POST["description"])) { $temp = $_POST["description"]; echo $temp;}?></textarea>
            </div>
          </div>

          <div class="container">
            <div class="firstBox">
              <label>Prep Time*:</label> <input type="text" name="prepTimeValue" value = "<?php if(isset($_POST['prepTimeValue'])) { $temp = $_POST["prepTimeValue"]; echo $temp;}?>" <?php if(isset($_POST['prepTimeValueOK'])) { print("style=\"background-color:Yellow;\"");}?>/>
                  <select name="prepTimeUnit">
                    <option value="minutes" <?php if(!isset($_POST['prepTimeUnit'])) { echo "selected"; } else if (isset($_POST['prepTimeUnit']) && $_POST['prepTimeUnit'] == "minutes") { echo "selected";}?>>Minutes</option>
                    <option value="hours" <?php if (isset($_POST['prepTimeUnit']) && $_POST['prepTimeUnit'] == "hours") { echo "selected";}?>>Hours</option>
                  </select>
            </div>
            <div class="secondBox">
              <label>Cook Time*:</label> <input type="text" name="cookTimeValue" value = "<?php if(isset($_POST['cookTimeValue'])) { $temp = $_POST["cookTimeValue"]; echo $temp;}?>" <?php if(isset($_POST['cookTimeValueOK'])) { print("style=\"background-color:Yellow;\"");}?>/>
                  <select name="cookTimeUnit">
                    <option value="minutes" <?php if(!isset($_POST['cookTimeUnit'])) { echo "selected"; } else if (isset($_POST['cookTimeUnit']) && $_POST['cookTimeUnit'] == "minutes") { echo "selected";}?>>Minutes</option>
                    <option value="hours" <?php if (isset($_POST['cookTimeUnit']) && $_POST['cookTimeUnit'] == "hours") { echo "selected";}?>>Hours</option>
                  </select>
            </div>
          </div>

          <div class="container">
            <div class="firstBox">
              <label <?php if (isset($_POST['submit'])) { echo "style=\"background-color:yellow;\""; } ?>>Servings:</label>
                <input type="radio" name="servings" value="1" <?php if (!isset($_POST['submit'])) { echo "checked=\"checked\""; } ?><?php if (isset($_POST['servings']) && $_POST['servings'] == "1") { echo "checked=\"checked\"";}?>/>1
                <input type="radio" name="servings" value="2" <?php if (isset($_POST['servings']) && $_POST['servings'] == "2") { echo "checked=\"checked\"";}?>/>2
                <input type="radio" name="servings" value="3" <?php if (isset($_POST['servings']) && $_POST['servings'] == "3") { echo "checked=\"checked\"";}?>/>3
                <input type="radio" name="servings" value="4" <?php if (isset($_POST['servings']) && $_POST['servings'] == "4") { echo "checked=\"checked\"";}?>/>4
                <input type="radio" name="servings" value="5" <?php if (isset($_POST['servings']) && $_POST['servings'] == "5") { echo "checked=\"checked\"";}?>/>5
                <input type="radio" name="servings" value="6+" <?php if (isset($_POST['servings']) && $_POST['servings'] == "6+") { echo "checked=\"checked\"";}?>/>6+
            </div>
            <div class="secondBox" id="selectEnhancer">
              <label>Difficulty:</label>
              <select name="difficulty">
                <option value="easy" <?php if (isset($_POST['difficulty']) && $_POST['difficulty'] == "easy") { echo "selected";}?>>Easy</option>
                <option value="intermediate" <?php if(!isset($_POST['difficulty'])) { echo "selected"; } else if (isset($_POST['difficulty']) && $_POST['difficulty'] == "intermediate") { echo "selected";}?>>Intermediate</option>
                <option value="difficult" <?php if (isset($_POST['difficulty']) && $_POST['difficulty'] == "difficult") { echo "selected";}?>>Difficult</option>
              </select>
            </div>
          </div>

          <br>

          <div class="title">
            <div class="titleBox">
              <h2>Ingredients</h2>
            </div>
            <div class="titleBox">
            </div>
          </div>

          <hr>
          <br>

  <div class="ingredients">
    <?php
    $ingredientsAmount = 10;
    for ($i = 0; $i < $ingredientsAmount; $i++) {
        echo '<input type="number" name="ingredientQuantity' . $i . '" min="1" max="100" step="1" placeholder="Quantity"';

        switch ($i) {
          case 0:
          if (isset($_POST['ingredientQuantity0']))
            echo 'value = "' . $_POST['ingredientQuantity0'] . '"';
          break;
          case 1:
          if (isset($_POST['ingredientQuantity1']))
            echo 'value = "' . $_POST['ingredientQuantity1'] . '"';
          break;
          case 2:
          if (isset($_POST['ingredientQuantity2']))
            echo 'value = "' . $_POST['ingredientQuantity2'] . '"';
          break;
          case 3:
          if (isset($_POST['ingredientQuantity3']))
            echo 'value = "' . $_POST['ingredientQuantity3'] . '"';
          break;
          case 4:
          if (isset($_POST['ingredientQuantity4']))
            echo 'value = "' . $_POST['ingredientQuantity4'] . '"';
          break;
          case 5:
          if (isset($_POST['ingredientQuantity5']))
            echo 'value = "' . $_POST['ingredientQuantity5'] . '"';
          break;
          case 6:
          if (isset($_POST['ingredientQuantity6']))
            echo 'value = "' . $_POST['ingredientQuantity6'] . '"';
          break;
          case 7:
          if (isset($_POST['ingredientQuantity7']))
            echo 'value = "' . $_POST['ingredientQuantity7'] . '"';
          break;
          case 8:
          if (isset($_POST['ingredientQuantity8']))
            echo 'value = "' . $_POST['ingredientQuantity8'] . '"';
          break;
          case 9:
          if (isset($_POST['ingredientQuantity9']))
            echo 'value = "' . $_POST['ingredientQuantity9'] . '"';
          break;
        }

      echo '><select name="ingredientUnit' . $i . '">
              <option value = "" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "") {
                    echo "selected";
                  }
                break;
            }


      echo '>SelectUnit</option>
              <option value="pound(s)" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "pound(s)") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "pound(s)") {
                    echo "selected";
                  }
                break;
            }

      echo '>pound(s)</option>
              <option value="gram(s)" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "gram(s)") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "gram(s)") {
                    echo "selected";
                  }
                break;
            }

        echo '>gram(s)</option>
              <option value="ounce(s)" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "ounce(s)") {
                    echo "selected";
                  }
                break;
            }

        echo '>ounce(s)</option>
              <option value="pcs" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "pcs") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "pcs") {
                    echo "selected";
                  }
                break;
              }

        echo '>pcs</option>
              <option value="ml" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "ml") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "ml") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "ml") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "ml") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "ml") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "ml") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "ml") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "ml") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "ml") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "ml") {
                    echo "selected";
                  }
                break;
              }

        echo '>ml</option>
              <option value="tbl" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "tbl") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "tbl") {
                    echo "selected";
                  }
                break;
              }

        echo '>tbl</option>
              <option value="spoon" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "spoon") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "spoon") {
                    echo "selected";
                  }
                break;
              }

        echo '>spoon</option>
              <option value="teaspoon" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "teaspoon") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "teaspoon") {
                    echo "selected";
                  }
                break;
              }

        echo '>teaspoon</option>
              <option value="cup" ';

              switch ($i) {
                case 0:
                  if (isset($_POST['ingredientUnit0']) && $_POST['ingredientUnit0'] == "cup") {
                    echo "selected";
                  }
                break;
                case 1:
                  if (isset($_POST['ingredientUnit1']) && $_POST['ingredientUnit1'] == "cup") {
                    echo "selected";
                  }
                break;
                case 2:
                  if (isset($_POST['ingredientUnit2']) && $_POST['ingredientUnit2'] == "cup") {
                    echo "selected";
                  }
                break;
                case 3:
                  if (isset($_POST['ingredientUnit3']) && $_POST['ingredientUnit3'] == "cup") {
                    echo "selected";
                  }
                break;
                case 4:
                  if (isset($_POST['ingredientUnit4']) && $_POST['ingredientUnit4'] == "cup") {
                    echo "selected";
                  }
                break;
                case 5:
                  if (isset($_POST['ingredientUnit5']) && $_POST['ingredientUnit5'] == "cup") {
                    echo "selected";
                  }
                break;
                case 6:
                  if (isset($_POST['ingredientUnit6']) && $_POST['ingredientUnit6'] == "cup") {
                    echo "selected";
                  }
                break;
                case 7:
                  if (isset($_POST['ingredientUnit7']) && $_POST['ingredientUnit7'] == "cup") {
                    echo "selected";
                  }
                break;
                case 8:
                  if (isset($_POST['ingredientUnit8']) && $_POST['ingredientUnit8'] == "cup") {
                    echo "selected";
                  }
                break;
                case 9:
                  if (isset($_POST['ingredientUnit9']) && $_POST['ingredientUnit9'] == "cup") {
                    echo "selected";
                  }
                break;
              }

        echo '>cup</option>
          </select>
      <input type="text" name="ingredientName' . $i . '" placeholder="Ingredient..." ';

      switch ($i) {
        case 0:
        if (isset($_POST['ingredientName0']))
          echo 'value = "' . $_POST['ingredientName0'] . '"';
        break;
        case 1:
        if (isset($_POST['ingredientName1']))
          echo 'value = "' . $_POST['ingredientName1'] . '"';
        break;
        case 2:
        if (isset($_POST['ingredientName2']))
          echo 'value = "' . $_POST['ingredientName2'] . '"';
        break;
        case 3:
        if (isset($_POST['ingredientName3']))
          echo 'value = "' . $_POST['ingredientName3'] . '"';
        break;
        case 4:
        if (isset($_POST['ingredientName4']))
          echo 'value = "' . $_POST['ingredientName4'] . '"';
        break;
        case 5:
        if (isset($_POST['ingredientName5']))
          echo 'value = "' . $_POST['ingredientName5'] . '"';
        break;
        case 6:
        if (isset($_POST['ingredientName6']))
          echo 'value = "' . $_POST['ingredientName6'] . '"';
        break;
        case 7:
        if (isset($_POST['ingredientName7']))
          echo 'value = "' . $_POST['ingredientName7'] . '"';
        break;
        case 8:
        if (isset($_POST['ingredientName8']))
          echo 'value = "' . $_POST['ingredientName8'] . '"';
        break;
        case 9:
        if (isset($_POST['ingredientName9']))
          echo 'value = "' . $_POST['ingredientName9'] . '"';
        break;
      }

      echo '/><br>
      ';
    }
    ?>
</div>

<div class="title">
  <div class="titleBox">
    <h2>Tag Your Dish</h2>
  </div>
  <div class="titleBox">
  </div>
</div>

<hr>
<!-- <br> -->

<div class="tags">
  <textarea rows="4" cols="50" name="tags"><?php if (isset($_POST['tags'])) { echo $_POST['tags']; } ?></textarea>
  <p class="smallCaption">Please separate your tags with ", "</p>
  <p class="smallCaption">Ex. Good Morning, 5mins, breakfast, easy to make</p><br>

</div>

<input type="submit" name="submit" value="Submit">
      </div>
    </div>

  </body>
</html>
