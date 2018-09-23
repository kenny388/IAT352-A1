<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>All Recipes</title>
    <link rel="stylesheet" href="css/all-recipes.css">
    <link rel="stylesheet" href="css/headerFooter.css">
    <!-- <script src="script.js"></script> -->


  </head>
  <body>
    <!-- page content -->
    <?php
    include 'header.php';
    ?>

    <div class="holder">
      <div class="title">
          <h2>All Recipes</h2>
      </div>

      <hr>

      <div class="container">
        <?php
        $file_lines = file('recipes/kenny_cheung_recipes.txt');

        //Exception Handling if
        if (sizeof($file_lines) <= 0) {
          echo '<p>No recipes available.</p>';
      }
          foreach ($file_lines as $line) {
            $datas = explode(",_", $line);
            echo '<div class="recipe">';
              echo '<div class="leftBox">';
                echo '<div class="titleBox">';
                  echo '<a href="recipe-details.php?keyNum='; echo $datas[42]; echo'"><h3>' . $datas[0] . '</h3></a>';
                echo '</div>';
                echo '<div class="descriptionBox">';
                  echo '<p>' . $datas[3] . '</p>';
                echo '</div>';
              echo '</div>';
              echo '<div class="rightBox">';
                echo '<div class="prepCookBox">';
                  echo '<div class="innerLeftBox">';
                    echo '<label>Prep: '. $datas[4] . $datas[5] .'</label>';
                  echo '</div>';
                  echo '<div class="innerRightBox">';
                  echo '<label>Cook: '. $datas[6] . $datas[7] .'</label>';
                echo '</div>';
                echo '</div>';
                echo '<div class="servingsLevelBox">';
                  echo '<div class="innerLeftBox">';
                    echo '<label>Servings: '. $datas[8] .'</label>';
                  echo '</div>';
                  echo '<div class="innerRightBox">';
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
              <p>This is just sample text, Here is a pie, it has chicken, grass and everything except vegetables in it.</p>
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
    <?php
    include 'footer.php';
    ?>

  </body>
</html>
