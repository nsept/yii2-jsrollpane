<?php

namespace nsept\jscrollpane;

use yii\base\Widget;
use nsept\jscrollpane\assets\JScrollPaneAsset;
use nsept\mousewheel\MousewheelAsset;
use yii\helpers\Json;
use yii\web\View;

class JScrollPaneWidget extends Widget {

    public $container = '.scroll-pane';
    public $mousewheel = true;
    public $settings = [];

    public function run()
    {
        return $this->registerJScrollPaneJs();
    }

    private function registerJScrollPaneJs()
    {
        $jQueryContainer = "$('{$this->container}')";

        JScrollPaneAsset::register($this->view);

        if ($this->mousewheel) {
            MousewheelAsset::register($this->view);
        }

        if(!empty($this->settings)) {
            $var = uniqid('$container');
            $query = "var {$var} = {$jQueryContainer};" . PHP_EOL;

            $options = Json::encode($this->settings);

            return $this->view->registerJs($query . "{$var} . jScrollPane({$options})", View::POS_READY);
        }

        return $this->view->registerJs($jQueryContainer . " . jScrollPane()", View::POS_READY);
    }
}
