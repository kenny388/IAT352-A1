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
            <label>Recipe Title: </label> <input type="text" name="recipeTitle" value = "<?php if(isset($_POST['recipeTitle'])) { $temp = $_POST["recipeTitle"]; echo $temp;}?>" <?php if(isset($_POST['recipeTitleOK'])) { print("style=\"background-color:Yellow;\"");}  ?>/> <br><br>
            <label>Related Link: </label> <input type="text" name="relatedLink" value = "<?php if(isset($_POST['relatedLink'])) { $temp = $_POST["relatedLink"]; echo $temp;}?>" <?php if(isset($_POST['relatedLinkOK'])) { print("style=\"background-color:Yellow;\"");}  ?>/> <br><br>
            <label>Category*:</label>
              <select name="category">
                <option value="appetizer" selected>Appetizer</option>
                <option value="entree" >Entree</option>
                <option value="dessert">Dessert</option>
                <option value="salad">Salad</option>
                <option value="others">Others</option>
              </select>
            </div>

            <div class="secondBox">
              <label>Short Description: </label><br>
              <textarea name="description" rows="10" cols="45"></textarea>
            </div>
          </div>

          <div class="container">
            <div class="firstBox">
              <label>Prep Time*:</label> <input type="text" name="prepTimeValue" />
                  <select name="prepTimeUnit">
                    <option value="minutes" selected>Minutes</option>
                    <option value="hours" >Hours</option>
                  </select>
            </div>
            <div class="secondBox">
              <label>Cook Time*:</label> <input type="text" name="cookTimeValue" />
                  <select name="cookTimeUnit">
                    <option value="minutes" selected>Minutes</option>
                    <option value="hours" >Hours</option>
                  </select>
            </div>
          </div>

          <div class="container">
            <div class="firstBox">
              <label>Servings:</label>
                <input type="radio" name="servings" value="1"/>1
                <input type="radio" name="servings" value="2"/>2
                <input type="radio" name="servings" value="3"/>3
                <input type="radio" name="servings" value="4"/>4
                <input type="radio" name="servings" value="5"/>5
                <input type="radio" name="servings" value="6+"/>6+
            </div>
            <div class="secondBox" id="selectEnhancer">
              <label>Difficulty:</label>
              <select name="difficulty">
                <option value="easy">Easy</option>
                <option value="intermediate" selected>Intermediate</option>
                <option value="difficult">Difficult</option>
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
        echo '<input type="number" name="ingredient-quantity[' . $i . ']" min="1" max="100" step="1" placeholder="Quantity">
      <select name="ingredeint-unit[' . $i . ']">
              <option value="Unit Not Selected" selected>SelectUnit</option>
              <option value="pound(s)[' . $i . ']">pound(s)</option>
              <option value="gram(s)[' . $i . ']" >gram(s)</option>
              <option value="ounce(s)[' . $i . ']">ounce(s)</option>
              <option value="pcs[' . $i . ']">pcs</option>
              <option value="ml[' . $i . ']">ml</option>
              <option value="tbl[' . $i . ']">tbl</option>
              <option value="spoon[' . $i . ']">spoon</option>
              <option value="teaspoon[' . $i . ']">teaspoon</option>
              <option value="cup[' . $i . ']">cup</option>
          </select>
      <input type="text" name="ingredient-name[' . $i . ']" placeholder="Ingredient..."/><br>
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
  <textarea rows="4" cols="50" name="tags"></textarea>
  <p class="smallCaption">Please separate your tags with ", "</p>
  <p class="smallCaption">Ex. Good Morning, 5mins, breakfast, easy to make</p><br>

</div>

<input type="submit" name="submit" value="Submit">
      </div>
    </div>

  </body>
</html>
