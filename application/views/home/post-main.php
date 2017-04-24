<div class="media">
      <span class="ratio ratio-16by9"></span>
      <a href="blog-interna.php" class="content -photo" style="background-image: url(<?php echo $img; ?>)" role="img"></a>
      <div class="content -caption -bottom">
        <a href="<?php echo URL::base(true).'post/noticia/'.$slug.'/'; ?>">
          <h1 class="title -font"><?php echo $titulo;?></h1>
          <p class="caption"><?php echo $subtitulo;?></p>
        </a>
        <a class="tag" href="<?php echo URL::base(true).'post/categoria/'.$slugcat.'/'; ?>"><?php echo $categoria;?></a> <span class="datetime -date -blog"><?php echo $dtcadastro; ?></span>
      </div>
    </div>