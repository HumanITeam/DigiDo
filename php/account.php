<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigiDo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header class="top-page">
        <nav class="navbar-container">
            <div class="con-logo"id="navbar__logo" >
             <a id="title" href="#top-page"> <p>DigiDo</p></a>
            </div>
            <div class="navbar__toggle" id="mobile-menu">
                <a class="bar"></a>
                <a class="bar"></a>
                <a class="bar"></a>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item"> <a href="../index.php"  class="navbar__link" id="active_page" >Home</a> </li>
                <li class="navbar__item"> <a href="" class="navbar__link">link</a> </li>
                <li class="navbar__item"> <a href="#" class="navbar__link">Link</a> </li>
                
                <li class="navbar__item"> <a href="contact.html" class="navbar__link" class="navbar__link">Contacts</a> </li>
                <li class="navbar__item"> <a href=""  class="navbar__link">About us</a> </li>
           </ul>
           <div class="btns">
                <li class="btn-sing_in"><a href="">sign in </a></li>
                <li class="btn-suscribe"><a href="">Get started </a></li>
            </div>
        </nav> 

        <img  id="sec1" src="../images/shape (1).png" alt="">
        <img  id="sec2" src="../images/shape (2).png" alt="">
        <img  id="sec3" src="../images/shape (3).png" alt="">
        <img  id="sec4" src="../images/shape (4).png" alt="">
    </header>
    
	<div class="main">
    <form class="" action="">
      <div class="head">
        <img src="../images/digidologo.png" alt="" class="logo">
        <h3>Create your Digido Account</h3>
      </div>
      <div class="name">
        <input type="name" required>
        <label>First name</label>
      </div>
      <div class="name">
        <input type="name" required>
        <label>Last name</label>
      </div>
      <div class="user-name">
        <input type="username" required>
        <label>Username</label>
      </div>
      <a class="line1">You can use letters, numbers & periods</a>
      <a href="" class="line2">Use my current email address instead</a>
      <div class="pass">
        <input type="password" class="password" id="pass1" required>
        <label>Password</label>
      </div>
      <div class="pass">
        <input type="password" class="password" id="pass2" required>
        <label>Confirm</label>
        </div>
        <div class="iconeye">
      <img src="../images/eyehide.png" onclick="show();" id="eye">
      </div>
      <a class="line3">Use 8 or more characters with a mix of letters, numbers & symbols</a>
      <input type="submit" value="Get started">
    </form>
    </div>

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

    <section class="Servies">
        <h1>Our Servies</h1>

        <div class="services_items">
            <div class="service">
                <img  class="service_image" src="../images/box-solid.svg" alt="">
                <h2>Item</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet corporis id facilis,
                    voluptate enim dolore illo sed consectetur quas asperiores
                    laboriosam velit sint ea odio.
                </p>
            </div>
            <div class="service">
                <img class="service_image" src="../images/square-check-solid.svg" alt="">
                <h2>Item</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet corporis id facilis,
                    voluptate enim dolore illo sed consectetur quas asperiores
                    laboriosam velit sint ea odio.
                </p>
            </div>
            <div class="service">
                    <img class="service_image" src="../images/box-solid.svg" alt="">
                <h2>Item</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet corporis id facilis,
                    voluptate enim dolore illo sed consectetur quas asperiores
                    laboriosam velit sint ea odio.
                </p>
            </div>
        </div>

        <br>
        
    </section>
    <section class="about_us">
            
            <h1>About us</h1>
            <div  class="about">
                <div class="_text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Odio est excepturi fugit maiores labore esse, eius laborum dolore consequuntur distinctio sit enim facere ex amet optio,
                        magnam sint ratione temporibus pariatur, a qui placeat eveniet. Laudantium, recusandae ipsum ipsa, placeat maxime necessitatibus est asperiores tenetur 
                        et architecto adipisci praesentium eveniet rem nisi, earum minima quibusdam exercitationem eaque? Consequatur commodi iste laudantium veniam dolores alias sequi excepturi! 
                        Quod nisi velit reiciendis molestias voluptatem temporibus, iusto facilis. Delectus, porro. Fugiat similique maiores hic rerum, voluptate ipsum illum eius nostrum eaque corrupti 
                        arum soluta praesentium cumque nesciunt eligendi facilis vero enim, modi architecto itaque odit quo sed! Voluptates in deserunt distinctio quae laudantium sit ipsam saepe iste quasi 
                        laboriosam placeat aliquam vitae maxime ea iusto quos magni soluta doloribus itaque, voluptate animi pariatur. 
                    </p>
    
                </div>
                <div >
                    <img class="image_digodo" src="../images/DIGIDO-V-ED.svg" alt="">
                </div> 
            </div> 
    </section>


    <footer>



    </footer>


    
    <script src="js/script.js"></script>
    <script src="js/parallax.js"></script>
</body>
</html>