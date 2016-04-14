<?php include( "includes/header.php"); ?>
<div class="container">
   <div class="row">
      <h1>Nos soupes</h1>
          
          <!--
   tableau avec information sur les soupes
   -->
          
      <?php  $soupes = [
         1 =>'Charlie the Unicorn',
         2=>'Barbie Girl',
         3 =>'Knacki Soup',
         4 =>'La Jeanne-D’arc',
         5 =>'Gingers do have a soul',
         6 =>'Bobo-Poireau',
         
         ];
         
         $infos = [
           1 => [
                 'nom' => 'On ne nous croyait pas quand on a dit qu’on allait cultiver des licornes. Puis on en a eu marre d\'être victime des colifichets, et on a voulu être considéré en tant que tel.',
                 'price' => 1,
                 'img'=>'img/soupes/soupe-1.jpg'
               ],
         
          2 => [
                 'nom' => 'Au début, on voulait mettre des paillettes, des chatons et des vaches qui font du kiri, mais en fait c’est juste de la betterave, et du lait de vaches qui font du kiri, quand même.',
                 'price' => 2,
                 'img'=>'img/soupes/soupe-2.jpg'
               ],
          3 => [
                 'nom' => 'Mais… T’avais dit qu’on ferait des Knacki...',
                 'price' => 3,
                 'img'=>'img/soupes/soupe-3.jpg'
               ],
          4 => [
                 'nom' => 'Un boeuf longuement mijoté dans des épices, des tomates fraîches et un carpaccio de gingembre agrémenté de nouilles de riz roulées à la main, il en Pho peu pour être heureux',
                 'price' => 4,
                 'img'=>'img/soupes/soupe-4.jpg'
               ],
         
          5 => [
                 'nom' => 'Des poires tendrement épluchées, du bouillon de poulet pour le goût, et évidemment un poil de carotte pour une pause soupe un brin sucrée, et tout en douceur.',
                 'price' => 5,
                 'img'=>'img/soupes/soupe-5.jpg'
               ],
         
          6 => [
                 'nom' => 'C’est tout simple, on a des poireaux bio équitables d’un petit producteur au Guatemala importés par vélo, des pommes de terre sans gluten et du radis noir de Yougoslavie dans une verrine Ikea.
         Tout simple on vous a dit !',
                 'price' => 6,
                 'img'=>'img/soupes/soupe-6.jpg'
               ]
         
         ];
         
         
         // Affichage des différents items
          
         foreach ($soupes AS $id_soups => $soupe) {
           foreach ($infos AS $dept) {
               if ($dept['price'] == $id_soups) {
             echo "<div class=\"col s12 l4\"><div class=\"card\">
             <div class=\"card-image waves-effect waves-block waves-light\">
               <img class=\"activator img-produit\" src=\"".$dept['img']."\">
             </div>
             ";
         
                     echo "<div class=\"card-content\">
                       <span class=\"card-title activator grey-text text-darken-4\">".$soupe."<i class=\"material-icons right\">more_vert</i></span>
                             <p>".$dept['price']."€</p>
                           </div>
                           <div class=\"card-reveal\">
                             <span class=\"card-title grey-text text-darken-4\">".$soupe."<i class=\"material-icons right\">close</i></span>
                             <p>" .$dept['nom']."<br><br>".$dept['price']."€ 
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