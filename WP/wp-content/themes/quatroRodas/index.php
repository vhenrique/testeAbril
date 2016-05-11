<?php get_header(); ?>
	<div class="wrap">
		<section id="highlights">
			<?php $highlights = get_posts(array('post_type'=>'materias', 'posts_per_page'=>4, 'meta_key'=>$themePrefix.'featured', 'meta_value'=>'on'));
			if(!empty($highlights)){
				echo '<ul class="highlights">';
				$i = 1;
				foreach($highlights as $hg){
					if($i == 1){
						echo '<li class="main">';
						echo '<a href="'.get_permalink($hg->ID).'" title="'.$hg->post_title.'" class="colorFFF">';
						echo get_the_post_thumbnail($hg->ID, $themePrefix.'mainFeatured', array('title'=>$gh->post_title) );
						$terms = wp_get_post_terms($hg->ID, 'category');
						if($terms[0]->slug == 'promovido'){
							$children = get_term_children($terms[0]->term_id, 'category');
							$child = get_term_by('id', $children[0], 'category');
							echo '<article><h5 class="term bged1c24 promoted">Promovido por: '.$child->name.'</h5>';
						} else{
							echo '<article><h5 class="term">'.$terms[0]->name.'</h5>';
						}
						echo '<h1 class="title">'.$hg->post_title.'</h1>';
						echo '</article></li></a>';
						echo '<li class="banner"><img src="'.get_template_directory_uri().'/assets/img/banner2.png"></li>';
					} else{
						echo '<li>';
						echo '<a href="'.get_permalink($hg->ID).'" title="'.$hg->post_title.'" class="colorFFF">';
						echo get_the_post_thumbnail($hg->ID, $themePrefix.'featured', array('title'=>$gh->post_title) );
						$terms = wp_get_post_terms($hg->ID, 'category');
						if($terms[0]->slug == 'promovido'){
							$children = get_term_children($terms[0]->term_id, 'category');
							$child = get_term_by('id', $children[0], 'category');
							echo '<article><h5 class="term bged1c24 promoted">Promovido por: '.$child->name.'</h5>';
						} else{
							echo '<article><h5 class="term">'.$terms[0]->name.'</h5>';
						}
						echo '<h1 class="title">'.$hg->post_title.'</h1>';
						echo '</article></li></a>';
					}
					$i++;
				}
				echo '</ul>';
			} ?>	
		</section>
	</div>
<?php get_footer(); ?>