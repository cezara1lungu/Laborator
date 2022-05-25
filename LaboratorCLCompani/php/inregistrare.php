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
    <h1 style="color: white;">Inregistrare</h1>
    <br>

    <div class="form_container">
        <form action="inregistrare-validation.php" id="form" method="post">
            <input type="text" id="fname" name="fname" placeholder="Numele">
                <br>
            <p class="error_form" id="fname_error_message"></p>
            <input type="text" id="sname" name="sname" placeholder="Prenumele">
                <br>
            <p class="error_form" id="sname_error_message"></p>
            <input type="text" id="email" name="email" placeholder="Email">
                <br>
            <p class="error_form" id="email_error_message2"></p>
            <input type="password" id="password_1" name="password_1" placeholder="Password">
                <br>
            <p class="error_form" id="password_error_message"></p>
            <input type="password" id="password_2" name="password_2" placeholder="Confirmă password">
                <br>
            <p class="error_form" id="password_error_message2"></p>
            <input type="submit" id="submit" value="Confirm" name="submit">
            <br><br>
            <?php if(isset($fname_error)){ ?>
                <p class="php_error"> <?php echo $fname_error ?> </p>
            <?php } ?>
            <?php if(isset($sname_error)){ ?>
                <p class="php_error"> <?php echo $sname_error ?> </p>
            <?php } ?>
            <?php if(isset($email_error)){ ?>
                <p class="php_error"> <?php echo $email_error ?> </p>
            <?php } ?>
            <?php if(isset($password_error)){ ?>
                <p class="php_error"> <?php echo $password_error ?> </p>
            <?php } ?>
            <?php if(isset($password_error2)){ ?>
                <p class="php_error"> <?php echo $password_error2 ?> </p>
            <?php } ?>
            <?php if(!isset($fname_error) && !isset($semail_error) && !isset($email_error) && !isset($password_error) && !isset($password_error2)){ ?>
                <p class="php_error"> <?php echo $success ?> </p>
            <?php } ?>
        </form>
    </div>
</div>

<!--
<div class="container">
  <h1>Înregistrarea Profilului</h1>
  <form id="registration_form" >
  <div class="info">
    <div>
      <label>&nbsp Nume &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
      <input type="text" class="form_text" id="form_fname" name="form_fnam" ><br>
      <span class="error_form" id="fname_error_message"></span>
      <label id="nume"></label>	
    </div><br>
    <div>
      <label>&nbsp Prenume</label>
      <input type="text" class="form_text" id="form_lname"  name="form_lnam"><br>
      <span class="error_form" id="lname_error_message"></span>
      <label id="lname"></label>	
    </div><br>
    <div>
      <label>&nbsp Email</label>
      <input type="email" class="form_text" id="form_email"  name="form_emai"><br>
      <span class="error_form" id="email_error_message"></span>
      <label id="mail"></label>	
    </div><br>
    <div>
      <label>&nbsp Numărul &nbsp&nbsp&nbsp&nbsp</label>
      <input type="text" class="form_text" id="form_number" name="form_numbe" ><br>
      <span class="error_form" id="number_error_message"  ></span>
      <label id="tel"></label>	
    </div><br>
          <div>
      <label>&nbsp Adresa</label>
      <input type="text" class="form_text" id="form_adress" name="form_adres"><br>
      <span class="error_form" id="adress_error_message"></span>
      <label id="adresss"></label>	
    </div><br>
          <div>
      <label>&nbsp Profesia</label>
      <input type="text" class="form_text" id="form_job" name="form_job" ><br>
      <span class="error_form" id="job_error_message"></span>
      <label id="jobs"></label>	
    </div>
    </div>
       
    <hr>
    <div id="flip">
      <h1>Adăugați link-urile la rețelele sociale</h1>
      <center><i class="gg-add-r button"></i></center>
    </div>

    <div id="panel" class="left">
       <h3>Adauga link</h3>
       <div>
        &nbsp<input type="url"  id="form_link" >
          <span class="error_form" id="link_error_message"></span>
          <td></td>
          <label id="lin1">
            facebook
            <i class="gg-facebook"></i>
          </label>
    </div>	

    <div class="left">
      &nbsp<input type="url" id="form_link1" >
      <span class="error_form" id="link1_error_message"></span>
      <label id="lin2">
        instagram
        <i class="gg-instagram"></i>  
      </label>	
    </div>

    <div class="left">
      <div class="input_fields_wrap_2">
      <h3>Suplimentar</h3>
      <center><i class="gg-add-r add_field_button_2"></i></center>
    </div>
  </div>
</div>
  <center><input type="submit" class="sub" value="Submit" ></center>
</form>
</div>
-->
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
    <script src="../javascript/inregistrare-validation.js"></script>
    <script type="text/javascript" src="../javascript/categorii.js"></script>
</body>
</html>