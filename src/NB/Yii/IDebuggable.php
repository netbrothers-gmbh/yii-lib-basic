<?php

namespace NB\Yii;

/**
 * Interface to ensure debugging capabilities.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
class IDebuggable
{
    /**
     * Logs an error message.
     *
     * @param string $message The message to log.
     */
    function error($message);

    /**
     * Logs an informative message.
     *
     * @param string $message The message to log.
     */
    function info($message);

    /**
     * Logs a debug message.
     *
     * @param string $message The message to log.
     */
    function trace($message);

    /**
     * Logs an warning message.
     *
     * @param string $message The message to log.
     */
    function warning($message);
}
