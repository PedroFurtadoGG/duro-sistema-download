<?php
require 'plugins/jsmin.php';

global $js;
$files_js = array(
	'vendor/modernizr.custom.js',
	'vendor/jquery-2.2.2.min.js',
	'vendor/user-agent.js',
	'plugins/jquery.easing.1.3.js',
  'plugins/jquery.validate.js',
  'plugins/jquery.maskedinput.min.js',
	'plugins/jquery.stellar.min.js',
	'plugins/slick.min.js',
  //'plugins/simpletabs_1.3.js',
  // 'plugins/jquery.magnific-popup.min.js',
	// 'plugins/protip.min.js',
	'plugins/list.js',
	'app/app.assets.js',
	'app/app.mobile-menu.js',
	'app/app.form.js'
	//'app.js'
);

foreach ($files_js as $file) {
	$js .= file_get_contents($file);
}

$js=JSMin::minify($js);
file_put_contents('scripts.min.js', $js);

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
