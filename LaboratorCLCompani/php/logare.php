<?php 
//session_start();
if(!isset($success)){
    $success = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bun venit CL COMPANI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

   <link href='https://css.gg/add.css' rel='stylesheet'>
   <link href='https://css.gg/calendar-dates.css' rel='stylesheet'>
   <link href='https://css.gg/facebook.css' rel='stylesheet'>
   <link href='https://css.gg/instagram.css' rel='stylesheet'>
   <link href='https://css.gg/add-r.css' rel='stylesheet'>
   <link href='https://css.gg/user-add.css' rel='stylesheet'>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href='https://css.gg/youtube.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" type="text/css" href="../css/cont.css">
  
</head>
<body>
  <div class="home" >
    <header class="header">
      <div class="main">
        <ul class="main-nav">
            <li>
              <a href="../pages/creditt.html">
                <svg viewBox="0 0 30 30" style="width: 20px; height: 20px;">
                  <path class="tm-stroke-svg" d="M13.2,9.8c0,3.5-1.8,5.3-5.3,5.3c-3.6,0-5.3-1.7-5.3-5.3s1.8-5.3,5.3-5.3C11.4,4.5,13.2,6.2,13.2,9.8z    M9.7,9.8c0-0.8-0.1-1.3-0.4-1.7C9,7.8,8.6,7.6,7.9,7.6S6.7,7.8,6.5,8.1C6.2,8.4,6.1,9,6.1,9.8s0.1,1.3,0.4,1.7   C6.8,11.8,7.2,12,7.9,12s1.2-0.2,1.4-0.5C9.5,11.1,9.7,10.5,9.7,9.8z M20.8,4.9c1.5,0,1.7,0.3,1,1.6l-9.2,17.1   c-0.7,1.3-1.2,1.6-2.7,1.6H9.3c-1.5,0-1.7-0.3-1-1.6l9.1-17.1c0.7-1.3,1.2-1.6,2.7-1.6C20.2,4.9,20.8,4.9,20.8,4.9z M27.5,20.2   c0,3.5-1.8,5.3-5.3,5.3c-3.6,0-5.3-1.7-5.3-5.3s1.8-5.3,5.3-5.3C25.7,15,27.5,16.7,27.5,20.2z M24,20.2c0-0.8-0.1-1.3-0.4-1.7   c-0.3-0.3-0.7-0.5-1.4-0.5c-0.7,0-1.2,0.2-1.4,0.5c-0.3,0.3-0.4,0.9-0.4,1.7s0.1,1.3,0.4,1.7c0.3,0.3,0.7,0.5,1.4,0.5   c0.7,0,1.2-0.2,1.4-0.5C23.8,21.6,24,21,24,20.2z"></path>
                </svg>   
                Credit
              </a>
            </li>
            <li>
              <a href="../pages/livrare.html">
                <svg viewBox="0 0 30 30" style="width: 24px; height: 24px; margin-top: -1px;">
                    <path class="tm-stroke-svg" d="M18.8,21.4h-5.7"></path>
                    <path class="tm-stroke-svg" d="M7.4,21.4H5.2c-0.2,0-0.4-0.2-0.4-0.4L6,6.4c0-0.2,0.2-0.3,0.4-0.3h14.2c0.2,0,0.4,0.2,0.4,0.4l-0.4,4.8h2.2 c2.8,0,5,2.4,4.7,5.1l-0.4,4.7c0,0.2-0.2,0.3-0.4,0.3h-2.3"></path>
                    <path class="tm-stroke-svg" d="M5.3,15.6h14.2c0.3,0,0.6-0.3,0.7-0.6l0.3-3.8"></path>
                    <ellipse class="tm-stroke-svg" cx="21.6" cy="21.3" rx="2.6" ry="2.6"></ellipse>
                    <ellipse class="tm-stroke-svg" cx="10.3" cy="21.3" rx="2.6" ry="2.6"></ellipse>
                    <line class="tm-stroke-svg" x1="2.5" y1="8.6" x2="13.9" y2="8.6"></line>
                    <line class="tm-stroke-svg" x1="16.1" y1="10.9" x2="9.6" y2="10.9"></line>
                </svg>
                  Livrare
              </a>
            </li>
        </ul>
      </div>

      <div class="log">
        <a href="../index.html"><img src="../img/index_home/logo.jpg" alt="" height="40vh"></a>
      </div>
      <div class="contacte">
        <a href="contacte.html">Contact Vânzări</a>
        <a href="#tel:060996967">0 60 996 967</a>
      </div>
  </header> 

   <div class="cat_b" id="categorii_b" onclick="openCategorii();" ondblclick="closeCategorii();" >
            <a href="../pages/smartphone.html">Smartphones</a>
            <hr>
            <a href="../pages/tablete.html">Tablete</a>
      </div>
  <div class="util">
    <div class="categorii" onclick="openCategorii();" ondblclick="closeCategorii();">
      <a >
        <i class="fa fa-bars" style=" width: 10px; color: white;"></i>
        <a><h3>Categorii</h3></a> </a>
  </div>

  <div class="cautare">
    <form class="example" >
        <input type="text" placeholder="Caută produsul dorit" name="search2">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
            </form>
  </div>
    <div class="personal">    
        <a href="logare.php">
          <img src="../img/index_home/user.png" width="30px" height="30px" style="margin-right:16px; ">
        </a>  
        <a href="../php/inregistrare.php">
          <img src="../img/index_home/register.png" width="30px" height="30px" style="margin-right:16px; ">
        </a>   
        <a href="../pages/cos.html">
          <img src="../img/index_home/shopping-bag.png" width="35px" height="35px">
        </a>
    </div>
  </div>

  <div class="content-area content-area-contacts">
    <div class="contact_us"> 
    <br>
    <h1 style="color: white;">Logare</h1>

    <p id="alert_error_message"></p>
<div class="form_container">

    <form action="log-validation.php" id="form" class="login_form" method="post">
             <br>
            <input type="text" id="email" name="email" placeholder="Email">
            <br>
            <p class="error_form" id="email_error_2"></p>
            <input type="password" id="password" name="password" placeholder="Password">
            <br>
            <br>
        <p class="error_form" id="password_error_message"></p>
        <input type="submit" id="submit" value="Confirm" name="submit">
        <br><br>
        <p id="validationText"></p> 
    </form>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>


</article>    
    <footer>
      <div class="footer">
        <div class="footer-p1">
          <p><b>Companie</b></p>
          <p><a href="../pages/contacte.html">Contacte</a></p>
          <p><a href="../pages/creditt.html">Credit</a></p>
        </div>
        <div class="footer-p2">
          <p><b>Electrice</b></p>
          <p><a href="../pages/smartphone.html">Smartphone-uri</a></p>
          <p><a href="../pages/tablete.html">Tablete</a></p>
        </div>
        <div class="footer-p3">
          <p><b>Util</b></p>
          <p><a href="../pages/sfaturi.html">Sfaturi Utile</a></p>
          <p><a href="../pages/noutati.html">Noutăți</a></p>
          <p><a href="../pages/promotii.html">Promoții</a></p>
        </div>
        <div class="footer-p4">
          <p><b>Comenzi și livrare</b></p>
          <p><a href="../pages/cont.html">Contul meu</a></p>
        </div>
        <div class="footer-p5">
          <p><b>Suport Clienți</b></p>
          <p><a href="../pages/client_mesaj.html">Contactați-ne</a></p>
        </div>
      </div>
    </footer>     
    <div class="copyright">
      <p>Copyright © 2022</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../javascript/cont.js"></script>
    <script type="text/javascript" src="../javascript/categorii.js"></script>
</body>
</html>