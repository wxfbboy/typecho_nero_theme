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
                    <div class="post-content" itemprop="articleBody">
                        <?php $this->content(); ?>
                    </div>
                </section>
            </div>
            <?php $this->need('includes/comments.php'); ?>
        </div>
        <?php $this->need('includes/footer.php'); ?>
    </div>
</div>
</body>