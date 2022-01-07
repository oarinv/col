<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('animation.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('prism.css'); ?>">
    <link href="<?php $this->options->themeUrl('dark.css'); ?>" rel="<?php if($_COOKIE['night'] != '1'){echo 'alternate ';} ?>stylesheet" type="text/css" title="dark">


    <?php $this->header(); ?>
</head>
<body class="<?php echo($_COOKIE['night'] == '1' ? 'night' : ''); ?>">
<script src="<?php $this->options->themeUrl('prism.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('night.js'); ?>"></script>

</body>
