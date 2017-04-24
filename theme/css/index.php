<?php
date_default_timezone_set('America/Sao_Paulo');
require 'plugins/cssmin-v3.0.1-minified.php';
global $css;

$files_css = array(
	"_reset.css",
	"_base.css",
	"_typography.css",
	"_roboto.css",
	"_form.css",
	"_table.css",
	"_grid.css",
	"_clearfix.css",
	"_inputs.css",
	"_buttons.css",
	"_utilities.css",
	"_list.css",
	"_font-awesome.css",
	// "plugins/slick.css",
	// "plugins/protip.min.css",
	"plugins/jssocials.css",
	"plugins/jssocials-theme-minima.css",
	//"plugins/simpletabs.css",
	//"plugins/magnific-popup.css",
	"_mobile-menu.css",
	"_theme.css",
	"_header.css",
	"_footer.css",
	"_responsive.css",
	"_animation.css",
	"_atomic-css.css",
	"style.css"
);

foreach ($files_css as $file) {
	$css .= file_get_contents($file);
}

// file_put_contents("plugins/min.css", $css);
$css = CssMin::minify($css);
file_put_contents("style.min.css", $css);

?>

<article class="wraper">
  <style media="screen">*{margin:0;padding:0;border:0;font-size:100%;background:0 0}body{background-color:#005d56;color:#fff;text-align:center;font:normal normal normal 16px/1.2 -apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Roboto,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol",sans-serif} .wraper{display:table;width:100%;height:100%} .wraper-inner{display:table-cell;vertical-align:middle;width:100%}.copyright{position:fixed;width:100%;bottom:0;left:0;right:0;margin-bottom:1rem;color:#60aaa5}</style>
  <div class="wraper-inner">
    <a href="http://nextsites.com.br/" target="_blank"><img src="http://nextsites.com.br/img/logo-white.png" alt="Next Solução para Web" title="Ir para o site"/></a>
  </div>
  <div class="copyright">
    <span>© <?php echo date("Y"); ?></span> <strong itemprop="copyright">Next Sites</strong></small>
  </div>
</article>
