<?php include( "includes/header.php"); ?>

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
      Ut suscipit ut ante eget congue. Pellentesque risus erat, lacinia ut nisi quis, bibendum vehicula odio..</p>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input  id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>

            <div class="input-field col s6">
              <select class="icons">
      <option value="" disabled selected>Choose your option</option>
      <option value="" data-icon="images/sample-1.jpg" class="circle">example 1</option>
      <option value="" data-icon="images/office.jpg" class="circle">example 2</option>
      <option value="" data-icon="images/yuna.jpg" class="circle">example 1</option>
    </select>
    <label>Images in select</label>
            </div>
          </div>
          <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
        <button class="btn waves-effect waves-light right" type="submit" name="action">Envoyer
   <i class="material-icons right">send</i>
 </button>
      </div>
    </form>
  </div>

        </form>
      </div>
</div>
<?php include( "includes/footer.php"); ?>
