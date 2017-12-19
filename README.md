Gridstack.js виджет для Yii2
============================
Интеграция в Yii2 [Gridstack.js](https://github.com/troolee/gridstack.js)

Установка
---------

Желательно устанавливать через [composer](http://getcomposer.org/download/).

В консоли укажите

```
php composer.phar require --prefer-dist zertex/yii2-gridstackjs "*"
```

или добавьте в composer.json

```
"zertex/yii2-gridstackjs": "*"
```


Использование
-------------
Используйте Gridstack.js как любой другой виджет Yii2.

```php
use zertex\gridstack\Gridstack;
```

```php
<?php
$gridstack = Gridstack::begin([
    'options'=>['class'=>'grid-stack'],
    'clientOptions'=>[
        'cellHeight'=> 80,
        'verticalMargin'=> 10,
    ],
]);?>

<?=$gridstack->beginWidget(['class'=>'grid-stack-item','data-gs-width'=>"4",'data-gs-height'=>"2",'data-gs-x'=>"0",'data-gs-y'=>"0",]);?>
    <div class="grid-stack-item-content"></div>
<?=$gridstack->endWidget();?>

<?=$gridstack->beginWidget(['class'=>'grid-stack-item','data-gs-width'=>"4",'data-gs-height'=>"4",'data-gs-x'=>"4",'data-gs-y'=>"0",]);?>
    <div class="grid-stack-item-content"></div>
<?=$gridstack->endWidget();?>

<?php
Gridstack::end();
?>
```

Для использования Gridstack.js в JavaScript добавьте GridstackAsset в представлении.

```php
public $depends = [
...
'zertex\gridstack\GridstackAsset',
...
];
```

