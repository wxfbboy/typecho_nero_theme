<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('includes/header.php');
?>
<body>
<?php $this->need('includes/sidebar.php'); ?>
<div class="post_main">
    <div class="main_container">
        <?php $this->need('includes/banner.php'); ?>
        <div class="main_content">
            <div class="content_item">
                <section class="content_section">
<!--                    <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="--><?php //$this->permalink() ?><!--">--><?php //$this->title() ?><!--</a></h2>-->
<!--                    <div class="post-meta">-->
<!--                        <p itemprop="author" itemscope itemtype="http://schema.org/Person">--><?php //_e('作者: '); ?><!--<a itemprop="name" href="--><?php //$this->author->permalink(); ?><!--" rel="author">--><?php //$this->author(); ?><!--</a></p>-->
<!--                        <p>--><?php //_e('时间: '); ?><!--<time datetime="--><?php //$this->date('c'); ?><!--" itemprop="datePublished">--><?php //$this->date(); ?><!--</time></p>-->
<!--                        <p>--><?php //_e('分类: '); ?><!----><?php //$this->category(','); ?><!--</p>-->
<!--                        <p itemprop="interactionCount"><a itemprop="discussionUrl" href="--><?php //$this->permalink() ?><!--#comments">--><?php //$this->commentsNum('评论', '1 条评论', '%d 条评论'); ?><!--</a></p>-->
<!--                    </div>-->
                    <div class="post-content" itemprop="articleBody">
                        <?php $this->content(); ?>
                    </div>
                </section>
            </div>
        </div>
        <?php $this->need('includes/footer.php'); ?>
    </div>
</div>
</body>