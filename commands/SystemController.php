<?php

namespace app\commands;
use app\models\Checkimages;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * test_script
 */
class SystemController extends Controller
{
    /**
     * test
     * 
     */
    public function actionCheckImages()
    {
       (new Checkimages())->start();
          
        
    }
}