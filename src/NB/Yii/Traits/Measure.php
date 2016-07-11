<?php

namespace NB\Yii\Traits;

/**
 * Trait to provide convenient time measuring methods.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
trait Measure
{
    /**
     * @var float Will be set with the current microtime.
     */
    private $measureStart;

    /**
     * Starts the stop watch.
     */
    protected function measureStart()
    {
        $this->measureStart = microtime(TRUE);
    }

    /**
     * @return float The elapsed time since the start of the stop watch.
     */
    protected function timeElapsed()
    {
        return microtime(TRUE) - $this->measureStart;
    }
}
