<!DOCTYPE html>
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
      <h3>Upload A Recipe</h3>

      <div class="form">

        <form action="test_get.php" method="post">
  <label>Recipe Title: </label> <input type="text" name="recipe-title" /> <br><br>
  <label>Related Link: </label> <input type="text" name="link" /><br><br>
  <label>Short Description: </label> <input type="text" name="description" /><br><br>
<div class="custom-select">
  <label>Category*:</label>  <select name="category">
          <option value="Appetizer" selected>Appetizer</option>
          <option value="Entree" >Entree</option>
          <option value="Dessert">Dessert</option>
          <option value="Salad">Salad</option>
          <option value="Others">Others</option>
      </select> <br><br>
    </div>

  <label>Prep Time*:</label> <input type="text" name="prep-time-value" />
                <select name="prep-time-unit">
                  <option value="minutes" selected>Minutes</option>
                  <option value="hours" >Hours</option>
                </select> <br><br>
  <label>Cook Time*:</label> <input type="text" name="cook-time-value" />
                <select name="cook-time-unit">
                  <option value="minutes" selected>Minutes</option>
                  <option value="hours" >Hours</option>
                </select> <br><br>
  <label>Servings:</label>   <input type="radio" name="servings" value="1"/>1
              <input type="radio" name="servings" value="1"/>2
              <input type="radio" name="servings" value="1"/>3
              <input type="radio" name="servings" value="1"/>4
              <input type="radio" name="servings" value="1"/>5
              <input type="radio" name="servings" value="1"/>6+

  <br><br>

  <!-- <input type="text" name="fname" placeholder="First name"> -->
  <div class="ingredients">
  <label>Ingredients:</label> <br>
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

<br>

<div class="tags">
  Tag your dish: <br>
  <!-- <input type="text" name="tags"/> -->
  <textarea rows="4" cols="50" name="tags"></textarea>
  <p class="smallCaption">Please separate your tags with ", "</p>
  <p class="smallCaption">Ex. Good Morning, 5mins, breakfast, easy to make</p><br>

</div>


<input type="submit" name="submit" value="Submit">
      </div>
    </div>

  </body>
</html>
