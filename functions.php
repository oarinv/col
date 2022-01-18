<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
  $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('图标'), _t('LOGO'));
  $form->addInput($logo);

  $img = new Typecho_Widget_Helper_Form_Element_Text('img', NULL, NULL, _t('首页图'), _t('在这里填入一个图片 URL 地址'));
  $form->addInput($img);

  $icon = new Typecho_Widget_Helper_Form_Element_Text('icon', NULL, NULL, _t('站点logo'), _t('在这里填入一个图片 URL 地址'));
  $form->addInput($icon);

  $other = new Typecho_Widget_Helper_Form_Element_Text('other', NULL, NULL, _t('底栏显示内容'), _t('不填不显示'));
  $form->addInput($other);



}
function thumb($cid) {
  if (empty($imgurl)) {
  $rand_num = 10; //随机图片数量，根据图片目录中图片实际数量设置
  if ($rand_num == 0) {
  $imgurl = "随机图片存放目录/0.jpg";
  //如果$rand_num = 0,则显示默认图片，须命名为"0.jpg"，注意是绝对地址
      }else{
  $imgurl = "随机图片存放目录/".rand(1,$rand_num).".jpg";
  //随机图片，须按"1.jpg","2.jpg","3.jpg"...的顺序命名，注意是绝对地址
  }
  }
   $db = Typecho_Db::get();
   $rs = $db->fetchRow($db->select('table.contents.text')
      ->from('table.contents')
      ->where('table.contents.type = ?', 'attachment')
      ->where('table.contents.parent= ?', $cid)
      ->order('table.contents.cid', Typecho_Db::SORT_ASC)
      ->limit(1));
  $img = unserialize($rs['text']);
  if (empty($img)){
      echo $imgurl;
  }
  else{
      echo '你的博客地址'.$img['path'];
  }
  }
