<div class="noticia -item col s-2 m-2 l-2" itemscope itemtype="http://schema.org/Article">
            <div class="media">
              <div class="ratio ratio-16by9"></div>
              <a class="content -photo" href="<?php echo URL::base(true).'post/noticia/'.$slug.'/'; ?>" style="background-image: url(<?php echo $img; ?>)" itemprop="image" role="img"></a>
            </div>
            <ul class="list -table noticia-details">
         
              <li><a class="tag" href="<?php echo URL::base(true).'post/categoria/'.$slugcat.'/'; ?>" itemprop="about"><?php echo $categoria; ?></a></li>
             
              <li><span class="datetime" itemprop="datetime"><?php echo $dtcadastro; ?></span></li>
              <li class="hidden-s"><span class="comments" itemprop="comments"><a href="<?php echo URL::base(true).'post/noticia/'.$slug.'/'; ?>"><i class="fa fa-comment-o" aria-hidden="true"></i> Comente</span></a></li>
            </ul>
            <h5 class="title" itemprop="name"><a href="<?php echo URL::base(true).'post/noticia/'.$slug.'/'; ?>"><?php echo $titulo; ?></a></h5>
          </div>