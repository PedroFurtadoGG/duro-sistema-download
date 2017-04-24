<?php
/**
 * Digg pagination style
 * 
 * @preview  « Previous  1 2 … 5 6 7 8 9 10 11 12 13 14 … 25 26  Next »
 */
?>

<ul class="list -alt pagination">

	<?php if ($previous_page): ?>
		<li><a class="btn -alt" href="<?php echo str_replace('{page}', $previous_page, $url) ?>" title="Página anterior"><span class="invisible">Página anterior</span> <i class="fa fa-angle-left"></i></a></li>
	<?php else: ?>
		<li><a class="btn -alt" href="#!prev" title="Página anterior"><span class="invisible">Página anterior</span> <i class="fa fa-angle-left"></i></a></li>
	<?php endif ?>


	<?php if ($total_pages < 13): /* « Previous  1 2 3 4 5 6 7 8 9 10 11 12  Next » */ ?>

		<?php for ($i = 1; $i <= $total_pages; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li><a href="#" class="btn -alt"><?php echo $i; ?></a></li>
			<?php else: ?>
				<li><a href="<?php echo str_replace('{page}', $i, $url) ?>"><?php echo $i; ?></a></li>
			<?php endif ?>
		<?php endfor ?>

	<?php elseif ($current_page < 9): /* « Previous  1 2 3 4 5 6 7 8 9 10 … 25 26  Next » */ ?>

		<?php for ($i = 1; $i <= 10; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li><a href="#"><?php echo $i; ?></a></li>
			<?php else: ?>
				<li><a href="<?php echo str_replace('{page}', $i, $url) ?>"><?php echo $i; ?></a></li>
			<?php endif ?>
		<?php endfor ?>

		&hellip;
		<li><a href="<?php echo str_replace('{page}', $total_pages - 1, $url) ?>"><?php echo $total_pages - 1 ?></a></li>
		<li><a href="<?php echo str_replace('{page}', $total_pages, $url) ?>"><?php echo $total_pages ?></a></li>

	<?php elseif ($current_page > $total_pages - 8): /* « Previous  1 2 … 17 18 19 20 21 22 23 24 25 26  Next » */ ?>

		<li><a href="<?php echo str_replace('{page}', 1, $url) ?>">1</a></li>
		<li><a href="<?php echo str_replace('{page}', 2, $url) ?>">2</a></li>
		&hellip;

		<?php for ($i = $total_pages - 9; $i <= $total_pages; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li><a href="#"><?php echo $i; ?></a></li>
			<?php else: ?>
				<li><a href="<?php echo str_replace('{page}', $i, $url) ?>"><?php echo $i; ?></a></li>
			<?php endif ?>
		<?php endfor ?>

	<?php else: /* « Previous  1 2 … 5 6 7 8 9 10 11 12 13 14 … 25 26  Next » */ ?>

		<li><a href="<?php echo str_replace('{page}', 1, $url) ?>">1</a></li>
		<li><a href="<?php echo str_replace('{page}', 2, $url) ?>">2</a></li>
		&hellip;

		<?php for ($i = $current_page - 5; $i <= $current_page + 5; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li><a href="#"><?php echo $i; ?></a></li>
			<?php else: ?>
				<li><a href="<?php echo str_replace('{page}', $i, $url) ?>"><?php echo $i; ?></a></li>
			<?php endif ?>
		<?php endfor ?>

		&hellip;
		<li><a href="<?php echo str_replace('{page}', $total_pages - 1, $url) ?>"><?php echo $total_pages - 1 ?></a></li>
		<li><a href="<?php echo str_replace('{page}', $total_pages, $url) ?>"><?php echo $total_pages ?></a></li>

	<?php endif ?>


	<?php if ($next_page): ?>
		<li><a class="btn -alt" href="<?php echo str_replace('{page}', $next_page, $url) ?>" title="Próxima página"><span class="invisible">Próxima página</span> <i class="fa fa-angle-right"></i></a></li>
	<?php else: ?>
		<li><a class="btn -alt" href="#!next" title="Próxima página"><span class="invisible">Próxima página</span> <i class="fa fa-angle-right"></i></a></li>
	<?php endif ?>

</ul>