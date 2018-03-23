<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="Place your description here">
        <meta name="keywords" content="put, your, keyword, here">
        <meta name="author" content="Templates.com - website templates provider">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/zerogrid.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="all">
        
        <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri())?>/js/jquery-1.4.2.min.js" ></script>
        <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri())?>/js/script.js"></script>
        <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri())?>/js/css3-mediaqueries.js"></script>
        <!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">
ie_png.fix('.png');
</script>
<![endif]-->
        <!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
        <?php wp_head();?>
    </head>
    <body id="page3" <?php body_class();?>>
        <div class="tail-bottom">
            <div id="main" class="zerogrid">
                <!-- header -->
                <header>
                    <div class="nav-box">
                        <nav>
                            <ul class="fright">
                                <li><a href="index.html"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/pic-home-act.gif"></a></li>
                                <li><a href="contact-us.html"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/pic-mail.gif"></a></li>
                                <li><a href="sitemap.html"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/pic-sitemap.gif"></a></li>
                            </ul>
                            <ul class="normal-menu">
                                <li><a href="index.html">home</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li class="current"><a href="articles.html">Articles</a></li>
                                <li><a href="contact-us.html">Contacts</a></li>
                                <li><a href="sitemap.html">SiteMap</a></li>
                            </ul>
                            <div class='response-menu'>
                                <div><img src='<?php echo esc_url(get_template_directory_uri())?>/images/menu2.png'/></div>
                                <select onchange="location=this.value">
                                    <option></option>
                                    <option value="index.html">Home</option>
                                    <option value="about-us.html">About</option>
                                    <option value="articles.html">Articles</option>
                                    <option value="contact-us.html">Contacts</option>
                                    <option value="sitemap.html">SiteMap</option>
                                </select>
                            </div>
                        </nav>

                    </div>
                    <h1><a href="index.html"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/logo.gif" /></a></h1>
                    <form action="" id="search-form">
                        <fieldset>
                            <input type="text">
                            <a href="#" onclick="document.getElementById('search-form').submit()"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/button-search.gif"></a>
                        </fieldset>
                    </form>
                </header>
                <div class="wrapper indent">