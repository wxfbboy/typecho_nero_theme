<?php
/**
 * 文章归档页
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$archives = [];
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
$year=0; $mon=0; $i=0; $j=0;
while($archives->next()):
    $year_tmp = date('Y',$archives->created);
    $mon_tmp = date('m',$archives->created);
    $y=$year; $m=$mon;
    if ($mon != $mon_tmp && $mon > 0) $output .= '</div>';
    if ($year != $year_tmp && $year > 0) $output .= '</div></div>';
    if ($year != $year_tmp) {
        $year = $year_tmp;
        $output .= '<div class="timeline_item"><h1 class="timeline_year">'. $year .' 年</h1><div class="timeline_month_box">'; //输出年份
    }
    $output .= '<div class="timeline_style"></div>';
    if ($mon != $mon_tmp) {
        $mon = $mon_tmp;
        $output .= '<div class="timeline_month_item"><h4>'. $mon .' 月</h4><ul>'; //输出月份
    }
    $output .= '<li>['. $mon. date('.d] ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a> </li>'; //输出文章日期和标题
endwhile;
$output .= '</ul></div></div></div>';
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
                        <div class="timeline_container">
                            <?php echo $output ?>
                            <div class="timeline_item">
                                <h1 class="timeline_year">2020 年</h1>
                                <div>
                                    <div class="timeline_month_item">
                                        <h4>08 月</h4>
                                        <ul>
                                            <li>[08.21] <span>创建博客</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php $this->need('includes/footer.php'); ?>
    </div>
</div>
</body>