<?php include( "includes/header.php"); ?>

<div class="container">

  <div class="row">

<h1>Nos soupes</h1>


  <?php  $soupes = [
    1 =>'soupe 1',
    2=>'soupe 2',
    3 =>'soupe 3',
    4 =>'soupe 4',
    5 =>'soupe 5',
    6 =>'soupe 6',

    ];

    $infos = [
      1 => [
            'nom' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, justo at dapibus semper, ipsum metus eleifend orci, quis dignissim arcu tortor ut est. Suspendisse gravida consectetur tellus in maximus. Vestibulum vehicula magna id nisi pharetra, eget mollis turpis mollis. Nulla maximus urna eu felis finibus, non sodales lacus aliquet. Vestibulum id ipsum nec ipsum tristique gravida sit amet id erat. Nam consectetur aliquam lorem, a viverra turpis hendrerit vitae. Morbi porta suscipit nisl, a bibendum nibh tempus ac.',
            'price' => 1,
            'img'=>'img/soupe1.jpg'
          ],

     2 => [
            'nom' => 'soupe 2',
            'price' => 2,
            'img'=>'img/soupe1.jpg'
          ],
     3 => [
            'nom' => 'soupe 3',
            'price' => 3,
            'img'=>'img/soupe1.jpg'
          ],
     4 => [
            'nom' => 'soupe 4',
            'price' => 4,
            'img'=>'img/soupe1.jpg'
          ],

     5 => [
            'nom' => 'soupe 5',
            'price' => 5,
            'img'=>'img/soupe1.jpg'
          ],

     6 => [
            'nom' => 'Soupe 6',
            'price' => 6,
            'img'=>'img/soupe1.jpg'
          ]

    ];



    foreach ($soupes AS $id_soups => $soupe) {
      foreach ($infos AS $dept) {
          if ($dept['price'] == $id_soups) {
        echo "<div class=\"col s12 l4\"><div class=\"card\">
        <div class=\"card-image waves-effect waves-block waves-light\">
          <img class=\"activator\" src=\"".$dept['img']."\">
        </div>
        ";

                echo "<div class=\"card-content\">
                  <span class=\"card-title activator grey-text text-darken-4\">".$soupe."<i class=\"material-icons right\">more_vert</i></span>
                        <p>".$dept['price']."€</p>
                      </div>
                      <div class=\"card-reveal\">
                        <span class=\"card-title grey-text text-darken-4\">Card Title<i class=\"material-icons right\">close</i></span>
                        <p>" .$dept['nom']."<br>
                          Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                              </div>
                                       </div>";
            }
        }

      }

        ?>








     </div>

</div>
<?php include( "includes/footer.php"); ?>
