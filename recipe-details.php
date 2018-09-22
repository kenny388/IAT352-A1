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
          <!-- <h2>Recipe Details</h2> -->
      </div>

      <!-- <hr> -->

      <div class="container">
        <?php
              $file_lines = file('recipes/kenny_cheung_recipes.txt');
              $keyNum = -1;
                foreach ($file_lines as $line) {
                    $keyNum++;
                    $datas = explode(",_", $line);
                    if ($keyNum == $_GET['keyNum']) {

                      echo '<div class="recipe">';
                        echo '<div class="title">';
                            echo '<h2>'. $datas[0] .'</h2>';
                        echo '</div>';
                        echo '<div class="oneRow">';
                          echo '<div class="leftBox">';
                            echo '<h4>Description :</h4><p>'. $datas[3] .'</p>';
                            echo '</br>';

                            echo '<div class="flexRow">';
                            echo '<label>Tags : 	&nbsp;	&nbsp;</label>';
                            $tags = explode(",", $datas[41]);
                            for ($i = 0; $i < sizeof($tags); $i++) {
                              echo '<div class="eachTag">' . $tags[$i] . '</div>';
                            }
                            echo '</div>';
                        echo '</div>';
                          echo '<div class="rightBox">';
                            echo '<div class="verticalList">';
                              echo '<div class="eachVerticalBox">';
                                echo '<p>Prep : '. $datas[4] . $datas[5]  .'</p>';
                              echo '</div>';
                              echo '<div class="eachVerticalBox">';
                                echo '<p>Cook : '. $datas[6] . $datas[7] .'</p>';
                              echo '</div>';
                              echo '<div class="eachVerticalBox">';
                                echo '<p>Level : '. $datas[9] .'</p>';
                              echo '</div>';
                              echo '<div class="eachVerticalBox">';
                                echo '<p>Serves : '. $datas[8] .'</p>';
                              echo '</div>';
                            echo '</div>';
                          echo '</div>';
                        echo '</div>';
                        echo '<div class="fiftyfiftyBox">';
                          echo '<div class="innerLeftBox">';
                            echo '<h4>Ingredients :</h4>';
                              // echo '<p>1 pcs egg</p>';
                              // echo '<p>4 spoon salt</p>';
                              echo '<p>'. $datas[10] . ' ' . $datas[11] . ' ' . $datas[12] .'</p>';
                              echo '<p>'. $datas[13] . ' ' . $datas[14] . ' ' . $datas[15] .'</p>';
                              echo '<p>'. $datas[16] . ' ' . $datas[17] . ' ' . $datas[18] .'</p>';
                              echo '<p>'. $datas[19] . ' ' . $datas[20] . ' ' . $datas[21] .'</p>';
                              echo '<p>'. $datas[22] . ' ' . $datas[23] . ' ' . $datas[24] .'</p>';
                              echo '<p>'. $datas[25] . ' ' . $datas[26] . ' ' . $datas[27] .'</p>';
                              echo '<p>'. $datas[28] . ' ' . $datas[29] . ' ' . $datas[30] .'</p>';
                              echo '<p>'. $datas[31] . ' ' . $datas[32] . ' ' . $datas[33] .'</p>';
                              echo '<p>'. $datas[34] . ' ' . $datas[35] . ' ' . $datas[36] .'</p>';
                              echo '<p>'. $datas[37] . ' ' . $datas[38] . ' ' . $datas[39] .'</p>';


                          echo '</div>';
                          echo '<div class="innerRightBox">';
                            echo '<h4>Preparation :</h4>';
                              echo '<p>'. $datas[40] .'</p>';
                          echo '</div>';
                        echo '</div>';
                      echo '</div>';


                    }
                }
                  ?>


      <!-- //original Recipe Template:

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
        </div> -->

      </div>

    </div>

  </body>
</html>
