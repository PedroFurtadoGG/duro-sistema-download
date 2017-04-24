<?php defined('SYSPATH') or die('No direct script access.');?><?php include 'head.php'; ?>
<body id="body" class="page -blog -affix-header" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php include 'header.php'; ?>

  <div class="hero -blog grid fade-in">
    <div class="media">
      <span class="ratio ratio-16by9"></span>
      <a href="blog-interna.php" class="content -photo" style="background-image: url(img/thumbnail.jpg)" role="img"></a>
      <div class="content -caption -bottom">
        <a href="blog-interna.php">
          <h1 class="title -font">Excepteur sint occaecat cupidatat non proident</h1>
          <p class="caption">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </a>
        <a class="tag" href="#tag">Lorem ipsum dolor</a> <span class="datetime -date -blog">03.10.16</span>
      </div>
    </div>

    <div class="aside-menu" role="complementary">
      <header class="aside-nav-header cf">
        <button class="btn-toggle-menu" data-href="#asideNav" type="button" name="button"><i class="fa fa-bars c-white" role="img"></i></button>
        <h3 class="aside-nav-header--title">Blog menu</h3>
      </header>
      <nav class="aside-nav" id="asideNav" role="navigation">
        <ul class="list -menu -medium -table list-tags blog-menu" id="blogMenu" role="menubar">
          <?php for($i=0; $i<6; $i++) { ?>
            <li role="menuitem">
              <a class="tag" href="#tag">Lorem ipsum dolor</a>
            </li>
          <?php } ?>
          <li class="refine-search" role="menuitem">
            <form class="form form-search cf" name="formSearch" action="" method="">
              <input class="input -search -text fade-in" id="searchBlog" type="text" name="search_term_string" placeholder="Buscar por notícia" required/>
              <label class="label" for="searchBlog" title="Pesquisar Produtos"><i class="fa fa-search img-holder" role="img"></i></label>
              <button class="btn -icon -close-search" id="closeSearchBlog" type="button" name="closeSearchBlog"><i class="fa fa-times" role="img"></i></button>
              <input class="invisible" type="submit"/>
            </form>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <main id="mainContent" class="main-content grid" itemscope itemprop="mainContentOfPage" role="main">
    <div class="noticias -blog gutter-xl">
      <div class="list-blog col s-1 m-3x2 l-3x2">
        <div class="gutter-l" itemscope="itemscope" itemtype="http://schema.org/ItemList">
          <?php for($i=0; $i<6; $i++) { ?>
          <div class="noticia -item col s-2 m-2 l-2" itemscope itemtype="http://schema.org/Article">
            <div class="media">
              <div class="ratio ratio-16by9"></div>
              <a class="content -photo" href="blog-interna.php" style="background-image: url(img/thumbnail.jpg)" itemprop="image" role="img"></a>
            </div>
            <ul class="list -table noticia-details">
              <li><a class="tag" href="#tag" itemprop="about">Lorem ipsum dolor</a></li>
              <li><span class="datetime" itemprop="datetime">03.10.16</span></li>
              <li class="hidden-s"><span class="comments" itemprop="comments"><a href="<?php echo URL::base(true).'post/noticia/'.$slug.'/'; ?>"><i class="fa fa-comment-o" aria-hidden="true"></i> Comente</span></a></li>
            </ul>
            <h5 class="title" itemprop="name"><a href="blog-interna.php">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</a></h5>
          </div>
          <?php } ?>
        </div>
        <ul class="list -menu -inline -primary pagination">
          <li><a class="btn -primary" href="#!prev" title="Página anterior"><i class="fa fa-angle-left" role="img"></i></a></li>
          <?php for($i=1; $i<6; $i++) { ?>
          <li><a href="#!" title="Página X"><?php echo $i; ?></a></li>
          <?php } ?>
          <li><a class="btn -primary" href="#!next" title="Próxima página"><i class="fa fa-angle-right" role="img"></i></a></li>
        </ul>
      </div>
      <div class="list-blog -aside col s-1 m-3 l-3">
        <h2 class="title page-title">Destaques da semana</h2>
        <div class="news-list gutter-l" itemscope="itemscope" itemtype="http://schema.org/ItemList">
          <?php for($i=0; $i<6; $i++) { ?>
            <div class="noticia -item  col s-2 m-1 l-1" itemscope itemtype="http://schema.org/Article">
              <div class="media col s-1 m-3 l-3">
                <div class="ratio ratio-16by9"></div>
                <a class="content -photo" href="blog-interna.php" style="background-image: url(<?php echo URL::base(true)?>img/thumbnail-2.jpg)" itemprop="image" role="img"></a>
              </div>
              <div class="noticia-content col s-1 m-3x2 l-3x2">
                <h5 class="title" itemprop="name"><a href="blog-interna.php">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</a></h5>
                <small class="datetime" itemprop="datetime">03.10.16</small>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </main>

  <?php include 'footer.php'; ?>

  <script type="text/javascript" src="<?php echo URL::base(true)?>js/scripts.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base(true)?>js/main.js"></script>
</body>

</html>
