<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if ($this->fields->linkTo): ?>
    <script type='text/javascript'>window.location.href = '<?php echo $this->fields->linkTo ?>';</script>
<?php endif; ?>

<?php $this->need('header.php'); ?>

<article class="post">
    <!-- <a href="<?php $this->permalink() ?>">
        <img src="<?php $this->options->themeUrl('img/'.$this->fields->titleImgUrl) ?>">
    </a> -->
    <div class="post-content">
        <?php $this->content(); ?>
    </div>
</article>
<?php #$this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
