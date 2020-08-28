<?php function threadedComments($comments){ ?>
            <li id="<?php $comments->theId(); ?>" class="comment-body<?php
            if ($comments->levels > 0) {
                echo ' comment-child';
                $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
            } else {
                echo ' comment-parent';
            }
            $comments->alt(' comment-odd', ' comment-even');
            echo $commentClass;
            ?>">
                <div class="comment-content">
                    <div class="comment_avatar">
                        <?php $comments->gravatar('70', ''); ?>
                    </div>
                    <div class="comment_right">
                        <div class="comment_data">
                            <span class="comment_author"><?php $comments->author(); ?></span>
                            <span class="comment_time"> · <?php $comments->date('Y-m-d'); ?> <?php $comments->date('h:i a'); ?></span>
                        </div>
                        <div class="comment_body"><?php $comments->content(); ?></div>
                        <div class="comment-reply"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;&nbsp;<?php $comments->reply(); ?></div>
                    </div>
                </div>
                <?php if ($comments->children) { ?>
                    <div class="comment-child">
                        <ul class="comment-children">
                            <?php $comments->threadedComments($options); ?>
                        </ul>
                    </div>
                <?php } ?>
        <?php } ?>
    <div class="content_item">
        <?php $this->comments()->to($comments); ?>
        <?php if ($comments->have()): ?>
            <section class="comment_list_section">
                <h2><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h2>
                <ul class="comment_list">
                <?php while($comments->next()): ?>
                    <li id="<?php $comments->theId(); ?>">
                        <div class="comment-content">
                            <div class="comment_avatar">
                                <?php $comments->gravatar('70', ''); ?>
                            </div>
                            <div class="comment_right">
                                <div class="comment_data">
                                    <span class="comment_author"><?php $comments->author(); ?></span>
                                    <span class="comment_time"> · <?php $comments->date('Y-m-d'); ?> <?php $comments->date('h:i a'); ?></span>
                                </div>
                                <div class="comment_body"><?php $comments->content(); ?></div>
                                <div class="comment-reply"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;&nbsp;<?php $comments->reply(); ?></div>
                            </div>
                        </div>
                        <?php if ($comments->children) { ?>
                            <div class="comment-child">
                                <ul class="comment-children">
                                    <?php $comments->threadedComments($options); ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
            </section>
        <?php endif; ?>
        <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
        </div>
        <?php if($this->allow('comment')): ?>
        <section id="<?php $this->respondId(); ?>" class="comment_post_section respond">
            <h2><?php _e("发表评论") ?></h2>
            <?php if($this->user->hasLogin()): ?>
            <div class="login_user_info">
                <p><?php _e('登录身份: '); ?><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            </div>
            <?php endif; ?>
            <div class="form_container">
                <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form" role="form">
                <label><?php _e("Comment") ?></label>
                <textarea rows="1"  name="text"  cols="90" required ><?php $this->remember('text'); ?></textarea>
                <?php if(!$this->user->hasLogin()): ?>
                    <div class="users_info">
                    <div class="users_name">
                        <label><?php _e("Name") ?></label>
                        <input type="text" name="author" value="<?php $this->remember('author'); ?>" required/>
                    </div>
                    <div class="users_email">
                        <label><?php _e("Email") ?></label>
                        <input type="text" name="mail"  value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                    </div>
                    <div class="users_ws">
                        <label><?php _e("Website") ?></label>
                        <input type="url" name="url" placeholder="<?php _e('http://'); ?>"  value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>/>
                    </div>
                </div>
                <?php endif; ?>
                <div class="submit-btn">
                    <button type="submit" class="submit"><?php _e("Comment") ?></button>
                </div>
                </form>
            </div>
        </section>
        <?php else: ?>
             <p class="ban_comment"><?php _e("评论已关闭") ?></p>
        <?php endif; ?>
    </div>