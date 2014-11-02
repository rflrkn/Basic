                        <?php if(comments_open() and has_comments()): ?>
                        <?php while(comments()): ?>
                        <div class="post-comment">
                            <p class="comment"><?php echo comment_text(); ?></p><br />
                            <i style="font-size: 15px;"><?php echo comment_date(); ?> - <?php echo comment_name(); ?></i></p>
                            <hr />
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    <div id="respond">

                            <?php if(comments_open()): ?>

                                    <h3>Leave a comment</h3>

                                        <form method="post" action="<?php echo comment_form_url(); ?>#comment" id="comment">
                                            <div class="row control-group">
                                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                                    <label>Name</label>
                                                    <?php echo comment_form_input_name('placeholder="Your name"'); ?>
                                                </div>
                                            </div>
                                            <div class="row control-group">
                                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                                    <label>Email-adress</label>
                                                    <?php echo comment_form_input_email('placeholder="Your email-adress"'); ?>
                                                </div>
                                            </div>
                                            <div class="row control-group">
                                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                                    <label>Comment</label>
                                                    <?php echo comment_form_input_text('placeholder="Your comment"'); ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="success"><?php echo comment_form_notifications(); ?></div>
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <?php echo comment_form_button($text = 'And there we go!', $extra = ''); ?>
                                                </div>
                                            </div>
                                        </form>

                            <?php endif; ?>