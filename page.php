<?php theme_include('header'); ?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	<h1><?php echo page_title(); ?></h1>
                <?php echo page_content(); ?>
            </div>
        </div>
    </div>

    <hr>
<?php theme_include('footer'); ?>