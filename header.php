<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <?php $this->options->headerCode(); ?>
    <?php $this->header(); ?>
</head>

<?php if ($this->options->bgColor != ''): ?>
    <body style="backgound-color: <?php $this->options->bgColor() ?>">
<?php else: ?>
    <body>
<?php endif; ?>

<header id="header" class="container">
    <img src="<?php $this->options->themeUrl('img/'.$this->options->headerImgUrl); ?>">
    <nav>
        <a href="<?php $this->options->siteUrl();?>">
            <img src="<?php $this->options->themeUrl('img/'.$this->options->homeImgUrl); ?>" style="height: 40px; width:auto">
        </a>
        <?php $this->widget('Widget_Contents_Page_List')->to($pagelist);
            while ($pagelist->next()): ?>
            <a href="<?php echo $pagelist->permalink ?>">
                <img src="<?php $this->options->themeUrl('img/'.$pagelist->fields->nameImgUrl); ?>" style="height: 40px; width:auto">
            </a>
        <?php endwhile;?>
    </nav>
</header>
<div id="body">
    <div class="container">