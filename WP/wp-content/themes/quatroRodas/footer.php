	<footer class="main wrap">
		<?php global $themePrefix;
		$secondaries = get_posts(array('post_type'=>'materias', 'posts_per_page'=>4, 'meta_key'=>$themePrefix.'secondary', 'meta_value'=>'on'));
		if(!empty($secondaries)){
			echo '<ul class="highlights secondary">';
			foreach ($secondaries as $secondary){
				echo '<li>';
				echo '<a href="'.get_permalink($secondary->ID).'">';
				echo get_the_post_thumbnail($secondary->ID, $themePrefix.'featured', array('title'=>$secondary->post_title));
				echo '</a>';
				echo '<article><h1>'.$secondary->post_title.'</h1>'.$secondary->post_excerpt;
				echo '<h5 class="colorED1C24">+ Troller T4 x Jeep Renegade</h5>';
				echo '</article>';
				echo '</li>';
			}
			echo '</ul>';
		} ?>
		<script type="text/javascript">
			jQuery.noConflict();
			jQuery(document).ready(function(){
				// Submenu show
				jQuery(".sub-menu").parent().hover(function(){
					jQuery(this).find("ul.sub-menu").first().show();
					jQuery(this).find("a").first().addClass("active");
					jQuery(this).hover(function(){}, function(){
						jQuery(this).find("ul.sub-menu").first().hide();
						jQuery(this).find("a").first().removeClass("active");
					});
				});
			});
        </script>
    </footer>
    <?php wp_footer();?>
</body>
</html>