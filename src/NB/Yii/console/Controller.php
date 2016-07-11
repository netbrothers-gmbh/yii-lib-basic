<?php

namespace NB\Yii\console;

use NB\Yii\Traits\DebuggingTrait;
use yii\console\Controller as YiiConsoleController;

/**
 * Abstract base console controller with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Controller extends YiiConsoleController
{
    /**
     *
     * @var float Will be set with the microtime before the action is called.
     */
    protected $actionStartTime;

    public function beforeAction($action)
    {
        $this->actionStartTime = microtime(TRUE);
        return parent::beforeAction($action);
    }

    /**
     * Specifies a dynamic logging category for the impementing class. It may
     * choose to return an identifier based on the class and/or the executed
     * function.
     *
     * @return string The logging category.
     */
    abstract protected function getLoggingCategory();

    use DebuggingTrait;
}