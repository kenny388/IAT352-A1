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
  Recipe Title: <input type="text" name="recipe-title" /> <br><br>
  Related Link: <input type="text" name="link" /><br><br>
  Short Description: <input type="text" name="description" /><br><br>
<div class="custom-select">
  Category*:  <select name="category">
          <option value="Appetizer" selected>Appetizer</option>
          <option value="Entree" >Entree</option>
          <option value="Dessert">Dessert</option>
          <option value="Salad">Salad</option>
          <option value="Others">Others</option>
      </select> <br><br>
    </div>

  Prep Time*: <input type="text" name="prep-time-value" />
                <select name="prep-time-unit">
                  <option value="minutes" selected>Minutes</option>
                  <option value="hours" >Hours</option>
                </select> <br><br>
  Cook Time*: <input type="text" name="cook-time-value" />
                <select name="cook-time-unit">
                  <option value="minutes" selected>Minutes</option>
                  <option value="hours" >Hours</option>
                </select> <br><br>
  Servings:   <input type="radio" name="servings" value="1"/>1
              <input type="radio" name="servings" value="1"/>2
              <input type="radio" name="servings" value="1"/>3
              <input type="radio" name="servings" value="1"/>4
              <input type="radio" name="servings" value="1"/>5
              <input type="radio" name="servings" value="1"/>6+

  <br><br>

  <!-- <input type="text" name="fname" placeholder="First name"> -->

  Ingredients: <br>
  <input type="number" name="ingredient-quantity[1]" min="1" max="100" step="1" placeholder="Quantity">
  <select name="ingredeint-unit[1]">
          <option value="Unit Not Selected" selected>SelectUnit</option>
          <option value="pound(s)">pound(s)</option>
          <option value="gram(s)" >gram(s)</option>
          <option value="ounce(s)">ounce(s)</option>
          <option value="pcs">pcs</option>
          <option value="ml">ml</option>
          <option value="tbl">tbl</option>
          <option value="spoon">spoon</option>
          <option value="teaspoon">teaspoon</option>
          <option value="cup">cup</option>
      </select>
  <input type="text" name="ingredient-name[1]" placeholder="Ingredient..."/>


  <div class="ingredients">
    <?php
    $ingredientsAmount = 10;
    for ($i = 0; $i < $ingredientsAmount; $i++) {
      echo "";
    }
    ?>
</div>


  Level of Program:   Undergrad<input type="radio" name="lvlprogram" value="Undergrad" />   Grad<input type="radio" name="lvlprogram" value="Grad" /><br><br>
 Gender:<input type="radio" name="gender" value="female">Female<input type="radio" name="gender" value="male">Male<br><br>

Address line:<input type="text" name="address"><br><br>
City:<input type="text" name="city"><br><br>
Zip code:<input type="text" name="zipcode"><br><br>
Province:  <select name="province" size="13">
        <option value="British Columbia" selected>British Columbia</option>
        <option value="Alberta" >Alberta</option>
        <option value="Ontario">Ontario</option>
        <option value="Quebec">Quebec</option>
        <option value="Manitoba">Manitoba</option>
        <option value="Saskatchewan">Saskatchewan</option>
        <option value="Nova Scotia">Nova Scotia</option>
        <option value="New Brunswick">New Brunswick</option>
        <option value="Nunavut">Nunavut</option>Nunavut
        <option value="Yukon">Yukon</option>Yukon
        <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
        <option value="Prince Edward Island">Prince Edward Island</option>
        <option value="Northwest Territories">Northwest Territories</option>
    </select> <br><br>

<input type="submit" name="submit" value="Submit">
      </div>
    </div>

  </body>
</html>
