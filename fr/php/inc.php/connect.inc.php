<form class="sign" action="" method="post">
        <div class="head">
          <img src="images/digidologo.png" alt="" class="logo">
          <h3>Connectez vous à votre compte digido</h3>
        </div>

        <div class="login_elements">
            <div class="name">
                <input type="mail" name="mail" required>
                <label>Email</label>
              <div class="pass">
                <input type="password" class="password" id="pass1" name="passwd" required>
                <label>Mot de passe</label>
              </div>
        </div>
        
          <div class="iconeye">
        <img src="images/eyehide.png" onclick="show();" id="eye">
        </div>
        <input type="submit" name="connect" value="Connexion">
      </form>
      <img id="sec1" src="images/shape (3).png" alt="">
        <img id="sec2" src="images/shape (3).png" alt="">
      <script type="text/javascript">
      function show(){
        var password= document.getElementById('pass1');
        confirm= document.getElementById('pass2');
        image= document.getElementById('eye');
        if (password.type==="password",confirm.type==="password") {
          password.type="text";
          confirm.type="text";
          image.setAttribute('src', 'eyeshow.png');
        } else if (password.type==="text",confirm.type==="text"){
          password.type="password";
          confirm.type="password";
          image.setAttribute('src', 'eyehide.png');
        }
      }
      </script>
