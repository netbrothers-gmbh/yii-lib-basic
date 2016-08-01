<?php

namespace NB\Yii\console\Traits;

use yii\helpers\Console;

/**
 * Trait to provide convenient logging/debugging methods.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
trait Debugging
{
    /**
     * @param string $message The message to be sent to stdout or stderr.
     * @return string A formatted one line string containing the message.
     */
    protected function getConsoleOutputPattern($message)
    {
        return '[' . date('Y-m-d H:i:s') . '] ' . $message . "\n";
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
     * Logs an error message.
     *
     * @param string $message The message to log.
     */
    protected function error($message)
    {
        $this->stderr(
            $this->getConsoleOutputPattern($message),
            Console::FG_RED
        );
    }

    /**
     * Logs an informative message.
     *
     * @param string $message The message to log.
     */
    protected function info($message)
    {
        $this->stdout(
            $this->getConsoleOutputPattern($message),
            Console::FG_CYAN
        );
    }

    /**
     * Logs a debug message.
     *
     * @param string $message The message to log.
     */
    protected function trace($message)
    {
        $this->stdout($this->getConsoleOutputPattern($message));
    }

    /**
     * Logs an warning message.
     *
     * @param string $message The message to log.
     */
    protected function warning($message)
    {
        $this->stdout(
            $this->getConsoleOutputPattern($message),
            Console::FG_YELLOW
        );
    }
}
