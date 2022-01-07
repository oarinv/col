<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="warp">
<div class='main'>
	<div class="header">
		<?php $this->need('col-header.php'); ?>
	</div>
	<div class="content">
        <div class="post">
            <div>
				<div>
				<h1>
                <?php $this->title(); ?>
            </h1>
				</div>

				<div class="post-meta"><span class="post-meta-date ">
					<?php _e(''); ?><?php $this->date('Y/m/d '); ?>
				</span>
				<span class="post-meta-category ">
					<?php _e(''); ?><?php $this->category(','); ?>
				</span>
				<span class="post-meta-comments ">
					<?php $this->commentsNum('%d评论'); ?>
				</span>


            </div>

<div class="col-message">
<?php $this->content(); ?>
</div>

        </div>

	</div>
	<?php $this->need('comments.php'); ?>
	<div class="footer">
		<?php $this->need('col-footer.php'); ?>
	</div>
</div>
</div>
