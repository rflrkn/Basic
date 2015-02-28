<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php if(!defined("HEADER_TITLE_ALTERNATE")) { ?>
    <title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
    <?php }else{ ?>
    <title><?php echo HEADER_TITLE_ALTERNATE; ?> | <?php echo site_name(); }?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo theme_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo theme_url('css/basic.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <?php if(article_js()): ?>
    <script><?php echo article_js(); ?></script>
    <?php endif; ?>
    
    <?php if(article_css()): ?>
    <style><?php echo article_css(); ?></style>
    <?php endif; ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>"><?php echo site_name(); ?></a>
            </div>

        <?php if(has_menu_items()) : ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <?php while(menu_items()) : ?>
                    <li>
                        <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
                    </li>
                <?php endwhile; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <?php endif; ?>

        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo theme_url(); ?><?php theme_include('random'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php echo site_name(); ?></h1>
                        <hr class="small">
                        <span class="subheading">How much wood could a woodchuck chuck, if a woodchuck could chuck wood?</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
