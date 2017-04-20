<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Basic</title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="page">
	<div id="header"><h1>Website</h1></div>
    <div id="nav">
    <ul>
      <?php wp_list_pages('title_li'); ?> </ul>
    </div>
    
    <div id="main">
    	<div id="content">
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title (); ?></h1>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
      </div><!--/ #content -->
        
        <div id="sidebar">
            <h2>News</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ornare sodales porta. Mauris laoreet tempor luctus. Nunc consequat </p>        
        </div><!--/ #sidebar -->  
    </div><!--/ #main -->
    
</div><!--/ #page -->

</body>
</html>
