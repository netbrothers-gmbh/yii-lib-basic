<?php

namespace NB\Yii\Traits;

/**
 * Trait to provide convenient time measuring methods.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
trait Measuring
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
     * The result is rounded to three decimal places if not overruled by the
     * <code>$fullPrecision</code> parameter.
     *
     * @param boolean $fullPrecision If TRUE will return full precision.
     * @return float The elapsed time since the start of the stop watch.
     */
    protected function timeElapsed($fullPrecision = FALSE)
    {
        if ($fullPrecision) {
            return microtime(TRUE) - $this->measureStart;
        }
        return round((microtime(TRUE) - $this->measureStart), 3);
    }
}
