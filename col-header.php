<div class="nav">
    <div class="nav-left">
    <div class="meun meun-title"><a href="<?php $this->options->siteUrl(); ?>">首页</a></div>
    <div class="meun ce"><a>分类</a>
    <div class="ce-c">
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<div class="ce-c-list"><a href="{permalink}">{name}</a></div>'); ?>
    </div>
    </div>

    </div>


</div>
<div class="bgimg" style="background-image:url('<?php $this->options->img(); ?>')">

<div class="site">
    <div class="logo" style="background-image:url('<?php $this->options->logo(); ?>')">

    </div>
    <div class="title">
        <a href="
            <?php $this->options->siteUrl(); ?>"><h1><?php $this->options->title() ?></h1></a>
        <a href="
            <?php $this->options->siteUrl(); ?>">
        <p><?php $this->options->description() ?></p></a>

    </div>

</div>
        <div class="light">
            <div class="light-pos" >

                    <a href="javascript:switchNightMode()" target="_self" class="darkmode">

                <img src="<?php $this->options->themeUrl('/img/night.svg'); ?>" alt="">

            </a>
            </div>

        </div>
</div>


