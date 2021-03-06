<?php

namespace NB\Yii\console\Traits;

use \yii\helpers\Console;
use \Yii;

/**
 * Trait to provide convenient logging/debugging methods.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
trait Debugging
{
    /**
     * Prints an error message to stderr.
     *
     * @param string $message The message to log.
     */
    protected function error($message)
    {
        Yii::$app->controller->stderr(
            $this->getConsoleOutputPattern($message),
            Console::FG_RED
        );
    }

    /**
     * @param string $message The message to be sent to stdout or stderr.
     * @return string A formatted one line string containing the message.
     */
    protected function getConsoleOutputPattern($message)
    {
        return sprintf(
            "[%s] (%s) %s\n", date('Y-m-d H:i:s'), getmypid(), $message
        );
    }

    /**
     * Specifies a dynamic logging category for the impementing class. By
     * overwriting you may choose to return an individual identifier, e.g. based
     * on the class and/or the executed function name.
     *
     * @return string The logging category.
     */
    protected function getLoggingCategory()
    {
        return get_class($this);
    }

    /**
     * Prints an informative message to stdout.
     *
     * @param string $message The message to log.
     */
    protected function info($message)
    {
        Yii::$app->controller->stdout(
            $this->getConsoleOutputPattern($message),
            Console::FG_CYAN
        );
    }

    /**
     * Prints a success message to stdout.
     *
     * @param string $message The message to log.
     */
    protected function success($message)
    {
        Yii::$app->controller->stdout(
            $this->getConsoleOutputPattern($message),
            Console::FG_GREEN
        );
    }

    /**
     * Prints a debug message to stdout.
     *
     * @param string $message The message to log.
     */
    protected function trace($message)
    {
        Yii::$app->controller->stdout($this->getConsoleOutputPattern($message));
    }

    /**
     * Prints a warning message to stdout.
     *
     * @param string $message The message to log.
     */
    protected function warning($message)
    {
        Yii::$app->controller->stdout(
            $this->getConsoleOutputPattern($message),
            Console::FG_YELLOW
        );
    }
}
