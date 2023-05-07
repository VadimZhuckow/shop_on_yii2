<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Админ Контроллер
 *
 * @package app\modules\admin\controllers
 */
class DefaultController extends Controller
{
    public $layout = 'admin';

    /**
     * Главная админки
     *
     * @return bool|string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
