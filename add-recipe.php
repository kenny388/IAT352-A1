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
      echo '<input type="number" name="ingredientQuantity' . $i . '" min="1" max="100" step="1" ';
        if (isset($_POST['ingredientQuantity' . $i . ''])) { echo 'value = "' . $_POST['ingredientQuantity' . $i . ''] . '"';}
      echo ' placeholder="Quantity"><select name="ingredientUnit' . $i . '">
            <option value = "" ';
          if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "") { echo ' selected'; }
        echo '>SelectUnit</option>
            <option value="pound(s)" ';
        if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "pound(s)") { echo ' selected'; }
        echo '>pound(s)</option>
            <option value="gram(s)" ';
            if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "gram(s)") { echo ' selected'; }
        echo '>gram(s)</option>
            <option value="ounce(s) ';
            if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "ounce(s)") { echo ' selected'; }
        echo '">ounce(s)</option>
            <option value="pcs" ';
            if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "pcs") { echo ' selected'; }
        echo '>pcs</option>
            <option value="ml" ';
            if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "ml") { echo ' selected'; }
        echo '>ml</option>
            <option value="tbl" ';
            if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "tbl") { echo ' selected'; }
        echo '>tbl</option>
            <option value="spoon" ';
            if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "spoon") { echo ' selected'; }
        echo '>spoon</option>
            <option value="teaspoon" ';
            if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "teaspoon") { echo ' selected'; }
        echo '>teaspoon</option>
            <option value="cup" ';
            if (isset($_POST['ingredientUnit' . $i . '']) && $_POST['ingredientUnit' . $i . ''] == "cup") { echo ' selected'; }
        echo '>cup</option>
        </select>
    <input type="text" name="ingredientName' . $i . '" placeholder="Ingredient..." ';
      if (isset($_POST['ingredientName' . $i . ''])) { echo 'value = "' . $_POST['ingredientName' . $i . ''] . '"';}
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
