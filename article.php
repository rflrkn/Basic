<?php theme_include('header'); ?>
<section class="content wrap" id="article-<?php echo article_id(); ?>">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h1><?php echo article_title(); ?></h1>
                    <h5>Written by <?php echo article_author(); ?> | <?php echo article_date(); ?></h5>
                    
                    <?php echo article_markdown(); ?>
                    <hr />
                    <h3>Kommentare</h3>
                        <?php if(comments_open() and has_comments()): ?>
                        <?php while(comments()): ?>
                            <?php echo comment_text(); ?><br />
                            <em><?php echo comment_date(); ?> - <?php echo comment_name(); ?></em><br />
                        <hr />
                        <?php endwhile; ?>
                        <?php endif; ?>
                   <!--<div id="respond">

                            <?php if(comments_open()): ?>

                                    <h3>Hinterlasse einen Kommentar</h3>

                                    <form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
                                        <?php echo comment_form_input_name('placeholder="Your Name"'); ?>
                                        <?php echo comment_form_input_email('placeholder="EMail"'); ?>
                                        <?php echo comment_form_input_text('placeholder="Kommentar"'); ?>
                                        <?php echo comment_form_notifications(); ?>
                                        <?php echo comment_form_button($text = 'Post Comment', $extra = ''); ?>
                                    </form>

                            <?php endif; ?>-->

                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </article>
    <hr />
</section>
<?php theme_include('footer'); ?>
