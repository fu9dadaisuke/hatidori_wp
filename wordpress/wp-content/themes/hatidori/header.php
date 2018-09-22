<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>本づくりを通して楽しい明日をつくる｜株式会社八鳥（ハチドリ）</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <?php if(wp_is_mobile()): ?>
        	<meta name="viewport" content="width=device-width,initial-scale=1">
        	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_sp.css">
        <?php else: ?>
        	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <?php endif; ?>
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/vnd.microsoft.icon">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	      <script src="//api.html5media.info/1.1.8/html5media.min.js"></script>
	    <![endif]-->
	    <?php if ( is_home() || is_front_page() ) : ?>
	    <?php wp_deregister_script('jquery'); ?>
	    <?php endif; ?>

	<?php wp_head();?>
    </head>
    <body>
        <div id="wrapper">
        <header>
            <a href="<?php echo esc_url( home_url()); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="ハチドリ・株式会社八鳥" class="img-responsive"></a>
            <div class="fukidashi">
                <?php if(wp_is_mobile()): ?>
                    <?php $value = get_field( "message_sp", 2 ); ?>
                    <h1><?php echo $value; ?></h1>
                <?php else: ?>
                    <?php $value = get_field( "message_pc", 2 ); ?>
                    <h1><?php echo $value; ?></h1>
                <?php endif; ?>
            </div>
        </header><!-- end header-->