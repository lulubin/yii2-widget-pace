<?php
namespace lulubin\pace;

class PaceAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/pace';
    public $js = ['pace.min.js'];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
