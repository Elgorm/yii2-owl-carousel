A Yii2 wrapper for owl carousel (v2)
====================================
Widget Yii2 for owl carousel

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist elgorm/yii2-owl-carousel "*"
```

or add

```
"elgorm/yii2-owl-carousel": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
use elgorm\owlcarousel2\OwlCarouselWidget;
?>
<? OwlCarouselWidget::begin([
    'container' => 'div',
    'theme' => 'green', // green or default
    'containerOptions' => [
        'id' => 'my-container-id',
        'class' => 'my-container-class'
    ],
    'pluginOptions' => [
        ...
        'loop' => true,
        'items' => 4,
        ...
    ]
]);
?>

<div class="my-item-class"><img src="my-image-1.jpg" alt="My Image"></div>
<div class="my-item-class"><img src="my-image-2.jpg" alt="My Image"></div>
<div class="my-item-class"><img src="my-image-3.jpg" alt="My Image"></div>
<div class="my-item-class"><img src="my-image-4.jpg" alt="My Image"></div>


<? OwlCarouselWidget::end();?>