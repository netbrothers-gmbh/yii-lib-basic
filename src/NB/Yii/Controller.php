<?php

namespace NB\Yii;

use NB\Yii\Traits\DebuggingTrait;
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

    use DebuggingTrait;
}