<!DOCTYPE html>
<?php
    session_start();

    $host = "localhost:3306";
    $database = "dadoslogin";
    $user = "root";
    $password = "";
    
    $conexao = mysqli_connect($host, $user, $password, $database);
    if (!$conexao){
        die("Não conectou" + mysqli_connect_error());
    }
?>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Representatividade Feminina</title>
    <link rel="stylesheet" href="../nicepage.css" media="screen">
    <link rel="shortcut icon" href="/Site PI/images/LogoMulheres.png" type="image/x-icon">
<link rel="stylesheet" href="Comunidade.css" media="screen">
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site PI",
		"logo": "../images/TesteMulheres.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Comunidade">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-header u-header" id="sec-8d4a"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="800" data-image-height="600">
          <img src="../images/TesteMulheres.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-2-base u-text-black u-text-hover-palette-3-base" href="Página-Inicial.php" style="padding: 10px;">Página Inicial</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-2-base u-text-black u-text-hover-palette-3-base" href="Sobre.php" style="padding: 10px;">Sobre</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-2-base u-text-black u-text-hover-palette-3-base" href="Comunidade.php" style="padding: 10px;">Comunidade</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-2-base u-text-black u-text-hover-palette-3-base" href="Login.php" style="padding: 10px;">Login</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Página-Inicial.php">Página Inicial</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sobre.php">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Comunidade.php">Comunidade</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav><span class="u-hover-feature u-icon u-text-palette-2-base u-icon-1" data-href="Login.php" title="Login"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 53 53" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ae07"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 53 53" x="0px" y="0px" id="svg-ae07" style="enable-background:new 0 0 53 53;"><path style="fill:#E7ECED;" d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53
	c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322
	c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546
	c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126
	c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24
	C20.296,39.899,19.65,40.986,18.613,41.552z"></path><g><path style="fill:#556080;" d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76
		c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633
		c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977
		s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53
		c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233
		c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z"></path>
</g></svg></span>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-92cf">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-palette-2-base u-text-1">Entre em Contato</h2>
        <h3 class="u-text u-text-default u-text-palette-2-base u-text-2">Faça contato com a nossa equipe</h3>
        <h4 class="u-text u-text-default u-text-palette-2-base u-text-3">e venha fazer parte desse projeto!</h4>
        <div class="u-form u-form-1">
          <form action="https://forms.nicepagesrv.com/Form/Process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-3b9a" class="u-label">Nome</label>
              <input type="text" placeholder="Digite seu nome" id="name-3b9a" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group u-label-top">
              <label for="email-3b9a" class="u-label">Email</label>
              <input type="email" placeholder="Insira um email válido" id="email-3b9a" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-message u-label-top">
              <label for="message-3b9a" class="u-label">Mensagem</label>
              <textarea placeholder="Deixe aqui a sua mensagem" rows="4" cols="50" id="message-3b9a" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <div class="u-align-left u-form-group u-form-submit u-label-top">
              <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-dark-1 u-palette-2-base u-btn-1">Enviar<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Muito obrigada! A sua mensagem será analisada. </div>
            <div class="u-form-send-error u-form-send-message"> Não conseguimos enviar a sua mensagem. Confira os dados dos campos acima e envie novamente. </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="6c807f206df3736cb09f564a42531b9d">
          </form>
        </div>
        <h5 class="u-text u-text-black u-text-default u-text-4">Deixe a sua mensagem dando o seu feedback para&nbsp;<br>o nosso site. Envie também uma sugestão de&nbsp;mulher<br>que você quer ver a história aqui.
        </h5>
        <h5 class="u-text u-text-black u-text-default u-text-5">Fique a vontade para mandar a SUA história aqui para<br>que ela seja compartilhada com outras pessoas. Ela<br>será revisada pela equipe e nenhum dado seu será&nbsp;<br>exposto.&nbsp;
        </h5>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b049"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">DIREITOS RESERVADOS AO GRUPO - REPRESENTATIVIDADE FEMININA - 2022</p>
      </div></footer>
</body></html>