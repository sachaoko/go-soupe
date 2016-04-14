<?php include( "includes/header.php"); ?>
<!--texte-->
<div class="container">
   <h1> Nous contacter</h1>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Sed in egestas odio, quis facilisis risus.
      Sed volutpat lacus eu neque lacinia, et imperdiet mauris dignissim.
      Morbi facilisis odio in ante fermentum, eget efficitur lacus maximus.
      In hac habitasse platea dictumst. Sed aliquet hendrerit condimentumLorem ipsum dolor sit amet, consectetur adipiscing elit.
      Sed in egestas odio, quis facilisis risus. Sed volutpat lacus eu neque lacinia, et imperdiet mauris dignissim.
      Morbi facilisis odio in ante fermentum, eget efficitur lacus maximus. In hac habitasse platea dictumst.
      Sed aliquet hendrerit condimentum. Proin in venenatis nibh. Cum sociis natoque penatibus et magnis dis parturient montes,
      nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
      Nunc augue lorem, condimentum at cursus eget, bibendum id ex. Nullam consectetur, mauris rhoncus lacinia egestas,
      nunc nibh luctus tellus, at blandit enim urna sit amet massa.
      Ut suscipit ut ante eget congue. Pellentesque risus erat, lacinia ut nisi quis, bibendum vehicula odio..
   </p>
   
   <!--formulaire-->

   <div class="row">
      <form class="col s12">
         <div class="row">
            <div class="input-field col l6 s12">
               <input  id="first_name" type="text" class="validate">
               <label for="first_name">Nom</label>
            </div>
            <div class="input-field col l6 s12">
               <input id="last_name" type="text" class="validate">
               <label for="last_name">Prénom</label>
            </div>
         </div>
         <div class="row">
            <div class="input-field col l6 s12">
               <input id="email" type="email" class="validate">
               <label for="email">Email</label>
            </div>
            <div class="input-field col l6 s12">
               <select class="icons">
                  <option value="" disabled selected>Choisir une soupe</option>
                  <option value="" data-icon="img/soupes/soupe-1.jpg" class="circle">Charlie the Unicorn</option>
                  <option value="" data-icon="img/soupes/soupe-2.jpg" class="circle">Barbie Girl</option>
                  <option value="" data-icon="img/soupes/soupe-3.jpg" class="circle">Knacki Soup   </option>
                  <option value="" data-icon="img/soupes/soupe-4.jpg" class="circle">La Jeanne-D’arc</option>
                  <option value="" data-icon="img/soupes/soupe-5.jpg" class="circle">Gingers do have a soul</option>
                  <option value="" data-icon="img/soupes/soupe-6.jpg" class="circle">Bobo-Poireau</option>
               </select>
            </div>
         </div>
         <div class="row">
      <form class="col s12">
      <div class="row">
      <div class="input-field col s12">
      <textarea id="textarea1" class="materialize-textarea"></textarea>
      <label for="textarea1">Votre message</label>
      </div>
      <button class="btn waves-effect deep-orange lighten-1 waves-light right" type="submit" name="action">Envoyer
      <i class="material-icons right">send</i>
      </button>
      </div>
      </form>
      </div>
      </form>
   </div>
</div>
<?php include( "includes/footer.php"); ?>