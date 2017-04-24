<div class="noticia -item  col s-2 m-1 l-1" itemscope itemtype="http://schema.org/Article">
              <div class="media col s-1 m-3 l-3">
                <div class="ratio ratio-16by9"></div>
                <a class="content -photo" href="<?php echo URL::base(true).'post/noticia/'.$slug.'/'; ?>" style="background-image: url(<?php echo $img; ?>)" itemprop="image" role="img"></a>
              </div>
              <div class="noticia-content col s-1 m-3x2 l-3x2">
                <h5 class="title" itemprop="name"><a href="<?php echo URL::base(true).'post/noticia/'.$slug.'/'; ?>"><?php echo $titulo; ?></a></h5>
                <small class="datetime" itemprop="datetime"><?php echo $dtcadastro; ?></small>
              </div>
            </div>