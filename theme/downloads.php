<?php include 'head.php'; ?>
<body id="body" class="page -downloads" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php include 'header.php'; ?>

  <main id="mainContent" class="main-content grid" itemscope itemprop="mainContentOfPage" role="main">
    <div class="downloads grid section" id="downloads">
      <div class="section downloads-header">
        <h1 class="-font downloads-title">Downloads</h1>
        <form class="form form-search -downloads cf" name="formSearch" action="" method="">
          <input class="input -search -text fade-in search" id="searchDownloads" type="text" name="search_term_string" placeholder="Buscar por notícia" required/>
          <label class="label" for="searchDownloads" title="Pesquisar Produtos"><i class="fa fa-search img-holder" role="img"></i></label>
          <button class="btn -icon -close-search" id="closeSearchDownloads" type="button" name="closeSearchDownloads"><i class="fa fa-times" role="img"></i></button>
          <input class="invisible" type="submit"/>
        </form>
      </div>
      <ul class="list list-downloads gutter-l section">
        <li class="download-item col s-2 m-3 l-3">
          <a class="btn -primary" href="tile.png" download title="Constituição da República Federativa do brasil"><span class="name">Teste tes teste</span> <i class="fa fa-download"></i></a>
        </li>
        <li class="download-item col s-2 m-3 l-3">
          <a class="btn -primary" href="tile.png" download title="Constituição da República Federativa do brasil"><span class="name">Novo documento</span> <i class="fa fa-download"></i></a>
        </li>
        <?php for($i=0; $i<12; $i++) { ?>
        <li class="download-item col s-2 m-3 l-3">
          <a class="btn -primary" href="tile.png" download title="Constituição da República Federativa do brasil"><span class="name">Constituição da República Federativa do Brasil</span> <i class="fa fa-download"></i></a>
        </li>
        <?php } ?>
      </ul>
      <ul class="list -menu -inline -primary pagination">
        <li><a class="btn -primary" href="#!prev" title="Página anterior"><i class="fa fa-angle-left" role="img"></i></a></li>
        <?php for($i=1; $i<6; $i++) { ?>
        <li><a href="#!" title="Página X"><?php echo $i; ?></a></li>
        <?php } ?>
        <li><a class="btn -primary" href="#!next" title="Próxima página"><i class="fa fa-angle-right" role="img"></i></a></li>
      </ul>
    </div>
  </main>

  <?php include 'footer.php'; ?>

  <script type="text/javascript" src="js/scripts.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
