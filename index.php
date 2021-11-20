<?php
/**
 * 听见笔尖回声。
 *
 * @package Writecho
 * @author SkyWT
 * @version 1.0
 * @link https://skywt.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<?php if ($this->options->noticeImgUrl != ''): ?>
<div class="post">
    <img src="<?php $this->options->themeUrl('img/'.$this->options->noticeImgUrl) ?>">
</div>
<?php endif; ?>

<?php while ($this->next()): ?>
    <article class="post">
        <a href="<?php $this->permalink() ?>">
            <!-- <img src="<?php #$this->fields->titleImgUrl() ?>"> -->
            <?php $this->content('<img src="'.$this->options->themeUrl.'/img/'.$this->options->moreImgUrl.'">') ?>
        </a>
    </article>
<?php endwhile; ?>

<?php $this->need('footer.php'); ?>
