<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div>
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    ?>
    <li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
    ?>">
        <div id="<?php $comments->theId(); ?>" class="comment-item">
        <div class="comment-header">
            <div class="comment-author">
                <?php $comments->gravatar('40', ''); ?>
            </div>
        </div>



            <div class="comment-content">
            <div class="fn">
                        <?php $comments->author(); ?>
                        <?php if ($comments->authorId) {
                        if ($comments->authorId == $comments->ownerId) {
                            echo "[作者]";
                        }?>
                        <?php }?>
                    </div>


            <div class="comment-meta">
                <div class="commeta">
                <?php $comments->content(); ?>
                </div>
                <div class="comment-time">
                <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y年m月d日 H:i'); ?><?php $comments->reply(); ?></a>
                </div>


            </div>

            </div>
        </div>
        <?php if ($comments->children) { ?>
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php } ?>
    </li>
<?php } ?>
</div>


<div id="comments">

    <?php $this->comments()->to($comments); ?>




    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">


    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p class="logoutname"><?php _e(''); ?><a class="outname" href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a><a class="logoutbtn" href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?></a></p>
            <?php else: ?>
                <div class="name-mail-url">
                    <div class="n qaq"><input type="text" placeholder="称呼" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required /></div>
                    <div class="m qaq"><input type="email" name="mail" placeholder="邮箱" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> /></div>
                    <div class="u qaq"><input type="url" name="url" id="url" placeholder="网址" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> /></div>
                </div>
            <?php endif; ?>
    		<p>

                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p class="allbtn">
                <button  class="btn" type="submit" class="submit"><?php _e('提交评论'); ?></button>

                <?php $comments->cancelReply(); ?>

            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
	<span class="cnum"><?php $this->commentsNum(_t('暂无评论'), _t('%d条评论'), _t('%d条评论')); ?></span>

    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('<', '>'); ?>

    <?php endif; ?>
</div>
