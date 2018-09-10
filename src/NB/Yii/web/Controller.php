<?php

namespace NB\Yii\web;

use \NB\Yii\web\Traits\Debugging;
use \NB\Yii\Traits\Measuring;
use \yii\web\Controller as YiiWebController;

/**
 * Abstract base controller with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 * @method null error(string $message) Logs an error message.
 * @method null info(string $message) Logs an informative message.
 * @method null trace(string $message) Logs a debug message.
 * @method null warning(string $message) Logs a warning message.
 * @method null measureStart() Starts the stop watch.
 * @method float timeElapsed(boolean $fullPrecision) The elapsed time since the start of the stop watch.
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

    use Debugging;
    use Measuring;
}
