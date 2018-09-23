<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<!-- My git repository: https://github.com/kenny388/IAT352-A1 -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>All Recipes</title>
    <link rel="stylesheet" href="css/all-recipes.css">
    <link rel="stylesheet" href="css/headerFooter.css">

  </head>
  <body>
    <!-- page content -->
    <!-- Included header with php -->
    <?php
    include 'header.php';
    ?>

    <div class="holder">
      <div class="title">
          <h2>All Recipes</h2>
      </div>

      <hr>

      <!-- This all-recipes page provide user a list of all recipes -->
      <!-- Each contains basic informations such as name, description, prep&cook time and difficulty  -->
      <div class="container">
        <?php
        //Loaded the file "kenny_cheung_recipes.txt"
        $file_lines = file('recipes/kenny_cheung_recipes.txt');

        //Exception Handling if there is no recipe
        if (sizeof($file_lines) <= 0) {
          echo '<p>No recipes available.</p>';
      }

          //For loop looping through all the recipe lines available in the txt file
          foreach ($file_lines as $line) {
            //using php explode function to separate each field with the symbol of ",_"
            //Initially used ", " as the separation symbol, did not end well as the user-entered paragraphs are separated into many more segments
            $datas = explode(",_", $line);
            //Actual form started, echoed most of the html parts as well
            echo '<div class="recipe">';
              echo '<div class="leftBox">';
                echo '<div class="titleBox">';
                  //When providing the link to "recipe-details.php",
                  //I used an a tag with pointer towards recipe-details.php
                  //And added the "?keyNum=" part with the 41st field in the data
                  //the 41st field is where I provide the unique data identifier
                  //With the the part "?keyNum=[identifier]", this will pass a $_GET field to the next page
                  //Consequently providing the information of which data user clicked for the next page recipe-detail.php
                  echo '<a href="recipe-details.php?keyNum='; echo $datas[42]; echo'"><h3>' . $datas[0] . '</h3></a>';
                echo '</div>';
                echo '<div class="descriptionBox">';
                  //$datas[3] is the short description field
                  echo '<p>' . $datas[3] . '</p>';
                echo '</div>';
              echo '</div>';
              echo '<div class="rightBox">';
                echo '<div class="prepCookBox">';
                  echo '<div class="innerLeftBox">';
                    // $datas[4] and [5] are the preparation time value and unit
                    echo '<label>Prep: '. $datas[4] . $datas[5] .'</label>';
                  echo '</div>';
                  echo '<div class="innerRightBox">';
                  // $datas[6] and [7] are the cook time value and unit
                  echo '<label>Cook: '. $datas[6] . $datas[7] .'</label>';
                echo '</div>';
                echo '</div>';
                echo '<div class="servingsLevelBox">';
                  echo '<div class="innerLeftBox">';
                    // $datas[8] is for servings field
                    echo '<label>Servings: '. $datas[8] .'</label>';
                  echo '</div>';
                  echo '<div class="innerRightBox">';
                  // $datas[9] is for difficulty field
                  echo '<label>Level: '. $datas[9] .'</label>';
                echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
        }
        ?>

        <a href="add-recipe.php"><div class="button">Add New Recipe</div></a>

        <!-- //original Recipe Template:
        <div class="recipe">
          <div class="leftBox">
            <div class="titleBox">
              <h3>NO NAME PIEEEEEE</h3>
            </div>
            <div class="descriptionBox">
              <p>This is just sample text, Here is a pie, it has chicken, grass and everything except pineapple in it.</p>
            </div>
          </div>
          <div class="rightBox">
            <div class="prepCookBox">
              <div class="innerLeftBox">
                <label>Prep: 15mins</label>
              </div>
              <div class="innerRightBox">
              <label>Cook: 15mins</label>
            </div>
            </div>
            <div class="servingsLevelBox">
              <div class="innerLeftBox">
                <label>Servings: 6+</label>
              </div>
              <div class="innerRightBox">
              <label>Level: Intermediate</label>
            </div>
            </div>
          </div>
        </div> -->

      </div>

    </div>
    <!-- Included footer with php -->
    <?php
    include 'footer.php';
    ?>

  </body>
</html>
