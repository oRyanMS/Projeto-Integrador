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
    <meta name="keywords" content="Sample Headline, Sample Headline">
    <meta name="description" content="">
    <title>Representatividade Feminina</title>
    <link rel="stylesheet" href="../nicepage.css" media="screen">
    <link rel="shortcut icon" href="/Site PI/images/LogoMulheres.png" type="image/x-icon">
<link rel="stylesheet" href="Página-Inicial.css" media="screen">
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site PI",
		"logo": "../images/TesteMulheres.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Representatividade Femininal">
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
    <section class="u-clearfix u-section-1" id="sec-5f0b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel" class="u-carousel u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
            <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="1"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="2"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="3"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-image u-shading u-slide u-image-1" data-image-width="700" data-image-height="466">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-text u-text-white u-text-1">Saiba mais sobre a história de Glória Maria</p>
                <a href="Página-Inicial.php#sec-8aa7" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-hover-palette-3-base u-text-palette-2-base u-btn-1">Veja mais.</a>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-image u-shading u-slide u-image-2" data-image-width="336" data-image-height="401">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-2">Conheça mais sobre Lynn Conway</p>
                <a href="Página-Inicial.php#carousel_79c1" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-2-base u-btn-2">Veja mais</a>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-image u-slide u-image-3" data-image-width="1440" data-image-height="1800">
              <div class="u-container-layout u-valign-bottom u-container-layout-3">
                <p class="u-text u-text-body-alt-color u-text-default u-text-3">Conheça a incrível história de Myrian Krexu </p>
                <a href="Página-Inicial.php#carousel_2dce" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-hover-palette-3-base u-text-palette-2-base u-btn-3">Veja mais</a>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-image u-slide u-image-4" data-image-width="2048" data-image-height="1536">
              <div class="u-container-layout u-container-layout-4">
                <p class="u-text u-text-default u-text-white u-text-4">Conheça mais sobre&nbsp;Katherine Johnson</p>
                <a href="Página-Inicial.php#carousel_fa98" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-hover-palette-3-base u-text-palette-2-base u-btn-4">Veja Mais</a>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">+Previous</span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">+Next</span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-ff02">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="../images/2004580.png" alt=""></span>
                <h3 class="u-align-center u-text u-text-default u-text-1">Desenvolvedores</h3>
                <p class="u-align-center u-text u-text-2">Saiba mais sobre os desenvolvedores&nbsp;<br>desse projeto na aba "Sobre" no canto superior direito ou clique em "saiba mais".
                </p>
                <a href="Sobre.php" class="u-active-none u-border-2 u-border-hover-palette-2-dark-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">saiba mais</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-icon-2"><img src="../images/3298995.png" alt=""></span>
                <h3 class="u-align-center u-text u-text-default u-text-3">Comunidade</h3>
                <p class="u-align-center u-text u-text-4">Venha fazer parte da nossa comunidade clicando em "Saiba mais"&nbsp; ou indo na aba "Comunidade" no canto superior direito.<br>
                  <br>
                </p>
                <a href="Comunidade.php" class="u-active-none u-border-2 u-border-hover-palette-2-dark-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">Saiba mais</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-icon-3"><img src="../images/5569162.png" alt=""></span>
                <h3 class="u-align-center u-text u-text-default u-text-5">Segurança</h3>
                <p class="u-align-center u-text u-text-6">Você está completamente seguro em nosso site. Venha se cadastrar para poder compartilhar a sua história de forma anônima.</p>
                <a href="Cadastro.php" class="u-active-none u-border-2 u-border-hover-palette-2-dark-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-3">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-8aa7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-image-1" src="../images/gloria-maria-2018-220171204_0003.webp" alt="" data-image-width="1125" data-image-height="750">
        <h1 class="u-text u-text-1">Glória Maria</h1>
        <p class="u-text u-text-2">&nbsp; &nbsp;Glória Maria Marta da Silva, nasceu no dia 15 de agosto em 1949 cresceu no Rio de Janeiro, bairro Vila Isabel com a sua mãe (Edna Alves Marta), que era dona de casa e o seu pai (Cosme Braga da Silva) era alfaiate. Ela estudou toda a sua vida em escolas públicas , se destacando pela excelência em redações e com 16 anos. Trabalhou como telefonista na Companhia Telefônica Brasileira, ingressando aos 18 anos na PUC-Rio cursando jornalismo.<br>
          <br>&nbsp; &nbsp;Sua Carreira:&nbsp;<br>
          <br>(1970) Por uma indicação de uma amiga, a Glória Maria foi aceita como estagiária jornalística na companhia da Rede Globo - Rio de Janeiro, efetivando-se no mesmo ano, tendo a sua primeira reportagem um ano após, (20 de novembro de 1971) ascendendo-se rapidamente na carreira, se tornando âncora do RJTV, também trabalhou como repórter no Jornal Hoje e Jornal Nacional até 1986.<br>
          <br>&nbsp; &nbsp;Fantástico:&nbsp;<br>
          <br>(1986) Glória Maria se integrou ao grupo de reportagem do fantástico. <br>(1998) viajou mais de 100 países entrevistando e conhecendo diversas celebridades, dentre eles ( Michael Jackson, Harrison Ford, Madona, Usain Bolt, etc...)<br>Depois de 10 anos sendo repórter do fantástico ela pediu licença para prosseguir com os seus projetos pessoais, trabalhando como voluntária na Nigéria e Índia<br>(2010) Retornando de sua licença, a Glória passou a reportar nas câmeras do Globo Repórter, estreando uma matéria sobre "Brunei Darussalam- A morada da Paz",  no sudeste Asiático<br>âncora: Sérgio Chapelin<br>Cada viajem a repórter apresenta várias matérias local, apresentando os seus costumes e paisagens e religiões <br>Já apresentou no Gran Canyon, Dubai, França, Vietnã, Suécia, Marrocos, Lapônia, Jamaica, e muitos outros locais incríveis atuando até nos dias de hoje<br>
          <br>Glória Maria: Considerada a Primeira repórter Negra na TV Brasileira. <br>
          <br>Alguns trechos de reportagens abaixo, evidenciando o preconceito sofrido durante algumas de suas entrevistas no Regime Militar  com o Presidente João Batista Figueiredo<br>"Discurso do prendo e arrebento" <br> Glória:" É a TV Globo, o jornal Nacional, será que o senhor poderia repetir?" <br>Presidente: "Problema seu, não vou repetir" <br>[...] <br>Logo depois Glória corrigiu o Português de Figueiredo que não gostou mandando-a se retirar <br>Presidente: " A senhora retire-se daqui"<br>Comentário da Glória: "Desde esse dia ele passou a me odiar. E onde eu chegava, dizia para o segurança, 'Não deixa aquela neguinha chegar perto de mim'"<br>
          <br>"Já sofri preconceitos por ser mulher, negra e por ter vindo de família pobre, mas fui vencendo eles com trabalho, dignidade e humildade.Por fim, tudo foi superado" <br> - Glória Maria&nbsp;<br>
          <br>Glória Maria foi homenageada pela Câmera Municipal do Rio de Janeiro, em 2008, com a Medalha Chiquinha Gonzaga.
        </p>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="carousel_79c1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-image-1" src="../images/Lynn-Conway-scaled.jpg" alt="" data-image-width="2560" data-image-height="2466">
        <h1 class="u-text u-text-1">Lynn Conway</h1>
        <p class="u-text u-text-2">&nbsp; &nbsp;Lynn Ann Conway nasceu em 2 de janeiro de 1938 e cresceu em Nova York. Entrou no curso de Física no Instituto de Tecnologia de Massachusetts (MIT) e participou do clube de vela da universidade. Entretanto, abandonou o curso em 1958 depois de uma tentativa falha de transição de gênero. Entrou na Universidade de Columbia depois de passar um tempo nos Estados Unidos e além de se graduar, fez mestrado em Engenharia Elétrica. Em 1964, foi contratada pela divisão  de arquitetura de computadores no IBM Research, em Nova York. Lynn era a única mulher de sua equipe, liderou pesquisas e construiu uma lógica usada nos melhores processadores até hoje. Ao conhecer o Dr. Harry Benjamin, famoso médico e sexólogo alemão, descobriu a cirurgia de readequação genital e deu início a sua transição. Porém, ela revelou sua intenção de transição de gênero, o que resultou em sua injusta demissão da IBM, apesar de suas contribuições. <br>
          <br>&nbsp; &nbsp;Com a conclusão de sua transição, um novo nome e identidade oficiais, Lynn reiniciou sua carreira como uma ainda em 1968.Alguns anos depois ela se juntou à equipe da Xerox PARC e desenvolveu sua maior contribuição para Computação: o design de sistemas VLSI, que anos depois resultou no livro Introduction to VLSI Systems, utilizado como base em currículos de arquitetura de computadores. Em 1985, Lynn se tornou professora de Engenharia Elétrica e Ciência da Computação na Universidade de Michigan, e em 1987, conheceu Charlie, com quem se casou em 2002. Além disso, ela foi consultora de instituições como o MIT e o Departamento de Defesa dos Estados Unidos, e recebeu quatro doutorados honorários.<br>
          <br>&nbsp; &nbsp;Pesquisadores encontraram a antiga pesquisa de Lynn na IBM no final da década de 90, e ela aproveitou a oportunidade para finalmente revelar seu passado, tanto para pessoas próximas quanto para a sociedade. Ela passou a atuar na luta dos direitos das pessoas transgênero, sendo nomeada como uma das 21 pessoas transgênero que influenciaram a cultura estadunidense pela revista Times Magazine.<br>
          <br>&nbsp; &nbsp;Em 2020 Lynn foi convidada pela IBM para receber o Lifetime Achievement Award, e a empresa ofereceu um pedido formal de desculpas por sua demissão em 60.
        </p>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_2dce">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-image-1" src="../images/MyrianKrexu.jpg" alt="" data-image-width="640" data-image-height="960">
        <h1 class="u-text u-text-1">Myrian Krexu</h1>
        <p class="u-text u-text-2">&nbsp; &nbsp;Myrian Krexu, do povo Guarani Mbyá, é a primeira cirurgiã cardíaca indígena do Brasil que, após concluir o ensino médio, ingressou para uma universidade pública de medicina, a Unioeste (Universidade Estadual do Oeste do Paraná), recebendo o diploma em 2013. Agora com 32 anos, a médica busca unir o desenvolvimento científico da área com a medicina tradicional da aldeia. <br>
          <br>&nbsp; &nbsp;Após quebrar o braço quando criança, seu pai a levou pela primeira vez de encontro com a figura do médico, que chamou de “pessoa que consertava gente”. Como desde pequena ela gostava de desmontar e remontar peças, surgiu o desejo de se consertar pessoas, porém não só simplesmente consertar algumas “engrenagens”, como ela caracterizou, mas todo o “motor” que faz o corpo funcionar, ou seja, o coração. <br>
          <br>&nbsp; &nbsp;Segundo Myrian: “A arte de curar é tão antiga quanto a dor”, uma vez que se existe dor, existe um modo de tratá-la. Assim como outros povos ancestrais, os povos indígenas desenvolveram sua própria maneira de curar a dor, sendo esse um processo muito natural dentro das aldeias. Antes de se tornar cirurgiã cardiovascular, ela atuou durante três anos com a saúde indígena de sua própria aldeia, bem como de outras comunidades indígenas, e declara que as visões de mundo quando se é médico para quando se é indígena são diferentes em vários aspectos. Sendo assim, os povos indígenas têm seu próprio modo de cuidar da saúde e, da mesma maneira que as definições de saúde da OMS (Organização Mundial da Saúde), elas unem vários ângulos, não somente os pontos físicos, mas sociais, emocionais e espirituais também. <br>
          <br>&nbsp; &nbsp;Além disso, a médica alega que de início o desafio foi unir as medicinas (a medicina alopática, a medicina científica e a medicina tradicional indígena) e compreender seu limite enquanto médica na sua forma de trabalhar junto com a comunidade indígena para trazer o processo de cura sem interferir na medicina tradicional. Contudo, o que antes parecia um grande obstáculo, com o tempo se mostrou extremamente complementar, em vez de excludente. <br>
          <br>&nbsp; &nbsp;Desse modo, Myrian Krexu reitera que muitos profissionais de saúde que vão às aldeias ignoram toda a parte tradicional da região e visam somente curar através de remédios e antibióticos industrializados, algo que é considerado um grande equívoco por parte da cirurgiã, já que essas populações possuem um vasto conhecimento em sua tradição de chá de ervas para curar doenças. Vale lembrar que, a evolução da nossa medicina está diretamente ligada com a observação das práticas desses povos que viviam em contato direto com a natureza, originando vários medicamentos atuais com conhecimentos e raízes indígenas que não precisam ser excluídas quando o assunto é curar, mas sim unidas. Diante disso, um dos seus desejos particulares envolve evitar o uso exacerbado de medicamentos sintéticos em ocasiões mais simples, como resfriados, optando pela medicina alternativa e contribuindo para esse resgate cultural. <br>
          <br>&nbsp; &nbsp;Dentre os marcos importantes de destaque na vida de Myrian está a ida para a universidade, visto que naquela região não existiam pessoas parecidas com ela, não havia outros indígenas, pessoas da sua cor ou cultura: “Eu era um patinho feio”, diz. Além disso, a própria passou fome na época da universidade devido a questões financeiras, porém afirma que o apoio da sua comunidade foi o mais importante para a superação de tudo. <br>
          <br>&nbsp; &nbsp;Nas comunidades indígenas a mulher tem o papel do ensino, por isso, é de costume afirmar que as mulheres anciãs são a biblioteca da aldeia, por difundirem o conhecimento. Myrian diz que aprendeu a ler com a sua avó, essa que aprendeu a ler sozinha e acreditava no quanto a educação seria importante para o futuro das pessoas. A partir disso, se mostra a importância da valorização desse tipo de conhecimento vindo de mulheres mais velhas: “Dentro da aldeia é parar para escutar, entender que quando essas avós se vão, se você não escutou essa biblioteca, ela foi queimada, então eu não posso recorrer mais a um livro fechado”. <br>
          <br>&nbsp; &nbsp;Por fim, diante de todos os seus desejos para a união das medicinas em prol da progressão do conhecimento, em relação à evolução científica em países como o Brasil, a médica questiona: “Fico imaginando essas pessoas de boa vontade, se elas tivessem mais recursos, mais incentivos à pesquisa, onde estariam. Onde nós estaríamos, coletivamente, se tivéssemos mais educação e pesquisa no Brasil?”.
        </p>
      </div>
    </section>
    <section class="u-clearfix u-section-6" id="carousel_fa98">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-image-1" src="../images/katherine-johnson.webp" alt="" data-image-width="1024" data-image-height="682">
        <h1 class="u-text u-text-1">Katherine Johnson</h1>
        <p class="u-text u-text-2">&nbsp; &nbsp;Katherine Coleman Goble Johnson, nasceu no dia 26 de agosto em 1918 em White Sulphur Springs, Virgínia - EUA. Viveu sua infância no condado de Greenbrier, com seu pai Joshua Coleman, que era madeireiro, carpinteiro e agricultor, sua mãe Joylette Coleman, que era ex-professora, e mais quatro irmãos. Seus pais sempre incentivaram a educação acadêmica de seus filhos, e devido a segregação racial da época tiveram que matricular as crianças em outro condado, já que onde moravam não oferecia escola para estudantes negros após a oitava série. Desde de pequena Katherine demonstrou seu gosto e talento por matemática, sendo que aos 10 anos de idade já estava cursando o ensino médio no condado de Kanawha, no Instituto, conhecido atualmente como Universidade de West Virginia. Ao terminar o ensino médio com 14 anos, iniciou os estudos na faculdade aos 15 anos, onde estudou em todos os cursos que ofereciam matemática.<br>
          <br>&nbsp; &nbsp;Sua carreira:<br>
          <br>(1937) Katherine se graduou em matemática e francês aos 18 anos, na Universidade Estadual de West Virginia. Até então recebeu o apadrinhamento de vários professores, incluindo a matemática e química Angie Turner King e W.W. Schiefflin Claytor, o terceiro negro a receber um doutorado em matemática no país. <br>
          <br>Após sua formação na faculdade iniciou sua carreira como professora em escola pública para negros. Teve seu início de carreira interrompido durante um tempo quando se casou e teve três filhas.<br>
          <br>(1953) Retornou ao mercado de trabalho quando foi aceita em uma das vagas para cientistas negras na NACA(Comitê Nacional para Aconselhamento sobre Aeronáutica), a então NASA.<br>
          <br>(1953-1958) Atuou na “Unidade de Computação da Área Oeste” do Laboratório Langley, na NACA, como analista de tópicos, para a redução da rajada nas aeronaves. Sua equipe era composta por ela e mais duas cientistas negras, no local de trabalho sofriam com a segregação racial, tendo que comer e usar banheiros separados de seus colegas brancos.<br>
          <br>(1959) Trabalhou no desenvolvimento dos cálculos da trajetória de voo do primeiro norte-americano no espaço, Alan Shepard.<br>
          <br>(1961) Realizou o cálculo da janela de lançamento do Projeto Mercury.<br>
          <br>(1969) Realizou os cálculos essenciais para o sucesso da missão Apolo 11, que levou o primeiro homem a pisar na Lua, Neil Armstrong.<br>
          <br>(1986) Aposentou após 33 anos de carreira.<br>
          <br>(2015) Recebeu do presidente Barack Obama a condecoração, Medalha da Liberdade, por seu destaque em sua carreira.<br>
          <br>(2016) Foi estreado o filme baseado na história de Katherine e suas duas colegas de trabalho na NASA, Dorothy Vaughn e Mary Jackson, que juntas calcularam as trajetórias de voo do Projeto Mercury e do Apollo 11. E nesse mesmo ano teve seu nome incluído na lista de 100 mulheres mais inspiradoras e influentes pela BBC.<br>
          <br>"Eu encontrei o que eu estava procurando em Langley. Isso era o que uma matemática de pesquisa fazia. Eu fui trabalhar todos os dias, por 33 anos, feliz. Nunca me levantei e disse: Eu não quero ir trabalhar." <br>Katherine Johnson<br>
          <br>Katherine veio a falecer aos 101 anos de ideia, no dia 24 de fevereiro de 2020.<br>
        </p>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b049"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">DIREITOS RESERVADOS AO GRUPO - REPRESENTATIVIDADE FEMININA - 2022</p>
      </div></footer> 
    </section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 20px; bottom: 20px; padding: 10px; background-image: none;" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-80 u-palette-2-base" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  
</body></html>