<?php while ($this->next()): ?>
<div class="page"><a href="<?php $this->permalink();?>">
 <h1><?php $this->title();?></h1>
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

<?php endwhile; ?>
<div class="pg">
		<?php $this->pageNav('上一页', '下一页'); ?>
		</div>
