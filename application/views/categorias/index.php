<?php defined('SYSPATH') or die('No direct script access.');?><?php echo $head; ?>
<body id="body" class="page -blog -affix-header" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php echo $header;?>

  <div class="hero -blog grid fade-in"> 
    
    <div class="aside-menu" role="complementary">
      <header class="aside-nav-header cf">
        <button class="btn-toggle-menu" data-href="#asideNav" type="button" name="button"><i class="fa fa-bars c-white" role="img"></i></button>
        <h3 class="aside-nav-header--title">Blog menu</h3>
      </header>
      <nav class="aside-nav" id="asideNav" role="navigation">
        <ul class="list -menu -medium -table list-tags blog-menu" id="blogMenu" role="menubar">
		<?php echo $categoria;?>

          <li class="refine-search" role="menuitem">
             <form class="form form-search cf" name="busca" action="<?php echo URL::base(true);?>post/busca/" method="post">
              <input class="input -search -text fade-in" id="searchBlog" type="text" name="busca" placeholder="Buscar por notícia" required/>
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
        
           <?php echo $postsleft; ?>
        </div>
		
		<?php echo $paginacao; ?>

        
      </div>
      <div class="list-blog -aside col s-1 m-3 l-3">
        <h2 class="title page-title">Mais Lidas</h2>
        <div class="news-list gutter-l" itemscope="itemscope" itemtype="http://schema.org/ItemList">
          
            <?php echo $postsidebar;?>
          
        </div>
      </div>
    </div>
  </main>

  <?php echo $footer; ?>

  <script type="text/javascript" src="<?php echo URL::base(true)?>js/scripts.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base(true)?>js/main.js"></script>
</body>

</html>
