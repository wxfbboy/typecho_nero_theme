<div class="page_sidebar">
    <div class="sidebar_profile">
        <div class="sidebar_avatar">
            <img src="<?php $this->options->themeUrl(IMAGE_ASSETS_PATH.'avatar.jpg'); ?>" alt="Volton" />
        </div>
    </div>
    <div class="sidebar_logo">
        <h2><?php $this->options->title(); ?></h2>
        <h4><?php $this->options->description(); ?></h4>
    </div>
    <div class="sidebar_navigation">
        <ul>
            <a<?php if($this->is('index')): ?> class="active"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>" title="<?php _e('首页'); ?>"><li><?php _e('首页'); ?></li></a>
            <?php
              $categoryPosts = array();
              $this->widget('Widget_Archive@myCustomCategory', 'type=ablum')->to($categoryPosts);
              while($categoryPosts->next()):
            ?>
            <a<?php if($this->is('category/ablum')): ?> class="active"<?php endif; ?> href="<?php $categoryPosts->permalink() ?>" title="<?php $categoryPosts->title() ?>"><?php $categoryPosts->title() ?></li></a>
            <?php endwhile; ?>
            <a<?php if($this->is('links.html')): ?> class="active"<?php endif; ?> href="<?php $this->options->index('links.html'); ?>" title="<?php _e('友链'); ?>"><li><?php _e('友链'); ?></li></a>
            <a<?php if($this->is('archives.html')): ?> class="active"<?php endif; ?> href="<?php $this->options->index('archives.html'); ?>" title="<?php _e('归档'); ?>"><li><?php _e('归档'); ?></li></a>
            <a<?php if($this->is('about.html')): ?> class="active"<?php endif; ?> href="<?php $this->options->index('about.html'); ?>" title="<?php _e('关于'); ?>"><li><?php _e('关于'); ?></li></a>
            <a<?php if($this->is('msg.html')): ?> class="active"<?php endif; ?> href="<?php $this->options->index('msg.html'); ?>" title="<?php _e('留言'); ?>"><li><?php _e('留言'); ?></li></a>
        </ul>
    </div>
</div>
