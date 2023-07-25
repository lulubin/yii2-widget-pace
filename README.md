## 1.Install
composer require --prefer-dist lulubin/yii2-widget-pace "dev-master"

## 2.Usage
```html
<div class="container">
    <?=lulubin\pace\Pace::widget()?>
    <?=$content?>
</div>
```

```html
<div class="container">
    <?=lulubin\pace\Pace::widget(['color'=>'green','theme'=>'flash'])?>
    <?=$content?>
</div>
```

```html
<div class="container">
    <?=lulubin\pace\Pace::widget([
        'color'=>'blue','theme'=>'flash',
        'paceOptions'=>['ajax'=>false,'document'=>false]
    ])?>
    <?=$content?>
</div>
```
