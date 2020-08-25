<div class="main_banner">
    <img src="<?php $this->options->themeUrl(IMAGE_ASSETS_PATH.'banner.jpg'); ?>" />
    <div class="banner_info">
    <?php if($this->is('category') || $this->is('search') || $this->is('tag') || $this->is('author')): ?>
        <h2><?php $this->archiveTitle(array(
                'category'  =>  _t('%s'),
                'search'    =>  _t('关键字 %s'),
                'tag'       =>  _t(' #%s'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ''); ?></h2>
    <?php elseif ($this->is('post')): ?>
        <h2><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <div class="post-meta">
            <p itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></p>
            <p><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></p>
            <p><?php _e('分类: '); ?><?php $this->category(','); ?></p>
            <p itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></p>
        </div>
    <?php elseif ($this->is('page')): ?>
        <h2><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    <?php endif; ?>
    </div>
</div>
