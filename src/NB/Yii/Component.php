<?php

namespace NB\Yii;

use NB\Yii\Traits\DebuggingTrait;
use yii\base\Component as YiiBaseComponent;

/**
 * Abstract base component with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Component extends YiiBaseComponent
{
    abstract protected function getLoggingCategory();

    use DebuggingTrait;
}
