<?php while ($this->next()): ?>
<div class="page">
    <div class="page-left">
        <a href="<?php $this->permalink();?>">
         <h3><?php $this->title();?></h3>
        </a>
        <a class="excerpt" href="<?php $this->permalink();?>">
        <?php $this->excerpt(200, '...'); ?>
        </a>
        <div class="time">
            <div>
                <?php $this->category(','); ?>
            </div>
        <div>
            <a href="">
            <?php $this->date('Y年m月d日'); ?>
             </a>
        </div>
    </div>



</div>
<div class="page-right">
        <div class="page_img" style="background-image: url(<?php if (array_key_exists('img',unserialize($this->___fields()))): ?><?php $this->fields->img(); ?><?php else: ?><?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
$img = $matches[2][0];
echo <<<Html
{$img}
Html;
}
?><?php endif; ?>)" >

        </div>
    </div>
</div>
<?php endwhile; ?>
<div class="pg">
	<?php $this->pageNav('上一页', '下一页'); ?>
</div>
