<?php

namespace NB\Yii\console;

use NB\Yii\console\Traits\Debugging;
use NB\Yii\Traits\Measuring;
use yii\console\Controller as YiiConsoleController;

/**
 * Abstract base console controller with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 * @method void error(string $message) Outputs an error message.
 * @method void info(string $message) Outputs an informative message.
 * @method void trace(string $message) Outputs a debug message.
 * @method void warning(string $message) Outputs a warning message.
 * @method void measureStart() Starts the stop watch.
 * @method float timeElapsed(boolean $fullPrecision) The elapsed time since the start of the stop watch.
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