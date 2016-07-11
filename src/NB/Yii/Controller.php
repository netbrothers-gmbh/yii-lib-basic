<?php

namespace NB\Yii;

use NB\Yii\Traits\Debugging as DebuggingTrait;
use NB\Yii\Traits\Measure as MeasureTrait;
use yii\web\Controller as YiiWebController;

/**
 * Abstract base controller with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Controller extends YiiWebController
{
    /**
     * @var float Will be set with the microtime before the action is called.
     */
    protected $actionStartTime;

    public function beforeAction($action)
    {
        $this->actionStartTime = microtime(TRUE);
        return parent::beforeAction($action);
    }

    /**
     * Calculates the current action runtime rounded to three decimal places.
     *
     * @param boolean $fullPrecision If TRUE will return full precision.
     * @return float The runtime of the current action.
     */
    protected function getActionRuntime($fullPrecision = FALSE)
    {
        if ($fullPrecision) {
            return microtime(TRUE) - $this->actionStartTime;
        }
        return round((microtime(TRUE) - $this->actionStartTime), 3);

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
    use MeasureTrait;
}
