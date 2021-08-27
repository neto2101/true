<?php

 
  session_start();
 if (isset($_SESSION['id_user_end'])){
    header('Location: feed/');
    
  } 


$error = $_GET['status'];

echo "<html lang='es'>
<!DOCTYPE html>
<head>


<link href='https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap' rel='stylesheet'>

  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <meta name='description' content='True el website donde podrás encontrar la verdad de todas las personas'>
  <meta name='author' content='Ernesto Cazares'>

  <title>True - conoce la verdad de todos</title>

  <!-- Bootstrap core CSS -->
  <link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>

  <!-- Custom fonts for this template -->
 <link href='css/font/css/all.min.css' rel='stylesheet' >

  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' rel='stylesheet'>

  <!-- Custom styles for this template -->
  <link href='css/grayscale.css' rel='stylesheet'>
<link href='css/animate.css' rel='stylesheet'>

</head>

<body>
    
    



<div class='masthead-movil ocultar-div-mobile h-100'>



 <div class='container'>
       <div class='row  d-flex justify-content-center masthead-index'>
        <a class='navbar-brand js-scroll-trigger' href='#page-top'><img src='img/logos_true/logo-white.png' class='logo-index animated jackInTheBox'width='180px' class='pt-0'> </a>
        
        <div class='col-lg-7 text-center'>
         <br>
        <h5 class='text-white animated fadeIn'>Descrubre lo que las personas estan hablando de ti.</h5>
       </div>
        
       </div>
        
        
        

    <div class='col-lg-12 '>
    <br><br>
      <form method='post' id='login' name='login' action='sql/session_star_now.php'>
          <div class='col-lg-12'>
           <small class='text-white'>Correo electronico o nombre de usuario</small>
          <input type='text' id='password' class='fadeIn third' name='mail' > 
          <br><br>
          <small class='text-white'>Contraseña</small>
           <input type='password' id='password' class='fadeIn third text' name='password' >
              <small class='text-white'>¿Olvidaste tu contraseña?</small>
            
            <br> <br>
             <div class='row  d-flex justify-content-center text-black ml-2 mr-2  pb-1'>
       
           
             
             <div class='col-7 text-center pr-1 pl-2  ml-3  pt-3 boton-login-singup-up animated  bounceIn'>
                 <a onclick='javascript:submitform()' style='none'> <p class='text-white'>Iniciar sesión </p>  </a>
             </div>
             
             
        </div>
           
            
              ";
              
        if($error==404){
            echo" <div class='row d-flex justify-content-center '>
                 <div class=' text-center text-white ' role='alert' id='erroralert'>
  <strong>Ups!</strong> te has equivocado.
 
</div>";
        } else {
             echo" <div class='row d-flex justify-content-center '>
                 <div class='alert   text-center text-white ' role='alert' style='display:none' id='erroralert'>
  <strong>Ups!</strong> te has equivocado.
 
</div>";
        }
          
             echo"   
                 
         
           </div>
           
              
         
           
        
           
           </div>
          
      </form>      
        
        
      <br> <br> <br> 
        
    </div>
    
    





        
        
        
        <div class='row text-black ml-2 mr-2  pb-5'>
       
            <div class='col-5 text-center pr-2 pl-1 mr-3 ml-3 pt-3 boton-login-singup animated  bounceIn'>
              <a onclick='javascript:redi_registro()' > <p> Registrarme </p> </a>
             </div>
             
              <div class='col-5 text-center pr-1 pl-2  ml-3  pt-3 boton-login-singup animated  bounceIn'>
                 <p>Conocenos </p>
             </div>
             
             
        </div>
       
 </div>
    
</div>





  <!-- Bootstrap core JavaScript -->
  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src='https://www.gstatic.com/firebasejs/7.14.3/firebase-app.js'></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src='https://www.gstatic.com/firebasejs/7.14.3/firebase-analytics.j'></script>

  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src='https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js'></script>
<script src='https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js'></script>
     <script src='login.js'></script>
  <script src='vendor/jquery/jquery.min.js'></script>
  <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

  <!-- Plugin JavaScript -->
  <script src='vendor/jquery-easing/jquery.easing.min.js'></script>

  <!-- Custom scripts for this template -->
  <script src='js/grayscale.min.js'></script>

</body>


";



?>

<script type="text/javascript">

function redi_registro(){
  window.location="reg/";
} 
</script>

<script type="text/javascript">
function submitform()
{
     var theForm = document.forms['login'];
     if (!theForm) {
         theForm = document.login;
     }
     theForm.submit();
}
</script>

<script>

setTimeout(function() { 
    $('#erroralert').fadeOut('fast'); 
}, 5000); // <-- time in milliseconds 


</script>

</html>