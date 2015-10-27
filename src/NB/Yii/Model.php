<?php

namespace NB\Yii;

use NB\Yii\Traits\DebuggingTrait;

/**
 * Abstract base model with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Model
{
    abstract protected function getLoggingCategory();

    use DebuggingTrait;
}
