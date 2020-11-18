<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('includes/header.php');
?>
<body>
    <?php $this->need('includes/sidebar.php'); ?>
    <div class="page_main">
        <div class="main_container">
            <?php $this->need('includes/banner.php'); ?>
            <div class="main_content">
                <?php while($this->next()): ?>
                <div class="content_item">
                    <div class="content_img">
                        <img src="https://random.52ecy.cn/randbg.php" alt="" />
                    </div>
                    <section class="content_section">
                        <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                        <div class="post-meta">
                            <p itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></p>
                            <p><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></p>
                            <p><?php _e('分类: '); ?><?php $this->category(','); ?></p>
                            <p itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></p>
                        </div>
                        <div class="post-content" itemprop="articleBody">
                            <?php $this->content('- 阅读剩余部分 -'); ?>
                        </div>
                    </section>
                </div>
                <?php endwhile; ?>
                <?php $this->pageNav('<< 上一页', '下一页 >>'); ?>
            </div>
            <?php $this->need('includes/footer.php'); ?>
        </div>
    </div>
</body>
