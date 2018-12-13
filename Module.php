<?php

namespace egoistmedia\yii2\google\apiclient;

use yii\base\BootstrapInterface;
use yii\base\Module as BaseModule;

class Module extends BaseModule implements BootstrapInterface
{
    public $controllerNamespace = 'egoistmedia\yii2\google\apiclient';

    public function bootstrap($app)
    {
        if ($app instanceof \yii\console\Application) {
            $app->controllerMap[$this->id] = [
                'class' => 'egoistmedia\yii2\google\apiclient\commands\GoogleController',
                'module' => $this,
            ];
        }
    }
}
