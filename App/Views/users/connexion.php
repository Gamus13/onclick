






<!DOCTYPE html>
<html>
<head>
	<title>formulaire d'identification</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../assets/css/style2.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) . '../../../../assets/css/app-site.css'; ?>"> <!--ici c'est le lien qui par chercher le headerphp et son style sur connexion-->
</head>
<body>



    <!-- Navigation -->
    <div class="navbar">
        <div class="container">
            <img src="../../../assets/image de la grille/logo2-removebg-preview.png" alt="">
            <ul class="nav-links">
                <li class="active"><a href="#hero">Accueil</a></li>
                <li><a href="#services">espace client</a></li>
                <li><a href="#work">a propos</a></li>
                <li><a href="#contact">Contact</a></li>
               
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

  <div class="cont">
    <div class="form sign-in">
      <h2>Connexion</h2>
      <form action="userspace.php" method="POST" id="myForm">
        <label for="mail">email</label>
        <input type="text" name="email" id="mail">
        <br>
        <span id="error"></span>
        <label>
          <span>mot de passe</span>
          <input type="password" name="password">
        </label>
        <button class="submit" type="button">S' inscrire</button>
        <p class="forgot-pass">Mot de passe oublie ?</p>
      </form>
      

      <div class="social-media">
        <ul>
          <li><img src="../../../assets/image de la grille/images/facebook.png"></li>
          <li><img src="../../../assets/image de la grille/images/twitter.png"></li>
          <li><img src="../../../assets/image de la grille/images/linkedin.png"></li>
          <li><img src="../../../assets/image de la grille/images/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Nouveau ici?</h2>
          <p>Inscrivez-vous et découvrez une grande quantité de nouvelles opportunités!</p>
        </div>
        <div class="img-text m-in">
          <h2>Un de nous?</h2>
          <p>Si vous avez déjà un compte, connectez-vous. Vous nous avez manqué !</p>
        </div>
        <div class="img-btn">
          <span class="m-up">S'inscrire</span>
          <span class="m-in">S'identifier</span>
        </div>
      </div>
      
      <div class="form sign-up">
        <h2>S'inscrire</h2>
        <form action="userspace.php">
          <label>
            <span>Nom</span>
            <input type="text">
          </label>
          <label>
            <span>Email</span>
            <input type="email">
          </label>
          <label>
            <span>Mot de passe</span>
            <input type="password">
          </label>
          <label>
            <span>Confirmez le mot de passe</span>
            <input type="password">
          </label>
          <button type="button" class="submit">S'inscrire maintenant</button>
        </form>
        
      </div>
    </div>
  </div>
<script type="text/javascript" src="../../../assets/js/script.js"></script>
</body>
</html>