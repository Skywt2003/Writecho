<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    echo '<p>使用说明：图片显示时会横向填充，宽度确定，高度不定。</p>';

    $bgColor = new \Typecho\Widget\Helper\Form\Element\Text(
        'bgColor',
        null,
        '#fcf9f3',
        _t('背景色'),
        _t('网站全局背景色，填一个符合 css 语法的颜色表达式，建议与图片的背景色保持一致。默认值是 #fcf9f3。')
    );
    $form->addInput($bgColor);

    $headerImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'headerImgUrl',
        null,
        null,
        _t('网站头部图片地址'),
        _t('在这里填入网站 header 的手写图片的地址。')
    );
    $form->addInput($headerImgUrl);

    $footerImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'footerImgUrl',
        null,
        null,
        _t('网站底部图片地址'),
        _t('在这里填入网站 footer 的手写图片的地址.')
    );
    $form->addInput($footerImgUrl);

    $homeImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'homeImgUrl',
        null,
        null,
        _t('网站首页按钮图片地址'),
        _t('在这里填入一个手写图片的地址。会显示为导航栏中首页按钮。高度会被固定为 50px。')
    );
    $form->addInput($homeImgUrl);

    $noticeImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'noticeImgUrl',
        null,
        null,
        _t('网站公告图片地址'),
        _t('在这里填入一个手写图片的地址。会在首页显示为公告。留空则不显示。')
    );
    $form->addInput($noticeImgUrl);

    $moreImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'moreImgUrl',
        null,
        null,
        _t('文章的 more 文字图片地址'),
        _t('首页文章概要之后的 more 字样手写图片地址。同样显示为一整行。')
    );
    $form->addInput($moreImgUrl);

    $e404ImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'e404ImgUrl',
        null,
        null,
        _t('404 页面图片地址'),
        _t('动手画一个 404 页面吧！')
    );
    $form->addInput($e404ImgUrl);

    $headerCode = new Typecho_Widget_Helper_Form_Element_Textarea('headerCode', NULL, NULL, _t('头部代码'), _t('在头部添加的代码'));
    $form->addInput($headerCode);

    $footerCode = new Typecho_Widget_Helper_Form_Element_Textarea('footerCode', NULL, NULL, _t('页脚代码'), _t('在页脚添加的代码'));
    $form->addInput($footerCode);
}

function themeFields($layout)
{
    // $titleImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
    //     'titleImgUrl',
    //     null,
    //     null,
    //     _t('标题图片地址'),
    //     _t('在这里填入文章或页面标题手写图片的地址。建议的大小是')
    // );
    // $layout->addItem($titleImgUrl);

    $nameImgUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'nameImgUrl',
        null,
        null,
        _t('页面按钮图片地址'),
        _t('在这里填入一个手写图片的地址。会显示为导航栏中页面按钮。高度会被固定为 40px。')
    );
    $layout->addItem($nameImgUrl);

    $linkTo = new \Typecho\Widget\Helper\Form\Element\Text(
        'linkTo',
        null,
        null,
        _t('重定向至'),
        _t('在这里填入一个链接，打开页面/文章会自动重定向到这个链接。留空则不重定向。')
    );
    $layout->addItem($linkTo);
}