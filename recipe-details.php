<!DOCTYPE html>

<!-- Reference: -->
<!-- Background Image Used: Kitchen Background Blured retrieved from http://brianjackman.co.uk/ -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Recipe Details</title>
    <link rel="stylesheet" href="css/recipe-details.css">
    <!-- <script src="script.js"></script> -->


  </head>
  <body>
    <!-- page content -->
    <div class="holder">
      <div class="title">
          <h2>Recipe Details</h2>
      </div>

      <hr>

      <div class="container">
        <?php
        $file_lines = file('recipes/kenny_cheung_recipes.txt');
        $keyNum = -1;
          foreach ($file_lines as $line) {
            $keyNum++;
            $datas = explode(",_", $line);

            if ($keyNum == $_GET['keyNum']) {
            echo '<div class="recipe">';
              echo '<div class="leftBox">';
                echo '<div class="titleBox">';

                  echo '<a href="recipe-details.php?keyNum='; echo $keyNum; echo'"><h3>' . $datas[0] . '</h3></a>';
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
        }
        ?>

        //original Recipe Template:

              <?php
              $file_lines = file('recipes/kenny_cheung_recipes.txt');
              $keyNum = -1;
                foreach ($file_lines as $line) {
                  $keyNum++;
                  $datas = explode(",_", $line);
                    if ($keyNum == $_GET['keyNum']) {

                      // echo '<div class="recipe">';
                      //   echo '<div class="recipeNameBox">';
                      //     echo '<div class="leftBox">';
                      //       echo '<h4>Description :</h4>';
                      //         echo '<p>'. $datas[3] .'</p>';
                      //     echo '</div>';
                      //   echo '</div>';
                    }
                  }
                  ?>


                  <div class="recipe">
                    <div class="title">
                        <h2>Recipe Details</h2>
                    </div>
                    <div class="oneRow">
                      <div class="leftBox">
                        <h4>Description :</h4><p>Lorem ipsum dolor sit amet, vel id choro expetendis interpretaris. An est iusto adipisci inciderint. Duo facilis epicuri ut, erroribus definiebas disputando an his. Pri discere labores cu, sit insolens oportere ex, idque oratio noster est eu. Ea est solum doming melius, et ius conceptam voluptaria. Ad cum tempor oblique fabulas, eu erant dictas repudiandae mea.</p>
                      </div>
            <div class="rightBox">
              <div class="verticalList">
                <div class="eachVerticalBox">
                  <p>Prep : 15mins</p>
                </div>
                <div class="eachVerticalBox">
                  <p>Cook : 15mins</p>
                </div>
                <div class="eachVerticalBox">
                  <p>Level : Intermediate</p>
                </div>
                <div class="eachVerticalBox">
                  <p>Serves : 6+</p>
                </div>
              </div>
            </div>
          </div>



            <div class="fiftyfiftyBox">
              <div class="innerLeftBox">
                <label>Ingredients</label>
                  <p>1 pcs egg</p>
                  <p>4 spoon salt</p>
              </div>
              <div class="innerRightBox">
                <label>Preparation</label>
                  <p>Lorem ipsum dolor sit amet, vel id choro expetendis interpretaris. An est iusto adipisci inciderint. Duo facilis epicuri ut, erroribus definiebas disputando an his. Pri discere labores cu, sit insolens oportere ex</p>
            </div>
            </div>

        </div>

      </div>

    </div>

  </body>
</html>
