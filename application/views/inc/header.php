<header id="globalHeader" class="global-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
  <div class="grid grid-inline -va-m">
    <div class="col s-2 m-2 l-6">
      <div class="brand-holder fade-in" itemscope itemtype="http://schema.org/Organization">
        <a href="<?php echo URL::base(true)?>home/" itemprop="url">
          <img class="logo -main" src="<?php echo URL::base(true);?>img/logo.png" alt="Logo, Proeza" itemprop="image">
          <span class="invisible" itemprop="name">Duro Pvc</span>
        </a>
      </div>
    </div>

    <div class="col s-2 m-2 l-6x5">
      <section class="main-nav mobile-menu bc-brand" id="mobileMenu" data-bc="bc-brand" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
        <header class="mobile-menu--header">
          <h3 class="invisible">Menu mobile</h3>
          <a class="btn-toggle-menu btn-toggle-menu-close" href="#mobileMenu" role="button"><i class="fa fa-times c-white" role="img"></i></a>
          <span class="mobile-menu--title truncate">Duro Pvc</span>
        </header>

        <nav id="mobileMenuContainer" class="mobile-menu--container">
          <ul class="list -menu -contrast -inline main-navigation" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
					<li aria-haspopup="true" class="menu-item-username" role="menuitem">
					  Bem-vindo
					  <div class="header-username text-bold"><?php echo $_SESSION['email'];?></div>
					</li>
					
					<li class="menu-item-downloads" itemprop="name" role="menuitem">
					  <a class="btn -contrast" itemprop="url" href="<?php echo URL::base(true);?>downloads/arquivos">Downloads</a>
					</li>
					
					<li class="menu-item-login" itemprop="name" role="menuitem">
					  <a itemprop="url" href="<?php echo URL::base(true)?>/login/logout/">Sair</a>
					</li>

            <!-- <li class="menu-item--search" itemprop="name" role="menuitem">
              <?php //include 'form-search.php'; ?>
            </li> -->
          </ul>
        </nav>
        <footer class="mobile-menu--footer text-center">
          <ul class="list-social">
            <!-- <ul itemscope itemtype="http://schema.org/Organization"></ul> -->

				<link itemprop="url" href="http://www.duropvc.com.br/2015/">
				<li class="menu-item-social" itemprop="name" role="menuitem">
				  <a class="link-social fa fa-facebook" href="https://www.facebook.com/DuroPVC" target="_blank" title="Facebook" itemprop="sameAs">
				  </a>
				</li>
				
				<li class="menu-item-social" itemprop="name" role="menuitem">
				  <a class="link-social fa fa-instagram" href="https://www.instagram.com/duropvc/" target="_blank" title="Instagram" itemprop="sameAs">
				  </a>
				</li>
				
				<li class="menu-item-social" itemprop="name" role="menuitem">
				  <a class="link-social fa fa-youtube-play" href="https://www.youtube.com/channel/UCQoomcZwKJJgN0wRb-fguUQ" target="_blank" title="Youtube" itemprop="sameAs">
				  </a>
				</li>
              
          </ul>
        </footer>
      </section>
      <a class="btn-toggle-menu hidden-l" href="#mobileMenu" id="" role="button">
        <span class="invisible">Abrir o Menu Mobile</span>
        <span class="fa fa-bars c-brand" role="img"></span>
      </a>
    </div>

  </div>
</header>
