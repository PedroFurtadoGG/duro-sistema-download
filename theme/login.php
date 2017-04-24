<?php include 'head.php'; ?>

<body id="body" class="page -login -account" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
 
  <header class="global-header-white grid section fade-in" id="globalHeader" role="banner" itemscope itemtype="http://schema.org/WPHeader">
    <div class="brand-holder fade-in hidden-s hidden-m" itemscope="" itemtype="http://schema.org/Organization">
      <a href="<?php echo URL::base(true)?>home" itemprop="url">
        <img class="logo -white" src="<?php echo URL::base(true);?>img/logo.png" alt="Duro PVC" itemprop="image" aria-hidden="hidden">
        <span class="invisible" itemprop="name">Duro PVC</span>
      </a>
    </div>
  </header>

  <main id="mainContent" class="main-content grid" itemscope itemprop="mainContentOfPage" role="main">
    <div class="section">
      <h1 class="title -login">Faça seu login na Duro PVC usando os dados informados pela gerência.</h1>
    </div>

    <div class="main login fade-in grid-inline gutter-l section -xlarge">
      <div id="boxLogin" class="box -form box-login col s-1 m-2 l-2">
        <h2 class="box-header -font">Já sou cadastrado</h2>
        <form class="form form-login" id="formLogin" action="" method="post">
          <div class="input-group">
            <label for="emailLogin">Digite seu E-mail <span class="c-red">*</span></label>
            <input class="input -email" id="emailLogin" name="emailLogin" type="email">
          </div>
          <div class="input-group">
            <label for="passwordLogin">Digite sua Senha <span class="c-red">*</span></label>
            <input class="input -password" id="passwordLogin" name="passwordLogin" type="password" autocomplete="off">
            <label class="login-forgot"><small class="link" id="linkRecuperarSenha">Esqueci minha senha</small></label>
          </div>
          <div class="actions">
            <button class="btn -contrast -medium btn-submit-login" id="btnSubmitLogin" name="btnSubmitLogin" type="submit">Entrar</button>
          </div>
        </form>
      </div>

      <div id="boxRecuperarSenha" class="box -form box-recuperar-senha fade-in col s-1 m-2 l-2" style="display:none;">
        <h2 class="box-header -font">Esqueceu sua senha?</h2>
        <p>Digite seu <strong>e-mail</strong> no campo abaixo, que te enviaremos uma nova senha.</p>
        <div class="form-container login-box">
          <form class="form form-login form-recuperar-senha" id="formRecuperarSenha" action="" method="post">
            <div class="input-group">
              <label for="recuperarSenhaEmail">Digite seu E-mail <span class="c-red">*</span></label>
              <input class="input -email" id="recuperarSenhaEmail" name="recuperarSenhaEmail" type="email">
            </div>
            <div class="actions">
              <strong class="link voltarLogin" role="button"><i class="fa fa-2x fa-angle-left"></i> Voltar</strong>
              <button class="btn -contrast -medium btn-submit-form" id="btnSubmitRecuperarSenha" name="submitRecuperarSenha" type="submit">Enviar a senha</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <?php echo $footer; ?>

  <script type="text/javascript" src="<?php echo URL::base(true);?>js/scripts.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base(true);?>js/main.js"></script>
</body>

</html>
