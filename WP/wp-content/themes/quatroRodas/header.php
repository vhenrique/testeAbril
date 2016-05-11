<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
	<title><?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if(is_singular() && comments_open() && get_option('thread_comments')){
		wp_enqueue_script('comment-reply');
	}
	wp_head(); 
	global $redux_options, $themePrefix;
	if(!empty($redux_options[$themePrefix.'favicon_url'])){
		echo '<link href="'.$redux_options[$themePrefix.'favicon_url']['url'].'" rel="shortcut icon" type="image/x-icon" />';
	} ?>
</head>
<body <?php body_class(); ?>>
    <section id="publicity" class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner1.png">
    </section>
	<header class="wrap bged1c24 main">
        <a href="<?php echo get_home_url(); ?>" class="logo">
            <img src="<?php echo $redux_options[$themePrefix.'logo_url']['url'] ?>" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('description'); ?>">
        </a>
        <a href="#" class="menuIcon"></a>
        <section class="mainHeader">
            <nav class="mainMenu">
                <?php wp_nav_menu(array('menu'=>'main', 'container'=> '')); ?>
            </nav>
            <form action="<?php echo get_home_url(); ?>" method="GET" class="mainSearch">
                <input type="text" placeholder="Pesquisar" name="s" required>
                <input type="submit" value="" class="searchSubmit">
            </form>
        </section>
    </header>
    <div class="wrap">
        <nav class="bg242424 secondaryMenu">
            <h4 class="colorFFF arrow">+Acessados</h4>
            <?php $popular = get_posts(array('post_type'=>'materias', 'posts_per_page'=>10, 'meta_key'=>$themePrefix.'popular', 'meta_value'=>'on'));
            if(!empty($popular)){
                echo '<ul class="menu">';
                foreach($popular as $pop){
                    echo '<li>'.$pop->post_title.'</li>';
                }
                echo '<li>| A - Z |</li>';
                echo '</ul>';
            } ?>
        </nav>
    </div>