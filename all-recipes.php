<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>All Recipes</title>
    <link rel="stylesheet" href="css/all-recipes.css">
    <!-- <script src="script.js"></script> -->


  </head>
  <body>
    <!-- page content -->
    <div class="holder">
      <div class="title">
          <h2>All Recipes</h2>
      </div>

      <hr>

      <?php
      $file_lines = file('kenny_cheung_recipes.txt');
      foreach ($file_lines as $line) {
          $datas = explode(", ", $line);

          




      }
      ?>


      <div class="container">
        <div class="recipe">
          <div class="leftBox">
            <div class="titleBox">
              <h3>NO NAME PIEEEEEE</h3>
            </div>
            <div class="descriptionBox">
              <p>

              </p>
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
        </div>
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
        </div>
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
        </div>
      </div>

    </div>

  </body>
</html>
