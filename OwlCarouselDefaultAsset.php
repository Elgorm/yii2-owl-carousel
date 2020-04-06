<?php

namespace elgorm\owlcarousel2;

use yii\web\AssetBundle;

/**
 * Asset Bundle for Owl Carousel Widget
 *
 * @author Elgorm <yii2widget@4ml.su>
 */
class OwlCarouselDefaultAsset extends AssetBundle
{
	
	/**
     * Unique value to set an empty asset via Yii AssetManager configuration.
     */
    public $sourcePath = '@bower/owl.carousel';
	
	    public $js = [
        'dist/owl.carousel'.(!YII_DEBUG ? '.min':'').'.js'
    ];
	
    public $css = [
        'dist/assets/owl.carousel'.(!YII_DEBUG ? '.min':'').'.css',
        'dist/assets/owl.theme.default'.(!YII_DEBUG ? '.min':'').'.css',
    ];
    
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
}
