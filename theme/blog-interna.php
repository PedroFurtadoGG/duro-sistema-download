<?php include 'head.php'; ?>
<body id="body" class="page -blog-interna" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php include 'header.php'; ?>

  <section class="hero -blog -single grid">
    <figure class="media">
      <span class="ratio ratio-16by9"></span>
      <div class="content -photo" style="background-image: url(img/thumbnail-2.jpg)" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" role="img"></div>
      <div class="content -caption -bottom">
        <h1 class="title -font">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</h1>
      </div>
    </figure>
  </section>

  <main id="mainContent" class="main-content grid" itemscope itemprop="mainContentOfPage" role="main">
    <ul class="list -inline article-info cf">
      <li class="col s-1 m-2 l-2">
        <ul class="list -inline noticia-details">
          <li><a class="tag" href="#tag" itemprop="about">Lorem ipsum dolor</a></li>
          <li><span class="datetime" itemprop="datetime">03.10.16</span></li>
          <li class="hidden-s"><span class="comments" itemprop="comments"><a class="scrollTo" href="#comentarios"><i class="fa fa-comment-o" aria-hidden="true"></i> Comente</span></a></li>
        </ul>
      </li>
      <li class="col s-1 m-2 l-2 list-share" id="share"></li>
    </ul>
    <div class="gutter-xl">
      <div class="col s-1 m-3x2 l-3x2" itemtype="http://schema.org/Article">
        <article class="article -main">
          <p class="text-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>

        <section class="comentarios" id="comentarios">
          <h3 class="page-title">Comentários</h3>
          <form class="form form-comentario" id="formComentario" name="formComentario" action="" method="">
            <div class="gutter-m">
              <div class="input-group col s-1 m-1 l-1">
                <label for="mensagem">Deixe aqui o seu comentário <span class="c-red">*</span></label>
                <textarea class="input -textarea -mensagem" id="mensagem" name="mensagem"></textarea>
              </div>

              <div class="input-group col s-1 m-3 l-3">
                <label for="nome">Nome <span class="c-red">*</span></label>
                <input class="input -text -nome" id="nome" name="nome" type="text">
              </div>

              <div class="input-group col s-1 m-3 l-3">
                <label for="sobrenome">Sobrenome <span class="c-red">*</span></label>
                <input class="input -text -sobrenome" id="sobrenome" name="sobrenome" type="text">
              </div>

              <div class="input-group col s-1 m-3 l-3">
                <label for="email">E-mail <span class="c-red">*</span></label>
                <input class="input -email -email" id="email" name="email" type="email">
              </div>

              <div class="actions input-group col s-1 m-1 l-1">
                <button id="btnSubmit" class="btn -medium -primary" type="submit">Enviar</button>
              </div>
            </div>
          </form>
          <ul class="list-comentarios">
            <?php for($i=0; $i<4; $i++) { ?>
            <li class="comentario">
              <div class="comentario-header">
                <strong class="title name">Fulano de Tal</strong>
                <span class="subtitle datetime">03.10.16</span>
              </div>
              <p class="comentario-content caption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </li>
            <?php } ?>
          </ul>
        </section>
      </div>
      <aside class="list-blog -aside col s-1 m-3 l-3">
        <h2 class="title page-title">Notícias relacionadas</h2>
        <div class="news-list gutter-l" itemscope="itemscope" itemtype="http://schema.org/ItemList">
          <?php for($i=0; $i<6; $i++) { ?>
            <div class="noticia -item  col s-2 m-1 l-1" itemscope itemtype="http://schema.org/Article">
              <div class="media col s-1 m-3 l-3">
                <div class="ratio ratio-16by9"></div>
                <a class="content -photo" href="blog-interna.php" style="background-image: url(img/thumbnail.jpg)" itemprop="image" role="img"></a>
              </div>
              <div class="noticia-content col s-1 m-3x2 l-3x2">
                <h5 class="title" itemprop="name"><a href="blog-interna.php">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</a></h5>
                <small class="datetime" itemprop="datetime">03.10.16</small>
              </div>
            </div>
          <?php } ?>
        </div>
      </aside>
    </div>
  </main>

  <?php include 'footer.php'; ?>

  <script type="text/javascript" src="js/scripts.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/plugins/jssocials.min.js"></script>

  <script type="text/javascript">
    if (!!document.querySelector('#share')) {
      $("#share").jsSocials({
      	shares: [{
      		share: "facebook",
      		label: "Facebook"
      	}, {
      		share: "twitter",
      		label: "Twitter"
      	}, {
      		share: "pinterest",
      		label: "Pinterest"
      	}],
      	url: "http://nextsites.com.br/",
      	showLabel: true,
      	showCount: false,
      	shareIn: "popup",
      	on: {
      		click: function(e) {},
      		mouseenter: function(e) {},
      		mouseleave: function(e) {},
      	}
      });

    }
  </script>
</body>

</html>
