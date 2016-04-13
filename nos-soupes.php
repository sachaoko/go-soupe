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
            'id_reg' => 1,
          ],

     2 => [
            'nom' => 'soupe 2',
            'id_reg' => 2,
          ],
     3 => [
            'nom' => 'soupe 3',
            'id_reg' => 3,
          ],
     4 => [
            'nom' => 'soupe 4',
            'id_reg' => 4,
          ],

     5 => [
            'nom' => 'soupe 5',
            'id_reg' => 5,
          ],

     6 => [
            'nom' => 'Soupe 6',
            'id_reg' => 6,
          ]

    ];



    foreach ($soupes AS $id_soups => $soupe) {
        echo "<div class=\"col s6 l4\"><div class=\"card\">
        <div class=\"card-image waves-effect waves-block waves-light\">
          <img class=\"activator\" src=\"img/soupe-thumb.jpg\">
        </div>
        ";
        foreach ($infos AS $dept) {
            if ($dept['id_reg'] == $id_soups) {
                echo "<div class=\"card-content\">
                  <span class=\"card-title activator grey-text text-darken-4\">".$soupe."<i class=\"material-icons right\">more_vert</i></span>
                        <p><a href=\"#\">This is a link</a></p>
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
