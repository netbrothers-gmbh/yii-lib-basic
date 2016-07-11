<?php

namespace NB\Yii;

use NB\Yii\Traits\Debugging as DebuggingTrait;
use NB\Yii\Traits\Measure as MeasureTrait;
use yii\base\Component as YiiBaseComponent;

/**
 * Abstract base component with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Component extends YiiBaseComponent
{
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
