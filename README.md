#Yii2-jScrollPane Widget

jScrollPane is a [jQuery](http://www.jquery.com/) plugin which allows you to replace a browser's default scrollbars (on an element which has **overflow: auto**) with a HTML structure that can be easily skinned using CSS.

To see a bunch of examples of jScrollPane in action please visit the [jScrollPane website](http://jscrollpane.kelvinluck.com/).

## Install

Either run

```composer require nsept/yii2-jscrollpane "@dev"```

or add

```"nsept/yii2-jscrollpane": "@dev"```

to the ```require``` section of your `composer.json` file.

## Usage

```php
<? \nsept\jscrollpane\JScrollPaneWidget::widget([
    'container' => '.scroll-pane',
    'mousewheel' => true,
    'settings' => [
        // Plugin options (http://jscrollpane.kelvinluck.com/settings.html)
    ]
]); ?>
    
<div class="scroll-pane" style="height: 200px; overflow: auto;">
    ...
</div>
```
