<?php

namespace NB\Yii;

use Yii;
use yii\web\Controller as YiiWebController;

/**
 * Abstract base controller with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Controller extends YiiWebController
{
    abstract protected function getLoggingCategory();

    /**
     * Logs an error message.
     *
     * @param string $message The message to log.
     */
    protected function error($message)
    {
        Yii::error($message, $this->getLoggingCategory());
    }

    /**
     * Logs an informative message.
     *
     * @param string $message The message to log.
     */
    protected function info($message)
    {
        Yii::info($message, $this->getLoggingCategory());
    }

    /**
     * Logs a debug message.
     *
     * @param string $message The message to log.
     */
    protected function trace($message)
    {
        Yii::trace($message, $this->getLoggingCategory());
    }

    /**
     * Logs an warning message.
     *
     * @param string $message The message to log.
     */
    protected function warning($message)
    {
        Yii::warning($message, $this->getLoggingCategory());
    }
}