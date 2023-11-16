<?php

namespace backend\modules\cars;

/**
 * cars module definition class
 */
class cars extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'backend\modules\cars\controllers';
 

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        $this->controllerMap = [
            'default' => 'backend\modules\cars\controllers\CarsController',
        ];
        // custom initialization code goes here
    }
}
