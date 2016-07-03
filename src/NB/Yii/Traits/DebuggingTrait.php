<?php

namespace NB\Yii\Traits;

/*
 * Note: The Yii framework has to be in the include path.
 */
use Yii;

/**
 * Trait to provide convenient logging/debugging methods.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
trait DebuggingTrait
{
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