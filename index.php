<?php

/**
 * Col现代主题
 *
 * @package Col
 * @author oarinv
 * @version 1.2
 * @link https://github.com/oarinv/col/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="warp" >

<div class='main'>
	<div class="header">
		<?php $this->need('col-header.php'); ?>
	</div>
	<div class="content">
		<?php $this->need('col-content.php'); ?>


	</div>
	<div class="footer">
		<?php $this->need('col-footer.php'); ?>
	</div>
</div>
</div>
