<header id="globalHeader" class="global-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
  <div class="grid grid-inline -va-m">
    <div class="col s-2 m-2 l-6">
      <div class="brand-holder fade-in" itemscope itemtype="http://schema.org/Organization">
        <a href="index.php" itemprop="url">
          <img class="logo -main" src="img/logo.png" alt="Logo, Proeza" itemprop="image">
          <span class="invisible" itemprop="name">Proeza</span>
        </a>
      </div>
    </div>

    <div class="col s-2 m-2 l-6x5">
      <section class="main-nav mobile-menu bc-brand" id="mobileMenu" data-bc="bc-brand" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
        <header class="mobile-menu--header">
          <h3 class="invisible">Menu mobile</h3>
          <a class="btn-toggle-menu btn-toggle-menu-close" href="#mobileMenu" role="button"><i class="fa fa-times c-white" role="img"></i></a>
          <span class="mobile-menu--title truncate">Proeza</span>
        </header>

        <nav id="mobileMenuContainer" class="mobile-menu--container">
          <ul class="list -menu -contrast -inline main-navigation" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <?php include 'nav.php'; ?>
            <!-- <li class="menu-item--search" itemprop="name" role="menuitem">
              <?php //include 'form-search.php'; ?>
            </li> -->
          </ul>
        </nav>
        <footer class="mobile-menu--footer text-center">
          <ul class="list-social">
            <?php include 'nav-social.php'; ?>
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
