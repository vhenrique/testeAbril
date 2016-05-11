<?php get_header(); ?>
	<main class="row">
		<?php echo '<ul class="magicBoxes large-12 noPadding">';
		while(have_posts()): the_post();
			echo '<li class="large-4 columns bigBox">';
			echo '<div class="scale">'.get_the_post_thumbnail(get_the_id(), $themePrefix.'magicBox', array('title'=>get_the_title(), 'alt'=>get_the_excerpt())).'</div>';
			echo '<a href="'.get_permalink().'" class="shadow large-12" title="'.get_the_title().'" alt="'.get_the_excerpt().'">';
			echo '<h2 class="large-12 text-center colorFFF">'.get_the_title().'</h2></a>';
			echo '</li>';
			$i++;
		endwhile;
		echo '</ul>';
		if(function_exists("get_numeric_pagination")) get_numeric_pagination(); ?>
	</main>
<?php get_footer(); ?>