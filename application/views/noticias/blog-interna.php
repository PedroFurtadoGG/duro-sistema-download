<?php defined('SYSPATH') or die('No direct script access.');?><?php echo $head; ?>
<body id="body" class="page -downloads" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php echo $header; ?>

  <section class="hero -blog -single grid">
    <figure class="media">
      <span class="ratio ratio-16by9"></span>
      <div class="content -photo" style="background-image: url(<?php echo $img; ?>)" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" role="img"></div>
      <div class="content -caption -bottom">
        <h1 class="title -font"><?php echo $titulo;?></h1>
      </div>
    </figure>
  </section>

  <main id="mainContent" class="main-content grid" itemscope itemprop="mainContentOfPage" role="main">
    <ul class="list -inline article-info cf">
      <li class="col s-1 m-2 l-2">
        <ul class="list -inline noticia-details">
          <li><a class="tag" href="<?php echo URL::base(true).'post/categoria/'.$slugcat.'/'; ?>" itemprop="about"><?php echo $categoria;?></a></li>
          <li><span class="datetime" itemprop="datetime"><?php echo $dtcadastro; ?></span></li>
          <li class="hidden-s"><span class="comments" itemprop="comments"><a class="scrollTo" href="#comentarios"><i class="fa fa-comment-o" aria-hidden="true"></i> Comente</span></a></li>
        </ul>
      </li>
      <li class="col s-1 m-2 l-2 list-share" id="share"></li>
    </ul>
    <div class="gutter-xl">
      <div class="col s-1 m-3x2 l-3x2" itemtype="http://schema.org/Article">
        <article class="article -main">
          <p class="text-medium">
          	<?php echo $texto;?>
          </p>
        </article>

        <section class="comentarios" id="comentarios">
          <h3 class="page-title">Comentários</h3>
          <form class="form form-comentario" id="formComentario" name="comentario" action="<?php echo URL::base(true);?>post/addcomentario/" method="post">
            <div class="gutter-m">
              <div class="input-group col s-1 m-1 l-1">
                <label for="mensagem">Deixe aqui o seu comentário <span class="c-red">*</span></label>
                <textarea class="input -textarea -mensagem" id="comentario" name="comentario"></textarea>
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
       <?php include('comentarios.php');?>
        </section>
      </div>
      <aside class="list-blog -aside col s-1 m-3 l-3">
        <h2 class="title page-title">Notícias relacionadas</h2>
        <div class="news-list gutter-l" itemscope="itemscope" itemtype="http://schema.org/ItemList">
          <?php echo $postsidebar;?>
        </div>
      </aside>
    </div>
  </main>

  <?php echo $footer; ?>

  <script type="text/javascript" src="<?php echo URL::base(true);?>js/scripts.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base(true);?>js/main.js"></script>
  

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
