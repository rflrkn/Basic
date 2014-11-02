<?php theme_include('header'); ?>

<?php if(has_posts()) : while(posts()) : ?>
<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
                        <h2 class="post-title">
                            <?php echo article_title(); ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo article_description(); ?>
                        </h3>
                    </a>
                    <p class="post-meta">Von <?php echo article_author(); ?> am <?php echo article_date(); ?></p>
                </div>
                <hr>

<?php if(has_pagination()) : ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <?php echo posts_prev(); ?>
                    </li>
					<li class="next">
                        <?php echo posts_next(); ?>
                    </li>
                </ul>
<?php endif; ?>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
    <hr>

<?php theme_include('footer'); ?>