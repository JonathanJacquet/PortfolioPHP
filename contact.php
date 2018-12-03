<!--
  ~~~~~~~~~~ | Star Header |~~~~~~~~~~~
-->

<?php
  include "template/nav.php";
?>

<!--
  ~~~~~~~~~~ | End Header |~~~~~~~~~~~
-->



<!--
  ~~~~~~~~~~ | Star Main |~~~~~~~~~~~
-->
<main>
  <div class="contener_apropos">
    <div class="contener_header">
        <!--<img src="img/avataaars.png" alt="avatar" height="100%" width="100%">-->
    </div>
    <div class="">
    <section>
      <h3>par mail :</h3>
        <div id="mail">
          <a href="mailto:jonathan.jacquet62@gmail.com" id="mailto"><i class="far fa-envelope fa-4x"></i></a>
        </div>
          <h3> Formulaire de contact</h3>
            <form action="/ma-page-de-traitement" method="post">
              <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
              </div>
              <div>
                <label for="surname">Prénom :</label>
                <input type="text" id="surname" name="user-surname">
              </div>
              <div>
                <label for="mail">e-mail :*</label>
                <input type="email" id="email" name="user_mail" required>
              </div>
              <div>
                <br>
                <label for="subject">Objet :*</label>
                <input type="text" id="subject" name="user_subject" required>
              </div>
              <div>
                <label for="msg">Message :*</label>
                <textarea id="msg" name="user_message" required></textarea>
              </div>
              <div class="button">
                <button type="submit">Envoyer</button>
              </div>
            </form>
      </section>
      </div>
  </div>
</main>
<!--
  ~~~~~~~~~~ | End Main |~~~~~~~~~~~
-->


<!--
  ~~~~~~~~~ | Star Footer | ~~~~~~~~
-->

<?php
  include "template/footer.php";
?>

<!--
  ~~~~~~~~ | End Footer | ~~~~~~~~~~
-->
