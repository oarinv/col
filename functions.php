<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
  $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('站点 LOGO 地址'), _t('LOGO'));
  $form->addInput($logo);

  $img = new Typecho_Widget_Helper_Form_Element_Text('img', NULL, NULL, _t('首页图'), _t('在这里填入一个图片 URL 地址'));
  $form->addInput($img);

  $icp = new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, NULL, _t('备案号'), _t('不填不显示'));
  $form->addInput($icp);

  $other = new Typecho_Widget_Helper_Form_Element_Text('other', NULL, NULL, _t('底栏显示内容'), _t('不填不显示'));
  $form->addInput($other);



}
